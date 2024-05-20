<?php 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
    <title>ROOM 2</title>
</head>
<body>
    <h1>Welcome to Room 2</h1>

    <style>
        body {
            background-image: url("<?php echo base_url(); ?>assets/Room2.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            margin: 0;
            transition: background-image 1s ease;
        }
    </style>
    
<a href="<?php echo site_url(); ?>My_Controller/index" class="btn btn-primary">Return to Home</a>

<body>
<script>
    var images = [
        "<?php echo base_url(); ?>assets/Room2.jpg",
        "<?php echo base_url(); ?>assets/Room2 slideshow.jpg",
        "<?php echo base_url(); ?>assets/Room2 slideshow2.jpg",
        
    ];

    var currentIndex = 0;
    var backgroundElement = document.querySelector('body');

    function changeBackground() {
        backgroundElement.style.backgroundImage = "url('" + images[currentIndex] + "')";
        currentIndex = (currentIndex + 1) % images.length;
    }

    setInterval(changeBackground, 3000);

</script>

  
</body>
</html>

