<?php
include("../connection.php");


$procedure = "{call GetNeuromodulationDetails}";


$stmt = sqlsrv_query($conn, $procedure);

if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

// Fetch and display results

// Close the connection
// sqlsrv_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<?php include("header.php");?>
<div class="container mt-3">
  <h2>Neuromodulation Form Details</h2>
  <br><br>
         
  <table id="formdetails" class="table table-hover">
    <thead>
      <tr>
        <th></th>
        <th>Date of Submission</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>age</th>
        <th>Date of Birth</th>
        <th>Total score</th>
      </tr>
    </thead>
   
    <tbody>
    <?php
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        // echo "ID: " . $row['id'] . "<br />";
        // echo $row['date_of_birth']->format('Y-m-d');
       
       
    
    ?>
      <tr onclick="window.location.href='patientresponse.php?id=<?php echo $row['id']; ?>'">
        <td><a href="patientresponse.php?id=<?php echo $row["id"];  ?>"><i class="fas fa-eye"></i></a></td>
        <td><?php echo $row['submitted_at']->format('Y-m-d H:i:s');?>
        <td><?php echo $row['firstname'];?> </td>
        <td><?php echo $row['surname'];?></td>
        <td><?php echo $row['age'];?></td>
         <td><?php echo $row['date_of_birth']->format('Y-m-d');?>
        <td><?php echo $row['total_score'];?></td>
        </a></tr>
      <?php
}
  ?>
    </tbody>
  </table>
 
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JS (optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $('#formdetails').DataTable({
        "paging": true,
        "searching": true,
        "ordering": true,
        "info": true
    });
});
</script>
</body>
</html>