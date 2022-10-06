<?php include_once 'insertDB.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <!-- css link -->
    <link rel="stylesheet" href="insert.css">    
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        
        <h1 class="heading mt-2 mb-5 text-center">Student Management System</h1>
        
        <a href="home.php"><button type="button" class="btn btn-dark">Back</button></a>
        
        <form action="insert.php" method="POST" class="row g-3 needs-validation"  novalidate>
            <div class="row-md-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" name="fname" class="form-control" id="validationCustom01" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="row-md-4">
              <label for="validationCustom02" class="form-label">Last name</label>
              <input type="text" name="lname" class="form-control" id="validationCustom02" autocomplete="off" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="row-md-4">
                <label for="validationCustom03" class="form-label">Phone Number</label>
                <input type="tel" name="phone" class="form-control" id="validationCustom03" autocomplete="off" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>

            

            <div class="row-md-1">
              <label for="validationCustom04" class="form-label">Address</label>
              <input type="text" name="add" class="form-control" id="validationCustom04" autocomplete="off" required>
              <div class="invalid-feedback">
                Please provide a valid address.
              </div>
            </div>


            <div class="row-md-3">
              <label for="validationCustom05" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="validationCustom05" autocomplete="off" required>
              <div class="invalid-feedback">
                Please provide a valid email.
              </div>
            </div>

            
            <div class="col-12">
              <button class="btn btn-primary" name="submit" type="submit">Register Student</button>
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