<?php
session_start();
$questions = [
    1 => [
        100 => [
        [ 'question' => 'What does HTML stand for?', 'answer' => 'HyperText Markup Language', 'options' => ['HyperText Markup Language', 'HyperText Markdown Language', 'Home Tool Markup Language', 'HyperTransfer Markup Logic'] ],
        [ 'question' => 'Which tag is used to insert an image in HTML?', 'answer' => '<img>', 'options' => ['<image>', '<img>', '<src>', '<picture>'] ],
        [ 'question' => 'What is the correct HTML element for the largest heading?', 'answer' => '<h1>', 'options' => ['<h6>', '<h1>', '<heading>', '<head>'] ],
        [ 'question' => 'Which tag creates a hyperlink?', 'answer' => '<a>', 'options' => ['<link>', '<href>', '<a>', '<hyper>'] ],
        [ 'question' => 'How do you insert a line break in HTML?', 'answer' => '<br>', 'options' => ['<lb>', '<break>', '<br>', '<line>'] ]
        ],
        200 => [
        [ 'question' => 'Which HTML attribute specifies an alternate text for an image if the image cannot be displayed?', 'answer' => 'alt', 'options' => ['alt', 'title', 'src', 'href'] ],
        [ 'question' => 'Which HTML tag is used to define an unordered list?', 'answer' => '<ul>', 'options' => ['<ul>', '<ol>', '<li>', '<list>'] ],
        [ 'question' => 'What is the correct HTML for creating a checkbox?', 'answer' => '<input type="checkbox">', 'options' => ['<input checkbox>', '<input type="checkbox">', '<checkbox>', '<input type="check">'] ],
        [ 'question' => 'Which tag is used to define a table row in HTML?', 'answer' => '<tr>', 'options' => ['<td>', '<th>', '<tr>', '<table-row>'] ],
        [ 'question' => 'How do you create a comment in HTML?', 'answer' => '<!-- comment -->', 'options' => ['// comment', '<!-- comment -->', '# comment', '/* comment */'] ]
        ],
        300 => [
        [ 'question' => 'Which HTML element is used to specify a footer for a document or section?', 'answer' => '<footer>', 'options' => ['<bottom>', '<footer>', '<section-footer>', '<foot>'] ],
        [ 'question' => 'Which HTML tag is used to embed an external webpage within the current HTML document?', 'answer' => '<iframe>', 'options' => ['<frame>', '<embed>', '<iframe>', '<object>'] ],
        [ 'question' => 'What does the "action" attribute in a <form> tag specify?', 'answer' => 'Where to send the form data', 'options' => ['Form styling', 'Input validation', 'Where to send the form data', 'Default form values'] ],
        [ 'question' => 'Which HTML element defines the title of a document that appears in the browser tab?', 'answer' => '<title>', 'options' => ['<head>', '<meta>', '<title>', '<header>'] ],
        [ 'question' => 'What is the purpose of the "fieldset" element in a form?', 'answer' => 'To group related form elements', 'options' => ['To submit data', 'To group related form elements', 'To style inputs', 'To label text fields'] ]
        ],
        400 => [
        [ 'question' => 'Which attribute is used with the <input> tag to specify a hint for what to enter in the field?', 'answer' => 'placeholder', 'options' => ['title', 'placeholder', 'label', 'alt'] ],
        [ 'question' => 'What is the correct way to make a checkbox in HTML?', 'answer' => '<input type="checkbox">', 'options' => ['<checkbox>', '<input type="box">', '<input type="checkbox">', '<check>'] ],
        [ 'question' => 'What does the "novalidate" attribute do on a <form> tag?', 'answer' => 'Disables HTML5 form validation', 'options' => ['Hides the form', 'Disables HTML5 form validation', 'Clears form inputs', 'Validates using JavaScript only'] ],
        [ 'question' => 'Which tag is used to define a client-side image map in HTML?', 'answer' => '<map>', 'options' => ['<imgmap>', '<map>', '<imagemap>', '<area>'] ],
        [ 'question' => 'Which HTML tag is used to define an internal style sheet?', 'answer' => '<style>', 'options' => ['<css>', '<script>', '<style>', '<link>'] ]
        ]
    ],
2 => [
    100 => [
        [ 'question' => 'What does CSS stand for?', 'answer' => 'Cascading Style Sheets', 'options' => ['Creative Style Sheets', 'Colorful Style Sheets', 'Cascading Style Sheets', 'Computer Style Sheets'] ],
        [ 'question' => 'Which HTML tag is used to link an external CSS file?', 'answer' => '<link>', 'options' => ['<style>', '<link>', '<css>', '<script>'] ],
        [ 'question' => 'Which property is used to change text color in CSS?', 'answer' => 'color', 'options' => ['text-color', 'font-color', 'color', 'foreground'] ],
        [ 'question' => 'Which symbol is used to select a class in CSS?', 'answer' => '.', 'options' => ['#', '.', '*', '&'] ],
        [ 'question' => 'Which CSS property controls the text size?', 'answer' => 'font-size', 'options' => ['text-size', 'font-style', 'font-size', 'size'] ]
    ],
    200 => [
        [ 'question' => 'How do you make text bold in CSS?', 'answer' => 'font-weight: bold;', 'options' => ['font-style: bold;', 'text-weight: bold;', 'font-weight: bold;', 'weight: bold;'] ],
        [ 'question' => 'Which property adds space inside the border of an element?', 'answer' => 'padding', 'options' => ['margin', 'spacing', 'padding', 'border'] ],
        [ 'question' => 'What value of `position` keeps an element in the same spot even when scrolling?', 'answer' => 'fixed', 'options' => ['absolute', 'relative', 'fixed', 'static'] ],
        [ 'question' => 'How do you make a background color red in CSS?', 'answer' => 'background-color: red;', 'options' => ['color: red;', 'background: red;', 'bgcolor: red;', 'background-color: red;'] ],
        [ 'question' => 'Which property controls the spacing between lines of text?', 'answer' => 'line-height', 'options' => ['text-spacing', 'line-height', 'letter-spacing', 'spacing'] ]
    ],
    300 => [
        [ 'question' => 'How do you select all <p> elements inside a <div> in CSS?', 'answer' => 'div p', 'options' => ['div.p', 'p div', 'div > p', 'div p'] ],
        [ 'question' => 'What does the "z-index" property control?', 'answer' => 'stacking order of elements', 'options' => ['text size', 'element spacing', 'stacking order of elements', 'background color'] ],
        [ 'question' => 'How can you apply a style to multiple classes at once?', 'answer' => '.class1, .class2', 'options' => ['.class1.class2', '.class1 + .class2', '.class1, .class2', '.class1 > .class2'] ],
        [ 'question' => 'What is the default value of the "position" property?', 'answer' => 'static', 'options' => ['relative', 'absolute', 'fixed', 'static'] ],
        [ 'question' => 'Which property is used to make a website responsive in CSS?', 'answer' => 'media queries', 'options' => ['transform', 'media queries', 'resize', 'view-width'] ]
    ],
    400 => [
        [ 'question' => 'What does the "inherit" value do in CSS?', 'answer' => 'Takes the value from the parent element', 'options' => ['Resets the property', 'Takes the value from the parent element', 'Ignores the property', 'Overrides all values'] ],
        [ 'question' => 'Which property changes the speed of a transition?', 'answer' => 'transition-duration', 'options' => ['transition-delay', 'animation-speed', 'transition-time', 'transition-duration'] ],
        [ 'question' => 'What unit is relative to the font-size of the element in CSS?', 'answer' => 'em', 'options' => ['px', 'em', '%', 'vh'] ],
        [ 'question' => 'How do you make an element completely invisible but still take space?', 'answer' => 'visibility: hidden;', 'options' => ['display: none;', 'opacity: 0;', 'visibility: hidden;', 'hide: true;'] ],
        [ 'question' => 'Which property allows you to rotate an element in CSS?', 'answer' => 'transform', 'options' => ['rotate', 'transform', 'skew', 'shift'] ]
    ]
],
3 => [
    100 => [
        [ 'question' => 'What does PHP stand for?', 'answer' => 'Hypertext Preprocessor', 'options' => ['Personal Home Page', 'Private Home Page', 'PHP: Hypertext Preprocessor', 'Hypertext Preprocessor'] ],
        [ 'question' => 'Which symbol is used to start a variable in PHP?', 'answer' => '$', 'options' => ['@', '#', '$', '&'] ],
        [ 'question' => 'How do you start a PHP block?', 'answer' => '<?php', 'options' => ['<?php', '<php>', '<?', '</php>'] ],
        [ 'question' => 'Which function outputs text in PHP?', 'answer' => 'echo', 'options' => ['print()', 'echo', 'write()', 'text()'] ],
        [ 'question' => 'What file extension is used for PHP files?', 'answer' => '.php', 'options' => ['.html', '.php', '.py', '.js'] ]
    ],
    200 => [
        [ 'question' => 'How do you create a comment in PHP?', 'answer' => '// or /* */', 'options' => ['# only', '// or /* */', '/* only */', '// only'] ],
        [ 'question' => 'Which superglobal contains form data sent with POST?', 'answer' => '$_POST', 'options' => ['$_GET', '$_DATA', '$_POST', '$_FORM'] ],
        [ 'question' => 'How do you check if a variable is set in PHP?', 'answer' => 'isset()', 'options' => ['is_defined()', 'check()', 'isset()', 'issetVar()'] ],
        [ 'question' => 'Which operator is used for string concatenation in PHP?', 'answer' => '.', 'options' => ['+', '.', '::', '&'] ],
        [ 'question' => 'What is the correct way to define a function in PHP?', 'answer' => 'function myFunc() {}', 'options' => ['def myFunc()', 'function myFunc() {}', 'func myFunc() {}', 'myFunc() = function {}'] ]
    ],
    300 => [
        [ 'question' => 'What does the "include" statement do in PHP?', 'answer' => 'Inserts content from another file', 'options' => ['Adds HTML', 'Starts a loop', 'Inserts content from another file', 'Creates a new variable'] ],
        [ 'question' => 'Which PHP function is used to start a session?', 'answer' => 'session_start()', 'options' => ['start_session()', 'session()', 'begin_session()', 'session_start()'] ],
        [ 'question' => 'What is the output of count([1, 2, 3]) in PHP?', 'answer' => '3', 'options' => ['2', '3', '4', '0'] ],
        [ 'question' => 'How do you check equality in PHP?', 'answer' => '==', 'options' => ['=', '===', '==', '!='] ],
        [ 'question' => 'How do you access a value from an associative array?', 'answer' => '$array["key"]', 'options' => ['$array->key', '$array.key', '$array["key"]', 'array[key]'] ]
    ],
    400 => [
        [ 'question' => 'What is the difference between "==" and "===" in PHP?', 'answer' => '"===" also checks type', 'options' => ['They are the same', '===" is faster', '"===" also checks type', '== only works on integers'] ],
        [ 'question' => 'How do you prevent a form from being submitted twice?', 'answer' => 'Use session tokens or disable button after click', 'options' => ['Use echo', 'Submit twice quickly', 'Use session tokens or disable button after click', 'Use get instead of post'] ],
        [ 'question' => 'What function is used to redirect in PHP?', 'answer' => 'header()', 'options' => ['redirect()', 'header()', 'location()', 'goto()'] ],
        [ 'question' => 'What does the "exit()" function do in PHP?', 'answer' => 'Stops script execution', 'options' => ['Ends a loop', 'Redirects the page', 'Stops script execution', 'Closes the browser'] ],
        [ 'question' => 'What does the $_SESSION array do?', 'answer' => 'Stores data across pages for a user', 'options' => ['Saves form data only', 'Stores data across pages for a user', 'Is used for security only', 'Only used in GET requests'] ]
    ]
],
4 => [
    100 => [
        [ 'question' => 'What is the capital of France?', 'answer' => 'Paris', 'options' => ['Madrid', 'Berlin', 'Paris', 'Rome'] ],
        [ 'question' => 'Which continent is Egypt in?', 'answer' => 'Africa', 'options' => ['Asia', 'Africa', 'Europe', 'Australia'] ],
        [ 'question' => 'What ocean is on the east coast of the United States?', 'answer' => 'Atlantic', 'options' => ['Pacific', 'Atlantic', 'Indian', 'Arctic'] ],
        [ 'question' => 'Which U.S. state is known as the "Sunshine State"?', 'answer' => 'Florida', 'options' => ['California', 'Florida', 'Texas', 'Arizona'] ],
        [ 'question' => 'What country is famous for the Eiffel Tower?', 'answer' => 'France', 'options' => ['Italy', 'France', 'Germany', 'Spain'] ]
    ],
    200 => [
        [ 'question' => 'Which country has the largest population?', 'answer' => 'China', 'options' => ['India', 'China', 'USA', 'Brazil'] ],
        [ 'question' => 'What is the longest river in the world?', 'answer' => 'Nile', 'options' => ['Amazon', 'Mississippi', 'Yangtze', 'Nile'] ],
        [ 'question' => 'Which U.S. state is the Grand Canyon located in?', 'answer' => 'Arizona', 'options' => ['Nevada', 'Arizona', 'Utah', 'New Mexico'] ],
        [ 'question' => 'What continent is Brazil located in?', 'answer' => 'South America', 'options' => ['North America', 'Africa', 'South America', 'Asia'] ],
        [ 'question' => 'Which country borders the United States to the north?', 'answer' => 'Canada', 'options' => ['Mexico', 'Canada', 'Russia', 'Greenland'] ]
    ],
    300 => [
        [ 'question' => 'Mount Everest is located in which mountain range?', 'answer' => 'Himalayas', 'options' => ['Andes', 'Himalayas', 'Rockies', 'Alps'] ],
        [ 'question' => 'Which desert is the largest in the world?', 'answer' => 'Sahara', 'options' => ['Gobi', 'Kalahari', 'Sahara', 'Arctic'] ],
        [ 'question' => 'What is the smallest country in the world?', 'answer' => 'Vatican City', 'options' => ['Monaco', 'San Marino', 'Vatican City', 'Malta'] ],
        [ 'question' => 'What is the capital of Japan?', 'answer' => 'Tokyo', 'options' => ['Kyoto', 'Osaka', 'Tokyo', 'Seoul'] ],
        [ 'question' => 'Which U.S. state has the most islands?', 'answer' => 'Alaska', 'options' => ['Hawaii', 'Florida', 'California', 'Alaska'] ]
    ],
    400 => [
        [ 'question' => 'Which two continents are located entirely in the Southern Hemisphere?', 'answer' => 'Australia and Antarctica', 'options' => ['South America and Africa', 'Australia and South America', 'Australia and Antarctica', 'Africa and Antarctica'] ],
        [ 'question' => 'What country has the most time zones?', 'answer' => 'France', 'options' => ['Russia', 'USA', 'France', 'China'] ],
        [ 'question' => 'Which river runs through Baghdad?', 'answer' => 'Tigris', 'options' => ['Euphrates', 'Tigris', 'Nile', 'Jordan'] ],
        [ 'question' => 'Which country has the longest coastline?', 'answer' => 'Canada', 'options' => ['Russia', 'Australia', 'USA', 'Canada'] ],
        [ 'question' => 'Which U.S. state touches four of the five Great Lakes?', 'answer' => 'Michigan', 'options' => ['Wisconsin', 'Michigan', 'New York', 'Ohio'] ]
    ]
],
5 => [
    100 => [
        [ 'question' => 'What planet is known as the Red Planet?', 'answer' => 'Mars', 'options' => ['Mars', 'Venus', 'Jupiter', 'Mercury'] ],
        [ 'question' => 'What gas do humans need to breathe?', 'answer' => 'Oxygen', 'options' => ['Carbon dioxide', 'Oxygen', 'Hydrogen', 'Nitrogen'] ],
        [ 'question' => 'Which part of the plant conducts photosynthesis?', 'answer' => 'Leaves', 'options' => ['Stem', 'Roots', 'Leaves', 'Flowers'] ],
        [ 'question' => 'How many legs does an insect have?', 'answer' => '6', 'options' => ['4', '6', '8', '10'] ],
        [ 'question' => 'Water freezes at what temperature in Celsius?', 'answer' => '0', 'options' => ['0', '32', '100', '-10'] ]
    ],
    200 => [
        [ 'question' => 'What is H2O more commonly known as?', 'answer' => 'Water', 'options' => ['Oxygen', 'Salt', 'Water', 'Hydrogen'] ],
        [ 'question' => 'Which planet has the most moons?', 'answer' => 'Saturn', 'options' => ['Jupiter', 'Mars', 'Saturn', 'Earth'] ],
        [ 'question' => 'What force keeps us on the ground?', 'answer' => 'Gravity', 'options' => ['Friction', 'Inertia', 'Magnetism', 'Gravity'] ],
        [ 'question' => 'Which organ pumps blood through the body?', 'answer' => 'Heart', 'options' => ['Lungs', 'Heart', 'Liver', 'Brain'] ],
        [ 'question' => 'Which gas do plants use during photosynthesis?', 'answer' => 'Carbon dioxide', 'options' => ['Oxygen', 'Hydrogen', 'Carbon dioxide', 'Nitrogen'] ]
    ],
    300 => [
        [ 'question' => 'What is the center of an atom called?', 'answer' => 'Nucleus', 'options' => ['Electron', 'Neutron', 'Proton', 'Nucleus'] ],
        [ 'question' => 'What’s the chemical symbol for gold?', 'answer' => 'Au', 'options' => ['Ag', 'Au', 'Gd', 'Go'] ],
        [ 'question' => 'Which part of the human body contains the femur?', 'answer' => 'Leg', 'options' => ['Arm', 'Spine', 'Leg', 'Chest'] ],
        [ 'question' => 'How many planets are in our solar system?', 'answer' => '8', 'options' => ['7', '8', '9', '10'] ],
        [ 'question' => 'Which scientist proposed the three laws of motion?', 'answer' => 'Isaac Newton', 'options' => ['Albert Einstein', 'Isaac Newton', 'Galileo', 'Nikola Tesla'] ]
    ],
    400 => [
        [ 'question' => 'What is the powerhouse of the cell?', 'answer' => 'Mitochondria', 'options' => ['Nucleus', 'Mitochondria', 'Ribosome', 'Chloroplast'] ],
        [ 'question' => 'What kind of energy does a moving object have?', 'answer' => 'Kinetic energy', 'options' => ['Potential energy', 'Thermal energy', 'Kinetic energy', 'Nuclear energy'] ],
        [ 'question' => 'What is the boiling point of water in Celsius?', 'answer' => '100', 'options' => ['0', '50', '100', '200'] ],
        [ 'question' => 'Which blood type is known as the universal donor?', 'answer' => 'O negative', 'options' => ['O positive', 'A positive', 'O negative', 'AB negative'] ],
        [ 'question' => 'What is the process of water turning into vapor called?', 'answer' => 'Evaporation', 'options' => ['Condensation', 'Freezing', 'Evaporation', 'Boiling'] ]
    ]
] 
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
    $correctAnswer = strtolower($_SESSION['current_question']['answer'] ?? '');
    $players = array_values(array_filter($_SESSION['players']));
    $currentPlayer = $players[$_SESSION['turn']];
    if ($userAnswer === $correctAnswer) {
        $_SESSION['scores'][$currentPlayer] += $val;
        $message = "Correct! $currentPlayer earns \$$val.";
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
  <link rel="stylesheet" href="https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/game.css">
</head>
<?php
$showingQuestion = isset($_GET['category']) && isset($_GET['value']) && isset($questions[(int)$_GET['category']][(int)$_GET['value']]);
?>

<?php
$totalQuestions = 20; 

if (count($_SESSION['answered']) === $totalQuestions) {
    echo "<div class='game-over'>";
    echo "<h1>🎉 Game Over 🎉</h1>";

    $maxScore = max($_SESSION['scores']);
    $winners = array_keys($_SESSION['scores'], $maxScore);

    if (count($winners) === 1) {
        echo "<h2>🏆 Winner: " . htmlspecialchars($winners[0]) . " with $maxScore points!</h2>";
    } else {
        echo "<h2>🤝 It's a tie between: " . implode(" & ", array_map('htmlspecialchars', $winners)) . " with $maxScore points!</h2>";
    }
    echo "<a href='https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/user.php' class='reset-button'>Play Again</a>";
    echo "</div>";
    for ($i = 0; $i < 20; $i++) {
        $left = rand(0, 100);
        echo "<img class='money' src='https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/image/money.webp' style='left: {$left}vw; animation-delay: " . ($i * 0.2) . "s;'>";
    }
}
?>

<body<?= $showingQuestion ? ' class="question-active"' : '' ?>>

<div class="navbar">
  <nav>
    <ul style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
      <li><a href="https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/homepage.html">Home</a></li>

      <li class="navbar-logo">
        <img src="https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/image/logol.png" alt="Jeopardy Game" style="max-height: 60px;">
      </li>

      <?php
    if (isset($_SESSION['players']) && count($_SESSION['answered']) < 20) {
        $playersDisplay = array_values(array_filter($_SESSION['players']));
        $currentTurn = $_SESSION['turn'] ?? 0;
        echo "<li style='color: #ffcc00; font-weight: bold; text-align:center; flex: 1;'>🎯 It's <strong>" . htmlspecialchars($playersDisplay[$currentTurn]) . "</strong>'s turn to choose.</li>";
    }
      ?>

      <?php
if (isset($_SESSION['players'])) {
    $playersDisplay = array_values(array_filter($_SESSION['players']));
    $scores = $_SESSION['scores'] ?? [];
    $totalPlayers = count($playersDisplay);

    echo '<li class="player-display" style="display: flex; flex-direction: row; gap: 24px;">';
    echo '<div style="display: flex; flex-direction: column; gap: 4px;"><strong>Players:</strong>';

    // First column: players 1–2
    for ($i = 0; $i < min(2, $totalPlayers); $i++) {
        $player = $playersDisplay[$i];
        $score = isset($scores[$player]) ? (int)$scores[$player] : 0;
        echo "<span>" . htmlspecialchars($player) . ": $score pts</span>";
    }
    echo '</div>';

    // Second column: players 3–4
    if ($totalPlayers > 2) {
        echo '<div style="display: flex; flex-direction: column; gap: 4px; margin-top: 22px;">';
        for ($i = 2; $i < $totalPlayers; $i++) {
            $player = $playersDisplay[$i];
            $score = isset($scores[$player]) ? (int)$scores[$player] : 0;
            echo "<span>" . htmlspecialchars($player) . ": $score pts</span>";
        }
        echo '</div>';
    }

    echo '</li>';
}
      ?>
    </ul>
  </nav>
</div>

<?php 
$totalQuestions = 20;
$gameOver = count($_SESSION['answered']) === $totalQuestions;

if (!$gameOver && isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo "<div class='feedback-message'>" . htmlspecialchars($msg) . "</div>";

    if (strpos($msg, 'Correct!') === 0) {
        echo "<div class='feedback-correct'>
                <img src='https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/image/correct.webp' alt='Correct!'>
              </div>";
    } else {
        echo "<div class='feedback-wrong'>
                <img src='https://codd.cs.gsu.edu/~wou1/wp/pw/jeopardy/image/x.png' alt='Wrong!'>
              </div>";
    }
}
?>

<?php
if (isset($_GET['category']) && isset($_GET['value'])) {
    $cat = (int)$_GET['category'];
    $val = (int)$_GET['value'];
    if (isset($questions[$cat][$val])) {
$questionPool = $questions[$cat][$val];
$randomIndex = rand(0, count($questionPool) - 1);
$selected = $questionPool[$randomIndex];

// Save this so we can grade it correctly later
$_SESSION['current_question'] = [
    'cat' => $cat,
    'val' => $val,
    'question' => $selected['question'],
    'answer' => $selected['answer'],
    'options' => $selected['options']
];

$q = $selected['question'];
$options = $selected['options'];

        echo "<form method='post' class='question-form'>
                <h2>Question for \$$val:</h2>
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
<th><div>Category 1<br><small>(HTML)</small></div></th>
<th><div>Category 2<br><small>(CSS)</small></div></th>
<th><div>Category 3<br><small>(PHP)</small></div></th>
<th><div>Category 4<br><small>(Geography)</small></div></th>
<th><div>Category 5<br><small>(Science)</small></div></th>
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
game.php
26 KB