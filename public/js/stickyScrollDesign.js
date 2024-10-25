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
      setTimeout(() => {
        this.contenHeight1 = this.$refs.content1.clientHeight;
        this.contenHeight2 = this.$refs.content2.clientHeight;
      }, 100);
    }
  };
}
