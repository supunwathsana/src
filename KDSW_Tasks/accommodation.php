<?php
$pagetitle="Accommodation";
include 'header.php';?>

<h3>JAFFNA HOTELS</h3>



<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Slider</title>
<style>
  .slider-container {
    width: 100%;
    position: relative;
    overflow: hidden;
  }
  .slider {
    width: 100%;
    display: flex;
    transition: transform 0.5s ease;
  }
  .slide {
    min-width: 100%;
  }
  img {
    width: 100%;
    height: auto;
  }
</style>
</head>
<body>

<div class="slider-container">
  <div class="slider">
    <?php
    // Directory containing images
    $directory = "images/";

    // Get all files in the directory
    $files = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

    // Output each image as a slide
    foreach ($files as $file) {
      echo '<div class="slide"><img src="' . $file . '" alt="Slide Image"></div>';
    }
    ?>
  </div>
</div>

<script>
  let currentIndex = 0;
  const slides = document.querySelectorAll('.slide');

  function nextSlide() {
    slides[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % slides.length;
    slides[currentIndex].style.display = 'block';
  }

  function prevSlide() {
    slides[currentIndex].style.display = 'none';
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    slides[currentIndex].style.display = 'block';
  }

  // Automatic slideshow
  setInterval(nextSlide, 5000); // Change slide every 5 seconds
</script>

</body>
</html>

<?php include 'footer.php'; ?>