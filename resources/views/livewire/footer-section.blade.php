<footer id="footer" class="footer position-relative">

    <div class="container">
      <div class="row gy-5">

        <div class="col-lg-4">
          <div class="footer-brand">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center mb-3">
              <span class="sitename">{{ $settings['site_name']->value ?? 'ISVA-Innov' }}</span>
            </a>
            <p class="tagline">{{ $settings['slogan']->value ?? 'L\'excellence en Audit et Expertise Comptable au cœur de la RDC.' }}</p>

            <div class="social-links mt-4">
              @if(isset($settings['facebook_url']))<a href="{{ $settings['facebook_url']->value }}" aria-label="Facebook"><i class="bi bi-facebook"></i></a>@endif
              @if(isset($settings['linkedin_url']))<a href="{{ $settings['linkedin_url']->value }}" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>@endif
              @if(isset($settings['twitter_url']))<a href="{{ $settings['twitter_url']->value }}" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>@endif
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="footer-links-grid">
            <div class="row">
              <div class="col-6 col-md-4">
                <h5>Entreprise</h5>
                <ul class="list-unstyled">
                  <li><a href="{{ url('/') }}#about">À Propos</a></li>
                  <li><a href="{{ url('/') }}#team">Notre Équipe</a></li>
                  <li><a href="#">Carrières</a></li>
                  <li><a href="#">Actualités</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h5>Services</h5>
                <ul class="list-unstyled">
                  <li><a href="{{ url('/') }}#services">Audit Financier</a></li>
                  <li><a href="{{ url('/') }}#services">Comptabilité</a></li>
                  <li><a href="{{ url('/') }}#services">Sous-traitance RH</a></li>
                  <li><a href="{{ url('/') }}#services">Conseil Fiscal</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-4">
                <h5>Support</h5>
                <ul class="list-unstyled">
                  <li><a href="#">Centre d'aide</a></li>
                  <li><a href="{{ url('/') }}#contact">Contact</a></li>
                  <li><a href="#">Confidentialité</a></li>
                  <li><a href="#">Conditions</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-2">
          <div class="footer-cta">
            <h5>Restons Connectés</h5>
            <a href="{{ url('/') }}#contact" class="btn btn-outline">Nous contacter</a>
          </div>
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="footer-bottom-content">
              <p class="mb-0">© <span class="sitename">{{ $settings['site_name']->value ?? 'ISVA-Innov' }}</span>. Tous droits réservés.</p>
              <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </footer>
