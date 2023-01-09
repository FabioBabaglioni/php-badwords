<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>

    <!-- tag per scrivere php-->
    <?php
    // creo la variabile con il testo 
    $testo = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam ullam, ut doloribus esse enim voluptates, ipsam nihil veniam, accusamus laboriosam laudantium molestias error. Nam et similique, magnam reiciendis ad modi sit.";

    // stampo il testo 
    echo $testo;
    ?>
  </div>

  <div>

    <?php
    // stampo la lunghezza in caratteri della variabile testo
    echo strlen($testo);
    ?>
  </div>

  <div>
    <?php
    // sostituice la parola inserita dall'utente con gli asterischi
    echo str_replace(htmlspecialchars($_GET["name"]), "***", $testo);
    ?>
  </div>

  <div>
    <?php
    // sostituice la parola inserita dall'utente con gli asterischi
    echo strlen($testo);
    ?>
  </div>

</body>

</html>