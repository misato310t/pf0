

 const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: true,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });

const icon = document.querySelector('.drawer-icon');
const drawercontent = document.querySelector('.drawer-content');
const drawerback = document.querySelector('.drawer-background');
 
icon.addEventListener('click', () => {
  icon.classList.toggle('is-click');
  drawercontent.classList.toggle('is-click');
  drawerback.classList.toggle('is-click');

});

const TopBtn = document.querySelector('.totop');
TopBtn.addEventListener('click', () =>{
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});


window.addEventListener('scroll', function(){
  if( 1000 < window.scrollY ) {
    document.querySelector('.totop').classList.add('is-show');
  } else {
    document.querySelector('.totop').classList.remove('is-show');
  }
});


window.addEventListener('scroll', function(){
  if( 100 < window.scrollY ) {
    document.querySelector('.sp-header').classList.add('is-show');
  } else {
    document.querySelector('.sp-header').classList.remove('is-show');
  }
});


window.addEventListener("load", function() {
  const target = document.querySelectorAll('.fadein')
  const targetArray = Array.prototype.slice.call(target);
  const options = {
      root: null,
      rootMargin: '0px 0px',
      threshold: 0.5
  };
  
  const observer = new IntersectionObserver(callback, options)
  targetArray.forEach(function (tgt) {
    observer.observe(tgt)
  });
  
  function callback(entries) {
    entries.forEach(function(entry, i) {
      const target = entry.target;
      if (entry.isIntersecting && !target.classList.contains('active')) {
        const delay = i * 300
        setTimeout(function(){
          target.classList.add('active');
        },delay);
      }
    });
  };
  });

  jQuery('a[href^="#"]').click(function() {
    var id = jQuery(this).attr('href');
    var position = jQuery(id).offset().top - 50 ;
    jQuery("html,body").animate({
    scrollTop:position
    },400);
    });  