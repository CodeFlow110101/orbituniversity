function stickyScrollDesign() {
  return {
    topElementHeight: 0,
    init() {
      window.addEventListener("scroll", () => {
        this.topElementHeight = this.$refs.stickyElement.offsetTop;
      });
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
