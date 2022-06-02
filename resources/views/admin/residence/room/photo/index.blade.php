@extends("layouts.admin_base")

@section("title")
    Liste des images de la chambre {{ $room->name }}
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
            @component("components.residence.photo-list", ["photos" => $photos, "current_page" => $current_page, "per_page" => $per_page, "room" => $room])
            @endcomponent
        </div>
    </div>
@endsection
