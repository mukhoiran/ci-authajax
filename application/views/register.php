<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register CodeIgniter Ajax</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <div class="row">
      <div class="col-md-4 col-centered col-vertical-4">
        <div class="panel panel-default">
          <div class="panel-heading">Register</div>
          <div class="panel-body">
            <div id="messages"></div>
            <form action="users/register" method="POST" id="registerForm">
             <div class="form-group">
               <label for="username">Username</label>
               <input type="text" class="form-control" id="username" name="username" placeholder="Username">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password">
             </div>
             <div class="form-group">
               <label for="passwordAgain">Password Again</label>
               <input type="password" class="form-control" id="passwordAgain" name="passwordAgain" placeholder="Password Again">
             </div>
             <div class="form-group">
               <label for="fullName">Name</label>
               <input type="text" class="form-control" id="fullName" name="fullName" placeholder="John Doe">
             </div>
             <div class="form-group">
               <label for="contact">Contact</label>
               <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
             </div>
             <!-- <div class="checkbox">
               <label><input type="checkbox"> Remember me</label>
             </div> -->
             <button type="submit" class="btn btn-default">Submit</button>
           </form>
          </div>
          <div class="panel-footer">
            Have Account!!! <a href="login">Login</a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/register.js"></script>
  </body>
</html>
