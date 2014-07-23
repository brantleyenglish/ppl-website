

<?php $title ="Email is Sent"; ?>

<!doctype html>
<html dir="ltr" lang="en" class="no-js">
<head>

<?php include ('_inc/header.php'); ?>

</head>
<body class="sub about">
<!-- begin markup -->

    <?php include ('_inc/nav.php'); ?>

    <header class="header standard">
        <div class="row">
            <h1><?php echo $title; ?></h1>
           <!--  <div id="something">
            <a href="#" class="button">Post Job</a>
            <a href="#"class="button">Apply for a Job</a>
            </div> -->
        </div>
    </header>


<section class="content set data-sticky_parent medium-offset-4">
	<div class="row">
		

		<article class="small-11 medium-8 columns data-sticky_column">
			<h2>Thank you!</h2>
			<p>Your email is sent! We'll be in contact shortly.</p>
			<a href="about.php" class="button lt-button">Learn About Us</a>
			<a href="loactions.php" class="button">See Locations</a>
		</article>
	

</section>




<?php include ('_inc/footer.php'); ?>

<?php include ('_inc/scripts.php'); ?>


</body>
</html>