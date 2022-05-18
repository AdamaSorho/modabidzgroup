<div class="col-lg-12 col-md-12">
    <div class="dashboard-list-box">
        <h4 class="gray">Liste des blogs</h4>

        <div class="table-box">
            <table class="basic-table booking-table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Titre</th>
                    <th>Type</th>
                    <th>Contenu</th>
                    <th class="textright">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $key => $blog)
                    <tr>
                        <td>{{ ($current_page-1) * $per_page + $key + 1 }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @if($blog->type == 1)
                                @lang("Blog")
                            @else
                                @lang("Actualité")
                            @endif
                        </td>
                        <td>{!!  \Illuminate\Support\Str::limit($blog->content) !!}</td>
                        <td class="textright">
                            <div class="dropdown">
                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="">
                                    <a class="dropdown-item" href="{{ route("admin.blog.update", $blog->id) }}">@lang("Modifier")</a>
                                    <form method="POST" action="{{ route("admin.blog.delete", $blog->id) }}">
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
    {{ $blogs->links() }}
</div>
