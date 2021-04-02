<!doctype html>
<html lang="en" class="h-100">

    <head>

		<!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Login</title>

        <!-- CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">

    </head>

    <body class="h-100">
    
    	
    	<div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-10 col-md-8 col-lg-6  bg-custom">
					<!-- Form -->
                	<form class="form-custom" action="admin.php" method="post">
                		<h1>Login</h1>                		
                		<!-- Input fields -->
                		<div class="form-group">
                			<label for="username">Username:</label>
                			<input type="text" class="form-control username" id="username" placeholder="Username..." name="username">
                		</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control password" id="password" placeholder="Password..." name="password">
						</div>
						<button type="submit" class="btn btn-primary btn-customized login">Login</button>
                        <button type="reset" class="btn btn-primary btn-customized cancel">Cancel</button>
                		<!-- End input fields -->
                	</form>
					<!-- Form end -->
                </div>
            </div>
        </div>


		<!-- Javascript -->
		<script src="assets/js/jquery-3.3.1.min.js"></script>
		<script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>