<?php
echo 'Contact Us';
// Database connection
include "config.php";
if (isset($_POST['submit'])) {
    $subject = $_POST['subject'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insertQuery = "insert into contact(subject,fullname,email,message)
            	values('{$subject}','{$fullname}','{$email}','{$message}')";
    $result = mysqli_query($conn, $insertQuery) or die('Query Failed');
    if ($result) {
?> <script>
  
           window.location.href = 'http://localhost/aashraya/contact.php';

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