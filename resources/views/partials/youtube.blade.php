<div id="youtube-download" class="youtube-download">
  <div class="container">
      <div class="row">
        <div class="col-lg-2">
            <div class="fake-ad-left">
              <img src="https://via.placeholder.com/300x250" alt="Fake Ad Left">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="col-lg-8" data-wow-duration="1s" data-wow-delay="0.8s">
          <div class="col-lg-10 offset-lg-1" style="margin-top:10%">
              <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                  <h4><?= __("youtube.heading.main"); ?></h4>
              </div>
          </div>
          <div class="col-lg-8 offset-lg-2" data-wow-duration="1s" data-wow-delay="0.8s">
              <form id="search" action="#" method="GET">
                  <div class="row">
                      <div class="col-lg-8 col-sm-8">
                          <fieldset>
                              <input type="web" name="url" id="url" placeholder="<?= __("youtube.placeholder"); ?>"
                                  autocomplete="off" required>
                          </fieldset>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                          <fieldset>
                              <button type="button" class="main-button" onclick="appendYoutubeOptions()"><?= __("youtube.download_button"); ?></button>
                          </fieldset>
                      </div>
                  </div>
              </form>
          </div>
          </div>
          <div class="col-lg-2">
            <div class="fake-ad-right">
              <img src="https://via.placeholder.com/300x250" alt="Fake Ad Right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="container py-5 optionYoutubeDiv">
              
        </div>
    </div>
</div>
</div>