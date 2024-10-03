const loginForm = document.querySelector('#login-form');
loginForm.addEventListener('submit', handleLogin);

function handleLogin(event) {
  event.preventDefault();

  const email = document.querySelector('#email-input').value;
  const password = document.querySelector('#password-input').value;

  fetch('/login', {
    method: 'POST',
    body: JSON.stringify({ email, password }),
    headers: {
      'Content-Type': 'application/json'
    }
  })
  .then(response => {
    if (response.ok) {
      const loginButton = document.querySelector('#login-button');
      loginButton.style.display = 'none';
      const profileButton = document.querySelector('#profile-button');
      profileButton.style.display = 'block';
    } else {
      const errorMessage = document.querySelector('#error-message');
      errorMessage.textContent = 'Invalid email or password.';
    }
  })
  .catch(error => {
    console.error(error);
  });
}