<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Services\ServiceService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    private ServiceService $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }

    public function index(): Renderable
    {
        $services = $this->serviceService->getServicesWithPaginator();

        return view("admin.service.index", [
            "services" => $services,
            'current_page' => $services->currentPage(),
            'per_page' => $services->perPage(),
        ]);
    }

    public function create($id = null): Renderable
    {
        if (is_null($id))
            $service = new Service();
        else
            $service = $this->serviceService->getService($id);

        return view("admin.service.form", [
            "service" => $service,
        ]);
    }

    public function store(ServiceRequest $request): RedirectResponse
    {
        $this->serviceService->storeService($request);

        return redirect()->route("admin.service.index")
                        ->with("success", "Service enregistré avec succès !");
    }

    public function destroy(Service $service)
    {
        if ($service->image)
        {
            try {
                Storage::delete($service->image);
            } catch (\Exception $exception) {

            }
        }

        try {
            $service->delete();
        } catch (\Exception $exception) {
            return redirect()->route("admin.service.index")
                ->with("danger", "Une erreur est survenue lors de la suppression du service. Veuillez réessayer plus tard !");
        }

        return redirect()->route("admin.service.index")
                        ->with("success", "Service supprimé avec succès !");
    }
}
