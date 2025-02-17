<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <?php include './links.php'; ?>
    <?php include './admin_sidebar.php'; ?>
</head>

<body>

    <div class="main">
        <br>
        <div class="container">
            <div class="card shadow">
                <div class="card-body">
                    <h5>Placed Students List</h5>
                </div>
            </div>
        </div>

        <div class="container mt-4 card shadow">
        <table class="table table-borderd" id="table-id">
                <thead>
                    <tr>
                        <th>USN</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile</th>
                        <th>Gender</th>
                        <th>Company Name</th>
                        <th>Salary</th>
                        <th>Designation</th>
                        <th>Location</th>
                        
                    </tr>
                </thead>
                <tbody id="user_data">
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>


<script type="text/javascript">
        $(document).ready(function(){

            $.ajax(
            {
              type: "POST",
              url: "placed_studentDB.php",
              dataType:'json',
              success: function(response)
              {
    
                var tbody = '';
                for(var i in response.id){
                    
                    tbody += '<tr><td>'+response.usn[i]+'</td><td>'+response.firstName[i]+'</td><td>'+response.lastName[i]+'</td><td>'+response.mobile[i]+'</td><td>'+response.gender[i]+'</td><td>'+response.company_name[i]+'</td><td>'+response.salary[i]+'</td><td>'+response.designation[i]+'</td><td>'+response.location[i]+'</td></tr>';
                }

                $('#user_data').html(tbody);
                $("#table-id").dataTable();
               
              }
          });

        });
    </script>