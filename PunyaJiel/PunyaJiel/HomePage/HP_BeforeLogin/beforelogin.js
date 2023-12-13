function toggleAnswer(element) {
    // Toggle the class to show/hide the answer
    element.classList.toggle("show-answer");
  }
  
  function handleButtonClick() {
    var drawerContainer = document.querySelector('.drawer-container');
    drawerContainer.style.display = (drawerContainer.style.display === 'block') ? 'none' : 'block';
  }
  
  const initSlider = () => {
    const imageList = document.querySelector(".slider-wrapper .image-list");
    const slideButtons = document.querySelectorAll(".slider-wrapper .slide-button");
    const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
  
    // Slide images according to the slide button clicks
    slideButtons.forEach(button => {
      button.addEventListener("click", () => {
        const direction = button.id === "prev-slide" ? -1 : 1;
        const scrollAmount = imageList.clientWidth * direction;
        imageList.scrollBy({ left: scrollAmount, behavior: "smooth" });
      });
    });
  
    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
      slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "block";
      slideButtons[1].style.display = imageList.scrollLeft >= maxScrollLeft ? "none" : "block";
    };
  
    // Call these two functions when image list scrolls
    imageList.addEventListener("scroll", () => {
      handleSlideButtons();
    });
  };
  
  window.addEventListener("load", initSlider);
  
  const initSlider2 = () => {
    const imageList2 = document.querySelector(".slider-wrapper2 .image-list2");
    const slideButtons2 = document.querySelectorAll(".slider-wrapper2 .slide-button2");
    const maxScrollLeft = imageList2.scrollWidth - imageList2.clientWidth;
  
    // Slide images according to the slide button clicks
    slideButtons2.forEach(button => {
      button.addEventListener("click", () => {
        const direction = button.id === "prev-slide" ? -1 : 1;
        const scrollAmount = imageList2.clientWidth * direction;
        imageList2.scrollBy({ left: scrollAmount, behavior: "smooth" });
      });
    });
  
    // Show or hide slide buttons based on scroll position
    const handleSlideButtons = () => {
      slideButtons2[0].style.display = imageList2.scrollLeft <= 0 ? "none" : "block";
      slideButtons2[1].style.display = imageList2.scrollLeft >= maxScrollLeft ? "none" : "block";
    };
  
    // Call these two functions when image list scrolls
    imageList2.addEventListener("scroll", () => {
      handleSlideButtons();
    });
  };
  
  window.addEventListener("load", initSlider2);
  
  
