# PHP-onboarding
Simple data usage from user inputs stored as session variables in PHP. Its main purpose is to test how the input values from the user can be used in an interactive way to create a user profile.

This version on Github is **NOT** fully functional. As the file capacity on a Github repository is 100, there are a lot of flags from **img/flags** missing.
Full version can be found at www.sigurdmazanti.dk/php-onboarding.

## Technologies
HTML, CSS, PHP, OpenWeatherMap API and a bit of JS

## Content
* Simple CSS, HTML & JS, as the main focus of this concept was to work with PHP
* A lot of the page structure is set up in a single .php file, which is included in all of the .php files to avoid repeatable lines code
* Input field values are stored as session variables so they are usable within several files, POST method is used to transfer this data
* A calculator to subtract/add a value from/to the age session variable, created with a switch statement function
* if-ifelse & if-else functions to display different paragraph texts, corresponding to the user input value
* OpenWeatherMap API to display the current weather in the users input city with a corresponding image of the current weather, displayed with the user input value that finds the exact name in the **img/weather** folder
* A dropwdown menu containing all the countries in the world. The selected countrys flag is displayed with the user input value that finds the exact name in the **img/flags** folder
* 3 circles are displayed with the colors of the user input value to display their own respective color and a gradient containing both colors
* A summative user profile that displays all of the session variables values
