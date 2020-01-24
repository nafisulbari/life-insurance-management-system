<!DOCTYPE html>
<html>
<head>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
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
.searchBar {
	float: auto;
	cursor: pointer;
	width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}


</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
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

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Home Page
						
						</h1>


			
		<!-- /. SEARCH  -->
	  <div class= "searchBar">
		  <form action="search.php" method="post">
          <input type="text" name="key"><br>
          <input class="searchBtn" type="submit" value="SEARCH">
		  </br>
          </form>
	  </div>

		<!-- /. SEARCH  -->
				
				<br>
				<br>
				
				<!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="main-box mb-red">
                            <a href="#">
                                <i class="fa fa-user fa-5x""></i>
                                <h5>
								<?php
				                     $sql = "SELECT count(*) AS c FROM client";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Total clients: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
								</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-dull">
                            <a href="#">
							 <i class="fa fa-dollar fa-5x"></i>
                                <h5>
		                             <?php
				                     $sql = "SELECT count(*) AS c FROM payment";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Payment Records: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
                                
								</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="main-box mb-pink">
                            <a href="#">
                               <i class="fa fa-user-md fa-5x"></i>
                                <h5>
								<?php
				                     $sql = "SELECT count(*) AS c FROM agent";
	                                 $result = $conn->query($sql);
		
	                                 while($row = $result->fetch_assoc()) {
				                     echo "Total agents: ";
	                                 echo $row["c"];
	                                 }
				                     ?>
								</h5>
                            </a>
                        </div>
                    </div>

                </div>
		

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->




</body>
</html>
