<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QualityRequest;
use App\Models\Quality;
use App\Services\QualityService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QualityController extends Controller
{
    private QualityService $qualityService;

    public function __construct(QualityService $qualityService)
    {
        $this->qualityService = $qualityService;
    }

    public function index(): Renderable
    {
        $qualities = $this->qualityService->getQualitiesWithPaginator();

        return view("admin.quality.index", [
            "qualities" => $qualities,
            'current_page' => $qualities->currentPage(),
            'per_page' => $qualities->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $quality = new Quality();
        else
            $quality = $this->qualityService->getQuality($id);

        return view("admin.quality.form", [
            "quality" => $quality,
        ]);
    }

    public function store(QualityRequest $request): RedirectResponse
    {
        $this->qualityService->storeQuality($request);

        return redirect()->route("admin.quality.index")
                        ->with("success", "Qualité enregistrée avec succès !");
    }

    public function destroy(Quality $quality): RedirectResponse
    {
        try {
            $quality->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.quality.index")
                            ->with("danger", "Une erreur est survenue lors de la suppression de la qualité. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.quality.index")
                        ->with("success", "Qualité supprimée avec succès !");
    }
}
