<footer class="text-center text-lg-start" style="margin-top: 5rem;">
   <section class="container">
     <section class="d-flex justify-content-left justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block">
          {{-- @lang('footer.get_connected') --}}
          <h5><b>{{ __('footer.get_connected') }}</b></h5>
        </div>
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
          </a>
        </div>
      </section>
      <section class="">
        <div class="container text-left text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              {{-- <h5 class="text-uppercase fw-bold mb-4"> --}}
                {{-- {{ __('footer.about_title') }} --}}
              {{-- </h5> --}}
              <div >
                  <img src="{{ asset('assets/images/logo.png') }}" alt="">
              </div>
              <p>
                {{ __('footer.about_description') }}
              </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <h5 class="text-uppercase fw-bold mb-4">
                {{ __('footer.video_title') }}
                            </h5>
              <p>
                <a href="{{ url('/youtube-download') }}" class="text-reset">{{ __('footer.download_video') }}</a>
              </p>
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <h5 class="text-uppercase fw-bold mb-4">
                {{ __('footer.terms_title') }}
              </h5>
              <p>
                <a href="{{ url('/privacy-policy') }}" class="text-reset">{{ __('footer.terms_conditions') }}</a>
              </p>
              <p>
                <a href="{{ url('/privacy-policy') }}" class="text-reset">{{ __('footer.privacy_policy') }}</a>
              </p>
              <p>
                <a href="{{ url('/about-us#contact') }}" class="text-reset">{{ __('footer.contact_us') }}</a>
              </p>
              <p>
                <a href="{{ url('/about-us') }}" class="text-reset">{{ __('footer.about_us') }}</a>
              </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <h5 class="text-uppercase fw-bold mb-4">{{ __('footer.contact_title') }}</h5>
              <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@example.com
              </p>
              <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
              <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
            </div>
          </div>
        </div>
      </section>
      <div class="text-center p-4">
        <b>©2021 Copyright:</b>
        <p><a class="text-reset fw-bold" href="#">4reedownloadonline.com</a></p>
      </div>
   </section>
  </footer>