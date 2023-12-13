function toggleAnswer(element) {
    // Toggle the class to show/hide the answer
    element.classList.toggle("show-answer");
}

function handleButtonClick() {
    var drawerContainer = document.querySelector('.drawer-container');
    drawerContainer.style.display = (drawerContainer.style.display === 'block') ? 'none' : 'block';
}


  

document.addEventListener('DOMContentLoaded', function () {
    // Add an event listener to all checkboxes
    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
      checkbox.addEventListener('change', function () {
        // Get the associated SVG ID
        const svgId = this.getAttribute('data-svg');
        const svgPaths = document.getElementById(svgId).querySelectorAll('path');
  
        // Check if the checkbox is checked
        if (this.checked) {
          // Change the color of the SVG paths to orange when checked
          svgPaths.forEach(path => {
            path.setAttribute('fill', 'orange');
          });
        } else {
          // Change the color of the SVG paths back to their original color when unchecked
          svgPaths.forEach(path => {
            // Set the original color or any default color you want
            path.setAttribute('fill', '#CFC1B2');
          });
        }
      });
    });
  });
  