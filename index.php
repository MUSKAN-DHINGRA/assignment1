<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Employee Portal</title>
	<meta name="description" content="Employee Information">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
  	<link rel="stylesheet" href="./css/style.css">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Roboto:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body>
  <header>
  <?php
                include("include/globalheader.php");
           ?>
  </header>
	<section class="head">
		<div>
			<h1>Employee Portal</h1>
		</div>
	</section>
  <main class="container">
	   <section class="form-row row justify-content-center">
		     <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
					 <h2>Create User</h2>
					 <div class="form-group">
						 <label for="input1" class="col-sm-2 control-label">First Name</label>
						 <div class="col-sm-10">
							 <input type="text" name="fname" class="form-control" id="input1">
						 </div>
					 </div>
					 <div class="form-group">
						 <label for="input2" class="col-sm-2 control-label">Last Name</label>
						 <div class="col-sm-10">
							 <input type="text" name="lname" class="form-control" id="input2">
						 </div>
					 </div>
					 <div class="form-group">
						 <label for="input3" class="col-sm-2 control-label">Email</label>
						 <div class="col-sm-10">
							 <input type="email" name="email" class="form-control" id="input3">
						 </div>
					 </div>
                     
					 <div class="form-group">
						 <label for="input4" class="col-sm-2 control-label">Age</label>
						 <div class="col-sm-10">
							 <select name="age" class="form-control">
								 <option>Select Your Age</option>
								 <option value="20">20</option>
								 <option value="21">21</option>
								 <option value="22">22</option>
								 <option value="23">23</option>
								 <option value="24">24</option>
								 <option value="25">25</option>
							 </select>
						 </div>
					 </div>
                     <div class="form-group">
						 <label for="input5" class="col-sm-2 control-label">Hours worked</label>
						 <div class="col-sm-10">
							 <input type="number" name="hoursworked" class="form-control" id="input5">
						 </div>
					 </div>
                     <div class="form-group">
						 <label for="input6" class="col-sm-2 control-label">Department</label>
						 <div class="col-sm-10">
							 <input type="text" name="department" class="form-control" id="input6">
						 </div>
					 </div>
					 <div class="form-group">
						 <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit">
					 </div>
		     </form>
</section>
         <div class="form-group submit-message">
		 <?php
                require_once('database.php');
            
                if(!empty($_POST)){
                    $fname = $_POST['fname'];
                    $lname = $_POST['lname'];
                    $age = $_POST['age'];
                    $email = $_POST['email'];
					$hoursworked = $_POST['hoursworked'];
					$department = $_POST['department'];
                
                    $res   = $database->create($fname, $lname, $age, $email, $hoursworked, $department);
                    if($res){
                        echo "<p>Successfully inserted data</p>";
                    }
                    else{
                        echo "<p>Failed to insert data</p>";
                    }
                }
            ?>
        </div>
      
     </main>
   </body>
</html>
