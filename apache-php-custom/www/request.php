<html>

<body>

<p>
    <strong> Request Headers </strong>
    <?php

    foreach (getallheaders() as $name => $value) {
        echo "<p>$name: $value</p>";
    }

    ?>

</p>

</body>


</html>