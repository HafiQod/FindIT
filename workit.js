const sidebar = document.getElementById('sidebar');
const togglebtn = document.querySelector('.toggle-btn');
const mainContent = document.getElementById('main-content');
const searchBar = document.getElementById('search-bar');
const banner = document.getElementById('banner');
const cardsContainer = document.getElementById('cards-container');

togglebtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
  adjustMainContent();
});

// Code for showing/hiding the upload form
const feedbackMenu = document.getElementById('feedback-menu');
const uploadFormSection = document.getElementById('upload-form-section');

feedbackMenu.addEventListener('click', (e) => {
  e.preventDefault();
  uploadFormSection.style.display = uploadFormSection.style.display === 'none' ? 'block' : 'none';
  
  if (uploadFormSection.style.display === 'block') {
    searchBar.style.display = 'none';
    banner.style.display = 'none';
    cardsContainer.style.display = 'none';
  } else {
    searchBar.style.display = 'flex';
    banner.style.display = 'block';
    cardsContainer.style.display = 'grid';
  }
  
  adjustMainContent();
});

function adjustMainContent() {
  if (sidebar.classList.contains('active') && uploadFormSection.style.display === 'none') {
    mainContent.style.marginLeft = '260px';
  } else if (!sidebar.classList.contains('active') && uploadFormSection.style.display === 'none') {
    mainContent.style.marginLeft = '80px';
  } else {
    mainContent.style.marginLeft = '260px';
  }
}

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