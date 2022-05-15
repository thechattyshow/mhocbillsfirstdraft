<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">	
	<style>
	#textboxid {
		height: 200px;
		width: 800px; 
		font-size: 14px; 
	}

	* {
  box-sizing: border-box;
}

a {
  text-decoration: none;
  color: #379937;
}

body {
  margin: 40px;
}

.dropdown {
  position: relative;
  font-size: 14px;
  color: #333;

  .dropdown-list {
    padding: 12px;
    background: #fff;
    position: absolute;
    top: 30px;
    left: 2px;
    right: 2px;
    box-shadow: 0 1px 2px 1px rgba(0, 0, 0, .15);
    transform-origin: 50% 0;
    transform: scale(1, 0);
    transition: transform .15s ease-in-out .15s;
    max-height: 66vh;
    overflow-y: scroll;
  }
  
  .dropdown-option {
    display: block;
    padding: 8px 12px;
    opacity: 0;
    transition: opacity .15s ease-in-out;
  }
  
  .dropdown-label {
    display: block;
    height: 30px;
    background: #fff;
    border: 1px solid #ccc;
    padding: 6px 12px;
    line-height: 1;
    cursor: pointer;
    
    &:before {
      content: '▼';
      float: right;
    }
  }
  
  &.on {
   .dropdown-list {
      transform: scale(1, 1);
      transition-delay: 0s;
      
      .dropdown-option {
        opacity: 1;
        transition-delay: .2s;
      }
    }
    
    .dropdown-label:before {
      content: '▲';
    }
  }
  
  [type="checkbox"] {
    position: relative;
    top: -1px;
    margin-right: 4px;
  }
}

	</style>
</head>
<h1>MHOC Bill Searchup</h1>

<?php

include "database-connect.php";
?>
<br>
<form action="/search-keyword.php">
  <label for="fname">Bill Text:</label><br>
  <input type="text" name="billtext"><br>
  <div class="dropdown" data-control="checkbox-dropdown">
  <label class="dropdown-label">Select</label>
    <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 1" />
      Finance
    </label>
    
    <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 2" />
      Home
    </label>
    
    <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 3" />
      Foreign
    </label>
    
    <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 4" />
      Defence
    </label>
    
    <label class="dropdown-option">
      <input type="checkbox" name="dropdown-group" value="Selection 5" />
      Trade
    </label>      
  </div>
</div>
  <input type="submit" value="Submit">
</form>
<br> <hr> <br> 

<form action="addbill.php">
Bill Number (Just numbers):<br>
<input type="number" name="numberInput"><br>
Bill Title:<br>
<input type="text" name="titleInput"><br>
 Bill Text:<br>
<input type="text" name="textInput" id="textboxid"><br>
<input type="submit" value="Submit">
</form>

<?php
$conn->close();
?>

</body>
</html>
		