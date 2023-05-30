<!DOCTYPE html>
<html>
<head>
	<title>login form</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js">
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" action="pdot2.php">
         <h1>LOGIN FORM</h1>
         <div class="form-group">
         	<label class="form-label">Name</label>
         	<input type="text" class="form-control" name="sname" required>
         	
         </div>	
         
         <div class="form-group">
         	<label class="form-label">password:</label>
         	<input type="password" class="form-control" name="pwd" >
         	
         </div><br>	
          <div class="form-group">
         <input type="submit" class="btn btn-success" name="login" value="login">
         <a href="fetch.php" class="btn btn-info" name="view">view</a>
          <input type="reset" class="btn btn-danger" name="reset" value="reset">
       </div>
    </form>
 </div>
</div>
</body>
</html>