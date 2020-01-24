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
</style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Client</title>
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
$uniqueId  = time();
$uniqueId2 = time().'-'.mt_rand();

?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Add Client</h1>
						
                    
                

<form action="insertClient.php" method="post" enctype="multipart/form-data">
Client ID:       <input type="text" name="client_id" value="<?php echo"$uniqueId"; ?>" required><br>
Client Password: <input type="text" name="client_password" required><br>
Name:            <input type="text" name="name" required><br>
Image		     <input class="img" type="file" name="fileToUpload"/ required> </br>
GENDER:          <input type="text" name="sex" required><br>
Birth Date:      <input type="text" name="birth_date" required><br>
Marital Status:  <input type="text" name="maritial_status" required><br>
National ID:     <input type="text" name="nid" required><br>
Phone:           <input type="text" name="phone" required><br>
Address:         <input type="text" name="address" required><br>
Policy ID:       <input type="text" name="policy_id" required><br>
Agent ID:        <input type="text" name="agent_id" value="<?php echo $_SESSION["username"]; ?>" required><br>

<h3>Nominee Informations </h3>

Nominee ID:    <input type="text" name="nominee_id" value="<?php echo"$uniqueId2"; ?>" required> <br>
Name:          <input type="text" name="nominee_name" required><br>
GENDER:        <input type="text" name="nominee_sex" required><br>
Birth Date:    <input type="text" name="nominee_birth_date" required><br>
National ID:   <input type="text" name="nominee_nid" required><br>
Relationship:  <input type="text" name="nominee_relationship" required><br>
Priority:      <input type="text" name="priority" required><br>
Phone:         <input type="text" name="nominee_phone" required><br>


<input type="submit">

</form>
				
				

                </div>

            
        </div>
        <!-- /. PAGE WRAPPER  -->


    </div>
    <!-- /. WRAPPER  -->

   
    


</body>
</html>
