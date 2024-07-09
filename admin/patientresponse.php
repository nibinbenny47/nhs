<?php
include("../connection.php");

// call the stored procedure to display all form data
$id = $_GET["id"];

$query = "{call GetPatientresponsebyid(?)}";

$params = array($id);

$sql = sqlsrv_query($conn, $query, $params);

// Check if the query was successful
// if ($sql === false) {
//     die(print_r(sqlsrv_errors(), true));
// }

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
    <script>
        $(document).ready(function(){
            $('input').attr('readonly', true);
        });
    </script>
</head>
<body>
<?php include("header.php");?>

<div class="container mt-3">
        <h1>Neuromodulation form</h1>

        <form action="" method="post">
            <h2>Patient Details</h2>
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


            <h2>Brief Pain Inventory(BPI)</h2>

            <div class="mb-3 mt-3">
                <label for="q1">How much relief have pain treatments or medications FROM THIS CLINIC provided?</label>
                <input type="text" class="form-control" value="<?php echo $row['q1'];  ?>" id="q1" placeholder="Enter score (0-100)" name="q1">
            </div>
            <div id="bpi">
                <div class="mb-3 mt-3">
                    <label for="q2">Please rate your pain based on the number that best describes your pain at it’s
                        WORST
                        in the past week</label>
                    <input type="text" class="form-control" value="<?php echo $row['q2'];  ?>" id="q2" placeholder="Enter score (0-10)" name="q2">
                    <span class="error" id="spanerrormsg-q2"></span>
                </div>


                <div class="mb-3 mt-3">
                    <label for="q3">Please rate your pain based on the number that best describes your pain at it’s
                        LEAST in
                        the past week.</label>
                    <input type="text" class="form-control" value="<?php echo $row['q3'];  ?>" id="q3" placeholder="Enter score (0-10)" name="q3">
                </div>
                <div class="mb-3 mt-3">
                    <label for="q4">Please rate your pain based on the number that best describes your pain on the
                        Average.</label>
                    <input type="text" class="form-control" value="<?php echo $row['q4'];  ?>" id="q4" placeholder="Enter score (0-10)" name="q4">
                </div>
                <div class="mb-3 mt-3">
                    <label for="q5">Please rate your pain based on the number that best describes your pain that tells
                        how much pain you have RIGHT NOW.</label>
                    <input type="text" class="form-control" id="q5" value="<?php echo $row['q5'];  ?>" placeholder="Enter score (0-10)" name="q5">
                    <span class="error" id="spanerrormsg-q5"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q6">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: General Activity.</label>
                    <input type="text" class="form-control" id="q6" value="<?php echo $row['q6'];  ?>" placeholder="Enter score (0-10)" name="q6">
                    <span class="error" id="spanerrormsg-q6"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q7">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Mood.</label>
                    <input type="text" class="form-control" id="q7" value="<?php echo $row['q7'];  ?>" placeholder="Enter score (0-10)" name="q7">
                    <span class="error" id="spanerrormsg-q7"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q8">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Walking ability.</label>
                    <input type="text" class="form-control" id="q8" value="<?php echo $row['q8'];  ?>" placeholder="Enter score (0-10)" name="q8">
                    <span class="error" id="spanerrormsg-q8"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q9">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Normal work (includes work both outside the home and
                        housework).</label>
                    <input type="text" class="form-control" id="q9" value="<?php echo $row['q9'];  ?>" placeholder="Enter score (0-10)" name="q9">
                    <span class="error" id="spanerrormsg-q9"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q10">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: RelaTonships with other people.</label>
                    <input type="text" class="form-control" id="q10" value="<?php echo $row['q10'];  ?>" placeholder="Enter score (0-10)" name="q10">
                    <span class="error" id="spanerrormsg-q10"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q11">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Sleep.</label>
                    <input type="text" class="form-control" id="q11" value="<?php echo $row['q11'];  ?>" placeholder="Enter score (0-10)" name="q11">
                    <span class="error" id="spanerrormsg-q11"></span>
                </div>
                <div class="mb-3 mt-3">
                    <label for="q12">Based on the number that best describes how during the past week pain has
                        INTERFERED with your: Enjoyment of life.</label>
                    <input type="text" class="form-control" id="q12" value="<?php echo $row['q12'];  ?>" placeholder="Enter score (0-10)" name="q12">
                    <span class="error" id="spanerrormsg-q12"></span>
                </div>
            </div>
            <h2>Total Score</h2>
            <div class="mb-3 mt-3">
                <label for="total_score">Total score</label>
                <input type="text" class="form-control" id="total_score" value="<?php echo $row['total_score'];  ?>" placeholder="Enter Total Score"
                    name="total_score">
            </div>
            <a class="btn btn-primary" href="edit.php?id=<?php echo $row["id"];  ?>">Edit</a>
            <!-- <a class="btn btn-primary" href="delete.php?id=<?php echo $row["id"];  ?>">Delete</a> -->
            <a class="btn btn-primary" href="patientresponse.php?deleteid=<?php echo $row["id"];  ?>">Delete</a>
            
        </form>
    </div>
</body>
</html>
