<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonyRequest;
use App\Models\Testimony;
use App\Services\TestimonyService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    private TestimonyService $testimonyService;

    public function __construct(TestimonyService $testimonyService)
    {
        $this->testimonyService = $testimonyService;
    }

    public function index(): Renderable
    {
        $testimonies = $this->testimonyService->getTestimoniesWithPaginator();

        return view("admin.testimony.index", [
            "testimonies" => $testimonies,
            'current_page' => $testimonies->currentPage(),
            'per_page' => $testimonies->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $testimony = new Testimony();
        else
            $testimony = $this->testimonyService->getTestimony($id);

        return view("admin.testimony.form", [
            "testimony" => $testimony,
        ]);
    }

    public function store(TestimonyRequest $request): RedirectResponse
    {
        $this->testimonyService->storeTestimony($request);

        return redirect()->route("admin.testimony.index")
                        ->with("success", "Témoignage enregistré avec succès !");
    }

    public function destroy(Testimony $testimony): RedirectResponse
    {
        try {
            $testimony->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.testimony.index")
                ->with("danger", "Une erreur est survenue lors de la suppression du témoignage. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.testimony.index")
                        ->with("success", "Témoignage supprimé avec succès !");
    }
}
