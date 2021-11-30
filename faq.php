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

  $sections = [
    [
      "title" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?",
      "paragraphs" => [
        "La recente <a href='#'>decisione della Corte di giustizia dell'Unione europea</a> ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",
        "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.",
        "Per presentare una richiesta di rimozione, compila questo <a href='#'> modulo web.</a> Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",
        "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",
        "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione."
      ]
    ],
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
    <div class="container">
      
      <?php
        foreach ($sections as $section) { 

        echo "<div class='section'>";
        echo    "<h3>"; 
        echo      $section["title"]; 
        echo    "</h3>";

          foreach ($section["paragraphs"] as $paragraph) {
            echo "<p>";
            echo   $paragraph;
            echo "</p>";
          };

        echo "</div>";

        }
      ?>
    </div>
  </main>
  <footer>

  </footer>
</body>
</html>