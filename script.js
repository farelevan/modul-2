const navbarItems = document.querySelectorAll('.navbar a');

navbarItems.forEach((item) => {
  item.addEventListener('mouseover', () => {
    item.classList.add('active');
  });
  item.addEventListener('mouseout', () => {
    item.classList.remove('active');
  });
});

const sections = document.querySelectorAll('section');

sections.forEach((section) => {
  section.addEventListener('mouseover', () => {
    const navbarItem = document.querySelector(`.navbar a[href="#${section.id}"]`);
    navbarItem.classList.add('active');
  });
  section.addEventListener('mouseout', () => {
    const navbarItem = document.querySelector(`.navbar a[href="#${section.id}"]`);
    navbarItem.classList.remove('active');
  });
});

