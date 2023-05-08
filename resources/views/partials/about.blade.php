   <section id="about" class="about section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-left-image wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="{{ asset('assets/images/about-dec-v3.png') }}" alt="{{ __('about.image_alt') }}">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-right-content wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="section-heading">
                        <h2>{{ __('about.heading.title') }}</h2>
                        <h3>{{ __('about.heading.subtitle') }}</h3>
                        <div class="line-dec"></div>
                    </div>
                    <p>{{ __('about.text') }}</p>
                    <div class="row">
                        @foreach(__('about.skills') as $skill)
                        <div class="col-lg-4 col-sm-4">
                            <div class="skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                <div class="progress" data-percentage="{{ $skill['percentage'] }}">
                                    <span class="progress-left">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                                        <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">
                                        <div>
                                            {{ $skill['percentage'] }}%<br>
                                            <span>{{ $skill['name'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
