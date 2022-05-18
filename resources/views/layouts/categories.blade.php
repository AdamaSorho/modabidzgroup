<div class="mb-5">
    <h3 class="font-weight-bold mb-4">@lang("catégories")</h3>
    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $category->wording }}
                @if($type == 1)
                    <span class="badge badge-primary badge-pill">{{ sizeof($category->blogs) }}</span>
                @else
                    <span class="badge badge-primary badge-pill">{{ sizeof($category->news) }}</span>
                @endif
            </li>
        @endforeach
    </ul>
</div>
