<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planit365</title>

  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">

</head>

<body style="background-color: whitesmoke;">
  <div class="container bg-light px-0">
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper" style="background-color: white;">
      <div class="sidebar-heading">
        <img src="<?php echo base_url();?>assets/images/planit.png" style="width: 200px;">

      </div>
     <div class="list-group list-group-flush sticky-top">
        <a href="index" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;"  data-target="#staticBackdrop">Home</a>
        <a href="users" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;"  data-target="#staticBackdrop">Users</a>
         <a href="order_booking" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;"  data-target="#staticBackdrop">Orders and Bookings</a>
         <a href="vendors" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;" data-target="#staticBackdrop">Vendors</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;" data-toggle="modal" data-target="#staticBackdrop">Dashboards</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light border-bottom sticky-top" style="background-color: white;height:73px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h6>You're logged as : Admin</h6>
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0" style="background-color: white;">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <img src="https://img.icons8.com/carbon-copy/100/000000/bell.png" style="width:35px;padding-top:2px;"/>
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><img src="https://img.icons8.com/ios/100/000000/help.png" style="margin-left:5px;width:24px;padding-top:7px "/></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" ><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                width="30" height="30"
                viewBox="0 0 172 172"
                style=" fill:#000000;margin-top: 4px;margin-left:4px ;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#333333"><path d="M86,16.125c-38.52783,0 -69.875,31.34717 -69.875,69.875c0,38.52783 31.34717,69.875 69.875,69.875c38.52783,0 69.875,-31.34717 69.875,-69.875c0,-38.52783 -31.34717,-69.875 -69.875,-69.875zM86,26.875c32.71192,0 59.125,26.41309 59.125,59.125c0,32.71192 -26.41308,59.125 -59.125,59.125c-32.71191,0 -59.125,-26.41308 -59.125,-59.125c0,-32.71191 26.41309,-59.125 59.125,-59.125zM86,43c-14.78125,0 -26.875,12.09375 -26.875,26.875c0,8.14648 3.80029,15.39014 9.57422,20.32422c-12.09375,6.27783 -20.32422,18.91748 -20.32422,33.42578h10.75c0,-14.90722 11.96778,-26.875 26.875,-26.875c14.90723,0 26.875,11.96778 26.875,26.875h10.75c0,-14.5083 -8.23047,-27.14795 -20.32422,-33.42578c5.77393,-4.93408 9.57422,-12.17773 9.57422,-20.32422c0,-14.78125 -12.09375,-26.875 -26.875,-26.875zM86,53.75c8.96533,0 16.125,7.15967 16.125,16.125c0,8.96533 -7.15967,16.125 -16.125,16.125c-8.96533,0 -16.125,-7.15967 -16.125,-16.125c0,-8.96533 7.15967,-16.125 16.125,-16.125z"></path></g></g></svg></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="https://img.icons8.com/material-rounded/100/000000/expand-arrow.png" style="width:35px;"/>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#"></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"></a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
<!-- Content Part -->
                <h2 style="text-align: center;">Orders and Bookings</h2>

      <div class="container my-5" style="background-color: white;width:65vw;height: 75vh;text-align: center;">

        <div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h4>Vendor Bookings</h4>
        <ul class="tabs">
          <li class="tab-link current" data-tab="tab-1">Agent Bookings</li>
          <li class="tab-link" data-tab="tab-2">Customer Bookings</li>
        </ul>
        <div id="tab-1" class="card-body tab-content current">
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-details">
                   
                   <thead>
                   
                   <th>Vendor Name</th>
                    <th>Booking Date</th>
                     <th>Booking Time</th>
                     <th>Customer Name</th>
                     <th>Amount Quoted</th>
                   </thead>
    <tbody>
    
    <tr class="info-row">
    <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>

    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>   
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>

 <tr class="info-row">
    <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>   
    
   
    
    </tbody>


</table>


