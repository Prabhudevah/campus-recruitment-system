<style>
    .sidebar {
        width: 260px;
        height: 100%;
        position: fixed;
        background-color:#2E4053;
        padding: 15px;

    }

    .sidebar>a {
        text-decoration: none;
    }

    a>p {

        border: 2px solid white;
        border-radius: 5px;
        padding: 6px;
        color: white;

    }

    p:hover {

        background-color: white;
        color: black;

    }

    .main {
        margin-left: 300px;

    }

    .btn-drop {
        width: 240px;
        color: white;
    }

    .btn-drop:hover {
        background-color: white;
        color: black;
    }


</style>

<div class="sidebar">
    <br>
    <br>
    <h5 class="text-center text-white">Admin Dashboard</h5>
    <hr style="border:1px solid white;">
    <a href="./admin_dashboard.php">
        <p><i class="fa fa-dashboard" style="font-size:20px"></i>&nbsp;Dashboard</p>
    </a>
    <a href="./add_student.php">
        <p><i class='fa fa-user' style='font-size:20px'></i>&nbsp;Student</p>
    </a>
    <a href="./student_list.php">
        <p><i class='fa fa-user' style='font-size:20px'></i>&nbsp;Student List</p>
    </a>
    <!-- <a href="./placed_student.php">
        <p><i class='fa fa-user' style='font-size:20px'></i>&nbsp;placed student</p>
    </a> -->
    <a href="./placed_student_list.php">
        <p><i class='fa fa-user' style='font-size:20px'></i>&nbsp;placed studentlist</p>
        </a>
    <!-- <a href="./add_student.php">
        <p><i class='fa fa-user' style='font-size:20px'></i>&nbsp;Logout</p>
    </a> -->
    <!-- <a href="./add_courses.php">
        <p>Add Courses</p>
    </a> -->
    <!-- <a href="./placed_studentList.php">
        <p>Add placed_student</p>
    </a> -->
    <!-- <a href="./placed_studentlist.php">
        <p>Add placed_studentlist</p>
    </a> -->
</div>