<?php include_once 'conn.php'; 

$id=$_GET['updateid'];
$sql = "SELECT * FROM studentreg where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$fname= $row['firstname'];
$lname = $row['lastname'];
$phone = $row['phone'];
$add = $row['address'];
$email = $row['email'];
        
if(isset($_POST['submit'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $add = $_POST['add'];
  $email = $_POST['email'];
  $query = "UPDATE studentreg set id=$id, firstname='$fname', lastname='$lname', phone='$phone', address='$add', email='$email' where id=$id";
  $result = mysqli_query($con, $query);
  if($result){
      header('location:display.php');
  }else{
    die('Database connection failed'  . mysqli_connect_errno());
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <!-- css link -->
    <link rel="stylesheet" href="update.css">
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="container">
    
        <h1 class="heading mt-2 mb-5 text-center">Student Management System</h1>
        <a href="display.php"><button type="button" class="btn btn-dark">Back</button></a>

        <form method="POST" class="">
            <div class="row-md-4 mt-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" name="fname" class="form-control" id="validationCustom01"  required value=<?php echo $fname; ?>>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="row-md-4 mt-4">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" name="lname" class="form-control" id="validationCustom02" value=<?php echo $lname; ?> required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="row-md-4 mt-4">
                <label for="validationCustom03" class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" id="validationCustom03" value=<?php echo $phone; ?> required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

            

            <div class="row-md-1 mt-4">
              <label for="validationCustom04" class="form-label">Address</label>
              <input type="text" name="add" class="form-control" id="validationCustom04" value=<?php echo $add; ?> required>
              <div class="invalid-feedback">
                Please provide a valid address.
              </div>
            </div>


            <div class="row-md-3 mt-4">
              <label for="validationCustom05" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="validationCustom05" value=<?php echo $email; ?> required>
              <div class="invalid-feedback">
                Please provide a valid email.
              </div>
            </div>

            
            <div class="col-12 mt-3 text-center">
              <button class="btn btn-primary w-50" name="submit">Update</button>
            </div>

          </form>
    </div>

    <script>
        (() => {
          'use strict'

          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          const forms = document.querySelectorAll('.needs-validation')

          // Loop over them and prevent submission
          Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
              }
            
              form.classList.add('was-validated')
            }, false)
          })
        })()
    </script>
    
</body>
</html>