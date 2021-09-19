const target = document.getElementById("menu");
target.addEventListener('click', () => {
    const target = document.getElementById("menu");
    target.classList.toggle('open');
    const nav = document.getElementById("menu-nav");
    nav.classList.toggle('in');
});