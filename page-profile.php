<!DOCTYPE html>
<html lang="ja">
  <head>
  <?php get_header(); ?>
    
  </head>
  

<body>
   <div class="list-header">
      <div class="list-nav-wrapper container">
          <div class="list-pc-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-min.png" alt="">
          </div>
          <div class="list-sp-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-sp-min.png" alt="">
          </div>

          <ul class="list-nav">
              <li><a href="<?php echo esc_url( home_url('/') ); ?>">ＨＯＭＥ</a></li>
              <li><a href="<?php echo esc_url( home_url('/works') ); ?>">作品一覧</a></li>
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
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/works') ); ?>">作品一覧</a></div>
              <div class="drawer-item"><a href="<?php echo esc_url( home_url('/contact') ); ?>">お問い合わせ</a></div>
          </div>
         </div>
         <div class="drawer-background"></div> 

   

    <div class="section-ttl about-section-ttl page-profile-ttl">自己紹介</div>
      <div class="about-ttl-img page-profile-subttl"><img src="<?php echo get_template_directory_uri(); ?>/img/about-ttl-min.png" alt=""></div>

    <section class="profile-wrapper container">
       <dt class="profile-q">今までの経歴は？</dt>
       <dd class="profile-a">医療業界で８年程看護師として勤務していました。<br>
        業務上、相手の立場に立って考え相手が何を必要としているのかを
        コミュニケーションを通して汲み取って適切な形でケアにつなげて
        いきます。
        ＷＥＢ制作においても、常に相手の立場に立ち、お取引様の視点や
        ＷＥＢサイト等を閲覧される方の視点を第一に考え制作に活かして
        まいります。
       </dd>
       <dt class="profile-q">何故ＷＥＢ制作？</dt>
       <dd class="profile-a">
        ワークライフバランスの観点で、ある程度時間や場所に縛られずに
        働けるスキルを模索し始めた事がきっかけです。そのようなきっかけ
        からプログラミングやIT分野に興味を持つようになり、少しずつ
        ＷＥＢに関する事を学習し始めました。学習を始め、出来る事が増え
        ていくと徐々に楽しくなり自分もＷＥＢ制作に関わる事ができたら
        いいなと考え現在に至ります。
       </dd> 
       <dt class="profile-q">どんな性格？</dt>
       <dd class="profile-a">
        中立的に物事を考えるタイプだと思っています。
        冷静で周りから「落ち着いている」と言われます。
        長所と短所という言い方がありますが、捉え方の違いです。
        周りの方の短所より長所を把握するタイプだと思います。
       </dd> 
       <dt class="profile-q">ＷＥＢ制作への思い</dt>
       <dd class="profile-a">
        ＷＥＢ制作＝思いや伝えたい事を形として表現する事だと考えます。
        ＷＥＢページを新たに作ったり或いは更新したりする目的や思いは
        それぞれです。その目的や伝えたい事をまずはしっかりと把握する
        事が一番重要と考えます。そのため制作過程で齟齬が生じないよう
        にしっかりとコミュニケーションをとらせていただきたいと思います。
       </dd> 
   </section>

   <footer>
    <p>&copy; 2021　 misato portforio 　 All  Rights Reserved</p>
    <div class="totop"><img src="<?php echo get_template_directory_uri(); ?>/img/totop-min.png" alt=""></div>
  </footer>

  <?php
  
  wp_enqueue_script('jquery',
     "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    );

   wp_enqueue_script('profile-js' ,
   get_template_directory_uri().'/js/profile-script.js',
   array('jquery')
   
  );
  
?>
  <?php wp_footer(); ?>
</body>
</html>