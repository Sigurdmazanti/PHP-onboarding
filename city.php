<?php
    require_once 'nav.php';
    // Taking the value from input in country.php
    $input_city = $_POST["city"];
    $_SESSION['usercity'] = ucfirst($input_city);

    // Accessing the API
    $access_token = 'cd076a7d3f9bf9018d8a8140bd697b11';
    // Using the input in our URL to find corresponding city
    $weather_url = 'https://api.openweathermap.org/data/2.5/weather?q='.$input_city.'&units=metric&appid='.$access_token;
    $weather_data = json_decode (file_get_contents($weather_url), true);

    // The data we want to display
    $icon = $weather_data['weather'][0]['icon'];
    $temperature = $weather_data['main']['temp'];
    $humidity = $weather_data['main']['humidity'];
    $status = $weather_data['weather'][0]['main'];
    $status_description = $weather_data['weather'][0]['description'];

    // Displays different texts according to $temperature value
    function temperatureComment ($temperature) {
        if ($temperature > 20 && $temperature < 40) {
            echo 'Incredible weather you\'re having in ' . $_SESSION['usercity'] . ' today!';
        }

        if ($temperature > 39) {
            echo 'Wow, it\'s burning hot in ' . $_SESSION['usercity'] . ' today!';
        }

        if ($temperature > 10 && $temperature < 21) {
            echo 'A little cold in ' . $_SESSION['usercity'] . ' today, but it could be worse!';
        }

        if ($temperature > -1 && $temperature < 10) {
            echo 'It\'s cold today in ' . $_SESSION['usercity'] . '. Remember to bring proper outerwear!';
        }

        elseif ($temperature < -1) {
            echo 'Brrr... So cold in ' . $_SESSION['usercity'] . ' today!';
        }
    }
?>

<section class="content">
    <!-- Displays input city from country.php and input country from agedivide.php -->
    <h1 class="city_h1"><?php echo $_SESSION['usercity'] .  ', ' . $_SESSION['usercountry'];?></h1>
    <!-- Finds the API data value and finds its corresponding name in img files to display -->
    <img class="weather_img" src="img/weather/<?php echo $icon;?>.png">
    <!-- The generated text from the function -->
    <p class="temperature_comment"><?php echo temperatureComment($temperature);?></p>
    <!-- Values from API -->
    <article class="weather_p">
        <p class="temp_p">Temperature:<br> <span><?php echo $temperature; ?>°C</span></p>
        <p class="temp_p">Humidity:<br> <span><?php echo $humidity; ?>%</span></p>
        <p class="temp_p">Status:<br> <span><?php echo $status . ' (' . $status_description . ')' ?></span></p>
        <p class="temp_p">Local time:<br> <span id="timeP"></span></p>
    </article>

    <h2>What's your favorite colors?</h2>
    <!-- Gets the value from color input field -->
    <form method="post" class="color_input" action="colors.php" required>
        <!-- div doesnt need styling, its container alone splits button from the input fields as its a block element -->
        <div>
        <input type="color" name="color1" value="#ffffff">
        <input type="color" name="color2" value="#000000">
        </div>
        <button type="submit">Proceed</button>
    </form>
</section>
<script>
            "use strict";

            // Months array - convert number to month name
            const months = [
                "January", "February", 
                "March", "April", "May", 
                "June", "July", "August",
                "September", "October", 
                "November", "December"
            ];

            // Current date
            const today = new Date();

            // padStart to include 0 when numbers/hours/date is a single digit value
            const hours = `${today.getHours()}`.padStart(2, "0")
            const minutes = `${today.getMinutes()}`.padStart(2, "0")
            const day = `${today.getDate()}`.padStart(2, "0")

            // The value number from getMonth is used to target that specific month in the months array
            const currentTime = hours + ':' + minutes + ', ' + months[today.getMonth()] + ' ' + day;
            document.getElementById("timeP").innerHTML = currentTime;
</script>
</body>
</html>