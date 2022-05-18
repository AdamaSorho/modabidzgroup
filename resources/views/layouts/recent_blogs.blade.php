<div class="mb-5">
    <h3 class="font-weight-bold mb-4">@lang("Postes récentes")</h3>
    @foreach($recentBlogs as $recent)
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <img class="img-fluid" src="{{ url($recent->image) }}" style="width: 80px; height: 80px;" alt="">
            <div class="d-flex flex-column pl-3">
                <a class="text-dark mb-2" href="{{ $type == 1 ? route("blog.detail", $recent->id) : route("news.detail", $recent->id) }}">{{ $recent->title }}</a>
                <div class="d-flex">
                    <small class="mr-3"><i class="fa fa-user text-primary"></i> {{ $recent->user->name }}</small>
                    <small class="mr-3"><i class="fa fa-folder text-primary"></i> {{ $recent->category->wording }}</small>
                    @if($type == 1)
                        <small class="mr-3"><i class="fa fa-comments text-primary"></i> {{ sizeof($recent->messages) }}</small>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
