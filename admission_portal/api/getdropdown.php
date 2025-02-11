<?php

$errors = [];
$data = [];

if (isset($_POST['prog'])){
    $prog= $_POST['prog'];
}
else{
    $prog = 'bachelor';
}

$server_name = 'localhost'; 
$user_name = 'root';
$password= 'root';
$dbname = 'registration';

$con = mysqli_connect($server_name, $user_name, $password, $dbname);

if (!$con) {
    die("Failed ". mysqli_connect_error());
  }



$query = "select distinct course,course_code from courses where prog='$prog';";

  // Perform query
$result = mysqli_query($con, $query);

if (!$result) {
    trigger_error(mysqli_error($con), E_USER_ERROR);
}

$str = '<label class="form-label " for="courses">Courses:</label><select class="form-select input-text " id="courses" required ><option value="" disabled selected >Select Courses</option>';
while ($row = mysqli_fetch_array($result)) {
        $str .="<option value=".$row[1].">".$row[0]."</option>\n";
   
}
$str .= '</select>';
echo $str;
mysqli_close($con);
return $str;

?>