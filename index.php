<?php
    require_once 'nav.php';
?>
<section class="content">
    <h1>Hi there! What's your name?</h1>

    <!-- Gets the name from input field -->
    <form action="name.php" method="post" autocomplete="off">
        <input type="text" name="name" required><br>
        <button type="submit">Proceed</button>
    </form>
</section>
</body>
</html>
