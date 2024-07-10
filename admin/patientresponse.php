<?php
include("../connection.php");

// call the stored procedure to display all form data
$id = $_GET["id"];

$query = "{call GetPatientresponsebyid(?)}";

$params = array($id);

$sql = sqlsrv_query($conn, $query, $params);



$row = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);
if ($row === false) {
    die(print_r(sqlsrv_errors(), true));
}
// call stored procedure for delete the form data

if ($_GET["deleteid"]){
    $query = "{call Deleteneuromodulation(?)}";

    $params = array($_GET["deleteid"]);

    $sql = sqlsrv_query($conn, $query, $params);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neuromodulation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../assets/style.css">

    <script>
        $(document).ready(function(){
            $('input').attr('readonly', true);
        });
    </script>
    
</head>
<body>
<?php include("header.php");?>

<div class="container mt-3">
        <h1>Patient's Response</h1><br><br>

        <form action="" method="post">
            <h4>Patient Details</h4>
            <div class="panel1" id="panel1">

            <div class="mb-3 mt-3">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control"  id="firstname" value="<?php echo $row['firstname'];  ?>" placeholder="Enter Firstname" name="firstname">
            </div>
            <div class="mb-3 mt-3">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" id="surname" value="<?php echo $row['surname'];  ?>" placeholder="Enter surname" name="surname">
            </div>
            <div class="mb-3 mt-3">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" class="form-control" id="date_of_birth" value="<?php echo $row['date_of_birth']->format('Y-m-d');  ?>"  placeholder="Enter date of birth"
                    name="date_of_birth">
            </div>

            <div class="mb-3 mt-3">
                <label for="age">Age:</label>
                <input type="text" class="form-control" value="<?php echo $row['age'];  ?>" id="age" placeholder="Enter age" name="age">
            </div>
            </div><br>


            <h4>Brief Pain Inventory(BPI)</h4>
            <div class="panel1" id="panel1">

            <div class="mb-3 mt-3">
                <label for="q1">Q1. How much relief have pain treatments or medications FROM THIS CLINIC provided?</label>
                <input type="text" class="form-control" value="<?php echo $row['q1'];  ?>" id="q1" placeholder="Enter score (0-100)" name="q1">
            </div>
            <div id="bpi">
                <div class="mb-3 mt-3">
                    <label for="q2">Q2. Please rate your pain based on the number that best describes your pain at it’s
                        WORST
                        in the past week</label>
                    <input type="text" class="form-control" value="<?php echo $row['q2'];  ?>" id="q2" placeholder="Enter score (0-10)" name="q2">
                    <span class="error" id="spanerrormsg-q2"></span>
                </div>


                <div class="mb-3 mt-3">
                    <label for="q3">Q3. Please rate your pain based on the number that best describes your pain at it’s
                        LEAST in
                        the past week.</label>
                    <input type="text" class="form-control" value="<?php echo $row['q3'];  ?>" id="q3" placeholder="Enter score (0-10)" name="q3">
                </div>
                <div class="mb-3 mt-3">
                    <label for="q4">Q4. Please rate your pain based on the number that best describes your pain on the
                        Average.</label>
                    <input type="text" class="form-control" value="<?php echo $row['q4'];  ?>" id="q4" placeholder="Enter score (0-10)" name="q4">
                </div>
                <div class="mb-3 mt-3">
                    <label for="q5">Q5. Please rate your pain based on the number that best describes your pain that tells
                        how much pain you have RIGHT NOW.</label>
                    <input type="text" class="form-control" id="q5" value="<?php echo $row['q5'];  ?>" placeholder="Enter score (0-10)" name="q5">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q6">Q6. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: General Activity.</label>
                    <input type="text" class="form-control" id="q6" value="<?php echo $row['q6'];  ?>" placeholder="Enter score (0-10)" name="q6">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q7">Q7. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Mood.</label>
                    <input type="text" class="form-control" id="q7" value="<?php echo $row['q7'];  ?>" placeholder="Enter score (0-10)" name="q7">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q8">Q8. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Walking ability.</label>
                    <input type="text" class="form-control" id="q8" value="<?php echo $row['q8'];  ?>" placeholder="Enter score (0-10)" name="q8">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q9">Q9. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Normal work (includes work both outside the home and
                        housework).</label>
                    <input type="text" class="form-control" id="q9" value="<?php echo $row['q9'];  ?>" placeholder="Enter score (0-10)" name="q9">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q10">Q10. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: RelaTonships with other people.</label>
                    <input type="text" class="form-control" id="q10" value="<?php echo $row['q10'];  ?>" placeholder="Enter score (0-10)" name="q10">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q11">Q11. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Sleep.</label>
                    <input type="text" class="form-control" id="q11" value="<?php echo $row['q11'];  ?>" placeholder="Enter score (0-10)" name="q11">
                    
                </div>
                <div class="mb-3 mt-3">
                    <label for="q12">Q12. Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Enjoyment of life.</label>
                    <input type="text" class="form-control" id="q12" value="<?php echo $row['q12'];  ?>" placeholder="Enter score (0-10)" name="q12">
                    
                </div>
            </div>
            </div><br>
            <h4>Total Score</h4>
            <div class="panel1" id="panel1">

            <div class="mb-3 mt-3">
                <label for="total_score">Total score</label>
                <input type="text" class="form-control" id="total_score" value="<?php echo $row['total_score'];  ?>" placeholder="Enter Total Score"
                    name="total_score">
            </div>
            </div><br>
            <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"];  ?>">Edit</a>
            <a class="btn btn-primary" href="patientresponse.php?deleteid=<?php echo $row["id"];  ?>">Delete</a>
        </form>
    </div>
</body>
</html>
