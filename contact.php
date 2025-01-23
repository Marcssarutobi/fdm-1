<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!-- Lien vers le CSS d'Owl Carousel -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<!-- Lien vers jQuery (si tu ne l'as pas déjà inclus) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Lien vers le JS d'Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                                <ul class="right-icons" id="language-buttons">

                                <li><a id="fr-button" style="cursor:pointer;">Français</a></li>
                                <li><a id="en-button" style="cursor:pointer;">English</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php">            
            <img src="assets/images/logo.jpg" alt="Logo Fondation Divine Miséricorde" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item"><a class="nav-link" href="index.php" id="home"></a></li>
            <li class="nav-item "><a class="nav-link" href="about.php" id="about"></a></li>
            <li class="nav-item"><a class="nav-link" href="services.php" id="services"></a></li>
            <li class="nav-item active"><a class="nav-link" href="contact.php" id="contact"></a></li>
            <a class="btn-getstarted" href="index.php#about" id="donate"></a>
          </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12 content">
            <h1 id="about-title1"></h1>
            <span id="about-text1"></span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4 id="about-title2"></h4>
              <p id="about-text2"></p>
              <a href="#">0161595896 / 0164423601  </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4 id="about-title3"></h4>
              <p id="about-text3"></p>
              <a href="#">fondationdivinemisericorde2024@gmail.com</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4 id="about-title4"></h4>
              <p id="about-text4"></p><br>
              <a href="#" id="about-text5"></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading content">
              <h2 id="about-title5"></h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="send-message.php" method="post">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nom"  required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Objet" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Votre Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="border-button" style="background-color: black;"></button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="assets/images/partenaire/part1.png" title="1" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/partenaire/part2.jpg" title="2" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/partenaire/part3.jpg" title="3" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/partenaire/part4.jpg" title="4" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="assets/images/partenaire/part5.png" title="5" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 footer-item ">
          <h4 id="nom"></h4>
          <ul class="social-icons">
            <li>
              <a rel="nofollow" href="https://www.facebook.com/share/p/14dDtSat98/?mibextid=wwXIfr" target="_blank"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-md-3 footer-item content">
          <h4 id="lien"></h4>
          <ul class="menu-list content">
            <li><a href="index.php" id="home1"></a></li>
            <li><a href="about.php" id="about1"></a></li>
            <li><a href="services.php" id="services1"></a></li>
            <li><a href="contact.php" id="contact1"></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item footer-item2 content">
          <h4 id="domaine"></h4>
          <ul class="menu-list content">
            <li><a href="services.php#tabs-1" id="serv1"></a></li>
            <li><a href="services.php#tabs-2" id="serv2"></a></li>
            <li><a href="services.php#tabs-3" id="serv3"></a></li>
            <li><a href="services.php#tabs-4" id="serv4"></a></li>
            <li><a href="services.php#tabs-5" id="serv5"></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-item last-item footer-newsletter">
          <div class="content">
          <h4 id="lettre"></h4>
          <p id="lettretext"></p>
          </div>
          <form id="newsletter-form" class="php-email-form content">
            <div class="newsletter-form"><input type="email" name="email" required><input type="submit" id="subscribe-button" value="S'abonner"></div>
          </form>
        </div>
      </div>
    </div>
  </footer>


  <div class="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            <strong id="texte"></strong>
          </p>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/accordions.js"></script>
<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
      if (!cleared[t.id]) {                      // function makes it static and global
        cleared[t.id] = 1;  // you could use true and false, but that's more typing
        t.value = '';         // with more chance of typos
        t.style.color = '#fff';
      }
    }
  </script>
  <script>
  document.getElementById('newsletter-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    var email = document.querySelector('input[name="email"]').value;

    // Vérifier si l'email est valide
    if (validateEmail(email)) {
      // Envoi AJAX du formulaire
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'newsletter.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          
          // Afficher SweetAlert2 en fonction de la réponse
          if (response.success) {
            Swal.fire({
              icon: 'success',
              title: 'Merci pour votre abonnement!',
              text: 'Nous vous enverrons nos dernières nouvelles à ' + email + '.'
            }).then(() => {
              // Réinitialiser le formulaire après succès
              document.getElementById('newsletter-form').reset();
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Erreur',
              text: response.message
            });
          }
        }
      };

      xhr.send('email=' + encodeURIComponent(email));
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Email invalide',
        text: 'Veuillez entrer un email valide.'
      });
    }
  });

  // Fonction de validation de l'email
  function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
  }
</script>
    <script type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
(function(){
  emailjs.init({
    publicKey: "lJtO2an7JuBwF1NoU",
  });
})();
</script>
<script>
document.getElementById('contact').addEventListener('submit', function (event) {
    event.preventDefault(); // Empêche le formulaire de se soumettre normalement

    // Récupérer les données du formulaire
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    // Valider les champs
    if (name && email && subject && message && validateEmail(email)) {
        // Envoi AJAX du formulaire
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'send-message.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                
                // Afficher SweetAlert2 en fonction de la réponse
                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Message envoyé',
                        text: response.message
                    }).then(() => {
                        // Réinitialiser le formulaire après succès
                        document.getElementById('contact').reset();
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: response.message
                    });
                }
            }
        };

        // Envoi des données
        xhr.send('name=' + encodeURIComponent(name) + '&email=' + encodeURIComponent(email) + '&subject=' + encodeURIComponent(subject) + '&message=' + encodeURIComponent(message));
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Champs invalides',
            text: 'Veuillez remplir tous les champs correctement.'
        });
    }
});

