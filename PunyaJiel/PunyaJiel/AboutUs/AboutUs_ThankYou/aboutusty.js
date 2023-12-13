function toggleAnswer(element) {
  // Toggle the class to show/hide the answer
  element.classList.toggle("show-answer");
}

function handleButtonClick() {
  var drawerContainer = document.querySelector('.drawer-container');
  drawerContainer.style.display = (drawerContainer.style.display === 'block') ? 'none' : 'block';
}

function submitFeedback() {
  var feedbackInput = document.getElementById('feedbackInput').value;
  // Handle the feedback submission (you can customize this part based on your needs)
  console.log('Feedback submitted:', feedbackInput);
  // Optionally, you can clear the input field after submission
  document.getElementById('feedbackInput').value = '';
}

  