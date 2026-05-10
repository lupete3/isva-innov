<section id="call-to-action" class="call-to-action section dark-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="cta-wrapper">
            <div class="content-block">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="text-content" data-aos="fade-right" data-aos-delay="200">
                            @if($cta?->label)
                            <div class="section-label" data-aos="fade-up" data-aos-delay="250">
                                <span>{{ $cta->label }}</span>
                            </div>
                            @endif

                            <h2 data-aos="fade-up" data-aos-delay="300">
                                {{ $cta?->title_main ?? 'Propulsez Votre Entreprise' }}
                                <span class="accent-text">{{ $cta?->title_accent ?? 'Au-delà des Attentes' }}</span>
                            </h2>

                            <p data-aos="fade-up" data-aos-delay="350">
                                {{ $cta?->description ?? "GAC vous offre les outils et l'expertise nécessaires pour sécuriser votre croissance et optimiser vos performances financières en RDC." }}
                            </p>

                            @if($cta?->benefits)
                            <div class="benefits-list" data-aos="fade-up" data-aos-delay="400">
                                @foreach(array_chunk($cta->benefits, 2) as $row)
                                <div class="benefit-row">
                                    @foreach($row as $benefit)
                                    <div class="benefit-item">
                                        <div class="check-icon">
                                            <i class="bi bi-check2"></i>
                                        </div>
                                        <span>{{ $benefit }}</span>
                                    </div>
                                    @endforeach
                                </div>
                                @endforeach
                            </div>
                            @endif

                            <div class="action-group" data-aos="fade-up" data-aos-delay="450">
                                <a href="{{ $cta?->button_url ?? url('/') . '#contact' }}" class="btn btn-primary-action">{{ $cta?->button_text ?? 'Commencez Aujourd\'hui' }}</a>
                                @if($cta?->button2_text)
                                <a href="{{ $cta->button2_url ?? '#' }}" class="btn btn-text-link">
                                    <i class="bi bi-play-circle-fill"></i>
                                    {{ $cta->button2_text }}
                                </a>
                                @endif
                                
                            </div>

                            @if($stats->count() > 0)
                            <div class="trust-indicators" data-aos="fade-up" data-aos-delay="500">
                                @foreach($stats->take(3) as $stat)
                                <div class="indicator">
                                    <div class="metric">{{ $stat->value }}</div>
                                    <div class="label">{{ $stat->title }}</div>
                                </div>
                                @if(!$loop->last)
                                <div class="separator"></div>
                                @endif
                                @endforeach
                            </div>
                            @endif

                            
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="visual-section" data-aos="fade-left" data-aos-delay="300">
                            <div class="image-container">
                                <img src="{{ $cta?->image ? media_url($cta->image) : asset('flexbiz/assets/img/cta-visual.webp') }}" class="img-fluid main-visual" alt="CTA Visual">
                                
                                <div class="floating-badge badge-1">
                                    <div class="badge-icon">
                                        <i class="{{ $cta?->badge_1_icon ?? 'bi bi-patch-check' }}"></i>
                                    </div>
                                    <div class="badge-text">
                                        <div class="badge-title">{{ $cta?->badge_1_title ?? 'Expertise RDC' }}</div>
                                        <div class="badge-subtitle">{{ $cta?->badge_1_subtitle ?? 'Conseil Premium' }}</div>
                                    </div>
                                </div>

                                <div class="floating-badge badge-2">
                                    <div class="badge-icon">
                                        <i class="{{ $cta?->badge_2_icon ?? 'bi bi-shield-lock' }}"></i>
                                    </div>
                                    <div class="badge-text">
                                        <div class="badge-title">{{ $cta?->badge_2_title ?? '100% Sécurisé' }}</div>
                                        <div class="badge-subtitle">{{ $cta?->badge_2_subtitle ?? 'Conformité OHADA' }}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="decorative-elements">
                                <div class="element element-1"></div>
                                <div class="element element-2"></div>
                                <div class="element element-3"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
