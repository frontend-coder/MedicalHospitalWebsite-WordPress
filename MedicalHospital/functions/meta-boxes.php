<?php
/**
 * Initialize the custom Meta Boxes.
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {

  /**
   * Create a custom meta boxes array that we pass to
   * the OptionTree Meta Box API Class.
   */
  $main_page = array(
    'id'          => 'main_page_box',
    'title'       => __( 'Настройка главной страницы', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
        'fields'      => array(
      array(
        'label'       => __( 'Банер на главной', 'theme-text-domain' ),
        'id'          => 'baner_on_mainpage',
        'type'        => 'tab',
         'desc'        => 'Эти настройки относятся только к произвольному заполнению контентом главной страницы сайта.',
      ),
      array(
         'id'          => 'banerfon_upload',
        'label'        => 'Загрузить изображения для фона',
        'desc'        => 'Загрузить картинку размером 1920px x 640px',
        'type'        => 'upload',
      ),
      array(
        'label'       => 'УТП на первом экране сайта',
        'id'          => 'title_baner',
        'type'        => 'text',
        'desc'        => '',
         'desc'        => 'Введите текст уникального торгового предложения, который будет размещаться на фонере банера (большого изображения) и оформлено тегом h1 ',
        ),
      array(
        'label'       => 'Описание под УТП',
        'id'          => 'desct_baner',
        'type'        => 'text',
        'desc'        => 'Введите текст описания, которое будет размещаться на фонере банера (большого изображения) под УТП',
        ),
array(
        'label'       => 'Ссылка на страницу',
        'id'          => 'link',
        'type'        => 'text',
        'desc'        => '',
        ),

     array(
        'id'          => 'link_pageselect',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
      ),

      array(
        'label'       => __( '4 довода', 'theme-text-domain' ),
        'id'          => 'foure_dovods',
        'type'        => 'tab'
      ),

/*первый блок */
        array(
        'id'          => 'first_dovod_icon_on_off',
        'label'       => 'Настроить первый блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для первого блока Доводы обратиться к нам',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'first_dovod_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для первого блока Доводы обратиться к нам, размером  51px x 54px.',
      'type'        => 'upload',
       'condition'   => 'first_dovod_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'first_dovod_title',
        'type'        => 'text',
        'desc'        => 'Введите название первого блока Доводы обратиться к нам',
            'condition'   => 'first_dovod_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'краткое описание причины',
        'id'          => 'first_dovod_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для первого блока Доводы обратиться к нам',
            'condition'   => 'first_dovod_icon_on_off:is(on)'
      ),

/* второй блок */
  array(
        'id'          => 'second_dovod_icon_on_off',
        'label'       => 'Настроить второй блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для второго блока Доводы обратиться к нам',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'second_dovod_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для второго блока Доводы обратиться к нам, размером 51px x 54px.',
       'type'        => 'upload',
       'condition'   => 'second_dovod_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'second_dovod_title',
        'type'        => 'text',
        'desc'        => 'Введите название второго блока Доводы обратиться к нам',
        'condition'   => 'second_dovod_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'краткое описание причины',
        'id'          => 'second_dovod_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для второго блока причин обратиться к нам',
         'condition'   => 'second_dovod_icon_on_off:is(on)'
      ),

/* третий блок */
  array(
        'id'          => 'therd_dovod_icon_on_off',
        'label'       => 'Настроить третий блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для третьего блока Доводы обратиться к нам',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'therd_dovod_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для третьего блока Доводы обратиться к нам, размером 51px x 54px.',
       'type'        => 'upload',
       'condition'   => 'therd_dovod_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'therd_dovod_title',
        'type'        => 'text',
        'desc'        => 'Введите название третьего блока Доводы обратиться к нам',
        'condition'   => 'therd_dovod_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'краткое описание причины',
        'id'          => 'therd_dovod_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для третьего блока причин обратиться к нам',
         'condition'   => 'therd_dovod_icon_on_off:is(on)'
      ),

/* четвертый блок */
  array(
        'id'          => 'foure_dovod_icon_on_off',
        'label'       => 'Настроить четвертый блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для четвертого блока Доводы обратиться к нам',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'foure_dovod_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для четвертого блока Доводы обратиться к нам, размером 51px x 54px.',
       'type'        => 'upload',
       'condition'   => 'foure_dovod_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'foure_dovod_title',
        'type'        => 'text',
        'desc'        => 'Введите название четвертого блока Доводы обратиться к нам',
        'condition'   => 'foure_dovod_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'краткое описание причины',
        'id'          => 'foure_dovod_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для четвертого блока причин обратиться к нам',
         'condition'   => 'foure_dovod_icon_on_off:is(on)'
      ),
   array(
        'label'       => 'Почему мы', 'theme-text-domain',
        'id'          => 'why_we_tab',
        'type'        => 'tab'
      ),
  array(
        'label'       => 'Заголовок блока', 'theme-text-domain',
        'id'          => 'why_me_title',
        'type'        => 'text',
        'desc'        => 'Введите название(Title) блока почему мы'
      ),
 array(
        'label'       => 'Описание блока', 'theme-text-domain',
        'id'          => 'why_me_descrip',
        'type'        => 'text',
        'desc'        => 'Введите описание(Description) блока почему мы'
      ),
   array(
       'id'          => 'center_whyme_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку, которое будет отображаться по центру в блоке Почему мы, размером 337px x 598px.',
       'type'        => 'upload',
      ),

/* первый блок почему мы */
  array(
        'id'          => 'one_whyme_icon_on_off',
        'label'       => 'Настроить первый блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для первого блока Почему мы',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'one_whyme_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для первого блока Почему мы, размером 47px x 53px.',
       'type'        => 'upload',
       'condition'   => 'one_whyme_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'one_whyme_title',
        'type'        => 'text',
        'desc'        => 'Введите название первого блока Почему мы',
        'condition'   => 'one_whyme_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание причины',
        'id'          => 'one_whyme_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для первого блока Почему мы',
         'condition'   => 'one_whyme_icon_on_off:is(on)'
      ),


/* второй блок блок почему мы */
  array(
        'id'          => 'two_whyme_icon_on_off',
        'label'       => 'Настроить второй блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для второго блока Почему мы',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'two_whyme_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для второго блока Почему мы, размером 47px x 53px.',
       'type'        => 'upload',
       'condition'   => 'two_whyme_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'two_whyme_title',
        'type'        => 'text',
        'desc'        => 'Введите название второго блока Почему мы',
        'condition'   => 'two_whyme_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание причины Почему мы',
        'id'          => 'two_whyme_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для второго блока причины Почему мы',
         'condition'   => 'two_whyme_icon_on_off:is(on)'
      ),

/* третий блок блок почему мы */
  array(
        'id'          => 'tree_whyme_icon_on_off',
        'label'       => 'Настроить третий блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для третьего блока Почему мы',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'tree_whyme_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для третьего блока Почему мы, размером 47px x 53px.',
       'type'        => 'upload',
       'condition'   => 'tree_whyme_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'tree_whyme_title',
        'type'        => 'text',
        'desc'        => 'Введите название третьего блока Почему мы',
        'condition'   => 'tree_whyme_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание причины Почему мы',
        'id'          => 'tree_whyme_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для третьего блока причины Почему мы',
        'condition'   => 'tree_whyme_icon_on_off:is(on)'
      ),

/* четвертый блок блок почему мы */
  array(
        'id'          => 'foure_whyme_icon_on_off',
        'label'       => 'Настроить четвертый блок',
        'desc'        => 'Изменить название, описание, загрузить иконки для четвертого блока Почему мы',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'foure_whyme_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для четвертого блока Почему мы, размером 47px x 53px.',
       'type'        => 'upload',
       'condition'   => 'foure_whyme_icon_on_off:is(on)'
     ),
      array(
        'label'       => 'Название блока',
        'id'          => 'foure_whyme_title',
        'type'        => 'text',
        'desc'        => 'Введите название четвертого блока Почему мы',
        'condition'   => 'foure_whyme_icon_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание причины Почему мы',
        'id'          => 'foure_whyme_textarea',
        'type'        => 'textarea',
        'rows'        => '3',
        'desc'        => 'Введите текст для четвертого блока причины Почему мы',
        'condition'   => 'foure_whyme_icon_on_off:is(on)'
      ),


  array(
        'label'       => 'Анимационные цифры',
        'id'          => 'anim_numder_tab',
        'type'        => 'tab'
      ),

/* первый блок внимированный блок почему мы */
  array(
        'id'          => 'one_animationblock_on_off',
        'label'       => 'Настроить первый блок c аним.числом ',
        'desc'        => 'Изменить название, описание, загрузить иконки для первого блока Анимационного блока',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'one_animationblock_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для первого блока с анимиционной цифрой, размером 91px x 80px.',
       'type'        => 'upload',
       'condition'   => 'one_animationblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Число',
        'id'          => 'one_animationblock_number',
        'type'        => 'text',
        'desc'        => 'Введите целое число, которое будет выводится в первом блоке, которое указывает число счастливых покупателей',
        'condition'   => 'one_animationblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'one_animationblock_textarea',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание анимационного числа, которое будет размещено в первой слева колонке',
        'condition'   => 'one_animationblock_on_off:is(on)'
      ),

/* второй блок внимированный блок почему мы */
  array(
        'id'          => 'two_animationblock_on_off',
        'label'       => 'Настроить второй блок c аним.числом ',
        'desc'        => 'Изменить название, описание, загрузить иконки для второго блока Анимационного блока',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'two_animationblock_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для второго блока с анимиционной цифрой, размером 91px x 80px.',
       'type'        => 'upload',
       'condition'   => 'two_animationblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Число',
        'id'          => 'two_animationblock_number',
        'type'        => 'text',
        'desc'        => 'Введите целое число, которое будет выводится во втором блоке, которое указывает число госпитализаций и обследований',
        'condition'   => 'two_animationblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'two_animationblock_textarea',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание анимационного числа, которое будет размещено во второй слева колонке',
        'condition'   => 'two_animationblock_on_off:is(on)'
      ),
/* третий блок внимированный блок почему мы */
  array(
        'id'          => 'three_animationblock_on_off',
        'label'       => 'Настроить третий блок c аним.числом ',
        'desc'        => 'Изменить название, описание, загрузить иконки для третьего блока Анимационного блока',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'three_animationblock_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для третьего блока с анимиционной цифрой, размером 91px x 80px.',
       'type'        => 'upload',
       'condition'   => 'three_animationblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Число',
        'id'          => 'three_animationblock_number',
        'type'        => 'text',
        'desc'        => 'Введите целое число, которое будет выводится во третьем блоке, которое указывает число иновационных технологий',
        'condition'   => 'three_animationblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'three_animationblock_textarea',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание анимационного числа, которое будет размещено в трерьей слева колонке',
        'condition'   => 'three_animationblock_on_off:is(on)'
      ),
/* Четвертый блок внимированный блок почему мы */
  array(
        'id'          => 'foure_animationblock_on_off',
        'label'       => 'Настроить четвертый блок c аним.числом ',
        'desc'        => 'Изменить название, описание, загрузить иконки для четвертого блока Анимационного блока',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'foure_animationblock_icon',
       'label'        => 'Загрузить изображение',
       'desc'        => 'Загрузить картинку для четвертого блока с анимиционной цифрой, размером 91px x 80px.',
       'type'        => 'upload',
       'condition'   => 'foure_animationblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Число',
        'id'          => 'foure_animationblock_number',
        'type'        => 'text',
        'desc'        => 'Введите целое число, которое будет выводится в четвертом блоке, которое указывает число иновационных технологий',
        'condition'   => 'foure_animationblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'foure_animationblock_textarea',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание анимационного числа, которое будет размещено в четвертой слева колонке',
        'condition'   => 'foure_animationblock_on_off:is(on)'
      ),










// стартую здесь

array(
        'label'       => 'Как мы работаем',
        'id'          => 'whow_work_tab',
        'type'        => 'tab'
      ),
  array(
        'label'       => 'Text', 'theme-text-domain',
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => 'This is a demo Text field.'
      ),










array(
        'label'       => 'Креативность',
        'id'          => 'creativ_block',
        'type'        => 'tab'
      ),
  array(
        'label'       => 'Text', 'theme-text-domain',
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => 'This is a demo Text field.'
      ),



array(
        'label'       => 'Портфолио',
        'id'          => 'portfolio_block',
        'type'        => 'tab'
      ),
  array(
        'label'       => 'Text', 'theme-text-domain',
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => 'This is a demo Text field.'
      ),



array(
        'label'       => 'Наша команда',
        'id'          => 'portfolio_block',
        'type'        => 'tab'
      ),
  array(
        'label'       => 'Text', 'theme-text-domain',
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => 'This is a demo Text field.'
      ),









     /* end fields array(  */
    )
  );











// внизу только то что для резерва

  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'theme-text-domain' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'theme-text-domain' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'theme-text-domain' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Text', 'theme-text-domain' ),
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
      )
    )
  );

  /**
   * Register our meta boxes using the
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );
  $post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  if ( $template_file == 'index.php' ){
    ot_register_meta_box( $main_page );
  }

}