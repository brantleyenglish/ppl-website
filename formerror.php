

<?php $title ="Form Error"; ?>

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
            <div id="something">
            <a href="#" class="button">Post Job</a>
            <a href="#"class="button">Apply for a Job</a>

            </div>
        </div>
    </header>


<section class="content set data-sticky_parent">
	<div class="row">
		

		<article class="small-11 medium-8 columns data-sticky_column medium-offset-2">
			<div class="row">
				<div class="column medium-6">
					<h2 >Opps! There was an error. </h2>

				
					<p>
						<?php 
						error_reporting(-1);


						echo $_GET["e"];
						?>
					</p>
					<a href="#" class="button lt-button" onclick="toggle_visibility('openModal');">Try Again</a>
				</div>		
				
			</div>
		</article>
	</div>
	

</section>






<?php include ('_inc/footer.php'); ?>

<?php include ('_inc/scripts.php'); ?>


</body>
</html>