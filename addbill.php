<?php

include "database-connect.php";

$newBillNumber = $_GET["numberInput"];
$newBillTitle = $_GET["titleInput"];
$newBillText = $_GET["textInput"];

$newBillNumber = addslashes($newBillNumber);
$newBillTitle = addslashes($newBillTitle);
$newBillText = addslashes($newBillText);

echo "<p> adding $newBillNumber , $newBillTitle and $newBillText </p>";

$sql = "INSERT INTO bills_table (billID, billTitle, billText)
VALUES ('$newBillNumber', '$newBillTitle', '$newBillText');";
	$result = $conn->query($sql);

include "search-all.php";

?>