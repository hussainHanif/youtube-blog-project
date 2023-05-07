<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>4reedownloadonline - Creative SEO HTML5 Template</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        .bg-app-primary {
            background-color: #4da6e7 !important
        }

        /* Media Query for mob */
        @media (max-width: 767px) {
            .free-quote form .main-button {
                border-top-right-radius: 0 !important;
                margin-left: 0 !important;
            }
        }
    </style>
</head>

<body>

    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    @include('shared.header')
    <!-- ***** Header Area End ***** -->
    @include('partials.banner')
    @include('partials.about')
    @include('partials.youtube')
    @include('partials.blog')
    @include('partials.contact')
    <!-- ***** footer Area Start ***** -->

    @include('shared.footer')
    <!-- ***** footer Area End ***** -->
    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script>
        $(document).ready(function() {
            $('#contact').submit(function(event) {
                event.preventDefault();

                var formData = $(this).serialize();
                console.log('formData:', formData);

                $.ajax({
                    url: '{{ url('/contact-us') }}',
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        if (response.success)
                            showToast(response.message);
                        else
                            showError(response.message);
                    }
                });
            });
        });

        function showToast(message) {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#4da6e7",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }

        function appendYoutubeOptions() {
            showToast("Please wait we're fetching youtube video details");
            $('.optionYoutubeDiv').html(`
          <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                  <div class="card border-0 shadow-lg rounded-lg">
                    <div class="card-header py-3 bg-app-primary">
                      <h4 class="text-white mb-0">Youtube Video Downloader</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <img src="https://i.ytimg.com/vi/dQw4w9WgXcQ/maxresdefault.jpg" class="img-fluid mb-3" alt="Video Thumbnail">
                          <h5 class="mb-3">Never Gonna Give You Up - Rick Astley</h5>
                        </div>
                        <div class="col-md-6">
                          <form>
                            <div class="form-group mb-3">
                              <label for="qualitySelect">Select video quality:</label>
                              <select class="form-control" id="qualitySelect">
                                <option>144p</option>
                                <option>240p</option>
                                <option>360p</option>
                                <option selected>480p</option>
                                <option>720p</option>
                                <option>1080p</option>
                              </select>
                            </div>
                            <div class="border-first-button scroll-to-section">
                              <a href="#contact">Download Video</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          `);
        }

        function showError(message) {
            Toastify({
                text: message,
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "red",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    </script>
</body>

</html>
