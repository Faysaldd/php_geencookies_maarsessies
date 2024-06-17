<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Counter</title>
</head>
<body>
    <h1>Visit Counter</h1>
    <?php
    session_start();

    if (isset($_SESSION['visit_count'])) {
        $_SESSION['visit_count']++;
    } else {
        $_SESSION['visit_count'] = 1;
    }

    echo "<p>Je hebt deze pagina {$_SESSION['visit_count']} keer bezocht!</p>";
    ?>
</body>
</html>
