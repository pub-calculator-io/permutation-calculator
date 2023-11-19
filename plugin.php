<?php
/*
Plugin Name: CI Permutation calculator
Plugin URI: https://www.calculator.io/permutation-calculator/
Description: Permutations calculator will help determine the number of ways to obtain an ordered subset of r elements from a set of n elements.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_permutation_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Permutation Calculator by Calculator.iO";

function display_ci_permutation_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Permutation Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_permutation_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_permutation_calculator', 'display_ci_permutation_calculator' );