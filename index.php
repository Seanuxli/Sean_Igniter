    <?php
    $this->load->helper('url', 'form');
    ?>

 <!DOCTYPE html>
 <html lang="en">
    <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Viennio El Grande Resort</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/bootstrap.min.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
    <script src="<?php echo site_url();?>assets/bootstrap.min.css"></script>
    <script src="<?php echo site_url();?>assets/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

     <style>
        
    body {
        background-image: url("<?php echo base_url(); ?>assets/resorthome.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 50%;
        margin: 0;
    }

    .logout-btn {

        background-color: #D52308;
    }

    .container {
        margin-top: 50px;
        animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .card {
        background-color: #FFFF5C;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .form label {
        font-weight: bold;
    }

    .content {
        transition: margin-left 0.5s;
        padding: 16px;
    }

    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 11px;
    }

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #004976;
        ;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 20px;
        color: #030303;
        display: block;
        transition: 0.3s;
    }

    .sidebar a:hover {
        color: #E8E8E8;
    }

    .sidebar .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
        color: #03DBFC;
    }

    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #E8B214;
        color: white;
        padding: 10px 15px;
        border: none;
    }

    .openbtn:hover {
        background-color: #03DBFC;
    }

    .welcome-section {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        z-index: 1;
        background-color: #E8B214;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        color: black;
        width: 80%;
        max-width: 600px;
        margin: 0 auto;
    }

    .welcome-section h4,
    .welcome-section p {
        margin: 0;
    }

</style>

   </head>
   <body>
   
   <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
     
    <a href="<?php echo site_url();?>My_Controller/index" >Home</a>
    <a href="<?php echo site_url();?>My_Controller/adminpanel">Admin Dashboard</a>
    <a href="<?php echo site_url();?>My_Controller/index2" >Booking Form</a>
    <a href="<?php echo site_url();?>Room1_Control/index" >Room 1</a>
    <a href="<?php echo site_url();?>Room2_Control/index" >Room 2</a>
    <a href="#">Room 3</a>
    <a href="#">Room 4</a>
    <a href="#">Room 5</a>
    <a href="#">Room 6</a>
    <a href="#">Room 7</a>
    <a href="#">Room 8</a>
    <a href="#">Room 9</a>
    <a href="#">Room 10</a>
    <a href="#">Room 11</a>
    <a href="#">Room 12</a>

    <a href="<?php echo base_url('My_Controller/logout'); ?>" class="btn btn-primary logout-btn">
    <i class="fas fa-sign-out-alt"></i> Logout
    </a>

</div>

<div id="main" class="content">
    <button class="openbtn" onclick="openNav()">☰</button>

    </div>

    <script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").classList.add('opened');
    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").classList.remove('opened');
    }
</script>

    <section class="container">
       <div class="col-md-6">
    <img class="card-img-top" src="holder.js/100px180/" alt="">
       <div class="welcome-section">
    <h4>Welcome</h4>
       <p>Book To Us Now!</p>
    </div>
       </div>   
   </section>

   <div class="container">
    <div class="row">
        <div class="col-lg-12 my-3">
            <div class="pull-right">
                <div class="btn-group">
                    <button class="btn btn-info" id="list">
                        List View
                    </button>
                    <button class="btn btn-danger" id="grid">
                        Grid View
                    </button>
                </div>
            </div>
        </div>
    </div> 

   <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                        <img class="group list-group-image img-fluid" src="../assets/Room1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Room 1</h4>
                            <p class="group inner list-group-item-text">
                                This room offers: Free Parking, Cleaning Service, Free Adding Items, Free Breakfast % Coffee, Free Wifi,
                                this room includes a master bed and laptop desk and lampshade also you can enjoy the view etc. </p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                    ₱8,300</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="<?php echo site_url();?>Room1_Control/index">EXPLORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                        <img class="group list-group-image img-fluid" src="../assets/Room2.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Room 2</h4>
                            <p class="group inner list-group-item-text">
                               This room offers: Free Parking, Cleaning Service, Free Breakfast & Coffee, Free Wifi, Welcome Drink,
                               this room includes master bed and large bathroom and also comfortable salas</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                    ₱8,400</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="<?php echo site_url();?>Room2_Control/index">EXPLORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                        <img class="group list-group-image img-fluid" src="../assets/Room3.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Room 3</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                    ₱9,000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                <a class="btn btn-success" href="<?php echo site_url();?>Room3_Control/index">EXPLORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Product title</h4>
                            <p class="group inner list-group-item-text">
                                Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="http://www.jquery2dotnet.com">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

    <script type="text/javascript">
        <?php if ($this->session->flashdata('success')) : ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php elseif ($this->session->flashdata('wrong')) : ?>
            toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
        <?php elseif ($this->session->flashdata('warning')) : ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php elseif ($this->session->flashdata('info')) : ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php endif; ?>

        <?php $this->session->unset_userdata('success'); ?>
        <?php $this->session->unset_userdata('wrong'); ?>
     </script>

</body>
</html>
