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
    <title>Edit Agent</title>

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
<?php 
include 'header.php'; 
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Agents Information  
						<button class="btn" align="center"> 
						<a href="addclient.php" class="btn">Add Agent</a>
						</button>
						</h1>
                    </div>
                </div>
                
                <!-- /. ROW  -->
<?php 

include'connection.php';
	
	
	$id = "";
	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$agent_id = $_GET["agent_id"];
		
		
	}
	$sql = "SELECT agent_id, agent_password, name, branch, phone from agent where agent_id='$agent_id'";
	$result = $conn->query($sql);
	
	echo "<div>\n";
	
	  echo '<form action="updateAgent.php" method="post">';
	    echo "<label for=\"fname\">AGENT ID</label>";
	    echo "<input type=\"text\" value=\"$agent_id\"name=\"agent_id\"/>"."</br>";
	while($row = $result->fetch_assoc()) {
		echo "<label for=\"fname\">PASSWORD</label>";
	    echo "<input type=\"text\" agent_id=\"fname\" name=\"agent_password\" placeholder=\"password..\" value=\"$row[agent_password]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input type=\"text\" agent_id=\"fname\" name=\"name\" placeholder=\"Your Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">BRANCH</label>";
		echo "<input type=\"text\" agent_id=\"fname\" name=\"branch\" placeholder=\"Your Branch..\" value=\"$row[branch]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input type=\"text\" agent_id=\"fname\" name=\"phone\" placeholder=\"Your Phone..\" value=\"$row[phone]\">";
		
    }
	
	echo "<input type=\"submit\" value=\"UPDATE\">";
	echo "</form>\n";
	echo "<a href='deleteAgent.php?agent_id=".$agent_id."'>Delete Agent</a>";
echo "</div>\n";
echo "\n";

?>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


	
</body>
</html>
