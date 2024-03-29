<?php $title ="Get In Contact"; ?>
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
            <h1><?php echo "Contact Us"; ?></h1>
            <div id="cta">
                <a href="post-job.php" class="button">Post Job</a>
                <a href="http://pce.avionte.com/talent/apply/standard" class="button">Apply for a Job</a>
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
                    <h2>Looking for a summer job or full-time employment?</h2>
                    <form action="./process-forms/graduates-form.php" method="post" class="inline-form">
                        <!-- <div class="row">
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
                        </div> -->
                        <div class="row">
                            <div class="medium-4 columns">
                                <h3>Name *</h3><input type="text" name="name" placeholder="First &amp; Last" tabindex="1" required>
                                <h3>Phone *</h3><input type="text" name="phone" placeholder="(###)###-####" tabindex="3" required>
                                <h3>Email *</h3><input type="email" name="email" placeholder="Email" tabindex="6" required>
                                <h3>Location of interest</h3><select name="location" id="location" tabindex="5" cols="30">
                                    <option>Pick a city</option>
                                    <option value="Blytheville">Blytheville, AR</option>
                                    <option value="Marion">Marion, AR</option>
                                    <option value="Osceola">Osceola, AR</option>
                                    <option value="Bowling Green">Bowling Green, KY</option>
                                    <option value="Covington">Covington, TN</option>
                                    <option value="Dyersburg">Dyersburg, TN</option>
                                    <option value="Jackson">Jackson, TN</option>
                                    <option value="Lexington">Lexington, TN</option>
                                    <option value="Memphis">Memphis, TN</option>
                                    <option value="Milan">Milan, TN</option>
                                    <option value="Trenton">Trenton, TN</option>
                                </select></br>
                            </div>
                            <div class="medium-8 columns">
                                <h3>Position Type *</h3><select name="position-type" id="position-type" tabindex="3" cols="30">
                                    <option>Pick Type</option>
                                    <option value="Summer Job">Summer Job</option>
                                    <option value="Full Time">Full Time</option>
                                </select>
                                <h3> Anything else? </h3><textarea name="message" cols="47" rows="4" placeholder="Message here" tabindex="4" ></textarea>
                                <div class="g-recaptcha" style="padding: 48px 0 15px 0;" data-sitekey="6LfabR0TAAAAALq55DmK9DEa7hz5RI0TbVKFECWB"></div></br>
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