<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="<?php echo site_url();?>assets/all.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/toast/toast.min.css">
    <script src="<?php echo site_url();?>assets/toast/jqm.js"></script>
    <script src="<?php echo site_url();?>assets/toast/toast.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>

        body {
            background-color: #62AFA1;
        }

        .card {
            background-color: #CACDA8;
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        @keyframes borderAnimation {
            0% {
                border-color: red;
            }
            25% {
                border-color: blue;
            }
            50% {
                border-color: green;
            }
            75% {
                border-color: yellow;
            }
            100% {
                border-color: red;
            }
        }

        .card {
            border: 4px solid;
            animation: borderAnimation 5s infinite; 
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.5);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate {
            animation: zoomIn 0.5s ease-in-out;
        }

    </style>
</head>
<body>  
<section class="h-100 animate"> 
    <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                <div class="text-center my-5"></div>
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>

                        <?php echo form_open('My_Controller/login_form'); ?>
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                            </div>

                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary ms-auto">Login</button>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="card-footer py-3 border-0">
                        <div class="text-center">
                            Not Registered Yet? <a href="<?php echo site_url('My_Controller/register'); ?>" class="text-dark">Register Here</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5 text-muted">&copy; Resort Institute</div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    <?php if($this->session->flashdata('success')): ?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
    <?php elseif($this->session->flashdata('wrong')): ?>
        toastr.error("<?php echo $this->session->flashdata('wrong'); ?>");
    <?php elseif($this->session->flashdata('warning')): ?>
        toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
    <?php elseif($this->session->flashdata('info')): ?>
        toastr.info("<?php echo $this->session->flashdata('info'); ?>");
    <?php endif; ?>

    <?php $this->session->unset_userdata('success'); ?>
    <?php $this->session->unset_userdata('wrong'); ?>
</script>
</body>
</html>
