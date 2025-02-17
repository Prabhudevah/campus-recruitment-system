<?php

include './dbConnect.php';
//baisc info
$firstName = $_POST['first_name'];
$MiddelName=$_POST['Middel_Name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$AlternativeMobileNumber = $_POST['alnumber'];

// echo $AlternativeMobileNumber;
// exit();

$dob = $_POST['dob'];
$city = $_POST['city'];
$state = $_POST['state'];
$gender = $_POST['gender'];
$address = $_POST['address'];

//Education Details
$class_x = $_POST['class_x'];
$class_x_poy = $_POST['class_x_poy'];
$class_x_marks = $_POST['class_x_marks'];

$stream = $_POST['stream'];
$class_12_poy = $_POST['class_12_poy'];
$class_12_marks = $_POST['class_12_marks'];

//Graduation details
$college_name = $_POST['college_name'];
$university_name = $_POST['university_name'];
$branch = $_POST['branch'];
$usn = $_POST['usn'];
$sgpa = $_POST['sgpa'];
$cgpa = $_POST['cgpa'];
$college_yop = $_POST['college_yop'];
$course_type = $_POST['course_type'];

//Professional details
$company_name = $_POST['company_name'];
$designation = $_POST['designation'];
$total_exp = $_POST['total_exp'];
$salary = $_POST['salary'];
$location = $_POST['location'];

//today date
$date = date('Y-m-d H:i:s');

$queryInsertStudent = "INSERT INTO student_tbl(first_name,Middlename,last_name,email,mobile,AlternativeMobileNumber,dob,city,state,gender,address,class_x,class_x_poy,class_x_marks,stream,class_12_poy,class_12_marks,college_name,university_name,branch,usn,sgpa,cgpa,college_yop,course_type,company_name,designation,total_exp,salary,location,date) VALUES ('$firstName','$MiddelName','$lastName','$email','$mobile','$AlternativeMobileNumber','$dob','$city','$state','$gender','$address','$class_x','$class_x_poy','$class_x_marks','$stream','$class_12_poy','$class_12_marks','$college_name','$university_name','$branch','$usn','$sgpa','$cgpa','$college_yop','$course_type','$company_name','$designation','$total_exp','$salary','$location','$date')";

if($conn->query($queryInsertStudent) == TRUE){
    // echo "Ok";
    echo("<script LANGUAGE='javascript'>
    window.alert('Data Inserted Success');
    window.location.href='./add_student.php';
    </script>");
}else{
    echo "Error: " . $queryInsertStudent . "<br>" . $conn->error;
}

?>
