// Define a function called reveal_left
function reveal_left() {
    // Get all elements with class "reveal"
    var reveals = document.querySelectorAll(".reveal-left");
  
    // Loop through each element with class "reveal"
    for (var i = 0; i < reveals.length; i++) {
      // Get the height of the viewport
      var windowHeight = window.innerHeight;
  
      // Get the top position of the current element relative to the viewport
      var elementTop = reveals[i].getBoundingClientRect().top;
  
      // Set the threshold for when an element should become visible
      var elementVisible = 250;
  
      // If the top position of the element is less than the viewport height minus the threshold
      if (elementTop < windowHeight - elementVisible) {
        // Add the class "active" to the element, which triggers a CSS animation
        reveals[i].classList.add("active");
      } else {
        // Otherwise, remove the class "active" from the element
        reveals[i].classList.remove("active");
      }
    }
  }
  
  // Attach an event listener to the "scroll" event on the window object
  // When the user scrolls, the reveal_left function will be called
  window.addEventListener("scroll", reveal_left);
  