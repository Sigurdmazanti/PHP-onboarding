<?php
    require_once 'nav.php';
    $input_age = $_POST["age"];
    $_SESSION['userage'] = $input_age;
?>
<section class="content">
    <!-- Displaying age + name value -->
    <h1><?php echo $_SESSION['userage'];?>? You're lucky, <?php echo ucfirst ($_SESSION['username']); ?>!<br> Prime age!</h1>
    <h2>Let's say you could add or subtract a couple years to or from your current age. How many years would you go forward/back?</h2>
    <!-- Gets the desired age change value -->
    <form action="agedivide.php" method="post" autocomplete="off">
        <select name="oper">
            <option value="add">+ Add</option>
            <option value="sub">- Subtract</option>
        </select>
        <input type="text" name="num02" required>
        <br>
        <button type="submit">Proceed</button>
    </form>
</section>
</body>
</html>