<div class="clearfix"></div>

                
            </div>
</div>
<div id="tab-2" class="card-body tab-content">
        <div class="table-responsive">

                
        <table id="mytable" class="table table-bordred table-details">
                   
                   <thead>
                   
                   <th>Vendor Name</th>
                    <th>Booking Date</th>
                     <th>Booking Time</th>
                     <th>Customer Name</th>
                     <th>Amount Quoted</th>
                   </thead>
    <tbody>
    
    <tr class="info-row">
    <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>

    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>   
    
 <tr class="info-row">
     <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>

 <tr class="info-row">
    <td>Malibu Riders Horse</td>
    <td>15/04/2020</td>
    <td>7:00 pm</td>
    <td>Rudy</td>
    <td>$200</td>
    </tr>
    
    <tr class="details text-left">
      <td colspan="2">
        <strong>Preference:</strong>
        Adventurous
      </td>
      <td colspan="3">
      <strong>Experience LA:</strong> The Valley Experience <br />
      <strong>Girls/Guys Just Wanna Have Fun:</strong> Signature Experience and More <br />
      <strong>Plan A Great Date/Day:</strong> Signature Experience and More <br />

      </td>
    </tr>   
    
   
    
    </tbody>


</table>


<div class="clearfix"></div>

                
            </div>
</div>

        </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
      </div>
            <center><button class="btn btn-primary">View All</button></center>






   <div class="container my-5" style="background-color: white;width:65vw;height: 75vh;text-align: center;">
        <div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h4>Customer Orders</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred ">
                   
                   <thead>
                   
                   <th>Customer Name</th>
                    <th>Booking Date</th>
                     <th>Booking Type</th>
                     <th>Vendors Booked</th>
                     <th>Amount Paid</th>
                      <th>Edit</th>
                       <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
    <td>Rudy</td>
    <td>15/04/2020</td>
    <td>Rough Tumble</td>
    <td>Malibu Rider</td>
    <td>$500</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
    </tr>
    
 <tr>
     <td>Rudy</td>
    <td>15/04/2020</td>
    <td>Rough Tumble</td>
    <td>Malibu Rider</td>
    <td>$500</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
    </tr>
    
    
 <tr>
     <td>Rudy</td>
    <td>15/04/2020</td>
    <td>Rough Tumble</td>
    <td>Malibu Rider</td>
    <td>$500</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
    </tr>
    
    
    
 <tr>
   <td>Rudy</td>
    <td>15/04/2020</td>
    <td>Rough Tumble</td>
    <td>Malibu Rider</td>
    <td>$500</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
    </tr>
    
    
 <tr>
  <td>Rudy</td>
    <td>15/04/2020</td>
    <td>Rough Tumble</td>
    <td>Malibu Rider</td>
    <td>$500</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil"></i></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button></p></td>
    </tr>
    
   
    
   
    
    </tbody>
        
</table>

<div class="clearfix"></div>

                
            </div>
            
        </div>
  </div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Mohsin">
        </div>
        <div class="form-group">
        
        <input class="form-control " type="text" placeholder="Irshad">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    
        
        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
      </div>
              <center><button class="btn btn-primary ">View All</button></center>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  </div>
  <!-- /#wrapper -->
  <!-- Model -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-light">
          <h5 class="modal-title" id="staticBackdropLabel">Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Working On This Field
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- #Model  -->

  <!-- Bootstrap core JavaScript -->
   <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $(".table-details .details").hide();
    $(".table-details .info-row").click(function() {
      $(".table-details .details").hide();
      $(this).next(".details").toggle();
    });
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});
$(document).ready(function(){
$('ul.tabs li').click(function(){
  var tab_id = $(this).attr('data-tab');

  $('ul.tabs li').removeClass('current');
  $('.tab-content').removeClass('current');

  $(this).addClass('current');
  $("#"+tab_id).addClass('current');
});
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });
        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

  </script>

</body>

</html>
