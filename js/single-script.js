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