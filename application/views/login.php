<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login CodeIgniter Ajax</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <!-- <div class="row"> -->
      <div class="col-md-4 col-centered col-vertical-4">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
            <form action="/user/register">
             <div class="form-group">
               <label for="username">Username</label>
               <input type="username" class="form-control" id="username" name="username" placeholder="Username">
             </div>
             <div class="form-group">
               <label for="password">Password</label>
               <input type="password" class="form-control" id="password" name="password" placeholder="Password">
             </div>
             <!-- <div class="checkbox">
               <label><input type="checkbox"> Remember me</label>
             </div> -->
             <button type="submit" class="btn btn-default">Submit</button>
           </form>
          </div>
          <div class="panel-footer">
            No Account!!! <a href="register">Sign Up</a>
          </div>
        </div>
      </div>
    <!-- </div> -->

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
