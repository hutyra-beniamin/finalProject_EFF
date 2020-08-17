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
<h1>Stellungnahme von Unternehmerinnen & Unternehmern aus Österreich zu den Protesten für mehr Klimaschutz (#EntrepreneursForFuture)</h1>

<div>
<p>
#FRIDAYSFORFUTURE SIND DRINGENDER WECKRUF – WIRTSCHAFT WILL ENDLICH MEHR KLIMASCHUTZ UMSETZEN
Inzwischen streiken und demonstrieren weltweit junge Menschen für ambitionierten Klimaschutz, für das Benennen der Klimakrise als echte Krise und für die Rettung unseres Planeten. Die historische Mobilisierungskraft der Bewegung zeigt die Dringlichkeit des Anliegens. Auch die Wissenschaft hat mit tausenden Unterzeichnenden der Initiative #Scientists4Future.org erklärt, dass die derzeitigen Maßnahmen zum Klima-, Arten-, Wald-, Boden- und Meeresschutz bei weitem nicht ausreichen. Als Unternehmerinnen und Unternehmer erklären wir uns mit den Streikenden solidarisch.

Aus unserem eigenen tagtäglichen unternehmerischen Handeln wissen wir: Klimaschonendes Wirtschaften funktioniert heute schon. Viele innovative Technologien, Produkte, Dienstleistungen und Geschäftsmodelle für einen besseren Klimaschutz gibt es bereits. Aber weitergehende politische Rahmenbedingungen sind endlich nötig, damit faire Wettbewerbsbedingungen für klimaschonende Technologien und Geschäftsmodelle hergestellt werden und die Wirtschaft insgesamt umsteuert.

Die Staaten der Weltgemeinschaft haben sich mit dem Pariser Klimaschutzabkommen von 2015 völkerrechtlich verbindlich dazu verpflichtet, die globale Erwärmung deutlich unter 2°C zu halten. Alle Länder haben außerdem Anstrengungen versprochen, die Erwärmung auf 1,5°C zu begrenzen.

Als unterzeichnende Unternehmerinnen und Unternehmer stehen wir hinter dem Pariser Klima­schutz­abkommen und unterstützen diese Forderungen:

Eine wirksame und planbar steigende CO2-Bepreisung für alle Sektoren. Investitionen werden so in eine kohlenstoffarme Infrastruktur, Technologien und Produkte gelenkt.
Energiewende beschleunigen. Schneller, gesetzlich verankerter Ausstieg aus den fossilen Energien. Österreich, Europa und die Welt können technisch zu 100% aus erneuerbaren Energien versorgt werden. Eine umfassende Energieeffizienzstrategie zur Verankerung von Efficiency First in allen Bereichen, insbesondere Förderungen für Gebäudesanierungen sowie ambitionierte gesetzliche Vorgaben mit Vorbildrolle der öffentlichen Hand.
Divestment und Abschaffung klimaschädlicher Subventionen bis zum Jahr 2025, wie z.B. von den G7-Staaten beschlossen.
Eine Mobilitätswende, die auf Verkehrsvermeidung, öffentlichen Verkehr, umweltfreundliche und geteilte Verkehrsmittel sowie C02-freie Antriebssysteme setzt. Wir brauchen die Besteuerung des Flugverkehrs (Kerosinsteuer) und reduzierte Umsatzsteuern auf Produkte und Dienstleistungen des Radverkehrs.
Eine Agrar- und Ernährungswende. Die Subventionspolitik in der Landwirtschaft und die Rahmenbedingungen für die Ernährungswirtschaft müssen in Einklang mit den Klimaschutzzielen stehen – und mit wirksamen Maßnahmen wie der Ausdehnung einer ökologischen und klimaschonenden Landwirtschaft und der Förderung entsprechender Ernährungs- und Konsumstile unterstützt werden.
Kreislaufwirtschaft forcieren. In der Regel ist die Nutzung von Sekundärrohstoffen der Nutzung von Primärrohstoffen ökologisch überlegen, da sie mit weniger Energieaufwand hergestellt werden können und auf geringere Transportwege angewiesen sind. Rücknahme-, Recycling-, und insbesondere die Wiederverwertungsquoten müssen nicht nur gesetzt, sondern auch durchgesetzt werden.
Aufbau eines Klima-Innovationsfonds für etablierte Unternehmen und Startups, die innovative Lösungen für die Steuerung/ Bewältigung der Klimakrise realisieren.
Ein ambitioniertes Klimaschutzgesetz, das eine dekarbonisierte Wirtschaft im Einklang mit dem in Paris vereinbarten 1,5°C Ziel erreicht.
Ein nachhaltiges Finanzsystem. Die von der EU-Kommission für Europa geschätzten Kosten von 180 Mrd. Euro jährlich zur Erreichung der Klima- und Energieziele können aufgebracht werden. Dazu bedarf es auch eines nachvollziehbaren Labels für nachhaltige Investitionen sowie gesetzlicher Regelungen – sei es durch steuerliche Anreize oder Vorschriften über die Mittelverwendung -, um privaten und institutionellen Investoren einen Rahmen zu bieten, ihren Beitrag bei der Mittelaufbringung zu leisten.
Wir setzen voller Überzeugung auf Klimaschutz!

Als Profis aus der Wirtschaft wissen wir um die Kraft innovativer Geschäftsmodelle und Technologien, die das Klima schützen und profitabel sind. Die konsequente und schnelle Einführung erneuerbarer Energien, einer ökologischen Landwirtschaft, einer Kreislauf­wirtschaft und einer neuen Mobilität schaffen und sichern zukunftsfähige Arbeitsplätze. Klimaschützende Technologien und Geschäftsmodelle scheitern häufig an politischen Rahmenbedingungen, die Geschäftsmodelle und Technologien der Vergangenheit schützen. Die vergangenen 20 Jahre haben gezeigt, dass die technologische Entwicklung und Möglichkeiten für den Klimaschutz rasant gestiegen und die Kosten immens gesunken sind.

Um die gesamte Wirtschaft zu transformieren, benötigen wir dringend andere politische Rahmenbedingungen.

Wenn wir jetzt handeln, ist eine geregelte Dekarbonisierung der Wirtschaft möglich. Nur dann schaffen wir eine enkeltaugliche Wirtschaft. Nur dann können wir die Klimakrise noch steuern und unsere natürlichen Lebensgrundlagen erhalten. Dafür streiken die Kinder und Jugendlichen von „Fridays for Future“; ihnen gebührt unsere Achtung und unsere volle Unterstützung.

 

#EntrepreneursForFuture

</p>

</div>
<br><hr>

<?php
require_once 'templates/unterzeichnen.php';
require_once 'templates/footer.php';
?>
