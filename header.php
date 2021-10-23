
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
        get_template_directory_uri() . '/css/mystyle.css', 
        array('swiper-css','reset'), 
      );
 wp_head();
 ?>
    <title>portforio</title>

    