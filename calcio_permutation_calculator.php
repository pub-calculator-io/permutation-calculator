<?php
/*
Plugin Name: Permutation Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/permutation-calculator/
Description: Quickly calculate permutations (nPr) with our free Permutation Calculator. Find the exact number of ways to arrange r items from a set of n elements.
Version: 1.0.0
Author: www.calculator.io / Permutation Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_permutation_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Permutation Calculator by www.calculator.io";

function calcio_permutation_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Permutation Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_permutation_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_permutation_calculator', 'calcio_permutation_calculator_shortcode' );