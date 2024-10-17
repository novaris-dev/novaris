document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.querySelector('.menu-toggle');
    var menuContainer = document.querySelector('#primary'); // The container holding the menu

    menuButton.addEventListener('click', function() {
        // Toggle the 'toggled' class on the menu container
        menuContainer.classList.toggle('toggled');
    });
});
