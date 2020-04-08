<?php 
error_reporting(0);

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planit 365</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>  

     <style>
       body{
            background-color:#F5F5F5; 
        }
</style>
</head>
<body>

        <?php  if($error=$this->session->flashdata('Login_failed')) : ?>
                      
                        <div class="col-lg-12">
                          <div class="alert alert-danger ">
                            <?php echo $error;?>
                          </div>
                        </div>
                     
            <?php  endif; ?>
             <div style="text-align: center;margin-top: 30px;" >
        <img src="<?php echo base_url();?>assets/images/planit.png">
        </div>
    <div class="container my-5">
 <!--     
    <form class="container w-50 my-5 needs-validation" action="<?php echo base_url();?>Login/index"  method="post"  novalidate>
        <div class="container pt-3">
            <div class="row justify-content-center my-1 ">
            <input type="text" class="col-12 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="email" id="uname" name="user_id" required>
            </div>
            <div class="row justify-content-center pt-2">
                <input type="password" class="col-12 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="password" id="pswd" name="pswd" required>
                </div>
            <div class="row justify-content-center my-4">
               <button type="submit" class="btn btn-dark col-12 p-3 " style="border-radius: 5px;">Start Free Trial</button>
           </div>
    </form>
 -->
     <form class="container w-75 my-5 needs-validation"  action="<?php echo base_url();?>Login/index"  method="post" novalidate>
        <div class="container w-50 py-sm-3 formset" style="border-top: 2px solid black;background-color: white;">
            <div class="row justify-content-center my-4 ">
            <input type="text" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="email"  id="uname" name="user_id" required>
            </div>
            <div class="row justify-content-center">
                <input type="password" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="password"  id="pswd" name="pswd" required>
                </div>
            <div class="row justify-content-center my-4">
               <button type="submit" class="btn btn-dark col-8 p-3 " style="border-radius: 5px;">Login</button>

           </div>
           <div class="row justify-content-center my-4">
               <a href="vendor/register">Vendor SignUp</a>
             </div>
           
    </form>

    </div>

				<!-- 	 <form action="<?php echo base_url();?>Login/index" class="needs-validation"  method="post"  novalidate>
                            <div class="form-group">
                            
                                <input type="text" class="form-control" id="uname" placeholder="Enter Admission No" name="user_id" required>
                                <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control form-control2" id="pswd" placeholder="Enter Password" name="pswd" required>
                                <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <button type="submit" class="btn ">LOGIN</button>
                          </form> -->
	 <script>
                            // Disable form submissions if there are invalid fields
                            (function() {
                              'use strict';
                              window.addEventListener('load', function() {
                                // Get the forms we want to add validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                  form.addEventListener('submit', function(event) {
                                    if (form.checkValidity() === false) {
                                      event.preventDefault();
                                      event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                  }, false);
                                });
                              }, false);
                            })();
                            </script>




   
</body>
</html>
