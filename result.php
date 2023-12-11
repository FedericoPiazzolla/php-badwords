<?php 
  $paragraph = $_GET['paragraph'];
  $censored_word = $_GET['censor'];

  $censored_text = str_replace($censored_word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>Testo originale</h2>
  <p><?php echo $paragraph; ?></p>
  <p><strong>La lungheza del tuo testo:</strong> <?php echo strlen($paragraph) ?></p>

  <h2>Testo censurato</h2>
  <p><?php echo $censored_text; ?></p>
  <p><strong>La lungheza del tuo testo:</strong> <?php echo strlen($censored_text) ?></p>

</body>
</html>