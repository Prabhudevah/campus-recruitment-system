<?php
include './dbConnect.php';

// $studentList = array();
$queryGetStudentList = "SELECT * FROM student_tbl WHERE company_name != ''";
$res = $conn->query($queryGetStudentList);
if($res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        $id[] = $row['id'];
        $firstName[] = $row['first_name'];
        $lastName[] = $row['last_name'];
        $email[] = $row['email'];
        $mobile[] = $row['mobile'];
        $dob[] = $row['dob'];
        $city[] = $row['city'];
        $state[] = $row['state'];
        $gender[] = $row['gender'];
        // $address = $row['address'];
        // $class_x = $row['class_x'];
        // $class_x_poy = $row['class_x_poy'];
        // $class_x_marks = $row['class_x_marks'];
        // $stream = $row['stream'];
        // $class_12_poy = $row['class_12_poy'];
        // $class_12_marks = $row['class_12_marks'];
        // $collegeName = $row['college_name'];
        // $universityName = $row['university_name'];
        // $branch = $row['branch'];
        $usn[] = $row['usn'];
        // $sgpa = $row['sgpa'];
        // $cgpa = $row['cgpa'];
        // $college_yop = $row['college_yop'];
        // $courseType = $row['course_type'];
        $companyName[] = $row['company_name'];
        $designation[] = $row['designation'];
        $total_exp[] = $row['total_exp'];
        $salary[] = $row['salary'];
        $location[] = $row['location'];
        // $date = $row['date'];

        // array_push($studentList,array(
        //     'id'=>$id,
        //     'firstName'=>$firstName,
        //     'lastName'=>$lastName,
        //     'email'=>$email,
        //     'mobile'=>$mobile,
        //     'dob'=>$dob,
        //     'city'=>$city,
        //     'state'=>$state,
            // 'gender'=>$gender,
        //     'usn'=>$usn
        // ));
    }

          $studentList = array(
            'id'=>$id,
            'firstName'=>$firstName,
            'lastName'=>$lastName,
            'email'=>$email,
            'mobile'=>$mobile,
            'dob'=>$dob,
            'city'=>$city,
            'state'=>$state,
            'gender'=>$gender,
            'usn'=>$usn,
            'company_name'=>$companyName,
            'designation'=>$designation,
            'salary'=>$salary,
            'location'=>$location

        );
}else{
    echo json_encode(array("result"=>'No Data'));
}

echo json_encode($studentList);
?>

