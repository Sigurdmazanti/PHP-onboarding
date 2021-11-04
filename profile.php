<?php
    require_once 'nav.php';
?>

<section class="content">
<h1>User profile</h1>
<article>
    <!-- All the data from input -->
    <ul>
        <li>Name: <span><?php echo ucfirst ($_SESSION['username']); ?></span></li>
        <li>Age: <span><?php echo $_SESSION['userage']; ?></span></li>
        <li>Country: <span><?php echo ucfirst ($_SESSION['usercountry']); ?></span></li>
        <li>City: <span><?php echo ucfirst ($_SESSION['usercity']); ?></span></li>
        <li>Favorite colors: <span><?php echo strtoupper ($_SESSION['usercolor1']) . ' and ' . strtoupper ($_SESSION['usercolor2']);  ?></span></li>
    </ul>
    <div class="input_colors_profile">
    <div style="background-color:<?php echo $_SESSION['usercolor2'];?>" class="divcolor"></div>
    <div style="background-color:<?php echo $_SESSION['usercolor1'];?>" class="divcolor"></div>
    </div>
</article>
<form action="index.php" method="post">
            <button type="submit">↖ Back to start</button>
        </form>
</section>
</body>
</html>