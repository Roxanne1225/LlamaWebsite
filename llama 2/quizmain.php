<?php require_once 'private/initialize.php'; ?>
<?php session_start(); ?>

<!-- todo: 1, record choinces of user and correctness(use a variable $correctness in php that connects to javascript?) -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="quiz-style.css">
    <script src="_scripts/quizmain.js"></script>
  </head>
  <body>
     <h1>Test Your Knowledge About Llamas</h1>
    <?php if(isset($_SESSION["loggedin"])){ ?>
    hi
    <a href="logout.php">Welcome, <?php echo $_SESSION['name']; ?>! (logout)</a>
    <?php } ?>
    <div class="aproblem">
      <img src="media/test.jpg" alt="" class="pic">
      <div class="question">
        Which of these animals are llamas related to?
      </div>

      <div class="choices">
            <button type="button" name="choice" onclick="checkAnswer(this, 0)">A, Zebras</button>
            <button type="button" name="choice" onclick="checkAnswer(this, 1)">B, Camels</button>
            <button type="button" name="choice" onclick="checkAnswer(this, 0)">C, Cows</button>
            </br>
            <button type="button" name="choice" class="next" onclick="nextQuestion()">Next &rarr;</button>
          
      </div>
    </div>

    <div class="aproblem">
      <img src="media/jannes-fischer--5z9HrLSIoY-unsplash.jpg" alt="llama-picture" class="pic">
      <div class="question">
        What is a group of llamas called?
      </div>

      <div class="choices">
        <button type="button" name="choice" onclick="checkAnswer(this, 1)">A, A herd of llamas</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 0)">B, A pack of llamas</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 0)">C, A tier of llamas</button>
            </br>
            <button type="button" name="choice" class="next" onclick="nextQuestion()">Next &rarr;</button>

      </div>
    </div>

    <div class="aproblem">
      <img src="media/max-crawford-jgJ3rDPcOjc-unsplash.jpg" alt="llama-picture" class="pic">
      <div class="question">
        Where do llamas come from?
      </div>

      <div class="choices">
        <button type="button" name="choice" onclick="checkAnswer(this, 0)">A, Africa</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 0)">B, Australia</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 1)">C, South America</button>
            </br>
            <button type="button" name="choice" class="next" onclick="nextQuestion()">Next &rarr;</button>

      </div>
    </div>

           
      <div class="aproblem">
      <img src="media/jen-macharg-HBvEb-Ae-9Q-unsplash.jpg" alt="llama-picture" class="pic">
      <div class="question">
        What is a baby llama called?
      </div>

      <div class="choices">
        <button type="button" name="choice" onclick="checkAnswer(this, 0)">A, Cub</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 1)">B, Cria</button>
        <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 0)">C, Fawn</button>
            </br>
            <button type="button" name="choice" class="next" onclick="nextQuestion()">Next &rarr;</button>

      </div>
    </div>

    <div class="aproblem last">
      <img src="media/donna-godsell-Key3pobVxvA-unsplash.jpg" alt="llama-picture" class="pic">
      <div class="question">
        Llamas have how many stomach compartments?
      </div>

      <div class="choices">
            <button type="button" name="choice" onclick="checkAnswer(this, 0)">A, 1</button>
            <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 0)">B, 2</button>
            <button type="button" name="choice" class="wrong" onclick="checkAnswer(this, 1)">C, 3</button>

            <form class="" action="submit-answer.php" method="post">
              <button type="submit" name="submit" class="next" onclick = "update_correct()">Submit Answers</button>
              <input type="hidden" name="s" value="10">
              <!-- this is used to track correctness, use $_REQUEST["correctness"] in php, modidy the value of this input in js: var myhidden = document.getElementById("correctness");
  myhidden.value=1; -->
              <input type="hidden" name="correctness" id="correctness">
            </form>

      </div>
    </div>
  </body>
</html>
