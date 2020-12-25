<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservations Confirmation</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: #fff;
            letter-spacing: 1px;
            background: url('background pic/reservation.png') no-repeat;
            background-size: cover;
            backdrop-filter: blur(2px);
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="confirmation">
        <h1 style="color:red">Congrates!</h1><br>
    </div>
    <?php
    // create a variable
    $conn = new mysqli("localhost", "root", "", "RestaurantDb");
    if (!$conn) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    $CName = $_POST['cname'];
    $CEmail = $_POST['cmail'];
    $date = $_POST['dt'];
    $time = $_POST['tm'];
    $persons = $_POST['select'];
    $chk = $_POST['chair'];
    //Execute the query
    $sql = "INSERT INTO Reservations (CustomerName, CustomerEmail, Date, Time, Persons, CheckBtn)
    VALUES ('$CName', '$CEmail', '$date', '$time', '$persons', '$chk')";

    if (mysqli_query($conn, $sql)) {
        echo $CName . " Your Reservations is Completed.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    // Close connection
    mysqli_close($conn);
    ?>


</body>

</html>