<?php $title ="Request a Quote"; ?>

<!doctype html>
<html dir="ltr" lang="en" class="no-js">
<head>


<?php include ('_inc/header.php'); ?>

</head>
<body class="sub about">
<!-- begin markup -->

    <?php include ('_inc/nav.php'); ?>

    <header class='header standard'>
        <div class='row'>
            <h1><?php echo "Our Locations"; ?></h1>
            <div id="cta">
                <a href="post-job.php" class="button">Post Job</a>
                <a href="http://worldlink.pplstaffing.com/WL52PROD/main.aspx?action=Get&view=Home" class="button">Apply for a Job</a>
            </div>
        </div>
    </header>


<section class="content set data-sticky_parent">
    <div class="row">

        <aside class="small-11 medium-3 columns data-sticky_column">
            

            <div class="contact-us">
                <p>Contact us today to schedule an appointment.</p>
                <a href="#" onclick="toggle_visibility('openModal');" class="button">Contact Us</a>
            </div>
        </aside>
        
        <article class="small-12 medium-9 columns">
            <div class="row loc postJob">
                <div class="small-11 medium-12 columns">
                    <h2>Request A Quote</h2>

                    <form action="quote-process.php" method="post" class="inline-form">
                        <div class="row">
                            <div class="medium-4 columns">
                                <h3>Company Name *</h3> <input type="text" name="CompanyName" placeholder="Company Name" tabindex="1" required>
                                <h3>Contact Person *</h3><input type="text" name="ContactPerson" placeholder="Contact Person" tabindex="4" required>
                            </div>
                            <div class="medium-4 columns">
                                <h3>Phone Number*</h3><input type="tel" name="PhoneNumber" placeholder="(###) ###-####" tabindex="2" required> 
                                <h3>E-mail *</h3><input type="text" name="email" placeholder="example@gmail.com" tabindex="5" required>
                            </div>
                            <div class="medium-4 columns">
                                <h3>Number of Positions *</h3><input type="text" name="NofPositions" placeholder="#" tabindex="3" required>
                                <h3>Job Title *</h3><input type="text" name="JobTitle" placeholder="JobTitle" tabindex="6" required>    
                            </div>
                        </div>
                        <div class="row">
                            <div class="medium-4 columns">
                                <h3>Desired Start Date *</h3><input type="date" name="StartingDate" value="mm/dd/yyyy" tabindex="7" required>
                                <h3>Estimated Duration of Assignment *</h3>
                                <input type="radio" value="One Month" name="duration" id="onemth" tabindex="9" required> <label for="onemth">One Month</label></br>
                                <input type="radio" value="One to Three Months" name="duration"id="twomth" tabindex="10" required> <label for="twomth">One to Three Months</label></br>
                                <input type="radio" value="Three or More Months" name="duration" id="threemth" tabindex="11" required> <label for="threemth">Three or More Months</label></br>
                            </div>
                            <div class="medium-8 columns">
                                <h3>Job Description *</h3><textarea name="JobDescription" placeholder="Job Desciption" cols="47" rows="5" tabindex="8" required> </textarea>
                                <h3> Skills Needed *</h3><textarea name="SkillsNeeded" cols="47" rows="5" placeholder="Skills Needed" tabindex="12" required></textarea>
                                <input type="Submit" value="Submit" class="button" id="quotebutton">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    
    </div>
        
    
</section>




<?php include ('_inc/footer.php'); ?>

<?php include ('_inc/scripts.php'); ?>


</body>
</html>