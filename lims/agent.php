<!DOCTYPE html>

<html>
<head>
<style>
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	margin-left:2%;
	display:block;
	float: center;
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
	margin-left:0%;
	font-size:110%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agents</title>

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
                        <h1 class="page-head-line">Agents Information  
			<?php    
			if ($_SESSION["username"]=="ahmed") {
			echo '<button class="btn" align="center">';
            echo '<a href="addAgent.php" class="btn">Add Agent</a>';
            echo '</button>';
			}
			?>		
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php

include'connection.php';
	
	$sql = "SELECT agent_id,agent_password,name,branch,phone FROM agent";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>AGENT ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BRANCH</th>\n";
    echo "    <th>PHONE</th>\n";
	if ($_SESSION["username"]=="ahmed") {
    echo "    <th>PASSWORD</th>\n";
	echo "    <th>UPDATE</th>\n";
	}
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		if ($_SESSION["username"]=="ahmed") {
		echo "    <td>".$row["agent_password"]."</td>\n";
		echo "    <td>"."<a href='editAgent.php?agent_id=".$row["agent_id"]. "'>Edit</a>"."</td>\n";
		}
	}
	
	echo "</table>\n";
	echo "\n";
}
$conn->close();
?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
