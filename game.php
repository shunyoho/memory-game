
<?php
// 物品
$item1 = ['apple', 'cabbage', 'cherries', 'grapes', 'kiwi', 'mango', 'passion-fruit', 'strawberry', 'tomato', 'watermelon', 'tiger', 'giraffe', 'lion', 'cow', 'horse', 'elephant', 'dog', 'bee'];
$item2 = [];
$items = [];
$config = [
  '3x4' => [
    'item' => [
      'num' => 12,
    ],
    'width' => '33.333%',
    'height' => '25%',
  ],
  '5x4' => [
    'item' => [
      'num' => 20,
    ],
    'width' => '20%',
    'height' => '25%',
  ],
  '7x4' => [
    'item' => [
      'num' => 28,
    ],
    'width' => '14.285%',
    'height' => '25%',
  ],
  '9x4' => [
    'item' => [
      'num' => 36,
    ],
    'width' => '11.111%',
    'height' => '25%',
  ],
];
for ($i=0; $i < ($config[$_GET['mode']]['item']['num']/2); $i++) {
  $item2[] = $item1[$i];
}
$items = array_merge($item2, $item2);
shuffle($items);
?>
<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Memory Game</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <style>
    .memory-game {
      width: 80%;
      height: 80%;
    }
    .memory-card {
      width: calc(<?php echo $config[$_GET['mode']]['width']; ?> - 10px);
      height: calc(<?php echo $config[$_GET['mode']]['height']; ?> - 10px);
    }
    .item {
      display:block;
      margin:auto;
    }
    .front-face {
      text-align: center;
    }
  </style>
  <body>
    <h1>記憶大考驗</h1>
    <section class="memory-game">
      <?php for ($i=0; $i < $config[$_GET['mode']]['item']['num']; $i++) { ?>
      <div class="memory-card" data-framework="<?php echo $item[$i]; ?>">
        <div class="front-face">
          <img src="img/items/<?php echo $items[$i]; ?>.png" alt="<?php echo $items[$i]; ?>" />
        </div>
        <img class="back-face" src="img/js-badge.svg" alt="Memory Card" />
      </div>
      <?php } ?>
    </section>
    <script src="./script.js"></script>
  </body>
</html>
