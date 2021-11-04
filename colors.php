<?php
    require_once 'nav.php';
    $input_color1 = $_POST["color1"];
    $input_color2 = $_POST["color2"];
    $_SESSION['usercolor1'] = $input_color1;
    $_SESSION['usercolor2'] = $input_color2;
?>
<section class="content">
    <h1>Some beautiful colors!</h1>
        <div class="input_colors">
            <div class="individual_color">
                <!-- Displays the value from input color field in city.php -->
                <span><?php echo $_SESSION['usercolor1'];?></span>
                <!-- Inline CSS styling to make use of our input value to color the circle -->
                <div style="background-color:<?php echo $_SESSION['usercolor1'];?>" class="divcolor"></div>
            </div>

            <div class="individual_color">
                <!-- Displays the value from input color field in city.php -->
                <span><?php echo $_SESSION['usercolor2'];?></span>
                <!-- Inline CSS styling to make use of our input value to color the circle -->
                <div style="background-color:<?php echo $_SESSION['usercolor2'];?>" class="divcolor"></div>
            </div>
        </div>
    <h2>How about mixing them together?</h2>
        <!-- Inline CSS styling to make use of our input values to create gradient -->
        <div style="background: <?php echo $_SESSION['usercolor1'];?>; background: linear-gradient(90deg, <?php echo $_SESSION['usercolor1'];?> 0%, <?php echo $_SESSION['usercolor2'];?> 100%);" class="divcolor"></div>
        <aside>Best of both worlds!</aside>
        <form action="profile.php" method="post">
            <button type="submit">My user profile ↗</button>
        </form>
</section>
</body>
</html>