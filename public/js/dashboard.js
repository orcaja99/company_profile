const sidebar = document.getElementById('sidebar');
const hamburgerBtn = document.createElement('button');
hamburgerBtn.innerHTML = '<span>&#9776;</span>';
hamburgerBtn.classList.add('hamburger-btn');

hamburgerBtn.addEventListener('click', () => {
    sidebar.classList.toggle('show-sidebar');
});

sidebar.prepend(hamburgerBtn);