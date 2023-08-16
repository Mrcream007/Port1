<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="">
  <title>Picture Slideshow</title>
  <style>
    .slideshow-container {
  position: relative;
  height: 50%;
  max-width: 100%;
  margin: auto;
}

.slide {
  display: none;
  text-align: center;
}

img {
  width: 100%;
  height: auto;
}

/* Add any additional styling as needed */

  </style>
</head>
<body>
  <div class="slideshow-container">
    <div class="slide fade">
      <img src="images/chuka.jpeg" alt="Image 1">
    </div>
    <div class="slide fade">
      <img src="images/Goat.jpg" alt="Image 2">
    </div>
    <div class="slide fade">
      <img src="images/ladychinese.jpg" alt="Image 3">
    </div>
    <!-- Add more slides as needed -->
  </div>

  <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let slides = document.getElementsByClassName("slide");
  
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  
  slideIndex++;
  
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  
  slides[slideIndex - 1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

  </script>
</body>
</html>
