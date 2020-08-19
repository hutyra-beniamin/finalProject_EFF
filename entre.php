<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class= "container container-fluid">
<div class="col-sm-12 md-8">
<h1>Entrepreneurs For Future</h1>
</div>

<div class= "container container-fluid">
<div class="row">
<div class="col-sm-12 col-md-7 mt-4">
       <div class="card">
        <!-- <img src="././img/streik_2910.jpg" class="card-img-top" alt="WKO Streik"> -->
        <br>
        <h3 class="pl-2">Über uns</h3>
            <div class="card-body">
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
        </div>
        </div>

        <div class="col-sm-12 col-md-5 mt-4">
        <div class="card offset-sm-0 offset-md-2">
        <img src="././img/there is no wirtschaftsstandort.JPG" class="card-img-top" alt="Wirtschaftsstandort">
        <br>
        <h3 class=" pl-2">Partner-Organisationen</h3>
            <div class="card-body">
                <ul>
                    <li><a href="https://entrepreneurs4future.de/" target="_blank">Entrepreneurs For Future Deutschland</a></li>
                    <li><a href="https://fridaysforfuture.at/" target="_blank">Fridays For Future</a></li>
                    <li><a href="https://www.gruenewirtschaft.at/entrepreneurs-for-future/" target="_blank">Grüne Wirtschaft</a></li>
                    <li><a href="https://www.businessart.at/" target="_blank">BUSINESSART</a></li>
                </ul>
            </div>
            
        </div>
        </div>

    </div>
</div>
</div>



    <br><hr>

<?php
require_once 'templates/footer.php';
?>
