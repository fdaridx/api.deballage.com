const toggleButton = document.querySelector('.toggle-button');
const sidebarContainer = document.querySelector('.sidebar-container');
const iconClose = document.querySelector('.icon-close');

toggleButton.addEventListener('click', function() {
  sidebarContainer.classList.add('active')
});

iconClose.addEventListener('click', () => {
    sidebarContainer.classList.remove('active');
})