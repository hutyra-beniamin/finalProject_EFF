<?php
ob_start();
session_start();
require_once 'dbconnect.php';
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class= "container container-fluid">
<div class ="col-sm-12 col-md-10">
<h1 class="ml-2">Erfolgsgeschichten</h1>

<!-- <iframe width="522" height="235" src="https://www.youtube.com/embed/-IgM8Rag_qk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="522" height="235" src="https://www.youtube.com/embed/ELWGRX7jGw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<iframe width="522" height="235" src="https://www.youtube.com/embed/m1YuldpTkXI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->

    <!-- </div>
    </div> -->

<div class ="container" id="success_stories">

<div class="row h2_stories">
	<div class="col">
	<br>
	</div>
</div>

<div class="container container_all_stories">



	<div class="row success_story">

		<div class="col-md-3 success_image">
			<img class="mr-4" src="img/Accor.jpg" alt="Accor">
		</div>

		<div class="col-md-6 success_text">
        <h3 class="ml-4">ACCOR Hotels</h3>
        <p class="ml-4">„Umweltfreundliches Handeln ist uns als Gastgeber ein großes Anliegen. Es war uns möglich unsere Hotel-Combo in kurzer Zeit mit dem österreichischen Umweltzeichen und dem Ecolabel zu zertifizieren. Folgende Maßnahmen wurden bereits umgesetzt:

Lokale Beschaffung von Waren, um weniger Kraftstoff zu verbrauchen und die Luft sauber zu halten Putzmittel und Toilettenpapier tragen Öko-Gütesiegel.
Alle Kosmetikprodukte sind mit dem europäischen Ecolabel zertifiziert.
Leere Druckerpatronen in den Büros beider Hotels werden einer gemeinnützigen Einrichtung gespendet.
Möglichst wenig Lebensmittelabfälle zu erzeugen und Müll richtig zu trennen
Beim Einkaufen wird auf Bio- und Fairtrade-Qualität geachtet
Auf Plastikflaschen und Getränkedosen verzichten etc.“</p>

		</div>

	</div>
<br>
	<div class="row success_story">

		<div class="col-md-3 success_image">
			<img class="mr-4" src="img/Al_Chile.jpg" alt="Adventure_Catering">
		</div>

		<div class="col-md-6 success_text">
        <h3 class="ml-4">Al Chile!</h3>
        <p class="ml-4">  „Unser Unternehmen war stets sehr an Nachhaltigkeit interessiert: Wir trennen seit unserer Gründung bewusst Müll und führen Küchenabfälle, Getränkekartons und Altspeisefett der Wiederverwertung zu. Im Sinne der Müllvermeidung haben wir auch bereits zuvor realistische Portionsgrößen angeboten, die es den Gästen erlauben ihre Mahlzeiten fertig zu essen, sowie - im Fall, dass doch einmal etwas überbleibt – den Gästen die Mitnahme ihrer Speisereste in biologisch abbaubaren Behältern angeboten. Der ÖkoBusinessPlan Wien hat uns bei unseren Bemühungen möglichst wenig Müll anfallen zu lassen weiter unterstützt, in dem gemeinsam mit anderen, gleichgesinnten Gastronomen über weitere mögliche Maßnahmen reflektiert wurde und bei einem Praxistraining diese auch an Hand von Beispielen gezeigt wurden.“</p>
    
		</div>

	</div>
	<br>
	<div class="row success_story">

		<div class="col-md-3 success_image">
			<img class="mr-4" src="img/adventure_catering.jpg" alt="Adventure_Catering">
		</div>


		<div class="col-md-6 success_text">
        <h3 class="ml-4">Adventure Catering GmbH</h3>
        <p class="ml-4">„Durch den ÖkoBusinessPlan Wien konnten wir unser Einsparungspotenzial aufzeigen und unsere Energie-, Betriebs- und Wartungskosten in allen Bereichen unserer Produktion deutlich senken. Bereits beim Bau der Betriebsanlage wurde auf alle relevanten Möglichkeiten zur Energierückgewinnung Rücksicht genommen. Die Etablierung eines perfekt abgestimmten Abfallmanagements und eines Mülltrennungssystems entlastet die Umwelt nachhaltig. Sorgfältiges Wirtschaften im Energiebereich sowie die Verarbeitung regionaler und biologischer Lebensmittel sind wichtige Eckpfeiler unserer Unternehmensphilosophie. Es ist in unserem persönlichen Interesse, mit den vorhandenen Ressourcen so schonend und behutsam wie möglich umzugehen.“</p>
			
		</div>

	</div>
	<!-- <br>
	<div class="row success_story">

		<div class="col-md-3 success_image">
			<img src="img/Agrarmarkt.jpg" alt="Adventure_Catering">
		</div>

		<div class="col-md-6 success_text">
			„Im Jahr 2015 wurde das Umweltmanagementsystem (UMS) EMAS und die ISO 14001 in der Agrarmarkt Austria (AMA) aufgebaut und erfolgreich implementiert. Als ausgezeichneter ÖkoBusinessPlan Wien-Betrieb wollen wir Vorbild für andere Unternehmen sein, dass sich ökologisches Engagement rechnet. Es wurden zahlreiche Maßnahmen festgelegt bzw. bereits umgesetzt. Im Bereich der nachhaltigen Beschaffung wurde ein detaillierter Leitfaden mit ökologischen Kriterien erstellt und sukzessive umgesetzt. Der Abfallbereich wurde durch die Erhöhung der Trennschärfe (Einführung und Umsetzung von Abfalltrennmaßnahmen) optimiert. Im Bereich der Stockwerksdrucker/Kopierer wurde auf nachhaltiges Papier mit dem PEFC-Gütesiegel umgestellt. Als weitere wesentliche Verbesserung konnte der Stromverbrauch im Bereich „IT“ durch die Erneuerung und Verringerung der Speichersystemanzahl (Storage) und die Einsparung von rund 50 % der Serverlandschaft sowie durch die sukzessive Modernisierung auf LED-Leuchtquellen reduziert werden.“
		</div>

	</div> -->




</div> <!-------------------end of container_all_stories------------->

</div> <!------------------- end container success stories------------------------>
</div>
<br><hr>

<?php
require_once 'templates/footer.php';
?>