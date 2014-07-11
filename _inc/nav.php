<nav class="nav">

    <div class="row">
        <a href="index.php" class="logo">PPL Staffing</a>

        <ul class="menu">
            <li><a href="index.php" <?php if ($page == 'index.php') { ?>class="active"<?php } ?>>Employee Services</a></li>
            <li><a href="employer.php" <?php if ($page == 'employer.php') { ?>class="active"<?php } ?>>Employer Services</a></li>
            <li><a href="locations.php" <?php if ($page == 'locations.php') { ?>class="active"<?php } ?>>Locations</a></li>
            <li><a href="about.php" <?php if ($page == 'about.php') { ?>class="active"<?php } ?>>About Us</a></li>
        </ul>
        
		<a class="menu-trigger ss-icon" href="#menu">Click Here</a>
		<nav id="mobile_menu">
	        <ul>
	            <li><a href="index.php">Employee Services</a></li>
	            <li><a href="employer.php">Employer Services</a></li>
	            <li><a href="locations.php">Locations</a></li>
	            <li><a href="about.php">About Us</a></li>
	        </ul>
        </nav>
					
    </div>

</nav>