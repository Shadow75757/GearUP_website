// Define an array of messages
const messages = [
  "Why was the math book sad? Because it had too many problems.",
  "I told my wife she was drawing her eyebrows too high. She looked surprised.",
  "Why don't scientists trust atoms? Because they make up everything.",
  "I'm reading a book on the history of glue. I just can't seem to put it down.",
  "I'm not lazy, I'm just energy-efficient.",
];

// Define a function to create and display the modal popup
function showMessage() {
  if (messages.length === 0) {
    alert("No more messages to show!");
    return;
  }

  // Select a random message from the array
  const index = Math.floor(Math.random() * messages.length);
  const message = messages[index];

  // Create the modal popup
  const modal = document.createElement("div");
  modal.classList.add("modal");

  const modalContent = document.createElement("div");
  modalContent.classList.add("modal-content", "fade-in");

  const messageText = document.createElement("p");
  messageText.textContent = message;
  modalContent.appendChild(messageText);

  modal.appendChild(modalContent);
  document.body.appendChild(modal);

  // Close the modal when the user clicks outside of it
  modal.addEventListener("click", (event) => {
    if (event.target === modal) {
      modalContent.classList.remove("fade-in");
      modalContent.classList.add("fade-out");
      setTimeout(() => {
        modal.style.display = "none";
        messages.splice(index, 1);
      }, 500);
    }
  });

  // Close the modal after 4 seconds
  setTimeout(() => {
    modal.style.display = "none";
    messages.splice(index, 1);
  }, 4000);

  // Display the modal popup
  modal.style.display = "block";
}

// Attach a click event listener to the link
const popupLink = document.getElementById("popup-link");
popupLink.addEventListener("click", showMessage);
