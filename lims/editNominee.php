<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 13px;
    margin: 3px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.btn{
	background-color: #4CAF50;
	float: right;
	color:white;
	text-decoration:none;	
}


table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Nominee</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
	   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<?php include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Nominee Information  
						<button class="btn" align="center"> 
						<a href="addNominee.php" class="btn">Add Nominee</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
				
<?php 

   include'connection.php';
	
	
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$nominee_id = $_GET["nominee_id"];	
	}
	
	$sql = "SELECT * from nominee where nominee_id='$nominee_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateNominee.php" method="post">';
	   
	while($row = $result->fetch_assoc()) {
		
		echo "<label for=\"fname\">NOMINEE ID</label>";
	    echo "<input type=\"text\" nominee_id=\"fname\" name=\"nominee_id\" placeholder=\"nominee id..\" value=\"$row[nominee_id]\">";
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input type=\"text\" nominee_id=\"fname\" name=\"client_id\" placeholder=\"client id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" nominee_id=\"fname\" name=\"name\" placeholder=\"nominees Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"sex\" placeholder=\"nominees gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"birth_date\" placeholder=\"nominees Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"nid\" placeholder=\"nominees NID..\" value=\"$row[nid]\">";
		echo "<label for=\"fname\">RELATIONSHIP</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"relationship\" placeholder=\"Relationship With Client..\" value=\"$row[relationship]\">";
		echo "<label for=\"fname\">PRIORITY</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"priority\" placeholder=\"Priority..\" value=\"$row[priority]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" nominee_id=\"fname\" name=\"phone\" placeholder=\"nominees Phone..\" value=\"$row[phone]\">";
		
    }
	
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deleteNominee.php?nominee_id=".$nominee_id."'>Delete Nominee</a>";
	
	
	
echo "</div>\n";
echo "\n";

	
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
   
	
</body>
</html>
