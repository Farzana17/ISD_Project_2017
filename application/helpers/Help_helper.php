<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	$myhlobalvar;
	if( !function_exists('Userid') ) {
		
		function Userid( $name  ) {
			$GLOBALS['myglobalvar']=$name;
			
		}
		
	}
	if( !function_exists('getid') ) {
		
		function getid() {
			
			echo $myglobalvar;
		}
		
	}




?> 