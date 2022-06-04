@extends("layouts.app")

@section("title")
    @lang("Nos services")
@endsection

@section("content")
    @component("components.breadcrumb", [
        "title" => __("Nos services"),
        "precedent" => __("Accueil"),
        "current" => __("Services"),
        "pathname" => "home",
    ]) @endcomponent

    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">@lang("Nos Services")</h6>
            <h1 class="display-4 text-center mb-5">@lang("Ce que nous vous offrons")</h1>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 pb-1">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                                @if($service->image)
                                    <a href="{{ url($service->image) }}">
                                        <img src="{{ url($service->image) }}" style="border-radius: 50%;" width="100" height="100" alt="{{ $service->wording }}">
                                    </a>
                                @else
                                    <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                                @endif
                            </div>
                            <h4 class="font-weight-bold m-0">{{ $service->wording }}</h4>
                        </div>
                    </div>
                @endforeach
                {{ $services->links() }}
            </div>
        </div>
    </div>
    <!-- Services End -->
@endsection
