$(document).ready(function() {
    $('#contact').submit(function(event) {
        event.preventDefault();

        var formData = $(this).serialize();
        console.log('formData:', formData);

        $.ajax({
            url: baseUrl + '/contact-us',
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
    $.ajax({
        url:  baseUrl + '/appendYoutubeOptions',
        type: 'POST',
        data: {
            'url': $('#url').val(),
        },
        dataType: 'json',
        success: function (response) {
            var data = response;
            var html = `<div class="row justify-content-center"> <div class="col-md-8 col-lg-6"> <div class="card border-0 shadow-lg rounded-lg"> <div class="card-header py-3 bg-app-primary"> <h4 class="text-white mb-0"><?= __("youtube.title"); ?></h4> </div> <div class="card-body"> <div class="row"> <div class="col-md-6"> <img src="${data.thumbnail}" class="img-fluid mb-3" alt="${data.title}"> <h5 class="mb-3">${data.title}</h5> </div> <div class="col-md-6"> <form> <div class="form-group mb-3"> <label for="qualitySelect">Select Video/Audio Quality</label> <select class="form-control" id="downloadMedia">`;

            $.each(data.data, function (index, data) {
                html +=`<option value="${data.download_link}"> ${data.type =="mp4" ? '🎥' :  '🎵' } ${data.quality} ${data.audio ? '🔊' : '🔇'} </option>`
            });

            html += `</select> </div> <div class="border-first-button scroll-to-section"> <a  onclick="downloadVideo()"> Download Now</a> </div> </form> </div> </div> </div> </div> </div> </div>`;
            $('.optionYoutubeDiv').html(html);
        }
    });
}

function downloadVideo() {
  console.log('link:',$('#downloadMedia').val());
    return window.open($('#downloadMedia').val(), '_blank');
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