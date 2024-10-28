function stickyScrollDesign() {
  return {
    topElementHeight: 0,
    init() {
      setTimeout(() => {
        window.addEventListener("scroll", () => {
          this.topElementHeight = this.$refs.stickyElement.offsetTop;
        });
      }, 100);
    }
  };
}

function calculateHeight() {
  return {
    contenHeight1: 0,
    contenHeight2: 0,
    init() {
      window.onload = () => {
        this.contenHeight1 = this.$refs.content1.clientHeight;
        this.contenHeight2 = this.$refs.content2.clientHeight;
      };
    }
  };
}

function toastr() {
  return {
    show: false,
    type: "",
    message: "",
    toggle(event) {
      this.show = true;
      this.type = event.type;
      this.message = event.message;

      setTimeout(() => {
        this.show = false;
      }, 4000);
    }
  };
}

function imageUploader() {
  return {
    preview: "",
    previewImage(event) {
      this.$wire.thumbnail = "";
      const file = event.target.files[0];
      if (file) {
        this.$wire.thumbnail = Math.floor(file.size / 1024);
      }

      if (file) {
        const reader = new FileReader();
        reader.onload = e => {
          this.preview = e.target.result;
        };
        reader.readAsDataURL(file);
      } else {
        this.preview = "";
      }
    }
  };
}
