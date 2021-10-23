jQuery(function () {
    jQuery(".profile-q").on('click', function () {
      jQuery(".profile-q").not(this).removeClass("open").next().slideUp(300);
      jQuery(this).toggleClass("open").next().slideToggle(300);
    });
  });
  
  const icon = document.querySelector('.drawer-icon');
  const drawercontent = document.querySelector('.drawer-content');
  const drawerback = document.querySelector('.drawer-background');
   
  icon.addEventListener('click', () => {
    icon.classList.toggle('is-click');
    drawercontent.classList.toggle('is-click');
    drawerback.classList.toggle('is-click');
  
  });
  