
<footer>
  <div class="footer_black">
    <div class="container">
      <div class="row">
        <div class="footer_box">
          <div class="footer_box_items">
            <h2 class="footer_title">Наши контакты</h2>
            <div class="footer-cont">

              <div class="footer-cont_iyems">
                <ul>
 <?php if(ot_get_option('footer_email_one')){?>
                  <li><a href="mailto:<?php echo ot_get_option('footer_email_one'); ?>"><?php echo ot_get_option('footer_email_one'); ?></a></li>
  <?php } ?>
<?php if(ot_get_option('footer_email_two')){?>
                  <li><a href="mailto:<?php echo ot_get_option('footer_email_two'); ?>"><?php echo ot_get_option('footer_email_two'); ?></a></li>
       <?php } ?>
                </ul>
              </div>
              <div class="footer-cont_iyems footer-cont_tell">
                <ul>
 <?php if(ot_get_option('footer_phone_one')){?>
  <li><a href="tel:<?php echo str_replace(array( " ", "(", ")", "-"), "", ot_get_option('footer_phone_one')); ?>"><?php echo ot_get_option('footer_phone_one'); ?></a></li>
  <?php } ?>

<?php if(ot_get_option('footer_phone_two')){?>
 <li><a href="tel:<?php echo str_replace(array( " ", "(", ")", "-"), "", ot_get_option('footer_phone_two')); ?>"><?php echo ot_get_option('footer_phone_two'); ?></a></li>
 <?php } ?>
              </ul>
              </div>

              <div class="footer-cont_iyems footer-cont_locate">
<?php if(ot_get_option('footer_locate_text')){?>
<?php echo ot_get_option('footer_locate_text'); ?>
<?php } ?>
              </div>
            </div>
          </div>

          <div class="footer_box_items">
           <h2 class="footer_title">Быстрые ссылки</h2>
           <div class="footer_links">

              <?php wp_nav_menu( array(
'theme_location' => 'qwiklinks', // вывести меню по индефикатору
'container' => null,        // удалить обвертку меню
'menu_class' => 'menu_styles',        // класс привязанный к nav ul
'menu_id' => '',        // id привязанный к nav ul
)); ?>
</div>

</div>

        <div class="footer_box_items">
         <h2 class="footer_title">Наши услуги</h2>
         <div class="footer_links">
<?php wp_nav_menu( array(
'theme_location' => 'ourservices', // вывести меню по индефикатору
'container' => null,        // удалить обвертку меню
'menu_class' => 'menu_styles',        // класс привязанный к nav ul
'menu_id' => '',        // id привязанный к nav ul
)); ?>
</div>
</div>

      <div class="footer_box_items">
        <h2 class="footer_title">напишите нам</h2>
        <div class="forms-call" >
 <? echo do_shortcode( '[contact-form-7 id="45" title="контактная форма в футере"]');  ?>
        <!--   <input class="input_form" type="text" placeholder="Имя">
          <input class="input_form" type="text" placeholder="Телефон">
          <textarea class="input_form input_textarea" placeholder="Сообщение"></textarea>
          <button class="header_button">отправить</button> -->

        </div>
      </div>
    </div>
  </div>
  <div class="row">


   <div class="top_line_social">
    <ul>

 <?php
 $dellfacebook2 = 'none';
 if(ot_get_option('dell_facebook_on_off') != 'on') {
  $dellfacebook2 = 'none';
 } else {$dellfacebook2 = 'inline-block';
 } ?>

  <?php if(ot_get_option('header_facebook')){?>
      <li style="display:<?php echo $dellfacebook2; ?>"><a href="<?php echo ot_get_option('header_facebook'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
  <?php } ?>

 <?php
 $dellgoogle1 = 'none';
 if(ot_get_option('dell_google_on_off') != 'on') {
 $dellgoogle1 = 'none';
 } else {$dellgoogle1 = 'inline-block';
 } ?>

