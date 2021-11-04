<?php
    require_once 'nav.php';
    $input_name = $_POST["name"];
    $_SESSION['username'] = $input_name;
?>
<section class="content">
    <!-- Displaying name value -->
    <h1>Hey, <?php echo ucfirst ($_SESSION['username']); ?>. Nice to meet you!</h1>
    <h2>How old are you, if you don't mind me asking?</h2>
    <!-- Gets the age from input field -->
    <form action="age.php" method="post" autocomplete="off">
        <input type="number" name="age" required><br>
        <button type="submit">Proceed</button>
    </form>
</section>
</body>
</html>