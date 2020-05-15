<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo
Visualizzare a schermo la relativa lunghezza del paragrafo
Sostituire tutte le ricorrenze, nel paragrafo creato, della badword passata in GET (query string) con tre * (asterschi). -->

<?php

    $testo = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus perspiciatis deserunt sint odio, quaerat repudiandae libero amet illo quia, vitae voluptate dignissimos sunt aspernatur eveniet explicabo? Ex fugiat eum non!";
    $length = strlen($testo);
    $word = $_GET['badword'];
    $replaced = str_replace ($word, '***', $testo);

?>

<p>Questo è il testo iniziale <?php echo $testo ?></p>

<p>Questa è la badwords <?php echo $word ?></p>

<p>Questo è il nuovo testo  <?php echo $replaced ?></p>

<p>La lunghezza del testo è  <?php echo $length; ?></p>

</body>
</html>