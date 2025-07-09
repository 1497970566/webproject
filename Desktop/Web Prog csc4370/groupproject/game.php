<?php
session_start();
$questions = [
    1 => [
        100 => [
            'question' => 'What color is the sky?',
            'answer' => 'blue',
            'options' => ['red', 'blue', 'green', 'yellow']
        ],
        200 => [
            'question' => '2 + 2 = ?',
            'answer' => '4',
            'options' => ['3', '4', '5', '6']
        ],
        300 => [
            'question' => 'What is the capital of France?',
            'answer' => 'paris',
            'options' => ['berlin', 'madrid', 'paris', 'rome']
        ],
        400 => [
            'question' => 'What planet do we live on?',
            'answer' => 'earth',
            'options' => ['mars', 'venus', 'earth', 'jupiter']
        ],
    ],
];

if (!isset($_SESSION['scores'])) {
    $players = array_filter($_SESSION['players']);
    $_SESSION['scores'] = array_fill_keys($players, 0);
    $_SESSION['turn'] = 0;
}
$players = array_values(array_filter($_SESSION['players']));
$currentPlayer = $players[$_SESSION['turn']];

if (!isset($_SESSION['answered'])) {
    $_SESSION['answered'] = [];
}

if (isset($_POST['submit_answer'])) {
    $cat = (int)$_POST['cat'];
    $val = (int)$_POST['val'];
    $userAnswer = strtolower(trim($_POST['user_answer']));
    $correctAnswer = strtolower($questions[$cat][$val]['answer']);
    $players = array_values(array_filter($_SESSION['players']));
    $currentPlayer = $players[$_SESSION['turn']];
    if ($userAnswer === $correctAnswer) {
        $_SESSION['scores'][$currentPlayer] += $val;
        $message = "Correct! $currentPlayer earns \\$val.";
    } else {
        $message = "Incorrect. The correct answer was: $correctAnswer.";
    }
    $_SESSION['answered']["$cat-$val"] = true;
    $_SESSION['turn'] = ($_SESSION['turn'] + 1) % count($players);
    header("Location: game.php?msg=" . urlencode($message));
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Jeopardy Game</title>
  <link rel="stylesheet" href="https://codd.cs.gsu.edu/~wou1/wp/pw/01/game.css">
</head>
<?php
$showingQuestion = isset($_GET['category']) && isset($_GET['value']) && isset($questions[(int)$_GET['category']][(int)$_GET['value']]);
?>
<body<?= $showingQuestion ? ' class="question-active"' : '' ?>>


  <div class="navbar">
  <nav>
    <ul>
      <li><a href="https://codd.cs.gsu.edu/~wou1/wp/pw/01/homepage.html">Home</a></li>
      <li class="navbar-logo">
        <img src="https://codd.cs.gsu.edu/~wou1/wp/pw/01/image/logol.png" alt="Jeopardy Game">
      </li>
      <?php
      if (isset($_SESSION['players'])) {
          echo '<li class="player-display">Players: ';
          $playersDisplay = array_filter($_SESSION['players']);
          $scoreDisplay = [];
          foreach ($playersDisplay as $player) {
              $score = isset($_SESSION['scores'][$player]) ? $_SESSION['scores'][$player] : 0;
              $scoreDisplay[] = htmlspecialchars($player) . ':  ' . $score . ' ';
          }
          echo implode('  ', $scoreDisplay);
          echo '</li>';
      }
      ?>
    </ul>
  </nav>
</div>

<?php
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo "<div class='feedback-message'>" . htmlspecialchars($msg) . "</div>";
    if (stripos($msg, 'correct') !== false) {
        echo "<div class='feedback-correct'><img src='https://codd.cs.gsu.edu/~wou1/wp/pw/01/image/correct.webp' alt='Correct!'></div>";
    }
}
?>

<?php
if (isset($_GET['category']) && isset($_GET['value'])) {
    $cat = (int)$_GET['category'];
    $val = (int)$_GET['value'];
    if (isset($questions[$cat][$val])) {
        $q = $questions[$cat][$val]['question'];
        $options = $questions[$cat][$val]['options'];
        echo "<form method='post' class='question-form'>
                <h2>Question for \\$val:</h2>
                <p>$q</p>
                <input type='hidden' name='cat' value='$cat'>
                <input type='hidden' name='val' value='$val'>";
        foreach ($options as $opt) {
            echo "<div style='margin:8px;'>
                    <label>
                      <input type='radio' name='user_answer' value='" . htmlspecialchars($opt) . "' required>
                      " . htmlspecialchars($opt) . "
                    </label>
                  </div>";
        }
        echo "  <button type='submit' name='submit_answer'>Submit Answer</button>
              </form>";
        exit;
    }
}
?>

<table align="center" border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Category 1</th>
    <th>Category 2</th>
    <th>Category 3</th>
    <th>Category 4</th>
    <th>Category 5</th>
  </tr>
  <?php
  $values = [100, 200, 300, 400];
  for ($row = 0; $row < 4; $row++) {
      echo '<tr>';
      for ($col = 1; $col <= 5; $col++) {
          $key = "$col-{$values[$row]}";
          if (isset($_SESSION['answered'][$key])) {
              echo '<td style="color:gray; text-align:center; font-weight:bold;">—</td>';
          } else {
              echo '<td><a href="game.php?category=' . $col . '&value=' . $values[$row] . '">$' . $values[$row] . '</a></td>';
          }
      }
      echo '</tr>';
  }
  ?>
  </table>
</body> 
</html>