<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des slides</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Titre</th>
                    <th>Sous-titre</th>
                    <th>Image</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($carousels as $carousel)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($carousel->created_at)->format("d/m/Y") }}</td>
                        <td>{{ $carousel->title }}</td>
                        <td>{{ $carousel->subtitle }}</td>
                        <td>
                            @if($carousel->image)
                                <a href="{{url($carousel->image)}}">
                                    <img src="{{url($carousel->image)}}" style="border-radius: 50%;" width="50px" height="50px">
                                </a>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.carousel.update", $carousel->id) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.carousel.delete", $carousel->id) }}">
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
    {{ $carousels->links() }}
    {{--<div class="pagination-container">
        <nav class="pagination">
            <ul>
                <li><a href="#" class="current-page">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
            </ul>
        </nav>
    </div>--}}
</div>
