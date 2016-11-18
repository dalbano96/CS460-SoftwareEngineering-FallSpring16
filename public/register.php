<?php     

// connect to database
require_once 'connect.php';

$registered = false;
$alreadyRegistered = false;
$passwordDoesntMatch = false;
$invalidCsrfToken = false;

// check if user have inputed email & password
if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['passwordconfirmation'])) {
  if($_POST['token'] != $token){ 
    $invalidCsrfToken = true;
  } else if($_POST['password'] !== $_POST['passwordconfirmation']) {
    $passwordDoesntMatch = true;
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
  
      $isEmailPasswordCorrect = $matchUsersCount > 0 ? true : false;
      if($isEmailPasswordCorrect) {
        // Fetch a result row as an associative
        // http://php.net/manual/en/mysqli-result.fetch-array.php
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $alreadyRegistered = true;
      } else {
        $query = "INSERT INTO users (name, email, password) VALUES (?,?,?)";
        // Initializes a statement and returns an object for use with mysqli_stmt_prepare
        $stmt = mysqli_stmt_init($link);
        
        // Prepare an SQL statement for execution
        if(!mysqli_stmt_prepare($stmt, $query)) {
          echo "Failed to prepare statement" . PHP_EOL;
        } else {
          // Hash password 
          // creates a new password hash using a strong one-way hashing algorithm. password_hash() is compatible with crypt(). 
          // Therefore, password hashes created by crypt() can be used with password_hash().
          // http://php.net/manual/en/function.password-hash.php
          $password = password_hash($_POST['password'], PASSWORD_BCRYPT, array('cost' => 10));
          // Binds variables to a prepared statement as parameters
          // using this function will prevent SQL injection
          // http://php.net/manual/en/mysqli-stmt.bind-param.php
          // "s" corresponding variable has type string
          mysqli_stmt_bind_param($stmt, "sss", $_POST['name'], $_POST['email'], $password);
      
          // Executes a prepared Query
          // http://php.net/manual/en/mysqli-stmt.execute.php
          mysqli_stmt_execute($stmt);
          
          if(mysqli_insert_id($link) > 0){
            $registered = true;
          } else {
            echo "Failed to insert row" . PHP_EOL;
          }
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Registration form</title>
	<link rel="stylesheet" href="Bootstrap_Folder/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
	<h2 class="form-signin-heading">Registration Portal</h2> 
  <form class="form-signin" id="login" role="form" method="POST" action="register.php">
    <!-- CSRF token -->
    <input type="hidden" name="token" value="<?php echo $token; ?>" />
    <?php if ($registered): ?>
	<?php
		echo '<script language="javascript">';
		echo 'alert("Account successfully registered! Please login")';
		echo '</script>';
		header("Location:login.php"); 
	?>

    <?php elseif($alreadyRegistered): ?>
      <h4>Account already registered</h4>

    <?php elseif($passwordDoesntMatch): ?>
      <h4>Passwords do not match</h4>

	<?php elseif($invalidCsrfToken): ?>
      <h4 class="text-danger">Invalid CSRF token, please do reload the page and try again.</h4>
    <?php else: ?>
       <input type="name" name="name" class="form-control" placeholder="Enter Name"> 
      <br />
      <input type="email" name="email" class="form-control" placeholder="Enter Email Address"> 
      <br />
      <input type="password" name="password" class="form-control" placeholder="Enter Password">
      <br />
      <input type="password" name="passwordconfirmation" class="form-control" placeholder="Enter Password">
      <br />
      <button type="submit" class="btn btn-lg btn-primary btn-block">submit</button>
    <?php endif; ?>
  </form>
</div>
</body>
</html>