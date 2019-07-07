<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title ?></title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="dashboard">Brand</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="profile">Profile</a></li>
	            <li><a href="setting">Setting</a></li>
	            <li><a href="users/logout">Logout</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-6">
  			<div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Profile Data</div>

        <div class="panel-body">

          <div id="messages"></div>
          <form action="users/update" method="post" id="updateUserForm">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $userData['username'] ?>">
            </div>
            <div class="form-group">
              <label for="fullName">Name</label>
              <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Name" value="<?php echo $userData['name'] ?>">
            </div>
            <div class="form-group">
              <label for="contact">Contact</label>
              <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" value="<?php echo $userData['contact'] ?>">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
  		</div>

      <div class="col-md-6">
        <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Change Password</div>

        <div class="panel-body">
          <div id="passwordmessages"></div>
          <form action="users/changepassword" method="post" id="changepasswordForm">
            <div class="form-group">
              <label for="currentPassword">Current Password</label>
              <input type="password" class="form-control" id="currentPassword" name="currentPassword" placeholder="Current Password">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
            </div>
            <div class="form-group">
              <label for="passwordAgain">Password Again</label>
              <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Password Again">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
      </div>
      </div>

  	</div>
  </div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?=base_url()?>assets/js/setting.js"></script>
</body>
</html>
