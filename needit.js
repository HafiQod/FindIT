const sidebar = document.querySelector('.sidebar');
const togglebtn = document.querySelector('.toggle-btn');

togglebtn.addEventListener('click', () => {
  sidebar.classList.toggle('active');
});

// JavaScript to handle navigation between pages
document.addEventListener('DOMContentLoaded', () => {
  // Get the profile icon
  const profileIcon = document.querySelector('.bx-user-circle');

  // Add click event listener
  if (profileIcon) {
      profileIcon.addEventListener('click', () => {
          // Redirect to profile page
          window.location.href = 'profilePH.php';
      });
  }

  // Add similar event listeners for other menu items if needed
  const homeIcon = document.querySelector('.bx-home-alt-2');
  if (homeIcon) {
      homeIcon.addEventListener('click', () => {
          // Redirect to home page
          window.location.href = 'homepagePH.php';
      });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const listItems = document.querySelectorAll(".list .list-item");

  // Loop melalui semua item di sidebar
  listItems.forEach(item => {
      item.addEventListener("click", () => {
          // Hapus class 'active' dari semua item
          listItems.forEach(i => i.classList.remove("active"));

          // Tambahkan class 'active' ke item yang diklik
          item.classList.add("active");
      });
  });
});
