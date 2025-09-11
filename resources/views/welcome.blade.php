<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIDEPA 2025 - Forum International de la Démocratie Participative en Afrique</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
  <style >
    :root {
      --fidepa-blue: #0056b3;
      --fidepa-yellow: #ffd700;
      --fidepa-green: #28a745;
      --fidepa-red: #dc3545;
      --dark: #212529;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      background-color: #f8f9fa;
      scroll-behavior: smooth;

    }

    .navbar {
      background: linear-gradient(
		to left,
		#FD8112,#0085CA
	  );
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);

    }
	.text-theme {
      color: linear-gradient(
		to left,
		#FD8112,#0085CA
	  ) !important;

    }

    .navbar-brand, .nav-link {
      color: white !important;
    }

   /* .hero-section {
      background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                  url('https://images.unsplash.com/photo-1517554558809-9b4971b38f39?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
      background-size: cover;
      background-position: center;
      color: white;
      padding: 120px 0;
      text-align: center;
    }*/

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    .btn-fidepa {
      background-color: var(--fidepa-blue);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: all 0.3s;
    }
    .btn-fidepa:hover {
      background-color: #004494;
      transform: scale(1.05);
    }

    .countdown-box {
      background-color: rgba(0,0,0,0.05);
      border-radius: 8px;
      padding: 15px;
      margin: 10px;
      text-align: center;
      min-width: 100px;
      transition: transform 0.3s;
    }
    .countdown-box:hover {
      transform: scale(1.1);
    }
    .countdown-number {
      font-size: 2rem;
      font-weight: bold;
      color: var(--fidepa-blue);
      animation: pulse 1s infinite alternate;
    }
    @keyframes pulse {
      from { transform: scale(1); }
      to { transform: scale(1.1); }
    }

    .section-title {
      position: relative;
      margin-bottom: 30px;
      padding-bottom: 15px;
      text-align: center;
    }
    .section-title:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 3px;
      background :linear-gradient(to left, #FD8112, #0085CA) !important;
    }

    .footer {
      background-color: var(--dark);
      color: white;
      padding: 40px 0;
    }
	.about-section {
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
              url('logo/dakar1.jpg');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  color: white;
}

.about-section {
  background: linear-gradient( rgba(0, 86, 179, 0.7),  /* bleu FIDEPA */
                rgba(255, 140, 0, 0.7) /* orange FIDEPA */),
              url('logo/dakar1.jpg');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  color: white;
}

.themes-section {
  background: linear-gradient(rgba(0,0,0.7,0), rgba(0,0,0.7,0)),
              url('logo/bg.png');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  color: white;
}
.hero-section {
  position: relative;
  height: 100vh;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.bg-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover; /* adapte la vidéo au fond */
  z-index: -2;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.55); /* effet sombre pour lisibilité */
  z-index: -1;
}

.hero-content {
  position: relative;
  z-index: 1;
}
.partner-logo {
  max-height: 100px;
  max-width: 160px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.partner-logo:hover {
  transform: scale(1.1);
  box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}
#themes {
 background: linear-gradient(rgba(0,0,0.7,0), rgba(0,0,0.7,0)),
              url('logo/bg.png');
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  color: white;
}

.theme-card {
  position: relative;
  height: 250px;
  border-radius: 12px;
  background-size: cover;
  background-position: center;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.4s ease;
}
.theme-card:hover {
  transform: scale(1.05);
}

.overlay-theme {
  position: absolute;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(0,0,0,0.55);
}

