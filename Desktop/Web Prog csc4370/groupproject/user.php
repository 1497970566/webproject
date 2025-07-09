<?php
session_start();
// Always reset game state when entering user.php
unset($_SESSION['scores'], $_SESSION['turn'], $_SESSION['answered']);
$errors = [];
$player1 = $player2 = $player3 = $player4 = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $player1 = trim($_POST["player1"]);
  $player2 = trim($_POST["player2"]);
  $player3 = trim($_POST["player3"]);
  $player4 = trim($_POST["player4"]);

  if (empty($player1)) $errors[] = "Player 1 is required.";
  if (empty($player2)) $errors[] = "Player 2 is required.";

  if (empty($errors)) {
    $_SESSION['players'] = [
      'player1' => $player1,
      'player2' => $player2,
      'player3' => $player3,
      'player4' => $player4
    ];
    header("Location: game.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Example</title>
  <link rel="stylesheet" href="https://codd.cs.gsu.edu/~wou1/wp/pw/01/user.css">
</head>
<body>
  <div class="navbar">
    <nav>
      <ul>
        <li><a href="https://codd.cs.gsu.edu/~wou1/wp/pw/01/homepage.html">Home</a></li>
    
      </ul>
    </nav>
  </div>
  <div class="setup-container">
    <h1>Player Setup</h1>

    <?php if (!empty($errors)): ?>
      <div class="error-box">
        <ul>
          <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

    <form method="POST" action="">
      <label>Player 1:</label>
      <input type="text" name="player1" value="<?= htmlspecialchars($player1) ?>" required>

      <label>Player 2:</label>
      <input type="text" name="player2" value="<?= htmlspecialchars($player2) ?>" required>

      <label>Player 3(optional):</label>
      <input type="text" name="player3" value="<?= htmlspecialchars($player3) ?>">

      <label>Player 4(optional):</label>
      <input type="text" name="player4" value="<?= htmlspecialchars($player4) ?>">

      <button type="submit">Start Game</button>
    </form>
  </div>
</body>
</html>

