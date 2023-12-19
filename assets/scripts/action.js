document.addEventListener('DOMContentLoaded', function () {
    const themeSwitch = document.getElementById('themeSwitch');
    const navbar1= document.querySelector('.navbar');
    const foot= document.querySelector('.footer');


    themeSwitch.addEventListener('change', function () {
        if (themeSwitch.checked) {
            // Switch to dark theme
            document.body.classList.add('dark-theme');
            navbar1.classList.remove('bg-primary');
            navbar1.classList.add('bg-dark');
            foot.classList.remove('bg-primary');
            foot.classList.add('bg-dark');
        } else {
            // Switch to light theme
            document.body.classList.remove('dark-theme');
            navbar1.classList.remove('bg-dark');
            navbar1.classList.add('bg-primary');
            foot.classList.remove('bg-dark');
            foot.classList.add('bg-primary');
        }
    });

    // Function to update date
    function updateDate() {
        const dateElement = document.getElementById('date');
        const now = new Date();
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric',
        };
        const formattedDate = now.toLocaleString('en-US', options);
        dateElement.textContent = formattedDate;
    }

    // Update date on page load
    updateDate();

    // Update navbar-brand on scroll
    const navbar = document.querySelector('.navbar');
    const navbarBrand = document.querySelector('.navbar-brand');
    const headerLogo = document.querySelector('.header img');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            // Add a class when scrolled
            navbarBrand.innerHTML = `<img src="${headerLogo.src}" alt="Logo">`;
        } else {
            // Remove the class when at the top
            navbarBrand.innerHTML = '';
        }
    });
});
