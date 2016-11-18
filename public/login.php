<?php     

// connect to database
require_once 'connect.php';

$loggedIn = false;
$invalidCsrfToken = false;

// check if user have inputed email & password
if(!empty($_POST['email']) && !empty($_POST['password'])) {
  if($_POST['token'] != $token){ 
    $invalidCsrfToken = true;
  } else {
    $query = "SELECT * FROM users WHERE email=? LIMIT 1";
    
    // Initializes a statement and returns an object for use with mysqli_stmt_prepare
    $stmt = mysqli_stmt_init($link);
    
    // Prepare an SQL statement for execution
    if(!mysqli_stmt_prepare($stmt, $query)) {
      echo "Failed to prepare statement" . PHP_EOL;
    } else {
      // Binds variables to a prepared statement as parameters
      // using this function will prevent SQL injection
      // http://php.net/manual/en/mysqli-stmt.bind-param.php
      // "s" corresponding variable has type string
      mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
  
      // Executes a prepared Query
      // http://php.net/manual/en/mysqli-stmt.execute.php
      mysqli_stmt_execute($stmt);
      
      // Gets a result set from a prepared statement
      // http://php.net/manual/en/mysqli-stmt.get-result.php
      $result = mysqli_stmt_get_result($stmt);
      
      // Gets the number of rows in a result
      // http://php.net/manual/en/mysqli-result.num-rows.php
      $matchUsersCount = mysqli_num_rows($result);
      
      $isEmailPasswordCorrect = false;
      
      if($matchUsersCount > 0){
        // Fetch a result row as an associative
        // http://php.net/manual/en/mysqli-result.fetch-array.php
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        
        // Verifies that the given hash matches the given password
        // http://php.net/manual/en/function.password-verify.php
        $isEmailPasswordCorrect = password_verify($_POST['password'], $user['password']);

        if($isEmailPasswordCorrect) {
          $loggedIn = true;
        }
      }
    }
    // Closes a prepared statement
    // http://php.net/manual/en/mysqli-stmt.close.php
    mysqli_stmt_close($stmt);
  }
}
// Closes a previously opened database connection
// http://php.net/manual/en/mysqli.close.php
mysqli_close($link);


?> 

<!-- arranged from snippets code zip file registration -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Bootstrap_Folder/css/bootstrap.css">
</head>
<body>
<div class="container">
	<h2 class="form-signin-heading">Welcome to the Application Portal </h2>	
  <form class="form-signin" id="login" role="form" method="POST" action="login.php">
    <!-- CSRF token -->
    <input type="hidden" name="token" value="<?php echo $token; ?>" />
    <?php if ($loggedIn): ?>
      <!--<h4>Login Successfull <?php echo $user['email']; ?> | <?php echo $user['name']; ?></h4> -->
	<?php header("Location:index.html")		?>
    <?php elseif(isset($isEmailPasswordCorrect) && $isEmailPasswordCorrect === false): ?>
      <h4>Login Unsuccessful</h4>
    <?php elseif($invalidCsrfToken): ?>
      <h4 class="text-danger">Invalid CSRF token, please do reload the page and try again.</h4>
    <?php else: ?>
      <input type="email" name="email" class="form-control" placeholder="Email Address"> 
      <br />
      <input type="password" name="password"class="form-control" placeholder="password">
      <br />
      <button type="submit" class="btn btn-lg btn-primary btn-block">submit</button>
    <?php endif; ?>
  </form>
</div>
</body>
</html>
