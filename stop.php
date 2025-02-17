<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placed_studentsList </title>
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
                    <h5>Placed student details</h5>
                </div>
            </div>
            <br>
        </div>

        <div class="container">
            <form action="./placed_student.php" method="post">
                        <div class="row">
                            <div class="col">
                                <label>USN</label>
                                <input type="text" class="form-control" placeholder="USN" name="USN">
                            </div>
                            <div class="col">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder=" Name" name="Name">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlSelect1">Select branch</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="Branch">
                                        <option>Mechanical Engineering</option>
                                        <option>Civil Engineering</option>
                                        <option>Electronics and Communication</option>
                                        <option>Computer Science</option>
                                        <option>Electrical engineering</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col">
                                <label>Salary</label>
                                <input type="text" class="form-control" placeholder="Current salary" name="salary">
                            </div> 
                            <div class="col">
                                <label>Current company name</label>
                                <input type="text" class="form-control" placeholder="Company name" name="company_name">
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select gender</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <br>
                <button type="submit" class="btn">Submit</button>
                <br>
                <br>
            </form>
        </div>

    </div>
</body>

</html>
