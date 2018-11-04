<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MedicalHospital
 */

?>
<!DOCTYPE html>
    <html <?php language_attributes(); ?>>

         <head>
          <meta charset="<?php bloginfo( 'charset' ); ?>">
          <title><?php wp_title(); ?></title>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <?php if(ot_get_option('favicon_upload')){?>
        <link rel="shortcut icon" href="<?php echo ot_get_option('favicon_upload'); ?>">
					<?php } ?>
        <meta name="apple-mobile-web-app-status-bar-style" content="#000">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#da532c">

        <style type="text/css">
        body{margin:0px 0px 0px 0px}
        .container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{width:100%}.clearfix:before,.clearfix:after,.container:before,.container:after,.row:before,.row:after{content:" ";display:table}.clearfix:after,.container:after,.row:after{clear:both}html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}h1{font-size:2em;margin:0.67em 0}a{background-color:transparent}img{border-style:none}button,input{font-family:inherit;font-size:100%;line-height:1.15;margin:0}button,input{overflow:visible}button{text-transform:none}button{-webkit-appearance:button}button::-moz-focus-inner{border-style:none;padding:0}button:-moz-focusring{outline:1px dotted ButtonText}[type="checkbox"]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:400;.far{font-family:'Font Awesome 5 Free';font-weight:400}@font-face{font-family:'Font Awesome 5 Free';font-style:normal;font-weight:900;.fas{font-family:'Font Awesome 5 Free';font-weight:900}@font-face{font-family:'Font Awesome 5 Brands';font-style:normal;font-weight:normal;.fab{font-family:'Font Awesome 5 Brands'}.fas,.far,.fab{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-clock:before{content:"\f017"}.fa-envelope:before{content:"\f0e0"}.fa-mobile-alt:before{content:"\f3cd"}.fa-facebook-f:before{content:"\f39e"}.fa-google-plus-g:before{content:"\f0d5"}.fa-vk:before{content:"\f189"}.fa-youtube:before{content:"\f167"}.fa-linkedin-in:before{content:"\f0e1"}button::-moz-focus-inner{padding:0;border:0}@charset "UTF-8";*::-webkit-input-placeholder{color:#6a6a6a;opacity:1}*:-moz-placeholder{color:#6a6a6a;opacity:1}*::-moz-placeholder{color:#6a6a6a;opacity:1}*:-ms-input-placeholder{color:#202020;opacity:1}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;outline:none;padding:0;margin:0}html{-webkit-box-sizing:border-box;box-sizing:border-box;width:100%;font-size:16px;color:#6a6a6a;line-height:1.42;margin:0;padding:0;-webkit-backface-visibility:hidden}body{font-family:"RobotoRegular",sans-serif;font-size:16px;line-height:1.875;position:relative;min-width:320px;height:100%;margin:0;padding:0;color:#6a6a6a;opacity:1;-webkit-backface-visibility:hidden;-webkit-font-smoothing:antialised;overflow-x:hidden}.container{width:1600px}h1,h2,h4,h5{margin:0;padding:0}a{outline:0;text-decoration:none}ul{margin:0;padding:0}li{list-style-type:none}.hidden{display:none}.header_box{padding:0;margin:0}.top_logo_box{background-color:#fff;height:100px}.top_logo_con{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;height:100px;border-bottom:2px solid #ececec}.top_logo{padding:0;margin:0}.top_logo img{display:inline-block;width:100%;height:auto}.top_info{padding:0;margin:0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start}.top_info_items{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin-right:40px}.top_info_items:last-child{margin-right:0}.tii_icon{width:50px;height:50px;line-height:50px;text-align:center;-webkit-border-radius:50%;border-radius:50%;background-color:#1a9bdc;color:#fff;font-size:1.875rem}.tii_text{white-space:nowrap;padding-left:20px;font-size:0.9375rem;line-height:1.46667;font-family:"OpenSansBold",sans-serif}.tii_days{font-family:"OpenSansRegular";display:block}.tii_days span{text-transform:uppercase}.top_line{background-color:#fff;height:90px}.top_line_box{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;height:100px;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.top_line_menu{padding:0;margin:0}.top_line_menu ul li{display:inline-block}.top_line_menu ul li a{font-family:"NexaBold",sans-serif;display:block;color:#6c6c6c;padding:10px;font-size:1.25rem;line-height:1.2}.top_line_social ul li{margin-right:10px;display:inline-block}.top_line_social ul li:last-child{margin-right:0}.top_line_social ul li a{color:#191919;font-size:1.4375rem}.main_header_baner{background-repeat:no-repeat;-webkit-background-size:cover;background-size:cover;background-position:center center;min-height:640px}.main_header_content{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:start;-webkit-justify-content:flex-start;-ms-flex-pack:start;justify-content:flex-start;min-height:640px}.main_header{width:61%;text-align:center}.main_header h1{font-size:2.9375rem;line-height:1.12766;font-family:"Montserrat-Medium",sans-serif;color:#474747;margin-bottom:35px}.main_header h2{font-size:1.0625rem;line-height:1.35294;color:#3f3f3f;margin-bottom:40px}.header_button{font-size:1.125rem;display:inline-block;font-family:"OpenSansBold",sans-serif;padding:18px 25px;background-color:#1a9bdc;color:#fff;text-transform:uppercase;-webkit-border-radius:10rem;border-radius:10rem}.block_best{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.block_best_items{width:25%;padding:75px 0 55px 0;text-align:center;color:#fff}.block_best_one{background-color:#43b1d2}.block_best_two{background-color:#3fb6c6}.block_best_three{background-color:#3cbbbb}.block_best_foure{background-color:#37c3a8}.button_over{position:relative;width:60px;height:50px;display:none}.button_container{position:absolute;top:0;left:2px;bottom:0;right:0;width:50px;height:50px;z-index:100}.button_container span{background:#2c2c2c;border:none;height:3px;width:80%;position:absolute;top:10px;left:5%}.button_container span:nth-of-type(2){top:19px}.button_container span:nth-of-type(3){top:28px}.overlay{position:fixed;z-index:1000;background:#474747;top:0;left:0;width:100%;height:0%;opacity:0;visibility:hidden;overflow:hidden}.overlay nav{position:relative;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%);font-weight:400;text-align:center}.overlay ul{list-style:none;padding:0;margin:0 auto;display:inline-block;position:relative;height:100%}.overlay ul li{display:block;position:relative;opacity:0}.overlay ul li a{display:block;position:relative;color:#fff;text-transform:uppercase;font-size:1.625rem;padding:20px 0;text-decoration:none;overflow:hidden}.overlay ul li a:after{content:'';position:absolute;bottom:0;left:50%;width:0%;-webkit-transform:translateX(-50%);-ms-transform:translateX(-50%);transform:translateX(-50%);height:3px;background:#1a9bdc}.accordion-item .content{display:none;padding:1.2rem}.accordion-item .content p{margin-top:0;margin-bottom:5px}.forms-call{width:100%;margin:0 auto;padding:0;border:0;overflow:hidden}.forms-call label{margin:10px 0;display:block}.input_form{display:block;width:100%;margin:0 auto 15px;height:40px;font-size:1.25rem;border:0;outline:0;line-height:40px;color:#a9a9a9;border-bottom:1px solid #a9a9a9;text-indent:10px;background-color:#171717}.form-callback{max-width:750px;overflow:hidden;padding:20px;position:relative;margin:auto}.forms-calldecor{position:relative}.forms-calldecor .success{color:#fff;background-color:#fff;position:absolute;z-index:1;left:0;z-index:1100;top:-100%;width:100%;height:100%;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-orient:vertical;-webkit-box-direction:normal;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;opacity:0;padding-right:20px;padding-left:20px}.forms-calldecor .success p{text-transform:uppercase;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-self:center;-ms-flex-item-align:center;align-self:center;color:#fff;font-size:20px;margin:auto;text-align:center}:-webkit-input-placeholder{text-indent:0px;opacity:1}:-moz-placeholder{text-indent:0px;opacity:1}:-moz-placeholder{text-indent:0px;opacity:1}:-ms-input-placeholder{text-indent:0px;opacity:1}:focus::-webkit-input-placeholder{text-indent:110%;opacity:0}:focus::-moz-placeholder{text-indent:110%;opacity:0}:focus:-moz-placeholder{text-indent:110%;opacity:0}:focus:-ms-input-placeholder{text-indent:110%;opacity:0}@media (min-width:737px){.container{width:100%;margin:0 auto}}@media (min-width:768px){.container{width:750px;margin:0 auto}}@media (min-width:800px){.container{width:780px;margin:0 auto}}@media (min-width:992px){.container{width:970px;margin:0 auto}}@media (min-width:1024px){.container{width:1004px;margin:0 auto}}@media screen and (min-width:1080px){.container{width:1060px;margin:0 auto}}@media only screen and (min-width:1190px){.container{width:1170px;margin:0 auto}}@media only screen and (min-width:1200px){.container{width:1170px;margin:0 auto}}@media only screen and (min-width:1201px){.container{width:1250px;margin:0 auto}}@media only screen and (max-width:768px){.top_line_menu{display:none}.top_line_box,.top_line{height:80px}}
        </style>

	<?php wp_head(); ?>
      </head>

     <body <?php body_class(); ?>>

         <header class="header_box">
          <div class="top_logo_box">
            <div class="container">
              <div class="row">
                <div class="top_logo_con">
                  <div class="top_logo">

                <?php if(ot_get_option('logo_upload')){?>
                    <img src="<?php echo ot_get_option('logo_upload'); ?>" alt="логотип">
					<?php } ?>
                  </div>
                  <div class="top_info">
                    <div class="top_info_items">
                      <div class="tii_icon"><i class="far fa-clock"></i></div>
                      <div class="tii_text">
             <?php if(ot_get_option('header_timework')){?>
                       Время работы: <?php echo ot_get_option('header_timework'); ?>
               	<?php } ?>
    <?php if(ot_get_option('header_timerest')){?>
                       <span class="tii_days"><?php echo ot_get_option('header_timerest'); ?> - <span>закрыто</span></span>
        	<?php } ?>
                     </div>
                   </div>
                   <div class="top_info_items">
                    <div class="tii_icon"><i class="far fa-envelope"></i></div>
                    <div class="tii_text">
                     Напишите нам
 <?php if(ot_get_option('header_email')){?>
                  <span class="tii_days"> <a href="mailto:<?php echo ot_get_option('header_email'); ?>"><?php echo ot_get_option('header_email'); ?></a></span>
        	<?php } ?>
                   </div>
                 </div>
                 <div class="top_info_items">
                  <div class="tii_icon"><i class="fas fa-mobile-alt"></i></div>
                  <div class="tii_text">
                   Позвоните нам
 <?php if(ot_get_option('header_phone')){?>
                   <span class="tii_days">
<a href="tel:<?php echo str_replace(array( " ", "(", ")", "-"), "", ot_get_option('header_phone'));  ?>">
              <?php echo ot_get_option('header_phone'); ?></a>
</span>
      	<?php } ?>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="top_line">
      <div class="container">
        <div class="row">
          <div class="top_line_box">
           <div class="top_line_menu">
<?php wp_nav_menu( array(
'theme_location' => 'primary', // вывести меню по индефикатору
'container' => null,        // удалить обвертку меню
'menu_class' => 'menu_styles',        // класс привязанный к nav ul
'menu_id' => '',        // id привязанный к nav ul
)); ?>
<!--
            <ul>
              <li><a href="#mainblock">Главная</a></li>
              <li><a href="#about">О нас</a></li>
              <li><a href="#services">Услуги</a></li>
              <li><a href="#portfolioadwiceme">Галерея</a></li>
              <li><a href="#contacts">Блог</a></li>
              <li><a href="#contacts">Врачи</a></li>
              <li><a href="#contacts">Контакты</a></li>
            </ul> -->
          </div>

          <div class="top_line_social">
            <ul>
      	<?php
      	$dellfacebook = 'none';
     	if(ot_get_option('dell_facebook_on_off') != 'on') {
    		$dellfacebook = 'none';
    	} else {$dellfacebook = 'inline-block';
    } ?>

<?php if(ot_get_option('header_facebook')){?>
<li style="display:<?php echo $dellfacebook; ?>"><a href="<?php echo ot_get_option('header_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
<?php } ?>

<?php
$dellgoogle = 'none';
if(ot_get_option('dell_google_on_off') != 'on') {
$dellgoogle = 'none';
} else {$dellgoogle = 'inline-block';
} ?>

 <?php if(ot_get_option('header_google')){?>
 <li style="display:<?php echo $dellgoogle; ?>"><a href="<?php echo ot_get_option('header_google'); ?>" target="_blank"><i class="fab fa-google-plus-g" ></i></a></li>
 <?php } ?>

 <?php
 	$dellvk = 'none';
 if(ot_get_option('dell_vk_on_off') != 'on') {
 $dellvk = 'none';
 } else {$dellvk = 'inline-block';
  } ?>

<?php if(ot_get_option('header_vk')){?>
<li style="display:<?php echo $dellvk; ?>"><a href="<?php echo ot_get_option('header_vk'); ?>" target="_blank"><i class="fab fa-vk"></i></a></li>
<?php } ?>

	<?php
$dellyoutube = 'none';
	if(ot_get_option('dell_youtube_on_off') != 'on') {
	$dellyoutube = 'none';
	} else {$dellyoutube = 'inline-block';
 } ?>

<?php if(ot_get_option('header_youtube')){?>
  <li style="display:<?php echo $dellyoutube; ?>"><a href="<?php echo ot_get_option('header_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
<?php } ?>

<?php
	$delllinkedin = 'none';
	if(ot_get_option('dell_linkedin_on_off') != 'on') {
	$delllinkedin = 'none';
} else {$delllinkedin = 'inline-block';
} ?>

<?php if(ot_get_option('header_linkedin')){?>
<li style="display:<?php echo $delllinkedin; ?>"><a href="<?php echo ot_get_option('header_linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<?php } ?>
</ul>
</div>

          <div class="button_over">
            <div class="button_container" id="toggle">
              <span class="top"></span>
              <span class="middle"></span>
              <span class="bottom"></span>
            </div>
          </div>
          <div class="overlay" id="overlay">
            <nav class="overlay-menu">
<?php wp_nav_menu( array(
'theme_location' => 'primary', // вывести меню по индефикатору
'container' => null,        // удалить обвертку меню
'menu_class' => '',        // класс привязанный к nav ul
'menu_id' => '',        // id привязанный к nav ul
)); ?>

  <!--             <ul>
               <li><a href="#mainblock">Главная</a></li>
               <li><a href="#about">О нас</a></li>
               <li><a href="#services">Услуги</a></li>
               <li><a href="#portfolioadwiceme">Галерея</a></li>
               <li><a href="#contacts">Блог</a></li>
                     <li><a href="#contacts">Врачи</a></li>
               <li><a href="#contacts">Контакты</a></li>
             </ul> -->
           </nav>
         </div>
       </div>
     </div>
   </div>
 </div>
</header>
