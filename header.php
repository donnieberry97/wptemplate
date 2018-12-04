<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wordpress Theme</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <meta name="viewport" content="width=device-width, user-scalable=no" />
      <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
      
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
       <?php wp_head();?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<?php wp_nav_menu( array( 'theme_location' => 'main_nav' ) ); ?>
<body <?php body_class();?>>
      <div class="mobileHeader__container">
       <div class="mobileHeader">
                   <div class="hamburger">
               <i class="fas fa-bars"></i>
           </div>   
    </div>
       </div>
    <header style="background-image: url(<?php echo header_image(); ?>); background-size:cover">

        <div class="container__header">
            <div class="header__text">
                <h1 class="white">Duis mauris ipsum pharetra eget felis et</h1>
                <p class="white">In hac habitasse platea dictumst. Maecenas sit amet sollicitudin tellus. V<strong>estibulum</strong> quis vehicula augue. Suspendisse vitae urna bibendum, fermentum tellus eget.</p>
                <div class="appStore__Container">
                    <div class="appStore">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple.png" />
                    </div>
                    <div class="appStore">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/google.png" />
                    </div>
                </div>
            </div>

            <div class="phone">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phone.png" />
            </div>
        </div>

    </header>

    <section class="newsletter">
        <div class="newsletter__container">
                       <div class="newsletter__content">
            <div class="newsletter__content__text">
                <p>Subscribe to our newsletter</p>
            </div>

                <div class="newsletter__content__textbox">
                    <input type="text" placeholder="John@paul.com" class="news">
                </div>
                <div class="newsletter__content__button">
                    <button class="news">Sign Up</a>
                </div>
            </div>
        </div>
    </section>
    
