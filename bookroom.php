<?php

require_once "config.php";

$sql="SELECT * FROM room ORDER BY roomID";

$result = mysqli_query($link, $sql);

while ($row=mysqli_fetch_row($result)) {
        printf ("roomID: %s, university: %s<br>",$row[0],$row[1]);
		mysqli_free_result($result);
    }

?>