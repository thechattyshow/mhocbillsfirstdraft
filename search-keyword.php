<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://unpkg.com/petite-vue" defer init></script>
	<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}

</style>
</head>
<body>
<?php

include "database-connect.php";
$billTextSearch = $_GET["billtext"];
 // Search database for text railways
	echo "<h2> Results for $billTextSearch </h2>";
	$sql = "SELECT billID, billTitle, billText FROM bills_table WHERE billText LIKE '%". $billTextSearch."%'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	?>


	<?php 
	// output data of each row
	while($row = $result->fetch_assoc()) {
		// echo $row["billID"]." ". $row["billTitle"].": ". $row["billText"]. "<br>";
		echo "<button class=\"accordion\"> {$row["billTitle"]} </button>";
		echo "<div class= \"panel\"> <p> {$row["billText"]} </p> </div>";
	}
	} else {
	echo "0 results";
	}
$conn->close();

?> 

</div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>