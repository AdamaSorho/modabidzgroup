<!-- Page Header Start -->
<div class="page-header container-fluid bg-secondary">
    <div class="container py-5">
        <div class="row align-items-center py-4">
            <div class="col-md-6 text-center text-md-left">
                <h1 class="mb-4 mb-md-0 text-white">{{ $title }}</h1>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <div class="d-inline-flex align-items-center">
                    <a class="btn text-white" href="{{ route($pathname) }}">{{ $precedent }}</a>
                    <i class="fas fa-angle-right text-white"></i>
                    <a class="btn text-white disabled" href="">{{ $current }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Header Start -->
