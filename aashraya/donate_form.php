<?php
echo 'Donation';
// Database connection
include "config.php";
if (isset($_POST['donate'])) {
    $gender = $_POST['gender'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $add1 = $_POST['add1'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $amount = $_POST['amount'];
    
    $insertQuery = "insert into donation(gender,fullname,email,number,add1,city,state,pincode,amount)
            	values('{$gender}','{$fullname}','{$email}','{$number}','{$add1}','{$city}','{$state}','{$pincode}','{$amount}')";
    $result = mysqli_query($conn, $insertQuery) or die('Query Failed');
    if ($result) {
?> <script>
  
           window.location.href = 'http://localhost/aashraya/donate.php';

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