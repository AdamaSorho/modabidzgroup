@extends("layouts.admin_base")

@section("title")
    Liste des réservations
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
            @component("components.residence.reservation-list", ["reservations" => $reservations, "current_page" => $current_page, "per_page" => $per_page])
            @endcomponent
        </div>
    </div>
@endsection
