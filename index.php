<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Reastaurant management System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     <div class="container">
	 <br/>
	 <a class="btn btn-primary pull-right"href="admin/login">Login</a>
	 <br/>
	 <h1 class="text-center">Welcome to reastaurant management system </h1>
	 <form action="" method="POST">
	 <table class="table table-bordered">
	 <tr>
		<td colspan="2" class="text-center"><lebel>Reastaurant Information</lebel>
		
		</td>
	 </tr>
	 <tr>
		<td class="text-center"><lebel for="id">Branch Id</lebel></td>
		
		<td class="text-center" ><input type="text" name="branch_id"/></td>
	 </tr>
	 <tr>
		<td colspan="2" class="text-center"><input type="submit" value="show info" name ="show_info"/></td>
		
		
	 </tr>
	 
	 </table>
	 </form>
	 </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>