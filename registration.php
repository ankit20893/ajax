<!DOCTYPE html>
<html>
<head>
	<title>
		login page
	</title>
      <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script language="JavaScript" src="js/jquery-1.12.3.min.js"></script>
    <script language="JavaScript" src="js/jquery.validate.min.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!--<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>-->
    <script src="js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script language="JavaScript" src="js/script2.js"></script>    
</head>
<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Please sign up for login </h3>
            </div>
            <div class="panel-body">
              <form role="form" class="form-signup" method="post" id="signup-form" enctype="multipart/form-data">
              <div id="error">
        <!-- error will be shown here ! -->
             </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                <input type="text" name="user_name" id="user_name" class="form-control input-sm" placeholder="UserName">
                </div>

                <div class="form-group">
                  <input type="email" name="user_email" id="user_email" class="form-control input-sm" placeholder="Email Address">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                Date of joining<input type="date" name="joining_date" id="joining_date" class="form-control input-sm">
                </div>

                <input type="submit" name="btn-registration" value="Register" class="btn btn-info btn-block" id="btn-signup">
              
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>