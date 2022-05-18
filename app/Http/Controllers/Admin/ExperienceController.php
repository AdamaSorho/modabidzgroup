<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use App\Services\ExperienceService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    private ExperienceService $experienceService;

    public function __construct(ExperienceService $experienceService)
    {
        $this->experienceService = $experienceService;
    }

    public function index(): Renderable
    {
        $experiences = $this->experienceService->getExperiencesWithPaginator();

        return view("admin.experience.index", [
            "experiences" => $experiences,
            'current_page' => $experiences->currentPage(),
            'per_page' => $experiences->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $experience = new Experience();
        else
            $experience = $this->experienceService->getExperience($id);

        return view("admin.experience.form", [
            "experience" => $experience,
        ]);
    }

    public function store(ExperienceRequest $request): RedirectResponse
    {
        $this->experienceService->storeExperience($request);

        return redirect()->route("admin.experience.index")
                        ->with("success", "Expérience enregistrée avec succès !");
    }

    public function destroy(Experience $experience)
    {
        try {
            $experience->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.experience.index")
                ->with("danger", "Une erreur est survenue lors de la suppression de l'expérience. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.experience.index")
                        ->with("success", "Expérience supprimée avec succès !");
    }
}
