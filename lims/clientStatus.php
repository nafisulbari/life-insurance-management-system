<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 8px 12px;
    margin: 1px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 2px;
    box-sizing: border-box;
	
}


input[type=submit]:hover {
    background-color: #45a049;
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
.dis {
	pointer-events: none;
	cursor: default;
	color:#595959;
}
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Status</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<?php include 'header.php'; 
$username = $_SESSION["username"];
?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Client's Status</h1>
                    
                
                <!-- /. ROW  -->
<?php

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		
		$client_id = $_GET["client_id"];
	}
	            //   PRINTS CLIENT's info
	$sql = "SELECT * from client where client_id='$client_id'";
	$result = $conn->query($sql);
	$policy_id = "";
	$agent_id="";
	   
?>
			
<?php
	while($row = $result->fetch_assoc()) {
		$images = $row["image"];
?>
			<img class="profile-user-img img-responsive"  width="200px" height="200px" src="<?php echo "../project/uploads/".$images ?>" alt="Client has no profile picture">
<?php
		echo "<label for=\"fname\">CLIENT ID</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_id\" placeholder=\"clients id..\" value=\"$row[client_id]\">";
		echo "<label for=\"fname\">CLIENT PASSWORD</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"client_password\" placeholder=\"client password..\" value=\"$row[client_password]\">";
		echo "<label for=\"fname\">NAME</label>";
	    echo "<input disabled type=\"text\" client_id=\"fname\" name=\"name\" placeholder=\"clients Name..\" value=\"$row[name]\">";
		echo "<label for=\"fname\">GENDER</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"sex\" placeholder=\"clients gender..\" value=\"$row[sex]\">";
		echo "<label for=\"fname\">BIRTH DATE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"birth_date\" placeholder=\"clients Birth Date..\" value=\"$row[birth_date]\">";
		echo "<label for=\"fname\">MARITIAL STATUS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"marital_status\" placeholder=\"clients Maritial Status..\" value=\"$row[marital_status]\">";
		echo "<label for=\"fname\">NID</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"nid\" placeholder=\"clients NID..\" value=\"$row[nid]\">";
		echo "<label for=\"fname\">PHONE</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"phone\" placeholder=\"clients Phone..\" value=\"$row[phone]\">";
		echo "<label for=\"fname\">ADDRESS</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"address\" placeholder=\"clients Address..\" value=\"$row[address]\">";
		echo "<label for=\"fname\">POLICY ID</label>";
		echo "<input disabled type=\"text\" client_id=\"fname\" name=\"policy_id\" placeholder=\"policy id..\" value=\"$row[policy_id]\">";
		$policy_id = $row["policy_id"];
		$c_id      = $row["client_id"];
		$a_id  = $row["agent_id"];
		$agent_id = $row["agent_id"];
		echo "<a href='editClient.php?client_id=".$c_id."'>Edit Client</a>\n";
    }
		echo "<br>\n";
		
	    echo "<br>\n";
	
	            // PRINTS policy info
	
	$sql = "SELECT policy_id,term,health_status,system,payment_method,coverage, age_limit FROM policy where policy_id ='$policy_id'";
	$result = $conn->query($sql);
	
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>POLICY ID</th>\n";
    echo "    <th>TERM</th>\n";
    echo "    <th>TOTAL AMOUNT</th>\n";
    echo "    <th>PER MONTH</th>\n";
	echo "    <th>PAYMENT METHOD</th>\n";
    echo "    <th>COVERAGE</th>\n";
    echo "    <th>AGE LIMIT</th>\n";
    echo "  </tr>\n";
	
	
	if ($result->num_rows > 0) {
    // output data of each row
	while($row = $result->fetch_assoc()) {
		echo "<tr>\n";
		echo "    <td>".$row["policy_id"]."</td>\n";
		echo "    <td>".$row["term"]."</td>\n";
		echo "    <td>".$row["health_status"]."</td>\n";
		echo "    <td>".$row["system"]."</td>\n";
		echo "    <td>".$row["payment_method"]."</td>\n";
		echo "    <td>".$row["coverage"]."</td>\n";
		echo "    <td>".$row["age_limit"]."</td>\n";
	    echo "  </tr>";
		
	}
	}
	

