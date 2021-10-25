<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header(); ?>
    
  </head>
  
  <body>

    <div class="sp-header">
      <a href="<?php echo esc_url( home_url('/') ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp-min.png" alt="">
      </a>
     </div>
    <header>
      <section class="top-inner container">
         <h1 class="top-logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo-min.png" alt="misatoのportforio"></a></h1>

           <a href="<?php echo esc_url( home_url('/works/works1') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img-min.png" alt="" class="top-sp-img1"></a>
           <a href="<?php echo esc_url( home_url('/works/works5') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img2-min.png" alt="" class="top-sp-img2"></a>  
           <a href="<?php echo esc_url( home_url('/works/works3') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img3-min.png" alt="" class="top-sp-img3"></a>

           <div class="top-pc-wrapper1">
             <div class="top-pc-wrapper2">
               <a href="<?php echo esc_url( home_url('/works/works3') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-min.png" alt="" class="top-pc-img1"></a>
               <a href="<?php echo esc_url( home_url('/works/works5') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-2-min.png" alt="" class="top-pc-img2"></a>
               <a href="<?php echo esc_url( home_url('/works/works1') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-3-min.png" alt="" class="top-pc-img3"></a>
            </div>
          </div>
              
            <div class="top-scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/scloll-min.png" alt=""></div>
           <ul class="header-nav">
             <li><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></li>
             <li><a href="<?php echo esc_url( home_url('/works-list') ); ?>">作品一覧</a></li>
             <li><a href="#skill">出来る事</a></li>
             <li><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></li>
            </ul>
        </section>
        <div class="drawer-icon">
         <div class="drawer-icon-bars">
             <div class="drawer-icon-bar1"></div>
             <div class="drawer-icon-bar2"></div>
             <div class="drawer-icon-bar3"></div>
         </div>
        </div>
        <div class="drawer-content">
          <nav class="drawer-items">
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/works-list') ); ?>">作品一覧</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></div>
          </nav>
         </div>
         <div class="drawer-background"></div>    
    </header>

    <section class="about container">
      <div class="section-back"></div>
      <h2 class="section-ttl about-section-ttl">自己紹介</h2>
      <div class="about-ttl-img"><img src="<?php echo get_template_directory_uri(); ?>/img/about-ttl-min.png" alt=""></div>
      <div class="about-back">
        <p>はじめまして。ＷＥＢ制作フリーランスのmisatoと申します。<br>
        コーディングのお仕事をメインに活動しております。<br class="br-pc br-tab">
        ＷＥＢサイト等を運営されるお取引様はもちろん、<br class="br-pc br-tab">
        ＷＥＢを閲覧される方も含めた全ての方が満足される<br class="br-pc br-tab">
        サービスの創出を目指します。
      </p>
    </div>
      
      <div class="profile-img"><a href="<?php echo esc_url( home_url('/profile') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt=""></a></div>
      <div class="profile-more-wrap">
        <a href="<?php echo esc_url( home_url('/profile') ); ?>" class="profile-more">詳細へ</a>
      </div>
      <div class="more-button about-more-btn"><a href="<?php echo esc_url( home_url('/profile') ); ?>">詳しく見る</a></div>

    </section>
  
  <section class="works container">
      
   <h2 class="works-section-ttl">作品一覧</h2>
      <div class="works-ttl-img"><img src="<?php echo get_template_directory_uri(); ?>/img/works-ttl-min.png" alt=""></div>
      <div class="works-ttl-back"></div>
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><a href="<?php echo esc_url( home_url('/works/works1') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href="<?php echo esc_url( home_url('/works/works3') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set2-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href="<?php echo esc_url( home_url('/works/works2') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-ps_sp-set3-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href="<?php echo esc_url( home_url('/works/works4') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set4-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href="<?php echo esc_url( home_url('/works/works5') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set5-min.png" alt=""></a></div>
            
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        
        </div>
        
          <div class="more-button works-more">
            <a href="">一覧へ</a>
          </div>
        
  </section>

  <section id="skill" class="skill container">
    
    <h2 class="section-ttl skill-section-ttl">出来る事</h2>
      <div class="skill-ttl-img"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-ttl-min.png" alt=""></div>
    <div class="skill-wrapper">
      <div class="skill-item skill-1 fadein">
        <h3>　ＬＰ、ＷＥＢサイトの<br class="skill-br-tab">　　　　　　コーディング</h3>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-html-min.png" alt=""></div>
        <p>ご用意していただいたデザインカンプなどから忠実、丁寧にコーディングいたします。お取引様が扱いやすいような分かりやすいコーディングを期日通りに仕上げます</p>
      </div>
      <div class="skill-item skill-2 fadein">
        <h3>ＷＥＢサイトに<br class="skill-br-tab">　　　　　　動きをつける</h3>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-js-min.png" alt=""></div>
        <p>JavaScriptやjQueryを用いてサイトに動きをつけることが可能です。
          例えばスマートフォンなどのメニューボタンをクリックするとメニューが横からスライドして表示される、ような類です。
          </p>
      </div>
      <div class="skill-item skill-3 fadein">
        <h3>ワードプレスで<br class="skill-br-tab">　　　　ＷＥＢサイト制作</h3>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-wp-min.png" alt=""></div>
        <p>オリジナルサイトをワードプレスで構築可能です。プラグインを用いてカスタム投稿やカスタムメニュー、お問い合わせ機能を実装していきます。</p>
      </div>
    </div>
  </section>
  
  <section class="contact container">
    
    <h2 class="section-ttl contact-section-ttl">お問い合わせ</h2>
      <div class="contact-ttl-img"><img src="<?php echo get_template_directory_uri(); ?>/img/contact-ttl-min.png" alt=""></div>
    <div class="contact-ttl-back"></div>  
      <div class="contact-form-wrapper">
        <div class="contact-form-inner">
          <?php echo do_shortcode('[contact-form-7 id="92" title="コンタクトフォーム 1"]'); ?>
        </div>
      </div>
    
  </section>

  <footer>
    <p>&copy; 2021　 misato portforio 　 All  Rights Reserved</p>
    <div class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/totop-min.png" alt=""></div>
  </footer>

  <?php
  
  wp_enqueue_script('swiper',
  "https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"
 );

  wp_enqueue_script('jquery',
     "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    );

   wp_enqueue_script('main-js' ,
   get_template_directory_uri().'/js/script.js',
   array('swiper','jquery')
   
  );
  
?>
  <?php wp_footer(); ?>

</body>
</html>