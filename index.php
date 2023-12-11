<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-Badwords</title>
</head>

<body>

  <h1>Inserisci un paragrafo ed una parola da censurare</h1>

  <form action="result.php" method="GET">

    <label for="paragraph">Inserisci un paragrafo</label>
    <input type="text" id="paragraph" name="paragraph">

    <label for="censor">Inserisci una parola da censurare</label>
    <input type="text" id="censor" name="censor">

    <button type="submit">Invia</button>
  </form>
</body>
</html>