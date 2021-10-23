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
          <div class="single-page-logo "><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt=""></a></div>
          <ul class="single-page-nav">
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


   <div class="works-section-ttl single-page-works-ttl">作品一覧</div>
      <div class="works-ttl-img single-page-works-subttl"><img src="<?php echo get_template_directory_uri(); ?>/img/works-ttl-min.png" alt=""></div>

    <section class="works-list container">
        <div class="works-list-wrapper">
            <ul class="works-list-item">
                <li class="works-list-item-li">
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works2') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img1-min.png" alt=""></a>
                  </div>
                  <dt>コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>  
                  <dd>オンライン学習サービスでの課題として制作しました。</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works2') ); ?>">詳しく見る</a></div>
                </li>
                <li class="works-list-item-li">
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works3') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img2-min.png" alt=""></a>
                  </div>
                  <dt>架空コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>  
                  <dd>オンライン学習サービスでの課題として制作しました。</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works3') ); ?>">詳しく見る</a></div>
                </li>
                <li class="works-list-item-li">
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works1') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img3-min.png" alt=""></a>
                  </div>
                  <dt>架空コーポレートサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>  
                  <dd class="works-list-img3">コーディング教材を配布されているWEBサイトの中のコーディング課題
                    です</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works1') ); ?>">詳しく見る</a></div>
                </li>
                <li class="works-list-item-li">
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works5') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img4-min.png" alt=""></a>
                  </div>
                  <dt>架空カフェサイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>  
                  <dd class="works-list-img4">デザイン、コーディング、
                    ワードプレスの構築を行いました</dd>
                  <div class="works-more-btn more-button"><a href="<?php echo esc_url( home_url('/works/works5') ); ?>">詳しく見る</a></div>
                </li>
                <li class="works-list-item-li">
                  <div class="works-list-img">
                    <a href="<?php echo esc_url( home_url('/works/works4') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/works-list-img5-min.png" alt=""></a>
                  </div>
                  <dt>架空訪問看護st.サイト制作</dt>
                  <div class="works-goods"><img src="<?php echo get_template_directory_uri(); ?>/img/works-goods-min.png" alt=""></div>  
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