<?php
  include("connection.php");
  if(isset($_POST['btnsave'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
 
    $query = "{call GetLoginDetails(?,?)}";
    $table_fields = array($email,$password);
    $sql = sqlsrv_query($conn, $query,$table_fields);
    if ($sql === false) {
        die(print_r(sqlsrv_errors(), true));
    } 
    else {
        $row_count = 0;
        while ($row = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC)) {
            $row_count++;
        }

        // Check if any rows are returned
        if ($row_count > 0) {
            // Redirect to dashboard
            header("Location: admin/index.php");
            exit();
        } else {
            echo "Invalid login credentials.";
        }
    }
     
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<?php include("header.php");?>

<div class="container mt-3">

        <form action="" method="post">
            <h2>Admin Login Form</h2>
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3 mt-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <input type="submit" class="btn btn-primary" name="btnsave" value="Register"/>

           
        </form>
    </div>
</body>
</html>