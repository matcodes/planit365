<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Planit365</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='/main.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <div class="container my-5" style="background-color: white;width: 70%;height: 80%;padding:5px;border-top: 4px solid grey;">
    <div style="border-top: 4px solid black;margin-top: -9px;width: 170px"></div>    
     
    <form action="<?php echo base_url('client/step1');?>" method="POST">
        <div class=" ml-2 pl-4 my-4">
        <p style="font-size:larger;font-weight: bold" class="ml-1 pl-5">Please Select Your</p>
        <h6 class="ml-1 pl-5">Date & Time:</h6>
        <input type="date" class=" ml-5 p-2 col-10" style="border:1.5px solid black;" placeholder="Date & Time" >
        <p style="font-size:larger;font-weight: bold" class="ml-1 pl-5 my-2">Preference</p>
        </div>
        <div class="container pt-2" >
            <div class="row justify-content-center">
                <input type="button" class="btn btn-outline-dark p-3 m-1  col-md-3" name="interest" value="Relaxing" data-toggle="button" aria-pressed="false" onclick={selectInterest(this)}>
                <input type="button" class="btn btn-outline-dark p-3 m-1  col-md-3" name="interest" value="Adventrous"  data-toggle="button" aria-pressed="false" onclick={selectInterest(this)}>
                <input type="button" class="btn btn-outline-dark p-3 m-1  col-md-3" name="interest" value="Adrenaline Junkie" data-toggle="button" aria-pressed="false" onclick={selectInterest(this)}>
            </div>
            <div class="row justify-content-center">
                <input type="button" class="btn btn-outline-dark p-3 m-1  col-md-3" name="interest" value="Relaxing And Adventrous" data-toggle="button" aria-pressed="false" onclick={selectInterest(this)}>
            </div>
            <div class="row my-4 ml-2 justify-content-end">
               <button type="submit" class="btn btn-dark px-5 py-3">NEXT</button>
           </div>
        

    </form>
    </div>
    <script src='main.js'></script>
    <script>

    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>