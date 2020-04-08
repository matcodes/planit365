<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planit365</title>

  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha256-4hqlsNP9KM6+2eA8VUT0kk4RsMRTeS7QGHIM+MZ5sLY=" crossorigin="anonymous" />
<script>
  window.onload = function () {

  var chart = new CanvasJS.Chart("chartContainer", {
	  animationEnabled: true,  
	  title:{
		  text: "Bookings By Years"
	  },
	  axisY: {
		title: "Bookings",
		valueFormatString: "#100,,.",
		suffix: "",
	},
	  data: [{
		yValueFormatString: "#,###",
		xValueFormatString: "YYYY",
		type: "spline",
		dataPoints: [
			{x: new Date(2002, 0), y: 2506000},
			{x: new Date(2003, 0), y: 2798000},
			{x: new Date(2004, 0), y: 3386000},
			{x: new Date(2005, 0), y: 6944000},
			{x: new Date(2006, 0), y: 6026000},
			{x: new Date(2007, 0), y: 2394000},
			{x: new Date(2008, 0), y: 1872000},
			{x: new Date(2009, 0), y: 2140000},
			{x: new Date(2010, 0), y: 7289000},
			{x: new Date(2011, 0), y: 4830000},
			{x: new Date(2012, 0), y: 2009000},
			{x: new Date(2013, 0), y: 2840000},
			{x: new Date(2014, 0), y: 2396000},
			{x: new Date(2015, 0), y: 1613000},
			{x: new Date(2016, 0), y: 2821000},
			{x: new Date(2017, 0), y: 2000000}
		  ]
	  }]
  });
  chart.render();

}
  </script>

</head>

<body style="background-color: whitesmoke;">
  <div class="container bg-light px-0">
  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right" id="sidebar-wrapper" style="background-color: white;">
      <div class="sidebar-heading ">
        <img src="<?php echo base_url();?>assets/images/planit.png"  style="width: 200px;">

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
          <h6>You're logged as :Admin</h6>
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
      <div class="container my-5">
       <!-- Orders -->
       <div class="card">
              <h5 class="card-header">Orders and Bookings</h5>
              <div class="card-body d-flex orders-cards">
                  <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
                    <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
                    <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
                    <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
                    <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
                    <div class="card" style="width: 18rem;margin:0px 6px;">
                    <a href="order_booking" style="color:#212529;">
                        <img src="<?php echo base_url();?>assets/images/Booking.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
                    </div>
              </div>
            </div>  
          <!-- Orders End -->
          <div class="card">
            <h5 class="card-header">Dashboards</h5>
            <ul class="tabs">
              <li class="tab-link current" data-tab="tab-1">Bookings Today</li>
              <li class="tab-link" data-tab="tab-2">Bookings This Week</li>
              <li class="tab-link" data-tab="tab-3">Bookings This Month</li>
              <li class="tab-link" data-tab="tab-4">Bookings All Year</li>
            </ul>

            <div id="tab-1" class="card-body tab-content current">
              <div id="chartContainer" style="height: 300px; width: 100%;"></div>
            </div>
            <div id="tab-2" class="tab-content">
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
            <div id="tab-3" class="tab-content">
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </div>
            <div id="tab-4" class="tab-content">
              Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
          <div class="card">
            <h5 class="card-header">Vendors</h5>
            <div class="card-body d-flex">
                <div class="card" style="width: 18rem; margin:0px 6px;">
                    <img class="card-img-top" src="<?php echo base_url();?>assets/images/user.png" alt="Card image cap" style="width:75%; margin-left: 30px;margin-top: 5px;">
                    <div class="card-body">
                      <h5 class="card-title">Vendor-1</h5>
                      <p class="card-text">details of the vendor</p>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;margin:0px 6px;">
                    <img class="card-img-top" src="<?php echo base_url();?>assets/images/user.png" alt="Card image cap" style="width:75%; margin-left: 30px;margin-top: 5px;">
                    <div class="card-body">
                        <h5 class="card-title">Vendor-2</h5>
                      <p class="card-text">details of the vendor</p>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem;margin:0px 6px;">
                    <img class="card-img-top" src="<?php echo base_url();?>assets/images/user.png" alt="Card image cap" style="width:75%; margin-left: 30px;margin-top: 5px;">
                    <div class="card-body">
                        <h5 class="card-title">Vendor-3</h5>
                        <p class="card-text">details of the vendor</p>  
                    </div>
                  </div>
             
            </div>
          </div>
          <!-- Vendors End -->
        <div class="card">
            <h5 class="card-header">User List Profiles</h5>
            <div class="card-body">
                <!-- User -->
                <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body d-flex">
                            <img src="<?php echo base_url();?>assets/images/user.png" style="width:70px;">
                          <div style="margin-left:10px;">
                            <h5 class="card-title">User-1</h5>
                            <p class="card-text">Details Of User</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-2">
                      <div class="card">
                        <div class="card-body d-flex">
                        <img src="<?php echo base_url();?>assets/images/user.png" style="width:70px;">
                          <div style="padding-left: 8px;">
                            <h5 class="card-title">User-2</h5>
                            <p class="card-text">Details Of User</p>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body d-flex">
                            <img src="<?php echo base_url();?>assets/images/user.png" style="width:70px;">
                          <div style="margin-left:10px;">
                            <h5 class="card-title">User-3</h5>
                            <p class="card-text">Details Of User</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body d-flex">
                            <img src="<?php echo base_url();?>assets/images/user.png" style="width:70px;">
                            <div style="margin-left:10px;">
                              <h5 class="card-title">User-4</h5>
                              <p class="card-text">Details Of User</p>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
             <!-- User End -->
            </div>
          </div>              
    </div>
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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
      $('ul.tabs li').click(function(){
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#"+tab_id).addClass('current');
      });
      $('.orders-cards').slick({
        slidesToShow: 3
      });      
    });
  </script>

</body>

</html>
