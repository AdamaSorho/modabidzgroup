<div class="dashboard-nav">
    <div class="dashboard-nav-inner">
        <ul>
            <li class="active"><a href="{{ route("admin.dashboard") }}"><i class="sl sl-icon-settings"></i> @lang("Tableau de bord")</a></li>
            <li><a href="{{ route("admin.setting.create") }}"><i class="sl sl-icon-settings"></i> @lang("Réglages")</a></li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Slides</a>
                <ul>
                    <li><a href="{{ route("admin.carousel.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.carousel.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Nos Qualités</a>
                <ul>
                    <li><a href="{{ route("admin.quality.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.quality.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Expériences</a>
                <ul>
                    <li><a href="{{ route("admin.experience.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.experience.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Services</a>
                <ul>
                    <li><a href="{{ route("admin.service.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.service.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Catégories de blog</a>
                <ul>
                    <li><a href="{{ route("admin.blog.category.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.blog.category.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Blog</a>
                <ul>
                    <li><a href="{{ route("admin.blog.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.blog.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Témoignages</a>
                <ul>
                    <li><a href="{{ route("admin.testimony.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.testimony.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Catégories de vidéo</a>
                <ul>
                    <li><a href="{{ route("admin.video.category.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.video.category.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>
            <li>
                <a><i class="sl sl-icon-layers"></i> Vidéos</a>
                <ul>
                    <li><a href="{{ route("admin.video.index") }}">@lang("Liste") </a></li>
                    <li><a href="{{ route("admin.video.create") }}">@lang("Ajouter") </a></li>
                </ul>
            </li>

            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    <i class="sl sl-icon-power"></i> @lang("Déconnexion")
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </a>
            </li>
        </ul>
    </div>
</div>
