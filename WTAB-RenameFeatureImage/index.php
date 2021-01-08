<?php
/**
 * @package WTAB-RenameFeatureImage
 */
/*
Plugin Name: Rename Feature Image
Plugin URI: https://github.com/webtechandbiz/WTAB-Wp-Pnl
Description: Plugin for a WordPress web site to automatically rename the feature image to the slug of the post
Version: 0.1
Author: https://github.com/webtechandbiz
Author URI: https://github.com/webtechandbiz
License: MIT - https://opensource.org/licenses/mit-license.php
*/

error_reporting(E_ALL);
ini_set('display_errors', 1);

//# Setup
$wtab_pnl_admin_folder_salt = 'kacrichane';
$wtab_pnl_admin_functions_folder_salt = 'wouukaswuc';

//# Paths
$admin__folder_path = plugin_dir_path( __FILE__ ).'admin-'.$wtab_pnl_admin_folder_salt.'/';
$admin_functions__folder_path = $admin__folder_path.'-functions-'.$wtab_pnl_admin_functions_folder_salt.'/';

// # URLs
$wtab_pnl__url = plugin_dir_url(__FILE__);
$wtab_pnl_admin__url = $wtab_pnl__url.'admin-'.$wtab_pnl_admin_folder_salt.'/';
$wtab_pnl_admin_public_html__url = $wtab_pnl_admin__url.'public_html/';

//#Includes
include($admin_functions__folder_path.'-functions.php');