window.addEventListener("load", function () {
    document.querySelectorAll(".wp-block-gallery").forEach((gallery) => {
      const wrapper = document.createElement("div");
      wrapper.className = "swiper";
  
      const swiperWrapper = document.createElement("div");
      swiperWrapper.className = "swiper-wrapper";
  
      gallery.querySelectorAll("figure.wp-block-image").forEach((fig) => {
        const slide = document.createElement("div");
        slide.className = "swiper-slide";
        slide.appendChild(fig);
        swiperWrapper.appendChild(slide);
      });
  
      gallery.innerHTML = "";
      wrapper.appendChild(swiperWrapper);
      gallery.appendChild(wrapper);
  
      new Swiper(wrapper, {
        loop: true, // Loop infinitely
        slidesPerView: 3, // Show 4 images at a time
        spaceBetween: 0, // Space between images
        speed: 4000, // Speed of the scrolling
        autoplay: {
          delay: 0, // No delay, continuous scrolling
          disableOnInteraction: false
        },
        freeMode: true, // Free scrolling, no snapping to slides
        freeModeMomentum: false, // Keep it continuous
        grabCursor: true, // Cursor changes to indicate grabbing
      });
    });
  });
  