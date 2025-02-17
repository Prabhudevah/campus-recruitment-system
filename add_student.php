<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <?php include './links.php'; ?>
    <?php include './admin_sidebar.php'; ?>
</head>

<style>
    .details {
        box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
    }

    .card-header {
        background-color: #707B7C;
        color: white;``
        font-size: 18px;
    }

    .btn {
        background-color: #2E4053;
        color: white;
        width: 120px;

    }
</style>

<body>

    <div class="main">
        <br>
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Add New Student</h5>
                </div>
            </div>
            <br>
        </div>

        <div class="container">
            <form action="./DB_Student.php" method="post">
                <!--basic details-->
                <div class="card details">
                    <div class="card-header">Basic Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First name" name="first_name">
                            </div>
                            <div class="col">
                                <label>Middel Name</label>
                                <input type="text" class="form-control" placeholder="Middel Name" name="Middel_Name">
                            </div>
                            <div class="col">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last name" name="last_name">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="mobile">
                            </div>
                            <div class="col">
                                <label>Alternative Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Alternative Mobile Number" name="alnumber">
                            </div>

                            <div class="col">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" placeholder="date of birth" name="dob">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" name="city">
                            </div>
                            <div class="col">
                                <label>State</label>
                                <input type="text" class="form-control" placeholder="State" name="state">
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select gender</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Address</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--basic details end-->

                <!--education details-->
                <br>
                <div class="card details">
                    <div class="card-header">Educational Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label>class X</label>
                                <input type="text" class="form-control" placeholder="" readonly name="class_x" value="class_x">
                            </div>
                            <div class="col">
                                <label>Passing out year</label>
                                <input type="date" class="form-control" placeholder="Last name" name="class_x_poy">
                            </div>
                            <div class="col">
                                <label>Marks</label>
                                <input type="text" class="form-control" placeholder="Marks" name="class_x_marks">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select stream</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="stream">
                                        <option>PUC</option>
                                        <option>Diploma</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label>Passing out year</label>
                                <input type="date" class="form-control" placeholder="Passing out year" name="class_12_poy">
                            </div>

                            <div class="col">
                                <label>Marks</label>
                                <input type="text" class="form-control" placeholder="Marks" name="class_12_marks">
                            </div>
                        </div>
                    </div>
                </div>
                <!--education details end-->

                <br>
                <!--graduation details-->
                <div class="card details">
                    <div class="card-header">Graduation Details</div>
                    <div class="card-body">
                        <div class="row mt">
                            <div class="col">
                                <label>College Name</label>
                                <input type="text" class="form-control" placeholder="College name" name="college_name">
                            </div>

                            <div class="col">
                                <label>University Name</label>
                                <input type="text" class="form-control" placeholder="University name" name="university_name">
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select branch</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="branch">
                                        <option>Mechanical Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Electronics and Communication</option>
                                        <option>Computer Science</option>
                                        <option>Electrical engineering</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                        <div class="col">
                                <label>USN</label>
                                <input type="text" class="form-control" placeholder="USN" name="usn">
                            </div>
                            <div class="col">
                                <label>SGPA </label>
                                <input type="text" class="form-control" placeholder="SGPA" name="sgpa">
                            </div>
                            <div class="col">
                                <label>CGPA</label>
                                <input type="text" class="form-control" placeholder="CGPA" name="cgpa">
                            </div>

                            <div class="col">
                                <label>Year of passing</label>
                                <input type="date" class="form-control" placeholder="Year of passing" name="college_yop">
                            </div>
                        </div>
                        <hr>
                        <p>Course type</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1"
                                value="full_time" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Full time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="course_type" id="exampleRadios1"
                                value="part_time" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Part time
                            </label>
                        </div>
                    </div>
                </div>
                <!--Graduation details end-->

                <!--Professional details-->
                <br>
                <div class="card details">
                    <div class="card-header">Professional Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <label>Current company name</label>
                                <input type="text" class="form-control" placeholder="Company name" name="company_name">
                            </div>
                            <div class="col">
                                <label>Designation</label>
                                <input type="text" class="form-control" placeholder="Designation" name="designation">
                            </div>

                            <div class="col">
                                <label>Total experiance</label>
                                <input type="text" class="form-control" placeholder="Total experiance" name="total_exp">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label>Current salary</label>
                                <input type="text" class="form-control" placeholder="Current salary" name="salary">
                            </div>
                            <div class="col">
                                <label>Location</label>
                                <input type="text" class="form-control" placeholder="Location" name="location">
                            </div>


                        </div>
                    </div>
                </div>
                <!--Professional details end-->
                <br>
                <button type="submit" class="btn">Submit</button>
                <br>
                <br>
            </form>
        </div>

    </div>
</body>

</html>