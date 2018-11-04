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
        'desc'        => 'Изменить текст надписи на кнопке, выбрав из выпадающего списка название нужной страницы',
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
      array(
       'id'          => 'animfon_upload',
       'label'        => 'Загрузить изображения для фона',
       'desc'        => 'Загрузить картинку размером 1920px x 521px',
       'type'        => 'upload',
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
      array(
        'label'       => 'Как мы работаем',
        'id'          => 'how_wework_tab',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'how_wework_title',
        'type'        => 'text',
        'desc'        => 'Введите название блока Как мы работаем'
      ),

      array(
        'label'       => 'Описание блока', 'theme-text-domain',
        'id'          => 'how_wework_descr',
        'type'        => 'text',
        'desc'        => 'Введите описание(Description) блока блока Как мы работаем'
      ),
        array(
        'id'          => 'how_workcategory_select',
        'label'       => 'выберите категорию для главной',
        'desc'        => __( 'The Category Select option type displays a list of category IDs. It allows the user to select only one category ID and will return that value for use in a custom function or loop.', 'theme-text-domain' ),
       'type'        => 'category-select',
      ),

      array(
        'id'          => 'how_workc_numeric_slider',
        'label'       =>'Настроить количество постов',
        'desc'        => 'Укажите количество выводимых статей на главноу страницу в разделе блог',
        'type'        => 'numeric-slider',
        'min_max_step' => '-1,8,1'
      ),





       array(
        'label'       => 'Креативность',
        'id'          => 'creativ_block',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'creativ_block_title',
        'type'        => 'text',
        'desc'        => 'Введите название блока Как мы работаем'
      ),

      array(
        'label'       => 'Описание блока', 'theme-text-domain',
        'id'          => 'creativ_block_descr',
        'type'        => 'text',
        'desc'        => 'Введите описание(Description) блока блока Как мы работаем'
      ),










      /* первый блок аккардиона креативность */
      array(
        'id'          => 'one_creativityblock_on_off',
        'label'       => 'Настроить первый блок аккардиона',
        'desc'        => 'Настроить название и наполнение первого блока аккардиона Креативность',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'one_creativityblock_title',
       'label'        => 'Название блока',
       'desc'        => 'Введите название первого блока аккардиона Креативность',
       'type'        => 'text',
       'condition'   => 'one_creativityblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'one_creativityblock_descr',
        'type'        => 'text',
        'desc'        => 'Введите текстовое наполнение первого блока аккардиона Креативность',
        'condition'   => 'one_creativityblock_on_off:is(on)'
      ),
 array(
        'id'          => 'one_creativityblock_link',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
          'condition'   => 'one_creativityblock_on_off:is(on)'
      ),

      /* второй блок аккардиона креативность */
      array(
        'id'          => 'two_creativityblock_on_off',
        'label'       => 'Настроить второго блок аккардиона',
        'desc'        => 'Настроить название и наполнение второго блока аккардиона Креативность',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'two_creativityblock_title',
       'label'        => 'Название блока',
       'desc'        => 'Введите название второго блока аккардиона Креативность',
       'type'        => 'text',
       'condition'   => 'two_creativityblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'two_creativityblock_descr',
        'type'        => 'text',
        'desc'        => 'Введите текстовое наполнение второго блока аккардиона Креативность',
        'condition'   => 'two_creativityblock_on_off:is(on)'
      ),
      array(
        'id'          => 'two_creativityblock_link',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
         'condition'   => 'two_creativityblock_on_off:is(on)'
      ),

      /* третий блок аккардиона креативность */
      array(
        'id'          => 'three_creativityblock_on_off',
        'label'       => 'Настроить третьего блока аккардиона',
        'desc'        => 'Настроить название и наполнение третьего блока аккардиона Креативность',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'three_creativityblock_title',
       'label'        => 'Название блока',
       'desc'        => 'Введите название третьего блока аккардиона Креативность',
       'type'        => 'text',
       'condition'   => 'three_creativityblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Краткое описание числа',
        'id'          => 'three_creativityblock_descr',
        'type'        => 'text',
        'desc'        => 'Введите текстовое наполнение третьего блока аккардиона Креативность',
        'condition'   => 'three_creativityblock_on_off:is(on)'
      ),
      array(
        'id'          => 'tree_creativityblock_link',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
         'condition'   => 'three_creativityblock_on_off:is(on)'
      ),

// блок портфолио
      array(
        'label'       => 'Портфолио',
        'id'          => 'portfolio_block',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'portfolio_block_title',
        'type'        => 'text',
        'desc'        => 'Введите название блока Портфолио'
      ),

      array(
        'label'       => 'Описание блока', 'theme-text-domain',
        'id'          => 'portfolio_blockdescr',
        'type'        => 'text',
        'desc'        => 'Введите описание(Description) блока блока Портфолио'
      ),

      array(
       'id'          => 'portfoliofon_upload',
       'label'        => 'Загрузить изображения для фона',
       'desc'        => 'Загрузить картинку размером 1920px x 640px',
       'type'        => 'upload',
     ),

// здесь делаю портфолио

 array(
        'label'       => 'Настройки портфолио',
        'id'          => 'main_slider_show',
        'type'        => 'on-off',
        'desc'        => 'Показать настройки портфолио',
        'std'         => 'on'
        ),
      array(
        'id'          => 'main_slider_list',
        'label'       => 'Слайдер',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => 'main_slider_show:is(on)',
        'settings'    => array(

          array(
            'id'          => 'main_slider_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'main_slider_list_upload',
            'label'       => 'Загрузите слайд',
            'desc'        => '',
            'type'        => 'upload',
            ),
          )
        ),

// здесь конец портфолио
// блок наша комманда
      array(
        'label'       => 'Наша команда',
        'id'          => 'ourcomand_block',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'ourcomand_title',
        'type'        => 'text',
        'desc'        => 'Введите название блока Наша команда'
      ),
      array(
        'label'       => 'Описание блока', 'theme-text-domain',
        'id'          => 'ourcomand_descr',
        'type'        => 'text',
        'desc'        => 'Введите описание(Description) блока Наша команда'
      ),
    array(
        'label'       => 'Ссылка на страницу',
        'id'          => 'ourcommands_link',
        'type'        => 'text',
        'desc'        => 'Изменить текст надписи на кнопке, выбрав из выпадающего списка название нужной страницы',
      ),
      array(
        'id'          => 'ourcomands_link_pageselect',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
      ),

// блок с первым учасником команды
      array(
        'id'          => 'one_commandblock_on_off',
        'label'       => 'Первый участник команды',
        'desc'        => 'Ввесли информацию по первому участнику Команды',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'one_commandblock_picture',
       'label'        => 'Фотография участника',
       'desc'        => 'Загрузите фотогрфию первого участника команды, размер 317px X 317px',
       'type'        => 'upload',
       'condition'   => 'one_commandblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Имя участника команды',
        'id'          => 'one_commandblock_name',
        'type'        => 'text',
        'desc'        => 'Введите Имя, Фамилию первого участника команды',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Должность участника команды',
        'id'          => 'one_commandblock_proff',
        'type'        => 'text',
        'desc'        => 'Введите занимающую должность, профессию первого участника команды',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_first_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'one_socialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br>fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер, <br>fab fa-google-plus-g - Google +<br>fab fa-google-plus-square - Google +<br>fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br>fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br> fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br>fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br>fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'one_socialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта сициальной сети',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_second_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'one_twosocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br>fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер, <br>fab fa-google-plus-g - Google +<br>fab fa-google-plus-square - Google +<br>fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br>fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br>fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br>fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br>fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br>',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'one_twosocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_third_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'one_threesocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br>fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер,<br>fab fa-google-plus-g - Google +<br>fab fa-google-plus-square - Google +<br>fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br>fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br> fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br>fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'one_threesocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'one_commandblock_on_off:is(on)'
      ),

// блок для второго учасником команды
      array(
        'id'          => 'two_commandblock_on_off',
        'label'       => 'Второй участник команды',
        'desc'        => 'Ввесли информацию по второму участнику Команды',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'two_commandblock_picture',
       'label'        => 'Фотография участника',
       'desc'        => 'Загрузите фотогрфию второго участника команды, размер 317px X 317px',
       'type'        => 'upload',
       'condition'   => 'two_commandblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Имя участника команды',
        'id'          => 'two_commandblock_name',
        'type'        => 'text',
        'desc'        => 'Введите Имя, Фамилию второго участника команды',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Должность участника команды',
        'id'          => 'two_commandblock_proff',
        'type'        => 'text',
        'desc'        => 'Введите занимающую должность, профессию второго участника команды',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_two_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'two_socialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br> fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br> fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br>fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br> fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br> fab fa-telegram-plane - Telegram<br> fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br>fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'two_socialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта сициальной сети',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_two00_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 2 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),

      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'two_twosocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер, <br>fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br> fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br> fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br> fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'two_twosocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_two02_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 3 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'two_threesocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'two_threesocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'two_commandblock_on_off:is(on)'
      ),

// блок для третьего учасником команды
      array(
        'id'          => 'tree_commandblock_on_off',
        'label'       => 'Третий участник команды',
        'desc'        => 'Ввесли информацию по третьему участнику Команды',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'tree_commandblock_picture',
       'label'        => 'Фотография участника',
       'desc'        => 'Загрузите фотогрфию третьего участника команды, размер 317px X 317px',
       'type'        => 'upload',
       'condition'   => 'tree_commandblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Имя участника команды',
        'id'          => 'tree_commandblock_name',
        'type'        => 'text',
        'desc'        => 'Введите Имя, Фамилию третьего участника команды',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Должность участника команды',
        'id'          => 'tree_commandblock_proff',
        'type'        => 'text',
        'desc'        => 'Введите занимающую должность, профессию третьего участника команды',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_treee_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'tree_socialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br> fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br> fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br>fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br> fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br> fab fa-telegram-plane - Telegram<br> fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br>fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'tree_socialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта сициальной сети',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_treee_twocommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 2 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'tree_twosocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер, <br>fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br> fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br> fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br> fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'tree_twosocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_treee_threecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 3 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),

      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'tree_threesocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'tree_threesocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'tree_commandblock_on_off:is(on)'
      ),

// блок для четвертоого учасником команды
      array(
        'id'          => 'four_commandblock_on_off',
        'label'       => 'Четвертый участник команды',
        'desc'        => 'Настроить блок с информацией о четвертом участнике команды',
        'std'         => 'off',
        'type'        => 'on-off',
      ),
      array(
       'id'          => 'four_commandblock_picture',
       'label'        => 'Фотография участника',
       'desc'        => 'Загрузите фотогрфию четвертого участника команды, размер 317px X 317px',
       'type'        => 'upload',
       'condition'   => 'four_commandblock_on_off:is(on)'
     ),
      array(
        'label'       => 'Имя участника команды',
        'id'          => 'four_commandblock_name',
        'type'        => 'text',
        'desc'        => 'Введите Имя, Фамилию четвертого участника команды',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Должность участника команды',
        'id'          => 'four_commandblock_proff',
        'type'        => 'text',
        'desc'        => 'Введите занимающую должность, профессию четвертого участника команды',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),

      array(
        'id'          => 'dell_four_onecommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'four_socialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br> fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br> fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br>fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br> fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br> fab fa-telegram-plane - Telegram<br> fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br>fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'four_socialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта сициальной сети',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_four_twocommandblock_on_off',
        'label'       => 'Включить/Отключить отображение 2 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'four_twosocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для второй ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br>fab fa-facebook-messenger - фейсбук-мессенджер, <br>fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br> fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br>fab fa-instagram - Инстаграм<br> fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br>fab fa-twitter - Твитер<br>fab fa-twitter-square - Твитер<br>fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br> fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br> fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br>fab fa-discord - Discord<br>fab fa-viber - Viber<br> fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br> fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br> fab fa-snapchat-ghost  - Snapchat<br>
        ',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'four_twosocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'id'          => 'dell_four_commandblock_on_off',
        'label'       => 'Включить/Отключить отображение 3 соц. аккаунта',
        'desc'        => 'Вы можете настроить отобрадение иконки и ссылки на любую социальную сеть или отключить отображение иконки',
        'std'         => 'off',
        'type'        => 'on-off',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите код иконки социальной сети',
        'id'          => 'four_threesocialblock_icon',
        'type'        => 'text',
        'desc'        => 'Вы можете определить иконку для третьей ссылки на социальную сеть:<br>
        fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),
      array(
        'label'       => 'Введите ссылку на социальную сеть',
        'id'          => 'four_threesocialblock_link',
        'type'        => 'text',
        'desc'        => 'Вы можете указать интернет-адрес вашего аккаунта социальной сети',
        'condition'   => 'four_commandblock_on_off:is(on)'
      ),

// блок с ссылкой на какую-то страницу
      array(
        'label'       => 'Спец. предложение',
        'id'          => 'spesial_propose',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'spesial_propose_title',
        'type'        => 'text',
        'desc'        => 'Введите текст призыва для блока специального предложения для нового клиента!!!'
      ),

      array(
        'label'       => 'Изменить надпись на кнопке',
        'id'          => 'spesial_propose_link',
        'type'        => 'text',
        'desc'        => 'Изменить текст надписи на кнопке, которая размещена в блоке специальное предложение для нового пациента',
      ),
      array(
        'id'          => 'spesial_propose_link_pageselect',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
      ),
      /* end fields array(  */
      )
);



  $o_nas_page = array(
    'id'          => 'onas_pagebox',
    'title'       => 'Настройки страницы О нас',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Блок с командой',
        'id'          => 'onus_spechlink',
        'type'        => 'tab'
        ),
     array(
        'label'       => 'Название страницы',
        'id'          => 'onus_name_title',
        'type'        => 'text',
        'desc'        => 'Введите название страницы о нас'
      ),
   array(
        'label'       => 'Описание стрaницы ',
        'id'          => 'onus_name_descrip',
        'type'        => 'text',
        'desc'        => 'Введите описание страницы о нас'
      ),

   array(
        'id'          => 'onus_slider_list',
        'label'       => 'Слайдер',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(

          array(
            'id'          => 'onus_slider_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'onus_slider_list_upload',
            'label'       => 'Загрузите слайд',
            'desc'        => '',
            'type'        => 'upload',
            ),

          array(
            'id'          => 'dell_one_social_block_icon_on_off',
            'label'       => 'Включить/Отключить отображение 1 соц. аккаунта',
            'desc'        => 'Вы можете включить/отключить отображение на странице сайте первой иконки и ссылки на первую социальнуб сеть',
            'std'         => 'off',
            'type'        => 'on-off',
          ),
          array(
            'id'          => 'onus_slider_list_text',
            'label'       => 'Вставьте код социальной сети',
            'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br> fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
            'type'        => 'text',
            'condition'   => 'dell_one_social_block_icon_on_off:is(on)'
          ),
          array(
            'id'          => 'onus_slider_list_link',
            'label'       => 'Вставьте ссылку на социальную сеть',
            'desc'        => 'Вы можете вставить ссылку/интернет-адрес социвльной сети ',
            'type'        => 'text',
            'condition'   => 'dell_one_social_block_icon_on_off:is(on)'
          ),

          array(
            'id'          => 'dell_two_social_block_icon_on_off',
            'label'       => 'Включить/Отключить отображение 2 соц. аккаунта',
            'desc'        => 'Вы можете включить/отключить отображение на странице сайте второй иконки и ссылки на первую социальнуб сеть',
            'std'         => 'off',
            'type'        => 'on-off',
          ),
          array(
            'id'          => 'onus_twoslider_list_text',
            'label'       => 'Вставьте код социальной сети',
            'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br> fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
            'type'        => 'text',
            'condition'   => 'dell_two_social_block_icon_on_off:is(on)'
          ),
          array(
            'id'          => 'onus_twoslider_list_link',
            'label'       => 'Вставьте ссылку на социальную сеть',
            'desc'        => 'Вы можете вставить ссылку/интернет-адрес социвльной сети ',
            'type'        => 'text',
            'condition'   => 'dell_two_social_block_icon_on_off:is(on)'
          ),

        array(
            'id'          => 'dell_three_social_block_icon_on_off',
            'label'       => 'Включить/Отключить отображение 3 соц. аккаунта',
            'desc'        => 'Вы можете включить/отключить отображение на странице сайте третьей иконки и ссылки на первую социальнуб сеть',
            'std'         => 'off',
            'type'        => 'on-off',
          ),
          array(
            'id'          => 'onus_threeslider_list_text',
            'label'       => 'Вставьте код социальной сети',
            'desc'        => 'Вы можете определить иконку для первой ссылки на социальную сеть:<br> fab fa-facebook - фейсбук,<br>fab fa-facebook-square - фейсбук, <br> fab fa-facebook-f - фейсбук, <br> fab fa-facebook-messenger - фейсбук-мессенджер, <br> fab fa-google-plus-g - Google +<br> fab fa-google-plus-square - Google +<br> fab fa-google-plus - Google +<br>fab fa-vk - вконтакте<br>fab fa-pinterest - Пинтерест<br>fab fa-pinterest-square - Пинтерест<br>fab fa-pinterest-p - Пинтерест<br> fab fa-instagram - Инстаграм<br>fab fa-youtube-square - YouTube<br> fab fa-youtube - YouTube<br> fab fa-twitter - Твитер<br> fab fa-twitter-square - Твитер<br> fab fa-odnoklassniki-square - одноклассники<br>fab fa-odnoklassniki - одноклассники<br>fab fa-whatsapp - WhatsApp<br> fab fa-whatsapp-square - WhatsApp<br>fab fa-tumblr - Тumblr<br>fab fa-tumblr-square - Тumblr<br>fab fa-skype - Skype<br> fab fa-discord - Discord<br> fab fa-viber - Viber<br>fab fa-linkedin-in - Linkedin<br>fab fa-linkedin  - Linkedin<br> fab fa-telegram - Telegram<br>fab fa-telegram-plane - Telegram<br>fab fa-weixin - WeChat<br>fab fa-snapchat - Snapchat<br> fab fa-snapchat-square  - Snapchat<br>fab fa-snapchat-ghost  - Snapchat<br> ',
            'type'        => 'text',
            'condition'   => 'dell_three_social_block_icon_on_off:is(on)'
          ),
          array(
            'id'          => 'onus_threeslider_list_link',
            'label'       => 'Вставьте ссылку на социальную сеть',
            'desc'        => 'Вы можете вставить ссылку/интернет-адрес социвльной сети ',
            'type'        => 'text',
            'condition'   => 'dell_three_social_block_icon_on_off:is(on)'
          ),


































          )
        ),





            // блок с ссылкой на какую-то страницу
      array(
        'label'       => 'Спец. предложение',
        'id'          => 'onus_spesial_propose',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока', 'theme-text-domain',
        'id'          => 'onus_spesial_propose_title',
        'type'        => 'text',
        'desc'        => 'Введите текст призыва для блока специального предложения для нового клиента!!!'
      ),

      array(
        'label'       => 'Изменить надпись на кнопке',
        'id'          => 'onus_spesial_propose_link',
        'type'        => 'text',
        'desc'        => 'Изменить текст надписи на кнопке, которая размещена в блоке специальное предложение для нового пациента',
      ),
      array(
        'id'          => 'onus_spesial_propose_link_pageselect',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
      ),


      )
    );



  $services_page = array(
    'id'          => 'services_pagebox',
    'title'       => 'Настройки страницы Услуги',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(

 array(
      'label'       => 'Главные настройки',
      'id'          => 'services_page_info',
      'type'        => 'tab'
    ),
    array(
        'label'       => 'Заголовок страницы',
        'id'          => 'services_page_title',
        'type'        => 'text',
        'desc'        => 'Введите название страницы Услуги',
        ),
 array(
        'label'       => 'Описание страницы',
        'id'          => 'services_page_descript',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание страницы Услуги',
        ),

array(
      'label'       => 'Перечень услуг',
      'id'          => 'services_perechen',
      'type'        => 'tab'
    ),


       array(
        'id'          => 'servicespage_slider_list',
        'label'       => 'Перечень услуг',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'settings'    => array(

          array(
            'id'          => 'servicespage_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => 'Разместите краткое название услуги',
            'type'        => 'text',
            ),
          array(
            'id'          => 'servicespage_list_upload',
            'label'       => 'Загрузите слайд',
            'desc'        => 'Разместите банер коробки предоставляемой услуги',
            'type'        => 'upload',
            ),
         array(
            'id'          => 'servicespage_list_descr',
            'label'       => 'Напишите описание услуги',
            'desc'        => 'Разместите подробное текстовое описание предоставляемой услуги',
            'type'        => 'textarea',
            ),

        array(
            'id'          => 'servicespage_list_link',
            'label'       => 'Разместите ссылку',
            'desc'        => 'Выберите название страницы из выпадающего списка, на которой будет размещена подробная информация об услуге',
            'type'        => 'page-select',
            ),
                array(
            'id'          => 'servicespage_list_linkankor',
            'label'       => 'Введите название ссылки',
            'desc'        => '',
            'type'        => 'text',
            ),

          )
        ),









// блок с ссылкой на какую-то страницу
      array(
        'label'       => 'Спец. предложение',
        'id'          => 'services_spesial_propose',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Название блока',
        'id'          => 'services_spesial_propose_title',
        'type'        => 'text',
        'desc'        => 'Введите текст призыва для блока специального предложения для нового клиента!!!'
      ),

      array(
        'label'       => 'Изменить надпись на кнопке',
        'id'          => 'services_spesial_propose_link',
        'type'        => 'text',
        'desc'        => 'Изменить текст надписи на кнопке, которая размещена в блоке специальное предложение для нового пациента',
      ),
      array(
        'id'          => 'services_spesial_propose_link_pageselect',
        'label'       => 'Выберите страницу',
        'desc'        => '',
        'type'        => 'page-select',
        'desc'        => 'Выберите название страницы, чтобы привязать кнопку к странице на сайте',
      ),



















      )
    );





  $contacts_page = array(
    'id'          => 'scontacts_pagebox',
    'title'       => 'Настройки страницы Контакты',
    'desc'        => '',
    'pages'       => array( 'page' ),
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



$portfolio_box = array(
  'id'          => 'portfolio_meta_box',
  'title'       => 'Настройки страницы портфолио',
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
  'fields'      => array(
    array(
      'label'       => 'Главные настройки',
      'id'          => 'portfolio_page_info',
      'type'        => 'tab'
    ),
    array(
        'label'       => 'Заголовок страницы',
        'id'          => 'portfolio_page_title',
        'type'        => 'text',
        'desc'        => 'Введите название страницы Портфоло',
        ),
 array(
        'label'       => 'Описание страницы',
        'id'          => 'portfolio_page_descript',
        'type'        => 'text',
        'desc'        => 'Введите краткое описание страницы Портфоло',
        ),

// настройка галереи на странице портфолио

 array(
        'label'       => 'Настройки галереи',
        'id'          => 'page_main_slider_show',
        'type'        => 'on-off',
        'desc'        => 'Показать настройки портфолио',
        'std'         => 'on'
        ),
      array(
        'id'          => 'page_main_slider_list',
        'label'       => 'Галерея',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => 'page_main_slider_show:is(on)',
        'settings'    => array(

          array(
            'id'          => 'page_main_slider_list_header',
            'label'       => 'Напишите заголовок',
            'desc'        => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'page_main_slider_list_upload',
            'label'       => 'Загрузите слайд',
            'desc'        => '',
            'type'        => 'upload',
            ),
          )
        )


   )
);

// внизу размещены настройки ко всем страницам page.php


$page_page = array(
  'id'          => 'page_page_box',
  'title'       => 'Настройки обычных страниц',
  'desc'        => '',
  'pages'       => array( 'page' ),
  'context'     => 'normal',
  'priority'    => 'high',
  'fields'      => array(
  array(
      'label'       => 'Предложение',
      'id'          => 'usualpage_predlogenie',
      'type'        => 'tab'
    ),
 array(
        'id'          => 'dell_usualpage',
        'label'       => 'Включить/Отключить блока спец предложения',
        'desc'        => 'По умолчанию отображение этого блока на странице отключено. Заполните все поля необходимыми данными и только после этого включите отображение этого блока на сайте',
        'std'         => 'off',
        'type'        => 'on-off',
      ),

      array(
       'id'          => 'baner_usualpage',
       'label'        => 'Загрузить банер предложения',
       'desc'        => 'Загрузить картинку размером 300px x 300px',
       'type'        => 'upload',
     ),
 array(
      'label'       => 'Текст предложения ',
      'id'          => 'usualpage_textarea',
      'type'        => 'textarea',
      'desc'        => 'Введите текст вашего предложения покупателю',
    ),
 array(
      'label'       => 'Введите анкор ссылки',
      'id'          => 'usualpage_ankor',
      'type'        => 'text',
      'desc'        => 'Вставьте в поле ввода текст, который будет выступать в роли анкора',
    ),
   array(
      'label'       => 'Введите сссылку на покупку курса',
      'id'          => 'usualpage_link',
      'type'        => 'text',
      'desc'        => 'Вставьте в поле ввода ссылку на страницу на которой покупатель сможет заказать и оплатить курс/товар',
    )

  )
);

// внизу размещены настройки ко всем страницам single.php

$single_posts = array(
  'id'          => 'single_meta_box',
  'title'       => 'Настройка записей на блоге',
  'desc'        => '',
  'pages'       => array( 'post' ),
  'context'     => 'normal',
  'priority'    => 'high',
  'fields'      => array(
    array(
      'label'       => 'Предложение',
      'id'          => 'single_predlogenie',
      'type'        => 'tab'
    ),

   array(
        'id'          => 'dell_singlepredlog',
        'label'       => 'Включить/Отключить блока спец предложения',
        'desc'        => 'По умолчанию отображение этого блока на странице отключено. Заполните все поля необходимыми данными и только после этого включите отображение этого блока на сайте',
        'std'         => 'off',
        'type'        => 'on-off',
      ),

      array(
       'id'          => 'baner_singlepredlog',
       'label'        => 'Загрузить банер предложения',
       'desc'        => 'Загрузить картинку размером 300px x 300px',
       'type'        => 'upload',
     ),
 array(
      'label'       => 'Текст предложения ',
      'id'          => 'single_predlogeniedemo_textarea',
      'type'        => 'textarea',
      'desc'        => 'Введите текст вашего предложения покупателю',
    ),
 array(
      'label'       => 'Введите анкор ссылки',
      'id'          => 'single_predlogeniedemo_ankor',
      'type'        => 'text',
      'desc'        => 'Вставьте в поле ввода текст, который будет выступать в роли анкора',
    ),
   array(
      'label'       => 'Введите сссылку на покупку курса',
      'id'          => 'single_predlogeniedemo_link',
      'type'        => 'text',
      'desc'        => 'Вставьте в поле ввода ссылку на страницу на которой покупатель сможет заказать и оплатить курс/товар',
    )
  )
);











  /**
   * Register our meta boxes using the
   * ot_register_meta_box() function.
   */
 if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $single_posts );
  $post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
  $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
  if ( $template_file == 'index.php' ){
    ot_register_meta_box( $main_page );
  }
if ( $template_file == 'o-nas.php' ){
    ot_register_meta_box( $o_nas_page );
  }
if ( $template_file == 'services.php' ){
    ot_register_meta_box( $services_page );
  }
if ( $template_file == 'contacts.php' ){
    ot_register_meta_box( $contacts_page );
  }
if ( $template_file == 'portfilio.php' ){
    ot_register_meta_box( $portfolio_box );
  }

if ( $template_file == 'page.php' ){
    ot_register_meta_box( $page_page );
  }

// if ( $template_file == 'single.php' ){
//     ot_register_meta_box( $single_posts );
//   }









}