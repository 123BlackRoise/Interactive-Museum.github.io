$(document).ready(function(){
    $('.header_burger').click(function(event){
        $('.header_burger, .header_menu').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Get the current page URL
    var currentUrl = window.location.href;
  
    // Find all navigation links
    var navLinks = document.querySelectorAll('.header_link');
  
    // Loop through each link and check if its href matches the current URL
    navLinks.forEach(function (link) {
      if (link.href === currentUrl) {
        // Add the 'active' class to the link if it matches the current page
        link.classList.add('active');
      }
    });
});

// function flipPanel(element) {
//   const contentContainer = element.querySelector('.content-container');
//   contentContainer.style.transform = contentContainer.style.transform === 'rotateY(180deg)' ? 'rotateY(0deg)' : 'rotateY(180deg)';
// }