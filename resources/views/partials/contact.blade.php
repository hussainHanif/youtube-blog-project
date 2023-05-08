  <div class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2>{{ __('contact.title') }}</h2>
            <h3>{{ __('contact.subtitle') }} <em>{{ __('contact.now') }}</em></h3>
            <div class="line-dec"></div>
          </div>
        </div>
        <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
          <form id="contact" method="POST" action="{{ url('contact-us') }}">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <div class="contact-dec">
                  <img src="{{ asset('assets/images/contact-dec-v3.png') }}" alt="">
                </div>
              </div>
              <div class="col-lg-5">
                <div id="map">
                  <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="fill-form">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/images/phone-icon.png') }}" alt="">
                          <a href="#">{{ __('contact.phone') }}</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/images/email-icon.png') }}" alt="">
                          <a href="#">{{ __('contact.email') }}</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-post">
                        <div class="icon">
                          <img src="{{ asset('assets/images/location-icon.png') }}" alt="">
                          <a href="#">{{ __('contact.location') }}</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="{{ __('contact.your_name') }}" autocomplete="on" required>
                      </fieldset>
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="{{ __('contact.your_email') }}" required>
                      </fieldset>
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="{{ __('contact.subject') }}" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="{{ __('contact.message') }}" required></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" class="main-button">{{ __('contact.send_message') }}</button>
                      </fieldset>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>