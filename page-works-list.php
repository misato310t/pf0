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
          <div class="drawer-items">
            <div class="drawer-item"><a href="<?php echo esc_url( home_url('/') ); ?>">HOME</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/profile') ); ?>">自己紹介</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></div>
          </div>
         </div>
         <div class="drawer-background"></div>  


   <div class="works-list-ttl-wrap">
       <picture class="works-section-ttl works-list-ttl">
           <source srcset="<?php echo get_template_directory_uri(); ?>/img/works-ttl-sp-all.png" media="(max-width:767px)" >
           <img src="<?php echo get_template_directory_uri(); ?>/img/works-ttl-all.png" alt="">
        </picture>
    </div>

    <section class="works-list container">
        <div class="works-list-wrapper">
            <ul class="works-list-item">
                <li>
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works2') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img1-min.png" alt=""></a>
                  </div>
                  <dt>コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods.png" alt=""></div>  
                  <dd>オンライン学習サービスでの課題として制作しました。</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works2') ); ?>">詳しく見る</a></div>
                </li>
                <li>
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works3') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img2-min.png" alt=""></a>
                  </div>
                  <dt>架空コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods.png" alt=""></div>  
                  <dd>オンライン学習サービスでの課題として制作しました。</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works3') ); ?>">詳しく見る</a></div>
                </li>
                <li>
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works1') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img3-min.png" alt=""></a>
                  </div>
                  <dt>架空コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods.png" alt=""></div>  
                  <dd class="works-list-img3">コーディング教材を配布されているWEBサイトの中のコーディング課題
                    です</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works1') ); ?>">詳しく見る</a></div>
                </li>
                <li>
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works5') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img4-min.png" alt=""></a>
                  </div>
                  <dt>架空カフェサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods.png" alt=""></div>  
                  <dd class="works-list-img4">デザイン、コーディング、
                    ワードプレスの構築を行いました</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works5') ); ?>">詳しく見る</a></div>
                </li>
                <li>
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works4') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img5-min.png" alt=""></a>
                  </div>
                  <dt>架空訪問看護st.サイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods.png" alt=""></div>  
                  <dd class="works-list-img5">デザイン、コーディング、
                    ワードプレスの構築を行いました</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works4') ); ?>">詳しく見る</a></div>
                </li>
                
                
            </ul>
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