.theme-content {
  position: relative;
  text-align: center;
  padding: 20px;
  z-index: 2;
}
.theme-content h4 {
  font-weight: bold;
  margin-bottom: 10px;
  color: #ffd700; /* accent jaune pour titres */
}
/* bouton avec dégradé de fond */
.btn-gradient {
  background: linear-gradient(to left, #FD8112, #0085CA) !important;
  color: #fff !important; /* texte en blanc */
  border: none;
  padding: 12px 30px;
  border-radius: 14px;
}
.gradient-text {
  background: linear-gradient(to left, #FD8112, #0085CA);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent; /* Safari/Chrome */
  color: transparent; /* fallback */
}



  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
		<a class="navbar-brand d-flex align-items-center" href="#">
		  <img src="logo/fidepa.jpg" alt="Logo FIDEPA" height="50" class="me-2 rounded ">

		</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#accueil">{{ __('messages.menu_home') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">{{ __('messages.menu_about') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#themes">{{ __('messages.menu_themes') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#programme">{{ __('messages.menu_program') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#inscription">{{ __('messages.menu_register') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">{{ __('messages.menu_contact') }}</a></li>
        </ul>
      </div>
      <div class="dropdown">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        🌐 {{  session('locale')=="fr" ? "Français"  :  " " }}
        {{  session('locale')=="en" ? "English"  : "" }}
        {{  session('locale')=="pt" ?  "Português"  : ""}}
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
        <li><a class="dropdown-item" href="{{ url('lang/fr') }}">Français</a></li>
        <li><a class="dropdown-item" href="{{ url('lang/en') }}">English</a></li>
        <li><a class="dropdown-item" href="{{ url('lang/pt') }}">Português</a></li>
      </ul>
    </div>
    </div>
  </nav>

  <!-- Hero -->
   <!-- <section id="accueil" class="hero-section">
    <div class="container" data-aos="fade-up">
      <h1 class="display-4 mb-4">FIDEPA 2025</h1>
      <h2 class="mb-3">6ème Forum International de la Démocratie Participative en Afrique</h2>
      <h3 id="slogan" class="mb-4"></h3>
      <p class="lead mb-4">4-6 novembre 2025 | Dakar, Sénégal</p>
      <a href="#inscription" class="btn btn-light btn-lg me-2">S'inscrire</a>
      <a href="#programme" class="btn btn-outline-light btn-lg">Voir le programme</a>
    </div>
  </section> -->

  <!-- Hero avec vidéo -->
	<section id="accueil" class="hero-section">
	  <!-- Vidéo de fond -->
	  <video autoplay muted loop playsinline class="bg-video">
		<source src="video/spot.mp4" type="video/mp4">
		Votre navigateur ne supporte pas la vidéo HTML5.
	  </video>

	  <!-- Overlay sombre -->
	  <div class="overlay"></div>

	  <!-- Contenu -->
	  <div class="container hero-content" data-aos="fade-up">
		 <h1 class="display-4 mb-4 text-theme ">{{ __('messages.title') }}</h1>
        <h2 class="mb-3 gradient-text">{{ __('messages.subtitle') }}</h2>
        <h3 id="slogan" class="mb-4"></h3>
        <p class="lead mb-4">{{ __('messages.date_place') }}</p>
        <button class="btn btn-gradient" data-bs-toggle="modal" data-bs-target="#registerModal">
            {{ __('messages.register') }}
        </button>
        <a href="#programme" class="btn btn-outline-light btn-lg">{{ __('messages.see_program') }}</a>
        </div>
	</section>


  <!-- Countdown -->
   <section class="py-5 themes-section">
    <div class="container" data-aos="zoom-in">
      <h2 class="text-center mb-4 gradient-text">{{ __('messages.countdown_title') }}</h2>
      <div class="d-flex justify-content-center flex-wrap">
        <div class="countdown-box"><div class="countdown-number gradient-text" id="days">00</div><div class="gradient-text">{{ __('messages.days') }}</div></div>
        <div class="countdown-box"><div class="countdown-number gradient-text" id="hours">00</div><div class="gradient-text">{{ __('messages.hours') }}</div></div>
        <div class="countdown-box"><div class="countdown-number gradient-text" id="minutes">00</div><div class="gradient-text">{{ __('messages.minutes') }}</div></div>
        <div class="countdown-box"><div class="countdown-number gradient-text" id="seconds">00</div><div class="gradient-text">{{ __('messages.seconds') }}</div></div>
      </div>
    </div>
  </section>

 <!-- About -->
<section id="about" class="py-5 about-section">
  <div class="container" data-aos="fade-right">
      <h2 class="section-title gradient-text">{{ __('messages.about_title') }}</h2>
      <p class="lead text-white">{!! __('messages.about_text') !!}</p>
    </div>
</section>

<!-- Themes
<section id="themes" class="py-5 themes-section">
  <div class="container">
    <h2 class="section-title text-black" data-aos="fade-up">Thématiques du Forum</h2>
    <div class="row">
      <div class="col-md-4 mb-4" data-aos="flip-left">
        <div class="card h-100 p-3">
          <h4>Souveraineté démocratique</h4>
          <p>Construire le pouvoir citoyen à partir des territoires.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="flip-up">
        <div class="card h-100 p-3">
          <h4>Souveraineté économique</h4>
          <p>Promouvoir une responsabilisation financière des territoires africains.</p>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="flip-right">
        <div class="card h-100 p-3">
          <h4>Souveraineté numérique</h4>
          <p>Maîtriser les données pour connecter les villes et territoires.</p>
        </div>
      </div>
    </div>
  </div>
</section> -->

	<!-- Themes -->
<section id="themes" class="py-5 ">
  <div class="container">
    <h2 class="section-title gradient-text" data-aos="fade-up">{{ __('messages.themes_title') }}</h2>
    <div class="row">
      <!-- Thème 1 -->
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="theme-card" style="background-image: url('logo/ds.jpg');">
          <div class="overlay-theme"></div>
          <div class="theme-content">
            <h4>{{ __('messages.theme1_title') }}</h4>
            <p>{{ __('messages.theme1_text') }}</p>
          </div>
        </div>
      </div>

      <!-- Thème 2 -->
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="theme-card" style="background-image: url('logo/se.png');">
          <div class="overlay-theme"></div>
          <div class="theme-content">
            <h4>{{ __('messages.theme2_title') }}</h4>
            <p>{{ __('messages.theme2_text') }}</p>
          </div>
        </div>
      </div>

      <!-- Thème 3 -->
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="theme-card" style="background-image: url('logo/sn.png');">
          <div class="overlay-theme"></div>
          <div class="theme-content">
            <h4>{{ __('messages.theme3_title') }}</h4>
            <p>{{ __('messages.theme3_text') }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




  <!-- Programme -->
  <section id="programme" class="py-5">
    <div class="container" data-aos="fade-up">
      <h2 class="section-title">Programme Provisoire</h2>
      <p class="text-center">Détails disponibles dans la brochure officielle.</p>
    </div>
  </section>

  <!-- Inscription -->
  <section id="inscription" class="py-5 bg-light">
    <div class="container" data-aos="zoom-in-up">
      <h2 class="section-title">Inscription</h2>
      <div class="text-center">
        <a href="https://bit.ly/fidepa06" target="_blank" class="btn btn-fidepa btn-lg">Lien d'inscription</a>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="py-5">
    <div class="container" data-aos="fade-left">
      <h2 class="section-title">Contact</h2>
      <p class="text-center">secretariat@oidp-afrique.org</p>
    </div>
  </section>

  <!-- Partenaires -->
	<section id="partenaires" class="py-5 bg-light">
	  <div class="container" data-aos="fade-up">
		<h2 class="section-title">Nos Partenaires</h2>
		<div class="row justify-content-center align-items-center g-4">
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="100">
			<img src="logo/mct.png" alt="Partenaire 1" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="200">
			<img src="logo/oidp.png" alt="Partenaire 2" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="300">
			<img src="logo/ael.png" alt="Partenaire 3" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="400">
			<img src="logo/enda.png" alt="Partenaire 4" class="partner-logo">
		  </div>
		</div>
	  </div>
	</section>


<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">{{ __('messages.register') }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('messages.close') }}">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="registerForm">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label for="nom">{{ __('messages.lastname') }}</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">{{ __('messages.firstname') }}</label>
            <input type="text" class="form-control" id="prenom" name="prenom" required>
          </div>

          <div class="form-group">
            <label for="email">{{ __('messages.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <!-- Liste des pays avec indicatifs -->
          <div class="form-group">
            <label for="pays">{{ __('messages.country') }}</label>
            <select class="form-control" id="pays" name="pays" required>
                <option value="">{{ __('messages.choose') }}</option>
                <option value="Afrique du Sud|+27">Afrique du Sud (+27)</option>
                <option value="Algérie|+213">Algérie (+213)</option>
                <option value="Angola|+244">Angola (+244)</option>
                <option value="Bénin|+229">Bénin (+229)</option>
                <option value="Botswana|+267">Botswana (+267)</option>
                <option value="Burkina Faso|+226">Burkina Faso (+226)</option>
                <option value="Burundi|+257">Burundi (+257)</option>
                <option value="Cabo Verde|+238">Cabo Verde (+238)</option>
                <option value="Cameroun|+237">Cameroun (+237)</option>
                <option value="Centrafrique|+236">Centrafrique (+236)</option>
                <option value="Comores|+269">Comores (+269)</option>
                <option value="Congo (Brazzaville)|+242">Congo (Brazzaville) (+242)</option>
                <option value="Congo (Kinshasa)|+243">Congo (Kinshasa) (+243)</option>
                <option value="Côte d'Ivoire|+225">Côte d'Ivoire (+225)</option>
                <option value="Djibouti|+253">Djibouti (+253)</option>
                <option value="Égypte|+20">Égypte (+20)</option>
                <option value="Érythrée|+291">Érythrée (+291)</option>
                <option value="Eswatini|+268">Eswatini (+268)</option>
                <option value="Éthiopie|+251">Éthiopie (+251)</option>
                <option value="Gabon|+241">Gabon (+241)</option>
                <option value="Gambie|+220">Gambie (+220)</option>
                <option value="Ghana|+233">Ghana (+233)</option>
                <option value="Guinée|+224">Guinée (+224)</option>
                <option value="Guinée-Bissau|+245">Guinée-Bissau (+245)</option>
                <option value="Guinée Équatoriale|+240">Guinée Équatoriale (+240)</option>
                <option value="Kenya|+254">Kenya (+254)</option>
                <option value="Lesotho|+266">Lesotho (+266)</option>
                <option value="Libéria|+231">Libéria (+231)</option>
                <option value="Libye|+218">Libye (+218)</option>
                <option value="Madagascar|+261">Madagascar (+261)</option>
                <option value="Malawi|+265">Malawi (+265)</option>
                <option value="Mali|+223">Mali (+223)</option>
                <option value="Maroc|+212">Maroc (+212)</option>
                <option value="Maurice|+230">Maurice (+230)</option>
                <option value="Mauritanie|+222">Mauritanie (+222)</option>
                <option value="Mozambique|+258">Mozambique (+258)</option>
                <option value="Namibie|+264">Namibie (+264)</option>
                <option value="Niger|+227">Niger (+227)</option>
                <option value="Nigeria|+234">Nigeria (+234)</option>
                <option value="Ouganda|+256">Ouganda (+256)</option>
                <option value="Rwanda|+250">Rwanda (+250)</option>
                <option value="Sao Tomé-et-Principe|+239">Sao Tomé-et-Principe (+239)</option>
                <option value="Sénégal|+221">Sénégal (+221)</option>
                <option value="Seychelles|+248">Seychelles (+248)</option>
                <option value="Sierra Leone|+232">Sierra Leone (+232)</option>
                <option value="Somalie|+252">Somalie (+252)</option>
                <option value="Soudan|+249">Soudan (+249)</option>
                <option value="Soudan du Sud|+211">Soudan du Sud (+211)</option>
                <option value="Tanzanie|+255">Tanzanie (+255)</option>
                <option value="Tchad|+235">Tchad (+235)</option>
                <option value="Togo|+228">Togo (+228)</option>
                <option value="Tunisie|+216">Tunisie (+216)</option>
                <option value="Zambie|+260">Zambie (+260)</option>
                <option value="Zimbabwe|+263">Zimbabwe (+263)</option>
            </select>
          </div>

          <div class="form-group">
            <label for="tel">{{ __('messages.phone') }}</label>
            <input type="tel" class="form-control" id="tel" name="tel" pattern="[0-9+ ]{6,15}" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-gradient">{{ __('messages.submit') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>


  <!-- Footer -->
  <footer class="footer">
    <div class="container text-center">
      <p>&copy; 2025 FIDEPA - Tous droits réservés</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Effet typing
    const text = '"De la résilience à la souveraineté : rôles des villes, des territoires et des acteurs"';
    let i = 0;
    function typing() {
      if (i < text.length) {
        document.getElementById("slogan").innerHTML += text.charAt(i);
        i++;
        setTimeout(typing, 50);
      }
    }
    typing();

    // Countdown
    const countdown = () => {
      const countDate = new Date('November 4, 2025 00:00:00').getTime();
      const now = new Date().getTime();
      const gap = countDate - now;

      const day = 1000 * 60 * 60 * 24;
      const hour = 1000 * 60 * 60;
      const minute = 1000 * 60;
      const second = 1000;

      document.getElementById('days').innerText = Math.floor(gap / day);
      document.getElementById('hours').innerText = Math.floor((gap % day) / hour);
      document.getElementById('minutes').innerText = Math.floor((gap % hour) / minute);
      document.getElementById('seconds').innerText = Math.floor((gap % minute) / second);
    };
    setInterval(countdown, 1000);
  </script>
  <!-- jQuery + script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(function () {
  $("#registerForm").on("submit", function (e) {
    e.preventDefault();

    // Validation côté client
    let isValid = true;
    $("#registerForm [required]").each(function () {
      if ($(this).val().trim() === "") {
        isValid = false;
        $(this).addClass("is-invalid");
      } else {
        $(this).removeClass("is-invalid");
      }
    });

    if (!isValid) {
      alert("Veuillez remplir tous les champs obligatoires.");
      return;
    }

    // Envoi AJAX
    $.ajax({
      url: "{{ route('ticket.store') }}", // ton endpoint côté serveur (Laravel, PHP, etc.)
      method: "POST",
      data: $("#registerForm").serialize(),
      success: function (response) {
        alert("Inscription réussie !");
        $("#registerModal").modal("hide");
        $("#registerForm")[0].reset();
      },
      error: function (xhr) {
        alert("Erreur lors de l'inscription.");
      }
    });
  });
});
$(function () {
  $("#pays").on("change", function () {
    let selected = $(this).val();
    if (selected) {
      let parts = selected.split("|");
      let indicatif = parts[1] || "";
      $("#tel").val(indicatif + " ");
    }
  });
});
</script>

<!-- Un peu de style -->
<style>
.is-invalid {
  border-color: red !important;
}
</style>
</body>
</html>
