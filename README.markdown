# Auto
Very simple library, but yet it alleviates the need to ever load a model, library, spark, or helper again.

## Features Overview

- can access your CI instances from anywhere in your app using the _Auto::inst()_ static method
- no need to use the loader class manually when this spark is installed
- will never load anything more than once. 
- if the instance exists, its returned, if not it's loaded, instantiated as a CI var and returned. 

## Example Usage: ( x.x indicates the version you have installed on your build )
    
    //// from some controller 
	
	function __construct(){
		$this->load->spark( 'auto/x.x' );
	}
	
	function get_users(){
		$this->auto->your_model->some_method();
		// notice that I never loaded "your_model"?
	}

## From a model, spark, library, helper or anywhere! 
	
	function some_method(){
		// you have reference to CI instances from anywhere, 
		// if it does not exist its created on the fly for you.
		$msg = Auto::inst()->lang->line( 'language_key' );
		// much less verbose to do something like using models within other models 
	}
	
## Loading Helpers on demand, example from a view, but could be anywhere

    // load helpers only when each method is used. 
	<?php 
	echo Url::anchor( 'http://www.google.com', 'Go to google' ); 
	echo '<hr/>';
	echo Text::character_limiter( 'Lorem ipsum dolor sit amet, consectetur adipisicing', 10 );
	echo '<hr/>';
	
	// can call libraries ( instantiated or not ) from views as well.
	$data = array( array('Name', 'Color', 'Size') );
	echo Auto::inst()->table->generate( $data );
	// or if in CI scope
	echo $this->auto->table->generate( $data );
	?>
	
- [Log Issues or Suggestions](https://github.com/dperrymorrow/auto/issues)
- [Follow me on Twitter](http://twitter.com/dperrymorrow)


	


