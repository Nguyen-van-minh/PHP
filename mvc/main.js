window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 190 || document.documentElement.scrollTop > 190) {
    document.getElementById("nav-top").classList.add('header-top');
    document.getElementById("nav-top").classList.remove('header-nav');   
  } else { 
    document.getElementById("nav-top").classList.add('header-nav');
    document.getElementById("nav-top").classList.remove('header-top');
  }
}
