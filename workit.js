const sidebar = document.querySelector('.sidebar');
const togglebtn = document.querySelector('.toggle-btn');

togglebtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});

// Code for showing/hiding the upload form
const feedbackMenu = document.getElementById('feedback-menu');
const uploadFormSection = document.getElementById('upload-form-section');

feedbackMenu.addEventListener('click', (e) => {
  e.preventDefault();
  uploadFormSection.style.display = uploadFormSection.style.display === 'none' ? 'block' : 'none';
});

// Form validation code
const form = document.querySelector('form');
const nameInput = document.getElementById('name');
const emailInput = document.getElementById('email');
const skillsInput = document.getElementById('skills');
const photoInput = document.getElementById('photo');

form.addEventListener('submit', (e) => {
  e.preventDefault();

  // Perform form validation
  if (nameInput.value.trim() === '') {
    alert('Please enter your name.');
    nameInput.focus();
    return false;
  }

  if (emailInput.value.trim() === '') {
    alert('Please enter your email.');
    emailInput.focus();
    return false;
  }

  if (skillsInput.value.trim() === '') {
    alert('Please enter your skills.');
    skillsInput.focus();
    return false;
  }

  if (photoInput.files.length === 0) {
    alert('Please select a photo.');
    photoInput.focus();
    return false;
  }

  // If all validations pass, submit the form
  form.submit();
});
