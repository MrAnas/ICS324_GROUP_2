<?php
include('DBO.php');

$sql = "SELECT * FROM EXAM;";

$result = execute($sql);

SendJSON($result);
?>
