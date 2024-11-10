document.addEventListener("livewire:init", () => {
  Livewire.on("file-upload", event => {
    Livewire.dispatch("loader", {
      show: true
    });

    var formData = new FormData();
    var file = $("#file")[0].files[0];
    formData.append("file", file);

    $.ajax({
      url: "/upload-file",
      type: "POST",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        Livewire.dispatch("store", {
          file: response
        });
      }
    });
  });

  Livewire.on("video-upload", event => {
    Livewire.dispatch("loader", {
      show: true
    });

    var image = $("#image")[0].files[0];
    var video = $("#video")[0].files[0];
    const formData = new FormData();
    formData.append("image", image);
    formData.append("video", video);

    $.ajax({
      url: "/upload-video",
      type: "POST",
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
      },
      data: formData,
      processData: false, // Important for file upload
      contentType: false, // Important for file upload
      success: function(response) {
        Livewire.dispatch("store-video", {
          file: response
        });
      },
      error: function(error) {
        console.error("Upload failed:", error);
      }
    });
  });
});
