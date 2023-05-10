$(document).ready(function () {
    $("#contact").submit(function (event) {
        event.preventDefault();

        var formData = $(this).serialize();
        console.log("formData:", formData);

        $.ajax({
            url: baseUrl + "/contact-us",
            type: "POST",
            data: formData,
            success: function (response) {
                if (response.success) showToast(response.message);
                else showError(response.message);
            },
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
        onClick: function () {}, // Callback after click
    }).showToast();
}

function isValidUrl(url) {
    const urlRegex = /^(https?|ftp):\/\/[^\s/$.?#].[^\s]*$/i;
    return urlRegex.test(url);
}

function appendYoutubeOptions() {
    var targetDiv = $("#optionYoutubeDiv");
    $("html, body").animate(
        {
            scrollTop: targetDiv.offset().top,
        },
        1000
    );
    targetDiv.focus();
    let url = $("#url").val();
    if (!isValidUrl(url)) return showToast("Please enter valid url");
    $(".customLoader").addClass("jimu-primary-loading");
    $('#youtubeBtn').prop('disabled', true);

    $.ajax({
        url: baseUrl + "/appendYoutubeOptions",
        type: "POST",
        data: {
            url: $("#url").val(),
        },
        dataType: "json",
        success: function (response) {
            
            $(".customLoader").removeClass("jimu-primary-loading");
            $('#youtubeBtn').prop('disabled', false);

            if (!response.success) return showToast(response.data.message);
            var data = response;
            var html = `<div class="row justify-content-center"> <div class="col-md-8 col-lg-6"> <div class="card border-0 shadow-lg rounded-lg"> <div class="card-header py-3 bg-app-primary"> <h4 class="text-white mb-0"></h4> </div> <div class="card-body"> <div class="row"> <div class="col-md-6"> <img src="${data.thumbnail}" class="img-fluid mb-3" alt="${data.title}"> <h5 style="color:black !important;" class="mb-3">${data.title}</h5><span class="text-muted"> &nbsp; ${data.duration}</span> </div> <div class="col-md-6"> <form> <div class="form-group mb-3"> <label for="qualitySelect">Select Video/Audio Quality</label> <select style="-webkit-appearance: listbox !important;" class="form-control" id="downloadMedia">`;

            $.each(data.data, function (index, data) {
                html += `<option value="${data.download_link}"> ${
                    data.type == "mp4" ? "🎥" : "🎵"
                }<b> ${data.quality}</b> ${data.audio ? "🔊" : "🔇"}  ${data.size} </option>`;
            });

            html += `</select> </div> <div class="border-first-button scroll-to-section"> <a  onclick="downloadVideo()"> Download Now</a> </div> </form> </div> </div> </div> </div> </div> </div>`;
            $(".optionYoutubeDiv").html(html);
        },
    });
}

function downloadVideo() {
    console.log("link:", $("#downloadMedia").val());
    return window.open($("#downloadMedia").val(), "_blank");
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
        onClick: function () {}, // Callback after click
    }).showToast();
}
