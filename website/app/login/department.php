<?php 

// connect to database
require_once 'connect.php';
var_dump($_SESSION['user']);
var_dump($_SESSION['user']['role'] == '2');
if(!$_SESSION['authenticated']){
    print "unauthenticated";
    exit;
}

if(!($_SESSION['user']['role'] == '2')){
    print "unauthorized";
    exit;
}
//implement query
$query = 'SELECT * FROM `student_count` WHERE `id` IN ';
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
  mysqli_stmt_bind_param($stmt, "d", $_SESSION['user']['id']);
  
  // Executes a prepared Query
  // http://php.net/manual/en/mysqli-stmt.execute.php
  mysqli_stmt_execute($stmt);
  
  // Gets a result set from a prepared statement
  // http://php.net/manual/en/mysqli-stmt.get-result.php
  $result = mysqli_stmt_get_result($stmt);
  $userCounts = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Department Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <!-- navigation bar component http://getbootstrap.com/components/#navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Brand and toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Project name</a>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 60px">
        <!-- extracting count per student department -->
        <h1>Students Count per Departments</h1>
        <table class="table">
            <?php foreach($userCounts as $userCount): ?>
            <tr>
                <td>
                    <?php echo $userCount['name']; ?>
                </td>
                <td>
                    <?php echo $userCount['chair']; ?>
                </td>
                <td>
                    <?php echo $userCount['students_count']; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <footer>
      <p>&copy; 2016 Company, Inc.</p>
    </footer>
  </div> <!-- /container -->
</body>
</html>
