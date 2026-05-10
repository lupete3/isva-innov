<header id="header" class="header sticky-top">
    <div class="container-fluid container-xl position-relative">

      <div class="top-row d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
            @if(isset($settings['logo']) && $settings['logo']->value)
                <img src="{{ asset('storage/' . $settings['logo']->value) }}" alt="{{ $settings['site_name']->value ?? 'ISVA-Innov' }}">
            @else
                <h1 class="sitename">{{ $settings['site_name']->value ?? 'ISVA-Innov' }}</h1>
            @endif
        </a>

        <div class="d-flex align-items-center">
          <div class="social-links">
            @if(isset($settings['facebook_url']) && $settings['facebook_url']->value)
                <a href="{{ $settings['facebook_url']->value }}" class="facebook"><i class="bi bi-facebook"></i></a>
            @endif
            @if(isset($settings['twitter_url']) && $settings['twitter_url']->value)
                <a href="{{ $settings['twitter_url']->value }}" class="twitter"><i class="bi bi-twitter"></i></a>
            @endif
            @if(isset($settings['linkedin_url']) && $settings['linkedin_url']->value)
                <a href="{{ $settings['linkedin_url']->value }}" class="instagram"><i class="bi bi-linkedin"></i></a>
            @endif
          </div>
        </div>

      </div>

    </div>

    <div class="nav-wrap">
      <div class="container d-flex justify-content-center position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="{{ url('/') }}#hero" class="active">Accueil</a></li>
            <li><a href="{{ url('/') }}#about">À Propos</a></li>
            <li><a href="{{ url('/') }}#services">Services</a></li>
            <li><a href="{{ url('/') }}#portfolio">Projets</a></li>
            <li><a href="{{ url('/') }}#team">Équipe</a></li>
            <li class="dropdown"><a href="#"><span>Ressources</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="{{ route('blog') }}">Actualités</a></li>
                <li class="dropdown"><a href="#"><span>Publications</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ route('publications', ['category' => 'guides']) }}">Guides Fiscaux</a></li>
                    <li><a href="{{ route('publications', ['category' => 'ohada']) }}">Notes OHADA</a></li>
                    <li><a href="{{ route('publications', ['category' => 'rapports']) }}">Rapports Annuels</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('careers') }}">Carrières</a></li>
                <li><a href="{{ url('/') }}#faq">FAQ</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/') }}#contact">Contact</a></li>
            @auth
                <li><a href="{{ url('/dashboard') }}" style="color: #6f42c1; font-weight: bold;">Espace Admin</a></li>
            @endauth
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
</header>