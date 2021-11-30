<?php

  $navLinks = [
    [
      "title" => "Introduzione",
      "href" => "#",
      "active" => false
    ],
    [
      "title" => "Norme sulla privacy",
      "href" => "#",
      "active" => false
    ],
    [
      "title" => "Termini di servizio",
      "href" => "#",
      "active" => false
    ],
    [
      "title" => "Tecnologie",
      "href" => "#",
      "active" => false
    ],
    [
      "title" => "Domande frequenti",
      "href" => "#",
      "active" => true
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Domande frequenti - Privacy e termini</title>
</head>
<body>
  <header>
    <nav class="px-3">
      <div class="py-2 d-flex align-items-center">
        <img src="img/Google-Logo.png" alt="Google logo">
        <h2 class="d-inline-block fs-5 m-0 ps-1 ">Privacy e termini</h2>
      </div>
      <ul class="m-0 p-0">
        <?php
          foreach ($navLinks as $link) {    
        
          if ($link["active"] === true) {
            echo "<li class='navLink navLink_active'>";
          } else {
            echo "<li class='navLink'>";
          };
        ?>
        
          <a href="<?php echo $link["href"] ?>" class="navLink_active">
            <?php echo $link["title"] ?>
          </a>
        </li>

        <?php
          };
        ?>
      </ul>
    </nav>
  </header>
  <main>

  </main>
  <footer>

  </footer>
</body>
</html>