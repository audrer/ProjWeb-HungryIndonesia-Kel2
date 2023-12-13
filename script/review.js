

function handleButtonClick() {
    var drawerContainer = document.querySelector('.drawer-container');
    drawerContainer.style.display = (drawerContainer.style.display === 'block') ? 'none' : 'block';
}

function toggleAnswer(element) {
    element.classList.toggle("show-answer");
    const dropdownIcon = element.querySelector('.dropdown img');
    dropdownIcon.style.transform = element.classList.contains("show-answer") ? "rotate(180deg)" : "rotate(0deg)";
}

document.addEventListener('DOMContentLoaded', function () {
  const reviews = document.querySelectorAll('.review');

  reviews.forEach(review => {
    const starContainer = review.querySelector('.star-container');
    const stars = starContainer.querySelectorAll('.star');
    const ratingInfo = review.querySelector('.rating-info');

    stars.forEach(star => {
      star.addEventListener('mouseover', function (e) {
        const hoveredStarValue = e.target.getAttribute('data-value');
        highlightStars(stars, hoveredStarValue);
      });

      star.addEventListener('mouseout', function () {
        const currentRating = starContainer.getAttribute('data-rating');
        highlightStars(stars, currentRating);
      });

      star.addEventListener('click', function (e) {
        const clickedStarValue = e.target.getAttribute('data-value');
        const currentRating = starContainer.getAttribute('data-rating');

        if (clickedStarValue === currentRating && currentRating !== '0') {
          // If clicked on the same star that is already full, set rating to 0 (reset)
          starContainer.setAttribute('data-rating', 0);
        } else {
          // Otherwise, set the rating to the clicked star value
          starContainer.setAttribute('data-rating', clickedStarValue);
        }

        updateRatingInfo(starContainer, ratingInfo);
      });
    });
  });
});

function highlightStars(stars, value) {
  stars.forEach(star => {
    const starValue = star.getAttribute('data-value');
    star.classList.toggle('full', starValue <= value);
  });
}

function updateRatingInfo(starContainer, ratingInfo) {
  const currentRating = starContainer.getAttribute('data-rating');
  ratingInfo.textContent = `${currentRating}/5`;
}

