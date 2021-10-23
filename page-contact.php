<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
</head>
<body>
<div class="sp-header">
  <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp.png" alt=""></a>
</div>
   <div class="list-header">
      <div class="list-nav-wrapper container">
          <div class="list-logo works-list-logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
          <ul class="list-nav">
              <li><a href="<?php echo esc_url( home_url('/') ); ?>">ＨＯＭＥ</a></li>
              <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></li>
              <li><a href="<?php echo esc_url( home_url('/works') ); ?>">作品一覧</a></li>
          </ul>
        </div> 
   </div> 

   <div class="drawer-icon">
         <div class="drawer-icon-bars">
             <div class="drawer-icon-bar1"></div>
             <div class="drawer-icon-bar2"></div>
             <div class="drawer-icon-bar3"></div>
         </div>
        </div>
        <div class="drawer-content">
          <div class="drawer-items">
            <div class="drawer-item"><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/works') ); ?>">作品一覧</a></div>
          </div>
         </div>
         <div class="drawer-background"></div>  

         <section class="contact contact-page container">
            <picture class="contact-section-ttl ">
              <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact-ttl-sp-all.png" media="(max-width:767px)" >
              <img src="<?php echo get_template_directory_uri(); ?>/img/contact-ttl-all.png" alt="" class="contact-section-ttl-page">
            </picture>
            <div class="contact-ttl-back"></div>  
              <div class="contact-form-wrapper">
                <div class="contact-form-inner">
                  <?php echo do_shortcode('[contact-form-7 id="92" title="コンタクトフォーム 1"]'); ?>
                </div>
              </div>
            </div>
          </section>

   <footer>
    <p>&copy; 2021　 misato portforio 　 All  Rights Reserved</p>
    <div class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/totop.png" alt=""></div>
  </footer>

    <?php 
     wp_enqueue_script('single-js' ,
     get_template_directory_uri().'/js/single-script.js',
     array()
     
    );
    
  ?>
    <?php wp_footer(); ?>

</body>
</html>