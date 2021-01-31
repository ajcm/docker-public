<html>

<body>


<?php
echo "<h5>PHP</h5>";
echo 'Current PHP version: ' . phpversion();
?>


<p>
    <strong> Request </strong>
    <?php

    foreach (getallheaders() as $name => $value) {
        echo "<p>$name: $value</p>";
    }

    ?>

</p>

</body>


</html>