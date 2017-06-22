<?php
/*!
Plugin Name: NΞXT
Plugin URI: https://github.com/engag3/wc-wholesale-products
Description: Products in the "Wholesale" category will only be visible to users with the "Wholesale" user role.
Version: 1.0.1
Author: Ξ Π G A G Ξ _ M Ξ D I A™
Author URI: https://www.engag3.media
Tags:
GitHub Plugin URI: https://github.com/engag3/wc-wholesale-products
GitHub Branch: master


  Copyright 2016  ENGAG3 (email : media@engag3.us)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//Add files to admin.

function load_admin_styles() {
  wp_enqueue_style( 'next_theme_css', plugins_url( '', __FILE__ ) . '/assets/style.css', false, '1.0.0' );
  // wp_enqueue_style( 'admin_css_bar', get_template_directory_uri() . '/admin-style-bar.css', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );
