const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

dropdownToggles.forEach((toggle) => {
  const dropdownId = toggle.getAttribute('data-dropdown');
  const dropdown = document.getElementById(dropdownId);
  dropdown.style.visibility = 'hidden';

  const showDropdown = () => {
    dropdown.classList.add('active');
    positionDropdown(dropdown, toggle);
    dropdown.style.visibility = 'visible';
  };

  const hideDropdown = () => {
    dropdown.classList.remove('active');
    dropdown.style.visibility = 'hidden';
  };

  toggle.addEventListener('mouseenter', showDropdown);
  toggle.addEventListener('mouseleave', hideDropdown);
  dropdown.addEventListener('mouseenter', () => {
    dropdown.classList.add('active');
    positionDropdown(dropdown, toggle);
  });
  dropdown.addEventListener('mouseleave', () => dropdown.classList.remove('active'));
});

function positionDropdown(dropdown, toggle) {
  const toggleRect = toggle.getBoundingClientRect();
  const dropdownRect = dropdown.getBoundingClientRect();
  const viewportWidth = window.innerWidth || document.documentElement.clientWidth;

  const dropdownLeft = (viewportWidth - dropdownRect.width) / 2;
  const dropdownTop = toggleRect.bottom;

  dropdown.style.left = dropdownLeft + 'px';
  dropdown.style.top = dropdownTop + 'px';
}