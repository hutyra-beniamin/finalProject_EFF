<div >
<?php
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class="container container-fluid ">
<div class="jumbotron parallax1 mb-0">
</div>
<div class="jumbotron">
  <h1 class="display-4">Entrepreneurs For Future</h1>
  <hr class="my-4">
  <p>WIRTSCHAFT WILL MEHR KLIMASCHUTZ</p>
  <a class="btn btn-primary btn-lg" role="button" href="https://entrepreneurs4future.de/stellungnahme/" target="_blank">Jetzt unterzeichnen</a>
</div>

<div>
<p>
Wir sind Unternehmerinnen und Unternehmer, die heute schon Klimaschutz voranbringen bzw. sich dafür einsetzen, dass die Wirtschaft mit innovativen Produkten, Technologien, Dienstleistungen und Geschäftsmodellen einen schnelleren Klimaschutz voranbringt.
</p>
<p>
Unsere Initiative steht inzwischen für mehr als 180.000 Arbeitsplätze und mehr als 30 Mrd. EUR Umsatz.
</p>
<p>
Wir laden
aktive Unternehmerinnen, Unternehmer, Gründerinnen, Gründer und Selbständige
aus allen Branchen,
die heute schon Klimaschutz mit ihren Unternehmungen voranbringen oder die davon überzeugt sind, dass schnellere und bessere Klimaschutzmaßnahmen nötig sind
ein, die Stellungnahme von #EntrepreneursForFuture zu unterschreiben.</p>
</div>
<br><hr>

<footer class="footer footer-expand-lg pt-0 py-4">
<!-- <div class="container float-left "> -->
<p class="pl-4">(c) Team 9 / CodeFactory, 2020<br><br></p>
 <p></p>
</footer>

</div>

<?php
require_once "templates/footer.php";
?>

          
