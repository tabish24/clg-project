<?php

$errors = [];
$data = [];

// print_r($_POST);


if (isset($_POST)){
    $fname = $_POST['name'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $mobno = $_POST['phone'];
    $programme = $_POST['prog'];
    $courses = $_POST['courses'];

    $server_name = 'localhost'; 
    $user_name = 'root';
    $password= 'root';
    $dbname = 'registration';
    
    $con = mysqli_connect($server_name, $user_name, $password, $dbname);

    if (!$con) {
        die("Failed ". mysqli_connect_error());
    }
    // echo "Connection established successfully";

    #
    #INSERT INTO users (fname,lname,email,mobno,programme,courses) VALUES('Tabish','jamal','jamaltab24@gmail.com','0897947539','bachelor','BBA') ON DUPLICATE KEY UPDATE mobno='0897947539';
    $query = "INSERT INTO users (fname,lname,email,mobno,programme,courses) VALUES('$fname','$lname','$email','$mobno','$programme','$courses') ON DUPLICATE KEY UPDATE mobno='$mobno';";
    // echo "$query";
    // Perform query
    $result = mysqli_query($con, $query);
    
    $query2 = "select tableno from courses where course = '$courses';";
    $str = '';
        $result2 = mysqli_query($con, $query2);
        while ($row = mysqli_fetch_array($result2)) {
            $str .= $row[0];
        }


echo $str;
mysqli_close($con);
return $str;

}

else{
    print_r($POST);
    echo "Please Enter Proper values to start";
    
}

// echo json_encode($data);

?>