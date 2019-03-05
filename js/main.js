displayMobileMenu();

//smooth scrolling with jQuery
$(document).ready(function() {
  $('.about-link').on('click', function(e) {
    e.preventDefault();
    closeMenu();
    $('html, body').animate({
      scrollTop: $(this.hash).offset().top - $('nav').height()
    }, 300);
  });

  $('.link').on('click', function() {
    closeMenu();
  })
});


//open and close the menu
function displayMobileMenu() {
  if (window.matchMedia('max-width: 767px')) {
    document.querySelector('.fa-bars').onclick = function() {
      if (document.body.id == 'expanded') {
        document.body.style.right = '0';
        document.body.id = '';
        document.querySelector('.fa-bars').classList.remove('fa-bars-clicked');
      } else {
        document.body.style.right = '10rem';
        document.body.id = 'expanded';
        document.querySelector('.fa-bars').classList.add('fa-bars-clicked');
      }
    }
  }
}


//close the menu when a link in the menu is clicked
function closeMenu() {
  if (document.body.id == 'expanded') {
    document.body.style.right = '0%';
    document.body.id = '';
    document.querySelector('.fa-bars').classList.remove('fa-bars-clicked')
  }
}


//handle size change of website viewport in full screen preview
function changeWebsiteViewportSize(button) {
  let websitePreview = document.querySelector('.website-viewport');
  let sizeButtons = document.querySelectorAll('.width-button');
  let website = document.querySelector('.website');

  switch (button) {
    case 'mobile':
      websitePreview.style.width = '360px';
      sizeButtons[0].classList.add('width-button-clicked');
      sizeButtons[1].classList.remove('width-button-clicked');
      sizeButtons[2].classList.remove('width-button-clicked');
      website.src = website.src;
      break;
    case 'tablet':
      websitePreview.style.width = '768px';
      sizeButtons[1].classList.add('width-button-clicked');
      sizeButtons[0].classList.remove('width-button-clicked');
      sizeButtons[2].classList.remove('width-button-clicked');
      website.src = website.src;
      break;
    case 'desktop':
      websitePreview.style.width = '992px';
      sizeButtons[2].classList.add('width-button-clicked');
      sizeButtons[0].classList.remove('width-button-clicked');
      sizeButtons[1].classList.remove('width-button-clicked');
      website.src = website.src;
      break;
  }
}


//opening fullscreen viewport
function openFullscreen(item) {
  let websiteLightbox = document.querySelector('.website-lightbox');
  let websiteSource = document.querySelectorAll('.preview-website');
  let website = document.querySelector('.website');
  item -= 1;

  websiteLightbox.style.display = 'block';
  setTimeout(function() {
    website.src = websiteSource[item].src;
    websiteLightbox.style.opacity = '1';
    document.body.style.overflow = 'hidden';
  }, 50);
}


//close the lightbox
function closeLightbox() {
  let websiteLightbox = document.querySelector('.website-lightbox');

  websiteLightbox.style.transition = 'opacity 150ms linear';
  websiteLightbox.style.opacity = 0;
  document.body.style.overflow = 'scroll';

  setTimeout(function() {
    websiteLightbox.style.display = 'none';
  }, 150);
}































//
