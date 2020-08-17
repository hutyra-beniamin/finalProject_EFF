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

<div class="container container-fluid" id="1">
<br>
<p id="1"><b>Wir laden aktive Unternehmerinnen, Unternehmer, Gründerinnen, Gründer und Selbständige
<ul>
<li>aus allen Branchen,</li>
<li>die heute schon Klimaschutz mit ihren Unternehmungen voranbringen oder</li>
<li>die davon überzeugt sind, dass schnellere und bessere Klimaschutzmaßnahmen nötig sind</li>
</ul>
ein, die obenstehende Stellungnahme zu unterschreiben.
<br>
<p>
Indem Sie Namen und E-Mail-Adresse eingeben und bestätigen, unterzeichnen Sie die #EntrepreneursForFuture-Stellungnahme.</p>
<br>
<p>
Ihr Vor- und Nachname, der Firmenname und das Land (nicht aber E-Mail-Adresse oder sonstige Daten) werden anschließend veröffentlicht.</p>
<b><br>
<fieldset id="1">
<h2>Stellungnahme unterzeichnen</h2>
<br>
<form class="form-group ml-2" action="actions/a_create1.php" method= "post">
    <table cellspacing= "0" cellpadding="0">
        <tr>
            <th>Vorname*</th>
            <td><input  type="text" name="firstname"  placeholder="Vorname" required></td>
        </tr>  
        <tr>
            <th>Nachname*</th>
            <td><input  type="text" name="lastname"  placeholder="Nachname" required></td>
        </tr>   
        <!-- <tr>
            <th>Name</th>
            <td><input  type="text" name="name"  placeholder="Name" required></td>
        </tr>    -->
        <tr>
            <th>Email-Adresse*</th>
            <td><input type="text" name="email" placeholder="Email" required></td>
        </tr>   
        <tr>
            <th>Unternehmen*</th>
            <td><input  type="text" name= "company" placeholder="Unternehmen" required></td>
        </tr>
        <tr>
            <th>Funktion*</th>
		    <td>
			<select name="status" required>
				<option value="Inhaberin/Inhaber">Inhaberin/Inhaber</option>
				<option value="Gesellschafterin/Gesellschafter">Gesellschafterin/Gesellschafter</option>
                <option value="Geschäftsführerin/Geschäftsführer">Geschäftsführerin/Geschäftsführer</option>
                <option value="Prokuristin/Prokurist">Prokuristin/Prokurist</option>
			</select>
		</td>
        </tr> 
        <tr>
            <th>Website*</th>
            <td><input  type="text" name= "website" placeholder="Website, z.B. https://entrepreneurs4future.de" required></td>
        </tr>  
        <tr>
            <th>Stadt/Ort*</th>
            <td><input type="text" name="city" placeholder="Stadt/Ort, z.B. Wien" required></td>
        </tr>
        <tr>
            <th>Land*</th>
            <td><input type="text" name="country" placeholder="Land, z.B. Österreich" required></td>
        </tr>
            <td><button class="btn btn-primary mt-4" type ="submit">UNTERZEICHNEN</button></td>
            <!-- <td ><a href= "admin.php"><button class="btn btn-dark mt-4" type="button">Back</button></a></td> -->
        </tr>
    </table>
</form>

</fieldset>
</div>

</div>
<br><hr>

<?php
require_once 'templates/footer.php';
?>
