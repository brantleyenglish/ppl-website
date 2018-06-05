<footer class="footer">
    <div class="row">
    	<div class="small-4 medium-2 large-2 columns">
    		<img src="_img/flogo.png" />
    	</div>
    	<div class="small-12 medium-4 large-4 columns">
    		<p><em>Personnel Placements, LLC</em><br />
				Corporate Office:<br />
				621 Old Hickory Blvd. Suite A-1<br />
				Jackson, TN 38305<br />
				Phone: 731.668.5056</p>
    	</div>
    	<div class="medium-2 large-2 columns fnav">
    		<p><em>Navigation</em></p>
    		<ul>
    			<li><a href="/">Employee Services</a></li>
    			<li><a href="employer.php">Employer Services</a></li>
    			<li><a href="locations.php">Locations</a></li>
    			<li><a href="about.php">About Us</a></li>
                <li><a href="privacy-policy.php">Privacy Policy</a></li>
    		</ul>
    	</div>
    	<div class="medium-2 large-2 columns fnav">
    		<p><em>Actions</em></p>
            <ul>
    			<li><a href="http://pce.avionte.com/talent/apply/standard">Apply For Jobs</a></li>
    			<li><a href="post-job.php">Post Your Jobs</a></li>
    		</ul>
    	</div>
    	<div class="medium-2 large-2 columns fnav">
    		<p><em>Connect With Us</em></p>
    		<ul>
    			<li><a href="http://www.facebook.com/pplstaffing">Facebook</a></li>
    			<li><a href="http://www.indeed.com/jobs?q=company%3A%28Personnel+Placements%29">Indeed</a></li>
    			<li><a href="https://www.linkedin.com/company/personnel-placements-llc?trk=top_nav_home">LinkedIn</a></li>
    			<li><a href="http://www.careerbuilder.com/jobs/company/chp2gx6rwmb0kj1k500/personnel-placements-llc?APath=2.21.0.0.0&sc_cmp1=js_jrp_companydet&IPath=QHKV">Career Builder</a></li>
    		</ul>
    	</div>
    </div>
    <div class="bottom-info">
    	<div class="row">
	    	<div class="medium-6 large-6 columns copyright">
	    		<p><?php echo date("Y"); ?> Personnel Placements, LLC. Site by <a href="http://sodiumhalogen.com">Sodium Halogen</a></p>
	    	</div>
	    	<div class="medium-6 large-6 columns">
	    		<form action="//pplstaffing.us8.list-manage.com/subscribe/post?u=e5bde3535a4e1be0ea4cf87f8&amp;id=a97cf849e5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	    			<label>Sign up for our free newsletter:</label>
	    			<!-- <input type="text" name="email" value="your-email@address.com" /> -->
                    <input placeholder="your-email@address.com" value="" type="text" name="EMAIL" class="required email" id="mce-EMAIL"/>
	    			<!-- <input type="submit" class="button" value="SIGN UP"/> -->
                    <input type="submit" class="button" name="submit" value="SIGN UP"/>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_e5bde3535a4e1be0ea4cf87f8_a97cf849e5" tabindex="-1" value=""></div>
	    		</form>
	    	</div>
	    </div>
    </div>
</footer>
<div id="openModal" class="modalDialog" >
    <div class="modal">
       <a href="#" title="Close" class="close" onclick="toggle_visibility('openModal');">X</a>

        <h2>Contact us</h2>
            <form  action="modal-form-processor.php" method="post" class="inline-form">
                <div class="row">
                    <input type="text" placeholder="First Name" class="small-6 columns" name="firstName" required="required">
                    <input type="text" placeholder="Last Name" class="small-6 columns" name="lastName" required="required">
                </div>
                <div class="row">
                    <input type="tel" placeholder="Phone" class="small-6 columns" name="phone" required="required">
                    <input type="email" placeholder="E-mail" class="small-6 columns" name="email" required="required">
                </div>
                <div class="row">
                    <input type="text" placeholder="Message" class="small-12 columns" name="message" required="required">
                </div>
                <div class="row">
                    <div class="g-recaptcha" style="padding: 5px 0 5px 0;" data-sitekey="6LfabR0TAAAAALq55DmK9DEa7hz5RI0TbVKFECWB"></div></br>
                </div>
                <div class="row">
                    <input type="submit" value="submit" class="button small-12 columns" name="submit" >
                </div>
            </form>

    </div>
</div>

<script>

        (function($) {

          var allPanels = $('.accordion > dd').hide();

          $('.accordion > dt > a').click(function() {
            allPanels.slideUp();
            $(this).parent().next().slideDown();
            // $(this).parent().style.backgroundImage="url('up-white.png')";
            return false;
          });

        })(jQuery);

</script>


