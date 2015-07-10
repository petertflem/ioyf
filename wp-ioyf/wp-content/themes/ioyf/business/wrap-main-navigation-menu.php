<?php

function main_navigation_wrap() {
  // default value of 'items_wrap' is <ul id="%1$s" class="%2$s">%3$s</ul>'

  // open the <ul>, set 'menu_class' and 'menu_id' values
  $wrap  = '<ul id="%1$s" class="%2$s">';

  // get nav items as configured in /wp-admin/
  $wrap .= '%3$s';

  // the static link
  $wrap .= '<li><img src="' . ROOT . '/assets/images/facebook-icon.png" alt="facebook-ikon" class="icon" /></li>';
  $wrap .= '<li><img src="' . ROOT . '/assets/images/instagram-icon.png" alt="instagram-ikon" class="icon" /></li>';
  $wrap .= '<li><img src="' . ROOT . '/assets/images/oks-logo.png" alt="oks-logo" /></li>';

  // close the <ul>
  $wrap .= '</ul>';

  // return the result
  return $wrap;
}
