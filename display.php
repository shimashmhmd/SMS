<?php include_once 'conn.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <!-- css link -->
    <link rel="stylesheet" href="display.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="heading mt-2 text-center">Student Management System</h1>

        <a href="home.php"><button type="button" class="back btn btn-dark">Back</button></a>
        <a href="insert.php"><button class="btn btn-primary" >Add Student</button></a>

        <table class="table my-5">
            <thead>
              <tr> 
                <th scope="col">Student ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>

              <?php
                $sql = "SELECT * FROM studentreg";
                $result = mysqli_query($con, $sql);
                if($result){
                  while($row = mysqli_fetch_assoc($result)){

                    $id=$row['id'];
                    $fname=$row['firstname'];
                    $lname=$row['lastname'];
                    $phone=$row['phone'];
                    $add=$row['address'];
                    $email=$row['email'];
                    echo'<tr>
                    <th scope="row" class="col-1">'.$id.'</th>
                    <td class="col-2">'.$fname.'</td>
                    <td class="col-1">'.$lname.'</td>
                    <td class="col-1">'.$phone.'</td>
                    <td class="col-3">'.$add.'</td>
                    <td class="col-2">'.$email.'</td>

                    <td>
                    <a href="update.php?updateid='.$id.'" class="text-light"><button class="btn btn-primary">Update</button></a>
                    <a href="delete.php?deleteid='.$id.'" class="text-light"><button class="btn btn-danger">Delete</button></a>
                    </td>

                    </tr>';
                  }
                }
              ?>
            
            </tbody>
      </table>
    </div>
  </body>
</html>