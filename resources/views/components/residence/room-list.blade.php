<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des chambres</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Montant (À partir)</th>
                    <th>Description</th>
                    <th>Images</th>
                    <th>État</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rooms as $key => $room)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>{{ $room->name }}</td>
                        <td>
                            <label for="amount" class="label label-warning">{{ $room->amount }} F CFA</label>
                        </td>
                        <td>{!!  \Illuminate\Support\Str::limit($room->description) !!}</td>
                        <td>
                            <a type="button" class="btn-xs btn-primary" href="{{ route("admin.residence.room.photo.index", $room->id) }}">{{ sizeof($room->photos) }}</a>
                        </td>
                        <td>
                            @if($room->state)
                                <label for="available" class="label label-success">@lang("Disponible")</label>
                            @else
                                <label for="unavailable" class="label label-danger">@lang("Indisponible")</label>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.residence.room.update", $room->id) }}">@lang("Modifier")</a>
                                    <a class="dropdown-item" href="{{ route("admin.residence.room.photo.create", $room->id) }}">@lang("Ajouter une image")</a>
                                    <form method="POST" action="{{ route("admin.residence.room.delete", $room->id) }}">
                                        @csrf
                                        <button class="dropdown-item del" onclick="return confirm('Voulez vraiment supprimer cet élément ?')">@lang("Supprimer")</button>
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
    {{ $rooms->links() }}
</div>
