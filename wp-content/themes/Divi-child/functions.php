<?php 

function fontawesome() {
	echo '<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>';
}

add_action('wp_head', 'fontawesome');

function my_custom_login_logo() {

    echo '<style type="text/css">

        h1 a { 
        	background-image:url("https://isistechnologyny.com/wp-content/uploads/2018/07/favicon.png") !important; 
			background-size: 200px !important;
			height: 200px !important;
			width: 200px !important;

        }

    </style>';

}

add_action('login_head','my_custom_login_logo');