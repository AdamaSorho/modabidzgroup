<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des expériences</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Libellé</th>
                    <th>Expérience (En chiffre}</th>
                    <th>Meilleur</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($experiences as $key => $experience)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>{{ $experience->wording }}</td>
                        <td>{{ $experience->number }}</td>
                        <td>
                            @if($experience->better)
                                <span class="paid t-box">Oui</span>
                            @endif
                        </td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.experience.update", $experience->id) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.experience.delete", $experience->id) }}">
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
    {{ $experiences->links() }}
</div>
