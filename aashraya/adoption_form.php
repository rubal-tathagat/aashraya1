<?php
echo 'Adoption';
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
    $petage= $_POST['petage'];
    $petgender= $_POST['petgender'];
    $insertQuery = "insert into adoption(fullname,email,number,date,gender,add1,city,state,pincode,petage,petgender)
            	values('{$fullname}','{$email}','{$number}','{$date}','{$gender}','{$add1}','{$city}','{$state}','{$pincode}','{$petage}','{$petgender}')";
    $result = mysqli_query($conn, $insertQuery) or die('Query Failed');
    if ($result) {
?> <script>
  
           window.location.href = 'http://localhost/aashraya/adoption.php';

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