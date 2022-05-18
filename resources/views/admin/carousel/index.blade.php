@extends("layouts.admin_base")

@section("title")
    Liste des slides
@endsection

@section("content")
    <div class="dashboard-content">

        <div class="row">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('danger'))
                <div class="alert alert-danger">
                    {{ session('danger') }}
                </div>
            @endif
            <!-- Listings -->
            @component("components.carousel-list", ["carousels" => $carousels])
            @endcomponent
        </div>
    </div>
@endsection
