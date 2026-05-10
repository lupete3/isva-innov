<div>
@if($sliders->count() > 0)
    @php
        $slider = $sliders->first();
    @endphp
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center gy-5">
          <div class="col-lg-7">
            <div class="hero-card shadow-sm" data-aos="fade-right" data-aos-delay="150">
              <div class="eyebrow d-inline-flex align-items-center mb-3">
                <i class="bi bi-stars me-2"></i>
                <span>{{ $slider->subtitle }}</span>
              </div>
              <div class="content">
                <h2 class="display-5 fw-bold mb-3">{{ $slider->title }}</h2>
                <p class="lead mb-4">{{ $slider->description ?? 'Votre partenaire stratégique pour l\'Audit, l\'Expertise Comptable et la Sous-traitance de main-d\'œuvre qualifiée en République Démocratique du Congo.' }}</p>
                <div class="d-flex flex-wrap gap-3">
                  <a href="{{ $slider->button1_url }}" class="btn btn-primary-ghost">
                    <span>{{ $slider->button1_text }}</span>
                    <i class="bi bi-arrow-right ms-2"></i>
                  </a>
                  @if($slider->button2_url)
                  <a href="{{ $slider->button2_url }}" class="glightbox btn-video d-inline-flex align-items-center">
                    <span class="play-icon d-inline-flex align-items-center justify-content-center me-2">
                      <i class="bi bi-play-fill"></i>
                    </span>
                    <span>{{ $slider->button2_text }}</span>
                  </a>
                  @endif
                </div>
                
                @if($slider->mini_stats)
                <div class="mini-stats d-flex flex-wrap gap-4 mt-4" data-aos="zoom-in" data-aos-delay="250">
                  @foreach($slider->mini_stats as $stat)
                  <div class="stat d-flex align-items-center">
                    <i class="{{ $stat['icon'] ?? 'bi bi-check-circle' }} me-2"></i>
                    <span>{{ $stat['label'] ?? '' }}</span>
                  </div>
                  @endforeach
                </div>
                @endif
              </div>
            </div>
          </div>

          <div class="col-lg-5">
            <div class="media-stack" data-aos="zoom-in" data-aos-delay="200">
              <figure class="media primary shadow-sm">
                <img src="{{ media_url($slider->image) }}" class="img-fluid" alt="Hero visual">
              </figure>
              <figure class="media secondary shadow-sm">
                <img src="{{ $slider->secondary_image ? media_url($slider->secondary_image) : asset('flexbiz/assets/img/illustration/illustration-15.webp') }}" class="img-fluid" alt="Supporting visual">
              </figure>
              @if($slider->floating_badge)
              <div class="floating-badge d-flex align-items-center shadow-sm" data-aos="fade-down" data-aos-delay="300">
                <i class="bi bi-award me-2"></i>
                <span>{{ $slider->floating_badge }}</span>
              </div>
              @endif
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
@endif
</div>