<?php require_once 'private/initialize.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>The Majestic Llama</title>
    <link rel="stylesheet" href="style.css">

    <script src="https://kit.fontawesome.com/5b15db91c2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- <script src="_scripts/slider.js"></script> -->
    <script src="_scripts/quiz.js"></script>

  </head>

  <body>
  <img src="media/circle-cropped.png" width="10%" id="circle">
<div class="vidContainer">
  <h1>Llamas</h1>
  <video autoplay muted loop id="myVideo">
  <source src="media/cropped.mp4" type="video/mp4">
</video>
</div>

<div class="content">
    <div class="horizontal-boxes">

    <div class="intro box">
      <h2>Llamas</h2>

      <dl class="llamainfo">
        <dt>COMMON NAME:</dt>
          <dd>Llama</dd>
        <dt>SCIENTIFIC NAME:</dt>
          <dd>Lama glama</dd>
        <dt>TYPE:</dt>
          <dd>Mammals</dd>
        <dt>DIET:</dt>
          <dd>Herbivore</dd>
        <dt>AVERAGE LIFE EXPECTANCY:</dt>
          <dd>15 years</dd>
        <dt>HEIGHT:</dt>
            <dd>Height at the shoulder: 3-4 feet</dd>
        <dt>WEIGHT:</dt>
            <dd>250-450 pounds</dd>
        <!-- <dt>REPRODUCTION:</dt>
          <dd>A female llama can begin to breed when she is one year old, and she can have up to one baby per year until she is about 15 years old.</dd> -->
      </dl>
      <div class="photo-slider">
        <h2>Pictures</h2>

        <a class="prev" onclick="prevSlide()">&#10094;</a>
        <a class="next" onclick="nextSlide()">&#10095;</a>

        <div class="images">
          <img src="media/paz-arando-ZHmvek0kJW8-unsplash.jpg" class="photos">
          <p class="credit">Photo by Paz Arando on Unsplash</p>
        </div>

        <div class="images">
          <img src="media/gibbon-fitzgibbon-2c9g4jFdp24-unsplash.jpg" class="photos">
          <p class="credit">Photo by Gibbon FitzGibbon on Unsplash</p>
        </div>

        <div class="images">
          <img src="media/chris-child-ZhF-9SKetvs-unsplash.jpg" class="photos">
          <p class="credit">Photo by Chris Child on Unsplash</p>
        </div>
        
         <div class="images">
          <img src="media/junior-moran-zdk65luJOTI-unsplash.jpg" class="photos">
          <p class="credit">Photo by Junior Moran on Unsplash</p>
        </div>
        
        <div class="images">
          <img src="media/sifan-liu-KlpCGeA8Qcs-unsplash.jpg" class="photos">
          <p class="credit">Photo by Sifan Liu on Unsplash</p>
        </div>
        
        <div class="images">
          <img src="media/paul-lequay-73FOXT1DvjI-unsplash.jpg" class="photos">
          <p class="credit">PPhoto by Paul Lequay on Unsplash</p>
        </div>

      </div>
    </div>

    <div class="apps box">
      <div class="quiz app">
      <h2>Did You Know?</h2>
      <ul class="fact">
        <li><i class="fas fa-horse"></i>Llamas don't bite. They spit when they're agitated!</li>
        <li><i class="fas fa-horse"></i>There are no known wild llamas.</li>
        <li><i class="fas fa-horse"></i>Llamas do not have hooves but their feet have soft, leathery pads and two toes with toenails.</li>
        </ul>
        <h3>How Much Do You Know About Llamas? </h3>
        <h3>Take a quiz!</h3>
        <a href="#" class="btn-3d" onclick="openQuiz()">START</a>

      </div>


      <div class="meme app">
      <p>meme generator placeholder</p>
      </div>
    </div>
</div>

      <div class="aboutme">
      Hello, I am Roxanne Chen. See my other websites <a href="http://roxanne-chen.dx.am/">here</a>!
      </div>
      <div class="quizpop">
        <iframe id="forPostyouradd" data-src=<?php echo url_for("quizpage.php") ?> width="800" height="600" style="background:#ffffff"></iframe>
        <span id="close-quiz" onclick="closeQuiz()">&times</span>
      </div>

</div>

  </body>
</html>
