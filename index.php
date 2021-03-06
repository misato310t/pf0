<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
      wp_enqueue_style( 'swiper-css', 
      'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css' 
      );
      wp_enqueue_style('reset',
      get_template_directory_uri() . '/css/reset.css',
    );
      wp_enqueue_style(
        'style', // styleという名前を設定
        get_template_directory_uri() . '/css/mystyle.css', // パス
        array('swiper-css','reset'), // style.cssより先に読み込むCSSは無いので配列は空。リセット等事前に読み込ませたい場合はresetと入力
    );
 wp_head();
 ?>
    <title>portforio</title>
    
  </head>
  
  <body>

    <div class="sp-header"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp.png" alt=""></div>
    <header>
     <div class="top-inner container">
           <div class="top-logo"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>

           <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img-min.png" alt="" class="top-sp-img1"></a>
           <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-min.png" alt="" class="top-pc-img1"></a>
            
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img2-min.png" alt="" class="top-sp-img2"></a>  
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-2-min.png" alt="" class="top-pc-img2"></a>
            
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-sp-img3-min.png" alt="" class="top-sp-img3"></a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top-img-3-min.png" alt="" class="top-pc-img3"></a>

            <div class="top-scroll"><img src="<?php echo get_template_directory_uri(); ?>/img/scloll.png" alt=""></div>
           <ul class="header-nav">
             <li><a href="">自己紹介</a></li>
             <li><a href="">作品一覧</a></li>
             <li><a href="">出来る事</a></li>
             <li><a href="">お問い合わせ</a></li>
           </ul>
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
              <div class="drawer-item"><a href="">自己紹介</a></div>
              <div class="drawer-item"><a href="">作品一覧</a></div>
              <div class="drawer-item"><a href="">出来る事</a></div>
              <div class="drawer-item"><a href="">お問い合わせ</a></div>
          </div>
         </div>
         <div class="drawer-background"></div>    
    </header>

    <section class="about container">
      <div class="section-back"></div>
      <picture class="about-section-ttl">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/about-sp-ttl-all.png" media="(max-width:767px)" >
        <img src="<?php echo get_template_directory_uri(); ?>/img/about-ttl-all.png" alt="">
      </picture>
      <div class="about-back">
        <p>はじめまして。ＷＥＢ制作フリーランスのmisatoと申します。<br>
          コーディングのお仕事をメインに活動しております。<br class="br-pc">
          ＷＥＢサイト等を運営されるお取引様はもちろん、<br class="br-pc">
          ＷＥＢを閲覧される方も含めた全ての方が満足される<br class="br-pc">
          サービスの創出を目指します。
        </p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/about-back-min.png" alt=""> 
      </div>

      <div class="profile-img"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/profile-img.png" alt=""></a></div>

       <div class="profile-more"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/about-more-arrow.png" alt=""></a></div>
       <div class="more-button about-more-btn"><a href="">詳しく見る</a></div>
  </section>
  
  <section class="works container">
      <picture class="works-section-ttl">
        <source srcset="<?php echo get_template_directory_uri(); ?>/img/works-ttl-sp-all.png" media="(max-width:767px)" >
        <img src="<?php echo get_template_directory_uri(); ?>/img/works-ttl-all.png" alt="">
      </picture>
      <div class="works-ttl-back"></div>
        <div class="swiper-container">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set2-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/works-ps_sp-set3-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set4-min.png" alt=""></a></div>
            <div class="swiper-slide"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/works-pc_sp-set5-min.png" alt=""></a></div>
            
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        
          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        
        </div>

    <div class="more-button works-more"><a href="">一覧へ</a></div>
  </section>

  <section class="skill container">
    <picture class="skill-section-ttl">
      <source srcset="<?php echo get_template_directory_uri(); ?>/img/skill-ttl-sp-all.png" media="(max-width:767px)" >
      <img src="<?php echo get_template_directory_uri(); ?>/img/skill-ttl-all.png" alt="">
    </picture>
    <div class="skill-wrapper">
      <div class="skill-item skill-1 fadein">
        <dt>　ＬＰ、ＷＥＢサイトの<br>　　　　　　コーディング</dt>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-html.png" alt=""></div>
        <dd>ご用意していただいたデザインカンプなどから忠実、丁寧にコーディングいたします。お取引様が扱いやすいような分かりやすいコーディングを期日通りに仕上げます</dd>
      </div>
      <div class="skill-item skill-2 fadein">
        <dt>ＷＥＢサイトに<br>　　　　　　動きをつける</dt>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-js.png" alt=""></div>
        <dd>JavaScriptやjQueryを用いてサイトに動きをつけることが可能です。
          例えばスマートフォンなどのメニューボタンをクリックするとメニューが横からスライドして表示される、ような類です。
          </dd>
      </div>
      <div class="skill-item skill-3 fadein">
        <dt>ワードプレスで<br>　　　　ＷＥＢサイト制作</dt>
        <div class="skill-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/skill-logo-wp.png" alt=""></div>
        <dd>オリジナルサイトをワードプレスで構築可能です。プラグインを用いてカスタム投稿やカスタムメニュー、お問い合わせ機能を実装していきます。</dd>
      </div>
    </div>
  </section>
  
  <section class="contact container">
    <picture class="contact-section-ttl">
      <source srcset="<?php echo get_template_directory_uri(); ?>/img/contact-ttl-sp-all.png" media="(max-width:767px)" >
      <img src="<?php echo get_template_directory_uri(); ?>/img/contact-ttl-all.png" alt="">
    </picture>
    <div class="contact-ttl-back"></div>  
      <div class="contact-form-wrapper">
        
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2021　 misato portforio 　 All  Rights Reserved</p>
    <div class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/totop.png" alt=""></div>
  </footer>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/script.js"></script> -->
  <?php
    wp_enqueue_script('swiper',
     "https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"
    );
  
    
   wp_enqueue_script('main-js' ,
   get_template_directory_uri().'/js/script.js',
   array('swiper')
   
  );
  
?>
  <?php wp_footer(); ?>

</body>
</html>