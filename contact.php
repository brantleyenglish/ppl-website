<!doctype html>
<html dir="ltr" lang="en" class="no-js">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width" />

<title>Contact | Sodium Halogen Framework</title>

<link rel="stylesheet" href="_styles/reset.css" media="screen" />
<link rel="stylesheet" href="_styles/style.css" media="screen" />
<link rel="stylesheet" href="_styles/mobile_nav.css" media="screen" />

<!-- give life to HTML5 objects in IE -->
<!--[if lte IE 8]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- js HTML class -->
<script>(function(H){H.className=H.className.replace(/\bno-js\b/,"js")})(document.documentElement)</script>

<script type="text/javascript" src="//use.typekit.net/qqc1ozm.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php include ('_inc/google-analytics.php'); ?>

</head>
<body class="sub about">
<!-- begin markup -->

    <?php include ('_inc/nav.php'); ?>

    <header class="header standard">
        <div class="row">
            <h1>Contact</h1>
        </div>
    </header>


<section class="content set">
	<div class="row">

		<aside class="three-col gutter-margin">
			<nav>
				<h3>Side Nav</h3>
				<ul>
					<li><a href="#">Side Nav Link 1</a></li>
					<li><a href="#">Side Nav Link 2</a></li>
					<li><a href="#">Side Nav Link 3</a></li>
				</ul>
			</nav>

			<div class="contact-us">
				<p>Contact us today.</p>
				<a href="contact.php" class="button">Contact Us</a>
			</div>
		</aside>
		

		<article class="entry eight-col">
			<div id="contact-form" class="group">
				<h2>Send us an email:</h2> 
				<form id="contact" class="horizontal-form" action=" " method="post"><br />
					<div id="result"></div>
					<label for="name" id="name">Your Name:</label>
					<input class="text required" name="name" size="25" maxlength="35" type="text" required />
					
					<label for="email" id="email">Your Email:</label>
					<input class="text required" name="email" size="25" maxlength="40" type="text" required />
					
					<label for="message" id="message">Message:</label>
					<textarea class="required" name="message" required ></textarea>
					
					<div class="clear"></div>
					<input class="button" type="submit" value="Contact Us" id="submitbutton" />
				</form>	
				<div class="clear"> </div>
			</div>	
		</article>

	</div>

</section>


<section class="sell set">
    <div class="row">
        <strong>Lorem ipsum dolor sit amet</strong>
        <a href="#" class="button">Call to Action</a>
    </div>
</section>


<?php include ('_inc/footer.php'); ?>

<?php include ('_inc/scripts.php'); ?>


</body>
</html>