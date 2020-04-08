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
<style >
  .card-horizontal {
    display: flex;
    flex: 1 1 auto;
}
</style>
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
        <a href="index" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">Home</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">Profile</a>
        <a href="step0" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">Book an Event</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">History</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">Help</a>
        <a href="#" class="list-group-item list-group-item-action bg-light" style="border-left:4px solid grey;">About Us</a>
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
          <h6>You're logged as :User</h6>
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
      <div class="container my-5" style="background-color: white;width:55vw;height: 75vh;text-align: center;">
        <h2>Recent Bookings</h2>
        <div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="http://planit365.com/wp-content/uploads/2019/10/valley.jpg" alt="Card image cap" style="width: 300px;height: 200px;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Experiencing LA</h4>
                        <p class="card-text">From the mountains to the prairies to the oceans white with foam, and oh… did someone forget the Valley. There is a reason why most celebrities live in the valley. </p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Iternary booked on 01/04/2020</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="http://planit365.com/wp-content/uploads/2019/10/valley.jpg" alt="Card image cap" style="width: 300px;height: 200px;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Experiencing LA</h4>
                        <p class="card-text">From the mountains to the prairies to the oceans white with foam, and oh… did someone forget the Valley. There is a reason why most celebrities live in the valley. </p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Iternary booked on 01/04/2020</small>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="http://planit365.com/wp-content/uploads/2019/10/valley.jpg" alt="Card image cap" style="width: 300px;height: 200px;">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Experiencing LA</h4>
                        <p class="card-text">From the mountains to the prairies to the oceans white with foam, and oh… did someone forget the Valley. There is a reason why most celebrities live in the valley.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Iternary booked on 01/04/2020</small>
                </div>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