// Fonction de validation de l'email
function validateEmail(email) {
    var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return regex.test(email);
}
</script>
<script>
  let translations = {};

  // Charger le fichier JSON de traductions
  fetch('translations.json')
    .then(response => response.json())
    .then(data => {
      translations = data; // Stocke les traductions dans l'objet

      // Récupère la langue à partir de l'URL ou de localStorage
      const urlParams = new URLSearchParams(window.location.search);
      const urlLanguage = urlParams.get('lang');
      const savedLanguage = localStorage.getItem('selectedLanguage') || 'fr'; // Défaut : 'fr'

      // Si une langue est spécifiée dans l'URL, utiliser celle-ci
      const currentLanguage = urlLanguage || savedLanguage;
      switchLanguage(currentLanguage);

      // Met à jour l'URL si elle ne contient pas la langue
      if (!urlLanguage) {
        updateURLWithLanguage(currentLanguage);
      }
    })
    .catch(error => console.error('Erreur de chargement du fichier de traduction:', error));

  // Fonction pour changer la langue
  function switchLanguage(lang) {
    const langData = translations[lang];
    if (langData) {
      // Mettre à jour tous les éléments du site avec les traductions
      document.getElementById('home').textContent = langData.home;
      document.getElementById('about').textContent = langData.about;
      document.getElementById('services').textContent = langData.services;
      document.getElementById('contact').textContent = langData.contact;
      document.getElementById('home1').textContent = langData.home;
      document.getElementById('about1').textContent = langData.about;
      document.getElementById('services1').textContent = langData.services;
      document.getElementById('contact1').textContent = langData.contact;
      document.getElementById('donate').textContent = langData.donate;
      document.getElementById('about-title1').textContent = langData["about-title1"];
      document.getElementById('about-text1').innerHTML = langData["about-text1"];
      document.getElementById('about-title2').textContent = langData["about-title2"];
      document.getElementById('about-text2').innerHTML = langData["about-text2"];
      document.getElementById('about-title3').textContent = langData["about-title3"];
      document.getElementById('about-text3').innerHTML = langData["about-text3"];
      document.getElementById('about-title4').textContent = langData["about-title4"];
      document.getElementById('about-text4').innerHTML = langData["about-text4"];
      document.getElementById('about-title5').innerHTML = langData["about-title5"];
      document.getElementById('serv1').textContent = langData.serv1;
      document.getElementById('serv2').textContent = langData.serv2;
      document.getElementById('serv3').textContent = langData.serv3;
      document.getElementById('serv4').textContent = langData.serv4;
      document.getElementById('serv5').textContent = langData.serv5;
      document.getElementById('lien').textContent = langData.lien;
      document.getElementById('domaine').textContent = langData.domaine;
      document.getElementById('nom').textContent = langData.nom;
      document.getElementById('texte').textContent = langData.texte;
      document.getElementById('lettre').textContent = langData.lettre;
      document.getElementById('lettretext').textContent = langData.lettretext;
      document.getElementById('subscribe-button').value = langData.subscribe;
      document.getElementById('about-text5').innerHTML = langData["about-text5"];
      document.getElementById('name').placeholder= langData.name;
      document.getElementById('email').placeholder = langData.email;
      document.getElementById('subject').placeholder = langData.subject;
      document.getElementById('message').placeholder = langData.message;
      document.getElementById('form-submit').textContent = langData.submit;

      // Stocke la langue choisie dans localStorage
      localStorage.setItem('selectedLanguage', lang);

      // Met à jour l'URL pour inclure la langue
      updateURLWithLanguage(lang);
    }
  }

  // Fonction pour mettre à jour l'URL avec le paramètre de langue
  function updateURLWithLanguage(lang) {
    const url = new URL(window.location.href);
    url.searchParams.set('lang', lang);
    window.history.replaceState({}, '', url); // Met à jour l'URL sans recharger la page
  }

  // Écouteurs pour les boutons de langue
  document.getElementById('fr-button').addEventListener('click', () => switchLanguage('fr'));
  document.getElementById('en-button').addEventListener('click', () => switchLanguage('en'));
</script>
<script>
  $(document).ready(function(){
  $(".owl-partners").owlCarousel({
    items: 4, /* Nombre d'éléments visibles à la fois */
    margin: 30, /* Marge entre les items */
    loop: true, /* Permet à la liste de boucler */
    autoplay: true, /* Activer l'autoplay */
    autoplayTimeout: 3000, /* Temps de pause entre chaque slide (en ms) */
    autoplayHoverPause: true, /* Pause au survol */
    responsive: {
      0: {
        items: 1, /* Affiche un item sur les petits écrans */
        autoplay: true, /* Toujours activer l'autoplay pour les petits écrans */
      },
      576: {
        items: 2, /* Affiche deux items pour les écrans moyens */
      },
      768: {
        items: 3, /* Affiche trois items pour les écrans plus grands */
      },
      992: {
        items: 4, /* Affiche quatre items pour les grands écrans */
      }
    }
  });
});

</script>
  </body>
</html>