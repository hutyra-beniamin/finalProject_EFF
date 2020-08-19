<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( !isset($_SESSION['user' ])!="" ) {
    header("Location: index.php");
    exit;
   }

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  

?>

<div class="container container-fluid ">

    <!--Hero section starts-->
    <div class="parallax"></div>
    <div class="jumbotron jumbotron-fluid text-light text-center" id="hero_text">
        <div class="container">
        <h1 class="display-4">Entrepreneurs For Future</h1>
        <!-- <hr class="my-4"> -->
        <h2 class="display-5">Wirtschaft will mehr Klimaschutz</h2>
        </div>
    </div>
    <!--Hero section ends-->
<!-- About section starts -->
<br>

<div class="container" id="about_text">

    <h4>Wir sind Unternehmerinnen und Unternehmer, die heute schon Klimaschutz voranbringen bzw. sich dafür einsetzen, dass die Wirtschaft mit innovativen Produkten, Technologien, Dienstleistungen und Geschäftsmodellen einen schnelleren Klimaschutz voranbringt.
  </h4>
  <br>
    <h4 class="text-center"><em>Unsere Initiative steht inzwischen für mehr als 180.000 Arbeitsplätze und mehr als 30 Mrd. EUR Umsatz.</em></h4>
    <br>
    <h3>Wir laden</h3>
    <br>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="container mr-2 pr-1"><b>aktive Unternehmerinnen, Unternehmer, Gründerinnen, Gründer und Selbständige aus allen Branchen, die heute schon Klimaschutz mit ihren Unternehmungen voranbringen oder die davon überzeugt sind, dass schnellere und bessere Klimaschutzmaßnahmen
            nötig sind</b>

        </div>
        <div class="container ml-3" id="about_img">
            <img src="img/ecology.png" alt="">
        </div>
    </div>
    <br>
    <br>
    <h3>ein, die Stellungnahme von #EntrepreneursForFuture zu unterschreiben.</h3>
</div>

<br>
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
            <div class="text-white text-center m-3">
                <strong>
            Werden auch Sie Teil der Initiative #EntrepreneursForFuture und unterzeichnen Sie die Stellungnahme:
        </strong>
            </div>
            <div>
                <a href="#" class="btn btn-primary btn-lg" id="sign_button">Jetzt unterzeichnen!</a>
            </div>
        </div>
    </div>
    <!-- Sign section ends-->

<!-- Blog section starts-->

    <div id="blog">
    <div class="container container-fluid ">
      
        <div class="container d-flex flex-wrap justify-content-around">
            <div class="card mt-4" style="width: 18rem;">
                <img src="img/img3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">See more <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                      </svg></a>
                </div>
            </div>
            <div class="card mt-4" style="width: 18rem;">
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


<div class="container-fluid" id="social">
        <div class="container text-center text-white">
            <h3>Folgen Sie uns auf Social media</h3>
        </div>
        <br>
        <div class="container d-flex justify-content-around flex-wrap">
            <div class="facebook">
                <a href="https://www.facebook.com/" class="fa fa-facebook p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
            </div>
            <div class="twitter">
                <a href="https://twitter.com/?lang=de" class="fa fa-twitter p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
            </div>
            <div class="instagram">
                <a href="https://www.instagram.com/?hl=de" class="fa fa-instagram p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
            </div>
            <div class="pintrest">
                <a href="https://www.pinterest.at/" class="fa fa-pinterest p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
            </div>
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
             
            <!-- <div class="form-group">
    <label for="message">Nachricht</label>
    <textarea class="form-control" name="message" id="message" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email">
  </div> -->
  
            <form class="d-flex flex-column w-80 align-content-center" action="contact_backend.php" method="post">
                    <div class="form-group">

<!-- <div class="form-group">
    <label for="name">Vorname</label>
    <input type="text" class="form-control" name="name" id="name">
  </div>
  <div class="form-group">
    <label for="surname">Nachname</label>
    <input type="text" class="form-control" name="surname" id="surname">
  </div> -->

                        <div class="mx-auto">
                        <div class="form-group ">
                            <input type="name" class="form-control text-center" name="name" id="name colFormLabel" placeholder="Vorname">
                        </div>
                        <div class="form-group ">
                    <input type="name" class="form-control text-center" name="surname" id="surname colFormLabel" placeholder="Nachname">
                        </div>
                        <div class="form-group ">
                    <textarea class="form-control text-center" name="message" id="message colFormLabel" placeholder="Message" rows="10"></textarea>
                   </div>
                        <!-- <div>
                            <input type="text" class="form-control text-center" id="colFormLabel" placeholder="Message">
                        </div> -->
                    </div>
                    <div class="form-group ">
                        <div>
                            <input type="email" class="form-control text-center" name="email" id=" email colFormLabel" placeholder="E-mail">
                        </div>
                    </div>
                    <input type="submit" class="btn btn-outline-primary"></div>
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
            <div class="container d-flex">
                <div>
                    <a href="https://www.facebook.com/E4FAustria/" class="fa fa-facebook p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
                </div>
                <div>
                    <a href="https://twitter.com/?lang=de" class="fa fa-twitter p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
                </div>
                <div>
                    <a href="https://www.instagram.com/?hl=de" class="fa fa-instagram p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
                </div>
                <div>
                    <a href="https://www.pinterest.at/" class="fa fa-pinterest p-2 text-white" style="font-size: 2vw; text-decoration:none;"></a>
                </div>
    </div>
    <!-- Footer section ends-->


<?php
require_once "templates/footer.php";
?>