<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Memory Game</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
<style>
.mode{
  width: 600px;
}
</style>
  <body>
    <h1>記憶大考驗</h1>
    <section class="memory-game">
      <div class="memory-card mode">
        <a href="game.php?mode=3x4"><img class="back-face" src="img/3x4.svg"/></a>
      </div>

      <div class="memory-card mode">
      <a href="game.php?mode=5x4"><img class="back-face" src="img/5x4.svg"/></a>
      </div>

      <div class="memory-card mode">
      <a href="game.php?mode=7x4"><img class="back-face" src="img/7x4.svg"/></a>
      </div>
      <div class="memory-card mode">
      <a href="game.php?mode=9x4"><img class="back-face" src="img/9x4.svg"/></a>
      </div>
    </section>
    <!-- <script src="./script.js"></script> -->
  </body>
</html>
