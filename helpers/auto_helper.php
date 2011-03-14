<?php


function __autoload( $class ){

	$helper_name = strtolower( $class );

	if( 
		file_exists( 'system/helpers/'.$helper_name.'_helper.php' ) or
		file_exists( APPPATH.'helpers/'.$helper_name.'_helper.php' )
	){
		Auto::load_helper( $helper_name );
		class_alias('Auto', $class );
	}
}