<?php if(ot_get_option('header_google')){?>
      <li style="display:<?php echo $dellgoogle1; ?>"><a href="<?php echo ot_get_option('header_google'); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
  <?php } ?>

 <?php
  $dellvk1 = 'none';
 if(ot_get_option('dell_vk_on_off') != 'on') {
 $dellvk1 = 'none';
 } else {$dellvk1 = 'inline-block';
 } ?>

<?php if(ot_get_option('header_vk')){?>
      <li style="display:<?php echo $dellvk1; ?>"><a href="<?php echo ot_get_option('header_vk'); ?>" target="_blank"><i class="fab fa-vk"></i></a></li>
  <?php } ?>

  <?php
   $dellyoutube1 = 'none';
   if(ot_get_option('dell_youtube_on_off') != 'on') {
   $dellyoutube1 = 'none';
  } else {$dellyoutube1 = 'inline-block';
  } ?>

<?php if(ot_get_option('header_youtube')){?>
  <li style="display:<?php echo $dellyoutube1; ?>"><a href="<?php echo ot_get_option('header_youtube'); ?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
<?php } ?>

<?php
 $delllinkedin1 = 'none';
 if(ot_get_option('dell_linkedin_on_off') != 'on') {
 $delllinkedin1 = 'none';
} else {$delllinkedin1 = 'inline-block';
} ?>
<?php if(ot_get_option('header_linkedin')){?>
      <li style="display:<?php echo $delllinkedin1; ?>"><a href="<?php echo ot_get_option('header_linkedin'); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
<?php } ?>

    </ul>
  </div>
</div>
</div>
</div>

<div class="footer_copy">

  <div class="container">
    <div class="row">
      <ul>
        <li>Copyright © 2018. <a href="https://www.facebook.com/frontendercode" target="_blank">Василенко О.</a> </li>
        <li> <a href="https://frontend-coder.github.io/" target="_blank">Официальное портфолио</a></li>
      </ul>
    </div>
  </div>
</div>
</footer>









<!--оформление скрытой всплывающей формы женщины с таймером -->
<div class="hidden">
  <form class="forms-call form-callback forms-calldecor" id="call-backtimer">
   <input type="hidden" name="admin-data">
   <input type="hidden" name="formaone" value="форма размещена во всплывающем окне">
   <div class="success">
    <p>Спасибо за заявку</p>
  </div>
  <div class="form-callback_iner">
    <h4>Заказать септик под ключ</h4>
    <h5>и мы бесплатно сделаем замеры, подберем септик и доставим его к вам!</h5>
    <div class="fcb clearfix">
      <div class=" b_item">
      </div>
      <div class="form-callback_item">
        <label> <span class="label_name">Ваше имя</span>
         <input id="author_two" class="input_form" type="text" name="author" value="" placeholder="Например, Олег Юрьевич" required="required">
       </label>
       <label><span class="label_name">Телефон</span>
         <input id="phone_key" class="input_form" type="tel" name="phone" value="" required="required">
       </label>
       <div class="button-call">
        <button class="submit_bb">Отправить</button>
      </div>
      <div class="checkbox_box clearfix">
       <input type="checkbox" name="option2" id="option_foure" class="radioterms" checked>
         <label for="option_foure" class="link_form"> <span><a href="#politics"> согласен c
     политикой конфиденциальности</a></span> </label>
     </div>
   </div>
 </div>
</div>
</form>
</div>





<!--[if lt IE 9]>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/es5-shim.min.js"></script>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv.min.js"></script>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/html5shiv-printshiv.min.js"></script>
				<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/html5shiv/respond.min.js"></script>
      <![endif]-->
                  <?php wp_footer(); ?>
      <!-- // начало анимационных чисел -->

   <!-- Yandex.Metrika counter -->
   <!-- /Yandex.Metrika counter -->
   <!-- Google Analytics counter -->
   <!-- /Google Analytics counter -->
 </body>
 </html>
