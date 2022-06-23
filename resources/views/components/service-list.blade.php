<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des services</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Image</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $key => $service)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>{{ $service->wording }}</td>
                        <td>
                            @if($service->image)
                                <a href="{{url($service->image)}}">
                                    <img src="{{url($service->image)}}" style="border-radius: 50%;" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.service.update", $service->id) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.service.delete", $service->id) }}">
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
    {{ $services->links() }}
</div>
