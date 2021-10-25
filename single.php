<!DOCTYPE html>
<html lang="ja">
<head>
<?php get_header(); ?>
</head>
<body>
<div class="sp-header">
  <a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp.png" alt=""></a>
</div>
   <div class="single-page-header">
      <div class="single-page-nav-wrapper container">
          <div class="single-page-logo"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
          <ul class="single-page-nav">
              <li><a href="<?php echo esc_url( home_url('/') ); ?>">ＨＯＭＥ</a></li>
              <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></li>
              <li><a href="<?php echo esc_url( home_url('/works-list') ); ?>">作品一覧</a></li>
              <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></li>
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
          <nav class="drawer-items">
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/works-list') ); ?>">作品一覧</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></div>
          </nav>
         </div>
         <div class="drawer-background"></div>  

         <section class="works-single container">
   <div class="single-page-works-ttl ">
   <h1 class="works-section-ttl">作品紹介</h1>
      <div class="works-ttl-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works-ttl-min.png" alt=""></div>
   </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!--  ループ開始  -->
        <h2 class="works-single-ttl"><?php the_title(); ?></h2>
        <div class="works-single-ttl-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>
        <div class="works-single-wrapper">
          <ul class="works-single-text ">
                <li><div class="works-single-subttl"><?php the_content(); ?></div></li>
                <li><?php the_field('dd1'); ?></li>
                <li><?php the_field('dd2'); ?></li>
                <li><?php the_field('dd3'); ?></li>
                <li><?php the_field('dd4'); ?></li>
                <?php if( get_field('dd5') ) { ?>
                <li><p><?php the_field('dd5'); ?></p></li>
                <?php } ?>
                
                
            </ul>
            <div class="works-single-img">
              <a href="<?php the_field('works-url'); ?>" target="_blank" rel="noopener noreferrer"><?php the_post_thumbnail('hull'); ?></a>
            </div> 
          </div>
          <div class="works-single-btn-wrap">
            <div class="works-single-btn">
              <a href="<?php the_field('works-url'); ?>" target="_blank" rel="noopener noreferrer">ＷＥＢサイトへ</a>
             </div>
          </div>
        <div class="works-view">
            <div class="works-view-pc"><img src="<?php the_field('pc-view'); ?>" alt=""></div>
            <div class="works-view-sp"><img src="<?php the_field('sp-view'); ?>" alt=""></div>
        </div>
        <?php endwhile; endif; ?><!--  /ループ終わり -->
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