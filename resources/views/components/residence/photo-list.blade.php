<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des images de la chambre {{ $room->name }}</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($photos as $key => $photo)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>
                            @if($photo->image)
                                <a href="{{url($photo->image)}}">
                                    <img src="{{url($photo->image)}}"  height="100px">
                                </a>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.residence.room.photo.update", ["room_id" => $room->id, "id" => $photo->id]) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.residence.room.photo.delete", ["room_id" => $room->id, "photo" => $photo->id]) }}">
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
    {{ $photos->links() }}
</div>
