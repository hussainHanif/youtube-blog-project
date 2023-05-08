{{--                               
<div id="free-quote" class="free-quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6><?= __("youtube.heading.top"); ?></h6>
                    <h4><?= __("youtube.heading.main"); ?></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2" data-wow-duration="1s" data-wow-delay="0.8s">
                <form id="search" action="#" method="GET">
                    <div class="row">
                        <div class="col-lg-8 col-sm-8">
                            <fieldset>
                                <input type="web" name="web" class="website" placeholder="<?= __("youtube.placeholder"); ?>"
                                    autocomplete="on" required>
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
            <div class="cont ainer py-5 optionYoutubeDiv">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                      <div class="card border-0 shadow-lg rounded-lg">
                        <div class="card-header py-3 bg-app-primary">
                          <h4 class="text-white mb-0"><?= __("youtube.title"); ?></h4>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <img src="https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" class="img-fluid mb-3" alt="<?= __("youtube.thumbnail_alt"); ?>">
                              <h5 class="mb-3"><?= __("youtube.heading.main"); ?> - Rick Astley</h5>
                            </div>
                            <div class="col-md-6">
                              <form>
                                <div class="form-group mb-3">
                                  <label for="qualitySelect"><?= __("youtube.quality_label"); ?></label>
                                  <select class="form-control" id="qualitySelect">
                                    <?php foreach (__("youtube.quality_options") as $option) : ?>
                                        <option><?= $option; ?></option>
                                    <?php endforeach; ?>
                                  </select>
                                </div>
                                <div class="border-first-button scroll-to-section">
                                  <a href="#contact"><?= __("youtube.download_button"); ?></a>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
      </div>
  </div>
</div> --}}
          
<div id="free-quote" class="free-quote">
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