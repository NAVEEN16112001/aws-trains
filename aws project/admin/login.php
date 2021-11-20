<html>
    <head>
        <title> user login </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <?php
			if(isset($_SESSION['error']))
			{
			 if(isset($_SESSION['name']))
			 {
				//echo "nikul";
			 }
			 else if($_SESSION['error']==15)
			 {
				//echo "hilgr";
		?>
				<div class="alert alert-error"><font size="5"> Please Login First..</font> 
				</div>
		<?php	 }
			}
			//else{ echo "hi";}
		?>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-6 login-left">
            <h2> LOGIN HERE </h2>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label> USERNAME</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> PASSWORD </label>
                    <input type="password" name="password" autocomplete="new-password" class="form-control" required/>
                </div>
                <button type="submit" class="btn btn-primary"> LOGIN </button>
            </form>
        </div>

        <div class="col-md-6 login-right">
            <h2> REGISTER HERE </h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label> USERNAME</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" required>
                </div>
                <div class="form-group">
                    <label> PASSWORD </label>
                    <input type="password" name="password" autocomplete="new-password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary"> REGISTER </button>
            </form>
        </div>
    </div>
</div>
</div>
    </body>
</html>