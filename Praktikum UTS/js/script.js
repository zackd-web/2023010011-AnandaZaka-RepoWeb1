// script.js
function openForm() {
  document.getElementById('popupForm').style.display = 'flex';
}

function closeForm() {
  document.getElementById('popupForm').style.display = 'none';
}

function showLogin() {
  document.getElementById('loginForm').style.display = 'block';
  document.getElementById('registerForm').style.display = 'none';
  document.getElementById('loginTab').classList.add('active-tab');
  document.getElementById('registerTab').classList.remove('active-tab');
}

function showRegister() {
  document.getElementById('loginForm').style.display = 'none';
  document.getElementById('registerForm').style.display = 'block';
  document.getElementById('registerTab').classList.add('active-tab');
  document.getElementById('loginTab').classList.remove('active-tab');
}
