function toggleAnswer(element) {
    // Toggle the class to show/hide the answer
    element.classList.toggle("show-answer");
}

function handleButtonClick() {
    var drawerContainer = document.querySelector('.drawer-container');
    drawerContainer.style.display = (drawerContainer.style.display === 'block') ? 'none' : 'block';
}


  
