
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
             <div style="text-align: center;margin-top: 30px;" >
        <img src="<?php echo base_url();?>assets/images/planit.png">
        </div>
    <div class="container my-5">

     <form class="container w-100 my-5 needs-validation"  action="<?php echo base_url();?>vendor/success"  method="post" novalidate>
        <div class="container w-50 py-sm-3 formset" style="border-top: 2px solid black;background-color: white;">
            <div class="row justify-content-center my-4 ">
            <input type="text" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="Name"  id="uname" name="user_id" required>
            </div>
            <div class="row justify-content-center my-4 ">
                           <input type="number" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="Phone No"  id="uname" name="user_id" required>
                </div>
                 <div class="row justify-content-center my-4 ">
                           <input type="text" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="Website Link"  id="uname" name="user_id" required>
                </div>
                 <div class="row justify-content-center my-4 ">
                           <input type="text" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;" placeholder="Address"  id="uname" name="user_id" required>
                </div>
                 <div class="row justify-content-center my-4 ">
                           <input type="text" class="col-sm-8 p-3" style="border: 1.1px solid black;border-radius: 5px;height: 100px;" placeholder="Description"  escriptionid="uname" name="user_id" required>
                </div>
            <div class="row justify-content-center my-4 my-4 ">
               <button type="submit" class="btn btn-dark col-8 p-3 " style="border-radius: 5px;">Register</button>
           </div>
    </form>
    </div>

	




   
</body>
</html>
