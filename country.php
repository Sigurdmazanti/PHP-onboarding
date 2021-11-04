<?php
    require_once 'nav.php';
    $input_country = $_POST["country"];
    $_SESSION['usercountry'] = $input_country;

    // if else boolean that checks if you're from denmark
    function foreignCountry($input_country) {
        if ($input_country == "Denmark") {
            echo "Of course!";
        }

        else {
            echo "A foreigner! Exciting!";
        }
    }
?>

<section class="content">
    <!-- Displaying user country from agedivide.php -->
    <h1><?php echo $_SESSION['usercountry'];?>?</h1>
    <!-- Displaying text from boolean function -->
    <h2><?php echo foreignCountry($input_country);?></h2>
    <!-- Finds the select value and finds the corresponding name in img files to display -->
    <img class="flag_img" src="img/flags/<?php echo $_SESSION['usercountry'];?>.svg">

    <h3>What city do you live in?</h3>
    <!-- Gets the city from input field (works in multiple languages, e.g. København & Copenhagen) -->
    <form method="post" action="city.php" required autocomplete="off">
        <input type="text" name="city">
        <aside>* Valid cities only, please. Not case sensitive.</aside>
        <br>
        <button type="submit">Proceed</button>
    </form>
</section>
</body>
</html>