<?php
include('DBO.php');

$sql = "SELECT ETITLE FROM EXAM;";

$result = execute($sql);

SendJSON($result);
?>
