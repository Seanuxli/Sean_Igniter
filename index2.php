<?php
$this->load->helper('url', 'form');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Viennio El Grande Resort</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/all.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/toast/toast.min.css'); ?>">
    <script src="<?php echo base_url('assets/toast/jqm.js'); ?>"></script>
    <script src="<?php echo base_url('assets/toast/toast.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>

    body {
        background-image: url("<?php echo base_url(); ?>assets/bookingimage.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 130vh;
        margin: 1;
    }

    .logout-btn {

        background-color: #D52308;
    }

    .fill-up-information {
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
        max-width: 825px;
        margin: 0 auto;
    }

    .fill-up-information h2 {
        margin: 0;
    }

    .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 11px;
    }

    .fill-up-infomation-container {
        margin-top: 20px;
        padding: 20px;
    }

.card {
    background-color: #FFFFFF;
    border: none;
    border: 1px;
    border-radius: 2px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
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
        background-color: #E8B214;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in-out;
    }

    .form label {
        font-weight: bold;
    }

    .text-muted {
        font-size: 12px;
    }

    .form button[type="submit"] {
        background-color: #34CF15;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .form button[type="submit"]:hover {
        background-color: #03DBFC;
    }

    .text-muted {
        font-size: 12px;
    }

    .sidebar {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #1757F6;
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

    .content {
        transition: margin-left 0.5s;
        padding: 16px;
    }

    .openbtn {
        font-size: 20px;
        cursor: pointer;
        background-color: #E8B214;
        color: white;
        padding: 10px 15px;
        border: none;
        color: #FFFFFF;
    }

    .openbtn:hover {
        background-color: #1757F6;
    }

    .form input[type="text"],
    .form input[type="number"],
    .form input[type="date"],
    .form input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

</style>

</head>
<body>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

    <a href="<?php echo site_url();?>My_Controller/index">Home</a>
    <a href="<?php echo site_url();?>My_Controller/adminpanel">Admin Dashboard</a>
    <a href="#">Additional Items</a>
    <a href="<?php echo site_url();?>Room1_Control/index">Room 1</a>
    <a href="<?php echo site_url();?>Room2_Control/index">Room 2</a>
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
          <div class="fill-up-information">
           <h2>FILL UP INFORMATION</h2>
          </div>
         </div>
   </section>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-body p-4">
                    <form action="<?php echo base_url('My_Controller/book_now'); ?>" method="post" class="form">

                        <div class="form-group">
                            <label for="Fullname">Name:</label>
                            <input type="text" name="Fullname" id="Fullname" class="form-control" required maxlength="55">
                        </div>

                        <div class="form-group">
                            <label for="Address">Address:</label>
                            <input type="text" name="Address" id="Address" class="form-control" required maxlength="90">
                        </div>

                        <div class="form-group">
                            <label for="Contact">Contact:</label>
                            <input type="text" name="Contact" id="Contact" class="form-control" required maxlength="11">
                        </div>

                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="email" name="Email" id="Email" class="form-control" required maxlength="70">
                        </div>

                        <div class="form-group">
                            <label for="MaxPerson">Max Person:</label>
                            <input type="number" name="MaxPerson" id="MaxPerson" class="form-control" required min="0" max="200">
                        </div>

                        <div class="form-group">
                            <label for="Age">Age:</label>
                            <input type="text" name="Age" id="Age" class="form-control" required maxlength="2">
                        </div>

                        <div class="form-group">
                            <label for="Datein">Date In:</label>
                            <input type="date" name="Datein" id="Datein" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="Dateout">Date Out:</label>
                            <input type="date" name="Dateout" id="Dateout" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success btn-sm">Book Now</button>
                    </form>
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

    <div class="text-center mt-5 text-muted">&copy; Viennio El Grande Resort</div>
</div>

</body>
</html>
