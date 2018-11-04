<?php
// Breadcrumb
function wmk_breadcrumb() {
    if (!is_front_page()) {
    	echo '<li>вы находжитесь здесь:</li>';
        echo '<li><a href="';
        echo get_option('home');
        echo '">Главная';
        echo '</a></li>';
        if (is_category() || is_single())  {
        	  echo '<li>';
            the_category(' ');
            echo '</li>';
            if (is_single()) {
                echo '<li>';
                the_title();
                echo '</li>';
            }
        }
        if (is_page()) {
             echo '<li>';
            the_title();
            echo '</li>';
        }
        if (is_tag()) {
             echo '<li>';
             the_tags('');
            echo '</li>';
        }
  if (is_author()) {
             echo '<li>';
             the_author();
            echo '</li>';
        }
          if (is_date()) {
             echo '<li>';
            $text = get_the_date('j M. Y'); $url  = get_the_date('/Y/m/');  echo get_archives_link( $url, $text, '' );
            echo '</li>';
        }
    }
}

// end Breadcrumb
?>