echo '</div>';
	
	
	echo "<br>\n";
	echo "<br>\n";
	echo '<b>Policy Information</b>';	            //   PRINTS AGEENTS INFO
	$sql = "SELECT * FROM agent where agent_id='$a_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>AGENT ID</th>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>BRANCH</th>\n";
    echo "    <th>PHONE</th>\n";
    echo "  </tr>";
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["agent_id"]."</td>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["branch"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		echo "  </tr>";
	}
	}
	
	echo "</br>\n";
	echo "</br>\n";
	echo '<b>Agent</b>';
	             // prints nominee infos 
	$sql = "SELECT * FROM nominee where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>NAME</th>\n";
    echo "    <th>GENDER</th>\n";
    echo "    <th>BIRTH DATE</th>\n";
	echo "    <th>RELATIONSHIP</th>\n";
	echo "    <th>PRIORITY</th>\n";
    echo "    <th>PHONE</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	
	
	
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["name"]."</td>\n";
		echo "    <td>".$row["sex"]."</td>\n";
		echo "    <td>".$row["birth_date"]."</td>\n";
		echo "    <td>".$row["relationship"]."</td>\n";
		echo "    <td>".$row["priority"]."</td>\n";
		echo "    <td>".$row["phone"]."</td>\n";
		$nominee_id = $row["nominee_id"];

		
		if($agent_id == $username || "ahmed" == $username){
			echo "<td>"."<a href='editNominee.php?nominee_id=".$row["nominee_id"]. "'>Edit</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='editNominee.php?nominee_id=".$row["nominee_id"]. "'>Edit</a>"."</td>\n";
		}
		
		
		echo "  </tr>";
	}
	}
	
	echo "</br>\n";
	echo "</br>\n";
	echo '<b>Nominee</b>'; echo '&nbsp';echo '&nbsp';echo '&nbsp';

	if($agent_id== $username || "ahmed" == $username){
			echo "<a href='addNominee.php?client_id=".$c_id. "'>Add Nominee</a>";
		}else {
			echo "<a class=\"dis\" href='addNominee.php?client_id=".$c_id. "'>Add nominee</a>";
		}
	
	
	
                       //prints payments 
	$sql = "SELECT * FROM payment where client_id='$c_id'";
	$result = $conn->query($sql);
	
	echo "<table class=\"table\">\n";
    echo "  <tr>\n";
    echo "    <th>RECIPT NO</th>\n";
    echo "    <th>CLIENT ID</th>\n";
    echo "    <th>MONTH</th>\n";
    echo "    <th>AMOUNT</th>\n";
	echo "    <th>DUE</th>\n";
    echo "    <th>FINE</th>\n";
	echo "    <th>UPDATE</th>\n";
    echo "  </tr>";
	echo "<br>\n";
	
	echo '<b>Payments</b>';  echo '&nbsp';echo '&nbsp';echo '&nbsp'; echo "<a href='addPayment.php?client_id=".$c_id."'>Add Payment</a>";
	if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		
		echo "<tr>\n";
		echo "    <td>".$row["recipt_no"]."</td>\n";
		echo "    <td>".$row["client_id"]."</td>\n";
		echo "    <td>".$row["month"]."</td>\n";
		echo "    <td>".$row["amount"]."</td>\n";
		echo "    <td>".$row["due"]."</td>\n";
		echo "    <td>".$row["fine"]."</td>\n";
		
		if($row["agent_id"]== $username || "ahmed" == $username){
			echo "<td>"."<a href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='editPayment.php?recipt_no=".$row["recipt_no"]. "'>Edit</a>"."</td>\n";
		}
		
		echo "  </tr>";
	}
	}
	
	echo "</table>\n";

	if($agent_id== $username || "ahmed" == $username){
			echo "<td>"."<a href='deleteClient.php?client_id=".$client_id. "'>Delete Client</a>"."</td>\n";
		}else {
			echo "<td>"."<a class=\"dis\" href='deleteClient.php?client_id=".$row["client_id"]. "'>Delete Client</a>"."</td>\n";
		}
	

echo "\n";


	
?>

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
