<?php
echo 'Volunteer';
// Database connection
include "config.php";
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $add1 = $_POST['add1'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $occupation= $_POST['occupation'];
    $time= $_POST['time'];
    $duration= $_POST['duration'];
    $insertQuery = "insert into volunteer(fullname,email,number,date,gender,add1,city,state,pincode,occupation,time,duration)
            	values('{$fullname}','{$email}','{$number}','{$date}','{$gender}','{$add1}','{$city}','{$state}','{$pincode}','{$occupation}','{$time}','{$duration}')";
    $result = mysqli_query($conn, $insertQuery) or die('Query Failed');
    if ($result) {
?> <script>
  
           window.location.href = 'http://localhost/aashraya/volunteer.php';

        </script>
    <?php
    } else {

    ?> <script>
            alert('Not Inserted');
        </script>
<?php

    }
} else{
    echo " connection failed";
}

?>