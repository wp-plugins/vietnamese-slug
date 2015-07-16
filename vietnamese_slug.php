<?php

/*
Plugin Name: Vietnamese slug
Plugin URI: http://www.jamviet.com/
Description: This plugin will help you have a nice permalink in Post, category or tag's slug if your blog in Vietnamese, This is the best version than ever !
Author: Jam Việt
Version: 1.0
Tags:	nice permalink, nice slug, permalink in vietnamese, vietnamese, vietnamese slug
Author URI: http://www.jamviet.com
Donate link: http://www.jamviet.com
*/


function jam_remove_vnm($string) {
  $trans = array(
	/*
		special char
	*/
	'ỡ' => 'o', 'õ'=> 'o', 'Ố'=> 'o', 'ấ'=> 'a', 'ị'=>'i', 'ầ'=> 'a', 'ả' => 'a', 'ỏ' => 'o', 'ọ' => 'o', 'ể' => 'e', 'ữ' => 'u', 'ạ'=> 'a',
	'ỹ' => 'y', 'ũ' => 'u', 'ủ' => 'u', 'α' => 'a','Ã' => 'a', 'ụ' => 'u', 'ẹ' => 'e'
	
    ,'à'=>'a','á'=>'a','ả'=>'a','ã'=>'a','ạ'=>'a',
    'ă'=>'a','ằ'=>'a','ắ'=>'a','ẳ'=>'a','ẵ'=>'a','ặ'=>'a',
    'â'=>'a','ầ'=>'a','ấ'=>'a','ẩ'=>'a','ẫ'=>'a','ậ'=>'a',
    'À'=>'a','Á'=>'a','Ả'=>'a','Ã'=>'a','Ạ'=>'a',
    'Ă'=>'a','Ằ'=>'a','Ắ'=>'a','Ẳ'=>'a','Ẵ'=>'a','Ặ'=>'a',
    'Â'=>'a','Ầ'=>'a','Ấ'=>'a','Ẩ'=>'a','Ẫ'=>'a','Ậ'=>'a',    
    'đ'=>'d','Đ'=>'d',
    'è'=>'e','é'=>'e','ẻ'=>'e','ẽ'=>'e','ẹ'=>'e',
    'ê'=>'e','ề'=>'e','ế'=>'e','ể'=>'e','ễ'=>'e','ệ'=>'e',
    'È'=>'e','É'=>'e','Ẻ'=>'e','Ẽ'=>'e','Ẹ'=>'e',
    'Ê'=>'e','Ề'=>'e','Ế'=>'e','Ể'=>'e','Ễ'=>'e','Ệ'=>'e',
    'ì'=>'i','í'=>'i','ỉ'=>'i','ĩ'=>'i','ị'=>'i',
    'Ì'=>'i','Í'=>'i','Ỉ'=>'i','Ĩ'=>'i','Ị'=>'i',
    'ò'=>'o','ó'=>'o','ỏ'=>'o','õ'=>'o','ọ'=>'o',
    'ô'=>'o','ồ'=>'o','ố'=>'o','ổ'=>'o','ỗ'=>'o','ộ'=>'o',
    'ơ'=>'o','ờ'=>'o','ớ'=>'o','ở'=>'o','ỡ'=>'o','ợ'=>'o',
    'Ò'=>'o','Ó'=>'o','Ỏ'=>'o','Õ'=>'o','Ọ'=>'o',
    'Ô'=>'o','Ồ'=>'o','Ố'=>'o','Ổ'=>'o','Ỗ'=>'o','Ộ'=>'o',
    'Ơ'=>'o','Ờ'=>'o','Ớ'=>'o','Ở'=>'o','Ỡ'=>'o','Ợ'=>'o',
    'ù'=>'u','ú'=>'u','ủ'=>'u','ũ'=>'u','ụ'=>'u',
    'ư'=>'u','ừ'=>'u','ứ'=>'u','ử'=>'u','ữ'=>'u','ự'=>'u',
    'Ù'=>'u','Ú'=>'u','Ủ'=>'u','Ũ'=>'u','Ụ'=>'u',
    'Ư'=>'u','Ừ'=>'u','Ứ'=>'u','Ử'=>'u','Ữ'=>'u','Ự'=>'u',
    'ỳ'=>'y','ý'=>'y','ỷ'=>'y','ỹ'=>'y','ỵ'=>'y',
    'Y'=>'y','Ỳ'=>'y','Ý'=>'y','Ỷ'=>'y','Ỹ'=>'y','Ỵ'=>'y',
	'`' => '', '“' => '-', '”'=>'-'
	
  );
  return strtr($string, $trans);
}
add_filter('sanitize_title', 'jam_remove_vnm', 1);

