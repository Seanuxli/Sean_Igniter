<?php 
    $this->load->helper(['url', 'form']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>

    body {
        background-color: #004976;
    }

    .logout-btn {
        background-color: #D52308;
    }

    .customer-account-container {
    margin-top: 50px;
    padding: 20px;
    }

    .card {
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .card-header {
    background-color: #E8B214;
    padding: 20px;
    border-bottom: 1px solid #CCCCCC;
    }

    .card-body {
    padding: 20px;
    }


    .customer-information-container {
    margin-top: 50px;
    padding: 20px;
    }

    .card {
        background-color: #E8B214;
        border: none;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        animation: slideInDown 1s ease-in-out;
    }

    @keyframes slideInDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }
        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .card-header {
    background-color: #F5F5F5;
    padding: 10px;
    border-bottom: 1px solid #CCCCCC;
    }

    .card-body {
    padding: 20px;
    }


    .button-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space;
    }

    .btn {
    margin-right: 5px;
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
        background-color: #004976;
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
    }

    .openbtn:hover {
        background-color: #004976;
    }

</style>
</head>
<body>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="<?php echo site_url();?>My_Controller/index" >Home</a>
    <a href="<?php echo site_url();?>My_Controller/index2" >Booking Form</a>
    <a href="#">Customer's Account</a>
    <a href="#">Customer's Reservations</a>
    <a href="#">Waiting Approval</a>
    <a href="#">Approve</a>
    <a href="#">Room 7</a>
    <a href="#">Room 8</a>
    <a href="#">Room 9</a>
    <a href="#">Room 10</a>
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

<div class="customer-information-container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center mt-4">Customer Information</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Max Person</th>
                        <th>Age</th>
                        <th>Date In</th>
                        <th>Date Out</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($items)) : ?>
                        <?php foreach ($items as $item) : ?>
                            <tr>
                                <td><?php echo $item['Id']; ?></td>
                                <td><?php echo $item['Fullname']; ?></td>
                                <td><?php echo $item['Address']; ?></td>
                                <td><?php echo $item['Contact']; ?></td>
                                <td><?php echo $item['Email']; ?></td>
                                <td><?php echo $item['MaxPerson']; ?></td>
                                <td><?php echo $item['Age']; ?></td>
                                <td><?php echo $item['Datein']; ?></td>
                                <td><?php echo $item['Dateout']; ?></td>
                                <td><?php echo $item['Status']; ?></td>
                                <td>
                                    <div class="button-container">
                                        <form action="<?php echo base_url('My_Controller/cancel_book'); ?>" method="post" onSubmit="return confirm('Cancel This Booking?');">
                                            <input type="hidden" name="Id" value="<?php echo $item['Id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
                                        </form>
                                        <form action="<?php echo base_url('My_Controller/decline_book'); ?>" method="post" onSubmit="return confirm('Decline This Book?');">
                                            <input type="hidden" name="Id" value="<?php echo $item['Id']; ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Decline</button>
                                        </form>
                                        <form action="<?php echo base_url('My_Controller/approve_book'); ?>" method="post" onSubmit="return confirm('Approve This Booking?');">
                                            <input type="hidden" name="Id" value="<?php echo $item['Id']; ?>">
                                            <button type="submit" class="btn btn-success btn-sm">Approve</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="customer-account-container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center mt-4">Customer Account</h1>
        </div>
        <div class="card-body">
            <table class="table table-bordered mt-4">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($users)) : ?>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['name']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['password']; ?></td>
                                <td>
                                    <form action="<?php echo base_url('My_Controller/delete_acc'); ?>" method="post" onSubmit="return confirm('Delete This Account?');">
                                        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
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

</body>
</html>
