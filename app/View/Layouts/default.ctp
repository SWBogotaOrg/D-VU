<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />

	<title>Hivou - Home Page</title>

	<!-- Included CSS Files -->
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">

	<?php
		echo $scripts_for_layout;
	?>

	<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>


	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->


	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>
	<div id="main-wrapper">
		<!-- container -->
        <div class="container">
            <div id="header">
                <div class="row">
                    <div class="four columns">
                        <a href="index.html"><img src="img/logo_hivou.png" alt="Hivou.co"  title="Hivou.co" /></a>
                    </div>

                     <div class="four columns link-bar">
                        <a href=""><img src="img/ic-twitter.png" alt="Twitter" title="Twitter" /></a>
                    <a href=""><img src="img/ic-facebook.png" alt="Facebook" title="Facebook" /></a>
                    </div>

                    <div class="four columns link-bar al-right">
                        <a href="">Sign in</a>
                        <a href="">Contact us</a>
                    </div>
                </div>
            </div>

	    <?php echo $this->Session->flash(); ?>

	    <?php echo $content_for_layout; ?>
            
	</div>
		<!-- container -->

        <div id="footer">
            <div class="row">
                <div class="eight columns link-bar">
                    <p>&copy; 2012 hivou.co <a href="">ABOUT US</a> | <a href="">FAQ</a> | <a href="">TERMS</a> | <a href="">CONTACT US</a></p>
                </div>

                <div class="four columns al-right">
                    <a href=""><img src="img/ic-twitter.png" alt="Twitter" title="Twitter" /></a>
                    <a href=""><img src="img/ic-facebook.png" alt="Facebook" title="Facebook" /></a>
                </div>
            </div>
        </div>
	</div>



	<!-- Included JS Files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/modernizr.foundation.js"></script>
	<script src="js/foundation.js"></script>
	<script src="js/app.js"></script>

</body>
</html>