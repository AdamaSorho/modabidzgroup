<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des réservations</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Nombre personnes</th>
                    <th>Date Arrivée</th>
                    <th>Date Départ</th>
                    <th>Chambre</th>
                    <th>État</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $key => $reservation)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>
                            {{ $reservation->email }}
                        </td>
                        <td>{{ $reservation->phone }}</td>
                        <td>
                            {{ $reservation->guest }}
                        </td>
                        <td>
                            {{ $reservation->check_in }}
                        </td>
                        <td>
                            {{ $reservation->check_out }}
                        </td>
                        <td>
                            {{ $reservation->room->name }}
                        </td>
                        <td>
                            @if($reservation->is_accepted)
                                <label for="available" class="label label-success">@lang("Validée")</label>
                            @else
                                <label for="unavailable" class="label label-danger">@lang("Non validée")</label>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.residence.reservation.validate", $reservation->id) }}">@lang("Valider")</a>
                                    <a class="dropdown-item" href="{{ route("admin.residence.reservation.reject", $reservation->id) }}">@lang("Annuler")</a>
                                    <a class="dropdown-item" href="{{ route("admin.residence.reservation.update", $reservation->id) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.residence.reservation.delete", $reservation->id) }}">
                                        @csrf
                                        <button class="dropdown-item del" onclick="confirm('Voulez vraiment supprimer cet élément ?')">@lang("Supprimer")</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{ $reservations->links() }}
</div>
