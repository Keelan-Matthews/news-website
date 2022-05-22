<?php
   require_once 'backend/config.php';
?> 

<header class="d-flex list-style-none justify-content-between align-items-center">
    <p class="fw-bold"><a href="../../index.html" class="text-white">Daybreak News</a></p>
    <nav class="nav-style">
        <ul class="d-flex list-style-none justify-content-between">
            <li><a href="today.php" class=<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == "today.php") ? "'text-white active-nav'" : "'text-white'" ?>>Today</a></li>
            <li><a href="south-africa.php" class=<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == "south-africa.php") ? "'text-white active-nav'" : "'text-white'" ?>>South Africa</a></li>
            <li><a href="world.php" class=<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == "world.php") ? "'text-white active-nav'" : "'text-white'" ?>>World</a></li>
            <li><a href="covid.php" class=<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == "covid.php") ? "'text-white active-nav'" : "'text-white'" ?>>COVID-19</a></li>
            <li><a href="calendar.php" class=<?php echo (basename($_SERVER['SCRIPT_FILENAME']) == "calendar.php") ? "'text-white active-nav'" : "'text-white'" ?>>Calendar</a></li>
        </ul>
        <?php if(isset($_SESSION['name']))
        {
        ?>
            <div class="profile">
                <?php 
                    $profileName = $_SESSION['name'] . ' ' . $_SESSION['surname'];
                    echo "<p>$profileName</p>";
                ?>
                <a href="backend/logout.php" style="color: white" onclick="clearStorage()"><i class="fa fa-sign-out"></i></a>
            </div>
        <?php }else{ ?>
            <div class="sign-up">
                <div id="login-button"><a href="login.php">Login</a></div>
                <div id="signup-button"><a href="signup.php">Sign up</a></div>
            </div>
        <?php } ?>        
    </nav>
    <script src="js/logout.js"></script>
</header>