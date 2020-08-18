<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class="container container-fluid ">

    <!--Hero section starts-->
    <div class="parallax"></div>
    <div class="container-fluid text-center" id="hero_text_bg">
        <div id="hero_text">
        <h1>Entrepreneurs For Future</h1>
  <hr class="my-4">
  <h2>WIRTSCHAFT WILL MEHR KLIMASCHUTZ</h2>
  <!-- <a class="btn btn-primary btn-lg" role="button" href="unterzeichnen.php?#1" >Jetzt unterzeichnen</a> -->
  </div>
        </div>
    </div>
    <!--Hero section ends-->   

 <!-- About section starts -->
 <br>
 <div class="container container-fluid ">
<p>
Wir sind Unternehmerinnen und Unternehmer, die heute schon Klimaschutz voranbringen bzw. sich dafür einsetzen, dass die Wirtschaft mit innovativen Produkten, Technologien, Dienstleistungen und Geschäftsmodellen einen schnelleren Klimaschutz voranbringt.
</p>
<p>
Unsere Initiative steht inzwischen für mehr als 180.000 Arbeitsplätze und mehr als 30 Mrd. EUR Umsatz.
</p>
Wir laden aktive Unternehmerinnen, Unternehmer, Gründerinnen, Gründer und Selbständige
<ul>
<li>aus allen Branchen,</li>
<li>die heute schon Klimaschutz mit ihren Unternehmungen voranbringen oder</li>
<li>die davon überzeugt sind, dass schnellere und bessere Klimaschutzmaßnahmen nötig sind</li>
</ul>
ein, die Stellungnahme von #EntrepreneursForFuture zu unterschreiben.</p>
</div>
</div>
<br><hr>
<!-- About section ends-->

 <!-- Signed section starts-->
 <div id="signed"></div>
    <div class="container-fluid text-center">
        <br>
        <br>
        <h3 class="text-center">4,659</h3>

        <br>
        <div class="signed_text"><strong>Unternehmen haben die Stellungnahme bereits unterzeichnet</strong></div>
        <br>
        <div><a href="members.php" class="btn btn-primary">ALLE ENTREPRENEURE ANSEHEN</a></div>
    </div>
    <!-- Signed section ends-->

        <!-- Sign section starts-->
        <div class="container-fluid" id="sign">
        <div class="container d-flex justify-content-around">
            <div class="text-white">
                <strong>
            Werden auch Sie Teil der Initiative #EntrepreneursForFuture und unterzeichnen Sie die Stellungnahme:
        </strong>
            </div>
            <div>
                <a href="statement_at" class="btn btn-primary">Jetzt unterzeichnen!</a>
            </div>
        </div>
    </div>
    <!-- Sign section ends-->

<!-- Blog section starts-->
<br>
    <div id="blog">
    <div class="container container-fluid ">
      
        <div class="container d-flex flex-wrap justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="img/img3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">See more <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg></a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="img/img3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">See more <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg></a>
                </div>
            </div>


            </div>
        </div>
    </div>
    <!-- Blog section ends-->

    <!-- Social media section starts-->
    <div class="container-fluid d-flex align-items-center justify-content-center" id="social">
        <div>
            <h3><em><strong>Folgen Sie uns in den Sozialen Medien!</strong></em></h3>
        </div>
        <div>
            <a href="https://www.facebook.com/E4FAustria/" target="_blank"><img src="img/social_media.png" alt="facebook"></a>
        </div>
    </div>
    <!-- Social media section ends-->
    <!-- Contact section starts-->
    <div class="container-fluid text-center" id="contact">
        <div class="container">
            <h2>SIE HABEN FRAGEN ZU</h2>
            <h2>ENTREPRENEURS FOR FUTURE?</h2>
            <p>Wir freuen uns auf Ihre Anregungen:</p>
            <br>
            <br>
            <div>
                <form>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="name" class="form-control" id="colFormLabel" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="colFormLabel" placeholder="E-mail">
                        </div>
                    </div>
                    <div><a href="#" class="btn btn-primary btn-lg">Submit</a></div>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact section ends-->

        <!--Footer section starts-->
        <div class="container-fluid d-flex align-content-center justify-content-around text-white" id="footer">
        <div>
            <p>Copyright @ Entrepreneurs For Future Austria, 2020</p>
            <p> <a href="#">Impressum</a> | <a href="#">Datenschutz</a></p>
        </div>

        <div>
            <p>Folgen Sie uns auf:</p>
            <a href="https://www.facebook.com/E4FAustria/" target="_blank">Facebook</a>
        </div>
    </div>
    <!-- Footer section ends-->

<?php
require_once "templates/footer.php";
?>

          
