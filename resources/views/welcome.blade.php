<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIDEPA 2025 - Forum International de la Démocratie Participative en Afrique</title>
  <meta name="description" content="Participez au FIDEPA 2025 à Dakar : 6ème Forum International de la Démocratie Participative en Afrique. Du 4 au 6 novembre 2025 au King Fahd Palace.">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css"/>
    <link rel="shortcut icon" href="{{ asset('logo/fidepa.ico') }}">
    <meta property="og:title" content="FIDEPA 2025 – Forum International de la Démocratie Participative en Afrique">
    <meta property="og:description" content="Du 4 au 6 novembre 2025 à Dakar. Un rendez-vous unique pour les villes, territoires et acteurs citoyens.">
    <meta property="og:image" content="https://fidepa6.oidp-afrique.org/logo/fidepa.jpg">
    <meta property="og:url" content="https://fidepa6.oidp-afrique.org">
    <meta name="twitter:card" content="summary_large_image">

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

.inscription-section {
  background: linear-gradient( rgba(0, 86, 179, 0.7),  /* bleu FIDEPA */
                rgba(255, 140, 0, 0.7));
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  color: white;
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
  max-height: 70px;
  max-width: 200px;

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
.btn-t{
    background: red !important;
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

.nav-tabs button
{
    color: #000 !important;
}
#programme {
  background: linear-gradient(rgba(0,86,179,0.9), rgba(255,140,0,0.9)),
              url('logo/fahd.jpg') no-repeat center center/cover;
  color: white;
}

.nav-pills .nav-link {
  color: #fff;
  background: rgba(255,255,255,0.1);
  margin: 0 5px;
  border-radius: 20px;
  transition: all 0.3s;
}
.nav-pills .nav-link.active {
  background: linear-gradient(45deg, #0056b3, #ff8c00);
  font-weight: bold;
}

.timeline {
  position: relative;
  margin: 20px 0;
  padding-left: 30px;
  border-left: 3px solid #ffd700;
}
.timeline-item {
  margin-bottom: 30px;
  position: relative;
}
.timeline-item:before {
  content: "";
  position: absolute;
  left: -11px;
  top: 5px;
  width: 18px;
  height: 18px;
  border-radius: 50%;
  background: linear-gradient(45deg, #0056b3, #ff8c00);
  box-shadow: 0 0 10px rgba(0,0,0,0.4);
}
.timeline-time {
  font-weight: bold;
  color: #ffd700;
  margin-bottom: 6px;
}
.timeline-content {
  background: rgba(0,0,0,0.4);
  padding: 12px 18px;
  border-radius: 10px;
  line-height: 1.4;
}
.loader-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 2000;
}
  a:not(.no-style) {
        /* Styles que vous voulez appliquer à tous les liens, sauf ceux avec la classe "no-style" */
        text-decoration: none !important;
    }
.expo-section {
  background: linear-gradient(rgba(0,86,179,0.9), rgba(255,140,0,0.9)),
              url('logo/img.jpg') center/cover fixed;
  color: white;
}

.expo-card {
  background: rgba(255,255,255,0.1);
  border: none;
  border-radius: 12px;
  padding: 20px;
  transition: transform 0.3s;
}
.expo-card:hover {
  transform: translateY(-5px);
  background: rgba(255,255,255,0.2);
}

.pricing-card {
  background: rgba(255,255,255,0.15);
  padding: 25px;
  border-radius: 12px;
  text-align: center;
  transition: all 0.3s ease;
}
.pricing-card h4 {
  color: #ffd700;
  margin-bottom: 15px;
}
.pricing-card .price {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 15px;
}
.pricing-card ul {
  list-style: none;
  padding: 0;
}
.pricing-card li {
  margin-bottom: 8px;
}
.pricing-card.featured {
  border: 2px solid #ffd700;
  background: rgba(0,0,0,0.6);
  transform: scale(1.05);
}
/* Sponsors & Partenaires */
.sponsor-card {
  background: linear-gradient(180deg, rgba(255,255,255,0.06), rgba(255,255,255,0.03));
  border-radius: 12px;
  padding: 22px;
  text-align: center;
  color: #fff;
  border: 1px solid rgba(255,255,255,0.06);
  transition: transform .3s ease, box-shadow .3s ease;
}
.sponsor-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0,0,0,0.45);
}
.sponsor-card.featured {
  background: linear-gradient(135deg, rgba(0,86,179,0.18), rgba(255,140,0,0.12));
  border: 1px solid rgba(255,215,0,0.18);
  transform: scale(1.02);
}
.sponsor-badge {
  display: inline-block;
  padding: 6px 12px;
  border-radius: 999px;
  background: linear-gradient(90deg, #0056b3, #ff8c00);
  color: #fff;
  font-weight:700;
  font-size:13px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.35);
}
.sponsor-card h4 {
  margin-bottom: 12px;
  color: #ffd700;
  font-weight:800;
}
.sponsor-features {
  list-style: none;
  padding: 0;
  margin: 10px 0 18px;
  color: #f3f4f6;
  text-align: left;
}
.sponsor-features li {
  margin-bottom: 8px;
}
.sponsor-cta {
  display: inline-block;
  padding: 10px 16px;
  border-radius: 10px;
  background: linear-gradient(90deg,#0056b3,#ff8c00);
  color: #fff;
  font-weight:700;
  text-decoration:none;
  transition: transform .2s ease, box-shadow .2s ease;
}
.sponsor-cta:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 20px rgba(0,0,0,0.4);
}

/* Responsive spacing */
@media (max-width: 767px) {
  .sponsor-features { font-size: 14px; }
  .sponsor-card { padding: 18px; }
}

.infos-section {
  background: linear-gradient(rgba(0,86,179,0.9), rgba(255,140,0,0.9)),
              url('logo/dakar.webp') center/cover fixed;
  color: white;
}

.info-card {
  background: rgba(255,255,255,0.1);
  padding: 20px;
  border-radius: 12px;
  margin-bottom: 20px;
}

.tour-card {
  position: relative;
  overflow: hidden;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.4);
  transition: transform .3s ease;
}
.tour-card img {
  width: 100%;
  height: 220px;
  object-fit: cover;
  transition: transform .4s ease;
}
.tour-card:hover img {
  transform: scale(1.1);
}
.tour-info {
  position: absolute;
  bottom: 0;
  width: 100%;
  background: rgba(0,0,0,0.6);
  color: white;
  padding: 10px;
  text-align: center;
}
.tour-info h5 {
  margin: 0;
  font-size: 1rem;
  font-weight: 600;
}


  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
		<a class="navbar-brand d-flex align-items-center" href="#">
		  <img src="logo/fidepas.png" alt="Logo FIDEPA" height="50" class="me-2 rounded ">

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

           <li class="nav-item"><a class="nav-link" href="#expo">{{ __('messages.expo_title') }}</a></li>
          <li class="nav-item"><a class="nav-link" href="#infos">{{ __('infos.title') }}</a></li>
        </ul>
      </div>
      <div class="dropdown">
      <button class="btn btn-sm btn-outline-secondary dropdown-toggle text-white" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
        🌐 {{  session('locale')=="fr" || session('locale')=='' ? "Français"  :  " " }}
        {{  session('locale')=="en" ? "English"  : "" }}
        {{  session('locale')=="pt" ?  "Português"  : ""}}
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
        <li><a class="dropdown-item " href="{{ url('lang/fr') }}">Français</a></li>
        <li><a class="dropdown-item " href="{{ url('lang/en') }}">English</a></li>
        <li><a class="dropdown-item " href="{{ url('lang/pt') }}">Português</a></li>
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
        <button class="btn btn-lg btn-gradient" data-bs-toggle="modal" data-bs-target="#registerModal">
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

 <!-- About -->
<section id="about" class="py-5 about-section">
  <div class="container" data-aos="fade-right">
{{--     <div class="row justify-content-center align-items-center g-4">
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="100">
			<img src="logo/mct.jpg" alt="Partenaire 1" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="200">
			<img src="logo/oidp.jpg" alt="Partenaire 2" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="300">
			<img src="logo/ael.jpg" alt="Partenaire 3" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="400">
			<img src="logo/enda.jpg" alt="Partenaire 4" class="partner-logo">
		  </div>
		</div> --}}
      <h2 class="section-title text-white">{{ __('messages.about_title') }}</h2>
      <p class="lead text-white" >{!! __('messages.about_text') !!}</p>
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
        <a href="{{  session('locale')=="fr" ||  session('locale')=="" ? config('app.url').'/doc/fr1.pdf'  :  config('app.url').'/doc/en1.pdf' }}" target="_blank">
            <div class="theme-card" style="background-image: url('logo/ds.jpg'); text-decoration: none !important;">
                <div class="overlay-theme"></div>
                <div class="theme-content">
                    <h4>{{ __('messages.theme1_title') }}</h4>
                    <p  class="text-white" style="text-decoration: none !important;">{{ __('messages.theme1_text') }}</p>
                </div>
            </div>
        </a>
      </div>

      <!-- Thème 2 -->
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
        <a href="{{  session('locale')=="fr" ||  session('locale')==""  ? config('app.url').'/doc/fr2.pdf'  :  config('app.url').'/doc/en2.pdf' }}" target="_blank">

            <div class="theme-card" style="background-image: url('logo/se.png');">
            <div class="overlay-theme"></div>
            <div class="theme-content">
                <h4>{{ __('messages.theme2_title') }}</h4>
                <p  class="text-white">{{ __('messages.theme2_text') }}</p>
            </div>
            </div>
        </a>
      </div>

      <!-- Thème 3 -->
      <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
        <a href="{{  session('locale')=="fr" ||  session('locale')==""  ? config('app.url').'/doc/fr3.pdf'  :  config('app.url').'/doc/en3.pdf' }}" target="_blank">
            <div class="theme-card" style="background-image: url('logo/sn.png');">
                <div class="overlay-theme"></div>
                <div class="theme-content">
                    <h4>{{ __('messages.theme3_title') }}</h4>
                    <p class="text-white">{{ __('messages.theme3_text') }}</p>
                </div>
            </div>
        </a>
      </div>
    </div>
  </div>
</section>




  <!-- Programme -->
      <!-- Program Section -->
    <section id="programme" class="py-5">
        <div class="container" data-aos="fade-left">
            <h2 class="section-title text-center text-white mb-5">{{ __('program.title') }}</h2>

            <!-- Tabs -->
            <ul class="nav nav-pills justify-content-center mb-4" id="programTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="day1-tab" data-bs-toggle="tab" data-bs-target="#day1" type="button" role="tab">
                {{ __('program.days.day1') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="day2-tab" data-bs-toggle="tab" data-bs-target="#day2" type="button" role="tab">
                {{ __('program.days.day2') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="day3-tab" data-bs-toggle="tab" data-bs-target="#day3" type="button" role="tab">
                {{ __('program.days.day3') }}
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="day4-tab" data-bs-toggle="tab" data-bs-target="#day4" type="button" role="tab">
                {{ __('program.days.day4') }}
                </button>
            </li>
            </ul>

            <!-- Content -->
            <div class="tab-content" id="programTabsContent">

            <!-- Jour 1 -->
            <div class="tab-pane fade show active" id="day1" role="tabpanel">
                <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;09h00 - 10h30</div>
                    <div class="timeline-content">{{ __('program.activities.welcome') }}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;10h30 - 11h00</div>
                    <div class="timeline-content">{{ __('program.activities.coffee') }}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;11h00 - 12h30</div>
                    <div class="timeline-content">{{ __('program.activities.opening') }}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;12h00 - 13h30</div>
                    <div class="timeline-content">{{ __('program.activities.inaugural') }}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;13h30 - 14h30</div>
                    <div class="timeline-content">{{ __('program.activities.lunch') }}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;14h30 - 16h00</div>
                    <div class="timeline-content">{!! __('program.panels.p1') !!}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;16h30 - 18h00</div>
                    <div class="timeline-content">{!! __('program.sessions.s') !!} 1 & 2</div>
                </div>
                </div>
            </div>

            <!-- Jour 2 -->
            <div class="tab-pane fade" id="day2" role="tabpanel">
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;09h00 - 09h30</div>
                        <div class="timeline-content">{{ __('program.activities.setup') }}</div>
                    </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;09h30 - 11h00</div>
                    <div class="timeline-content">{!! __('program.panels.p2') !!}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;11h00 - 11h30</div>
                    <div class="timeline-content">{!! __('program.activities.coffee') !!}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;11h30 - 13h30</div>
                    <div class="timeline-content">{!! __('program.sessions.s') !!} 3 & 4</div>
                </div>
                 <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;13h30 - 14h30</div>
                    <div class="timeline-content">{!! __('program.activities.lunch') !!}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;14h30 - 16h00</div>
                    <div class="timeline-content">{!! __('program.panels.p3') !!}</div>
                </div>
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp;16h00 - 18h00</div>
                    <div class="timeline-content">{!! __('program.sessions.s') !!} 5 & 6</div>
                </div>
                </div>
            </div>

            <!-- Jour 3 -->
            <div class="tab-pane fade" id="day3" role="tabpanel">
                <div class="timeline">
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;09h00 - 09h30</div>
                        <div class="timeline-content">{{ __('program.activities.setup') }}</div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time"> &nbsp;&nbsp;09h30 - 11h00</div>
                        <div class="timeline-content">{{ __('program.assembly') }}</div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;11h00 - 11h30</div>
                        <div class="timeline-content">{!! __('program.activities.coffee') !!}</div>
                    </div>

                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;11h30 - 13h30</div>
                        <div class="timeline-content">{!! __('program.training_networking') !!}</div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;13h30 - 14h30</div>
                        <div class="timeline-content">{!! __('program.activities.lunch') !!}</div>
                    </div>
                    <div class="timeline-item" data-aos="fade-up">
                        <div class="timeline-time">&nbsp;&nbsp;14h30 - 18h00</div>
                        <div class="timeline-content">1. {{ __("program.activities.gala") }} <br> 2. {{ __("program.activities.pell_reading") }}  <br> 3. {{ __("program.closing") }} </div>
                    </div>
                </div>
            </div>

            <!-- Jour 4 -->
            <div class="tab-pane fade" id="day4" role="tabpanel">
                <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-time">&nbsp;&nbsp; {{ __("program.days.all_day") }}</div>
                    <div class="timeline-content">{{ __("program.activities.visit") }}</div>
                </div>
                </div>
            </div>

            </div>
        </div>
    </section>

        <!-- Territoire Expo -->
    <section id="expo" class="py-5 expo-section">
    <div class="container" data-aos="fade-up">
        <h2 class="section-title text-white">{{ __('messages.exhibition') }}</h2>
        <p class="lead text-white text-center mb-5">
        {{ __('messages.expo_subtitle') }}
        </p>

        <!-- Objectifs -->
        <div class="row mb-5">
        <div class="col-md-4" data-aos="zoom-in">
            <div class="card expo-card">
            <div class="card-body">
                <h5>{{ __('messages.expo_goal1_title') }}</h5>
                <p>{{ __('messages.expo_goal1_text') }}</p>
            </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card expo-card">
            <div class="card-body">
                <h5>{{ __('messages.expo_goal2_title') }}</h5>
                <p>{{ __('messages.expo_goal2_text') }}</p>
            </div>
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="card expo-card">
            <div class="card-body">
                <h5>{{ __('messages.expo_goal3_title') }}</h5>
                <p>{{ __('messages.expo_goal3_text') }}</p>
            </div>
            </div>
        </div>
        </div>

        <!-- Packs -->
        <h3 class="text-white mb-4 text-center">{{ __('messages.expo_packs_title') }}</h3>
        <div class="row">
        <!-- Pack Ivoire -->
            <div class="col-md-4" data-aos="fade-right">
                <div class="pricing-card">
                <h4>{{ __('messages.pack_ivoire') }}</h4>
                <p class="price">{{ __('messages.pack_ivoire_price') }}</p>
                <ul>
                    @foreach(__('messages.pack_ivoire_list') as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
                </div>
            </div>

            <!-- Pack Gold -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="pricing-card featured">
                <h4>{{ __('messages.pack_gold') }}</h4>
                <p class="price">{{ __('messages.pack_gold_price') }}</p>
                <ul>
                    @foreach(__('messages.pack_gold_list') as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
                </div>
            </div>

            <!-- Pack Diamond -->
            <div class="col-md-4" data-aos="fade-left">
                <div class="pricing-card">
                <h4>{{ __('messages.pack_diamond') }}</h4>
                <p class="price">{{ __('messages.pack_diamond_price') }}</p>
                <ul>
                    @foreach(__('messages.pack_diamond_list') as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
                </div>
            </div>
            </div>
            <!-- Packs Sponsors & Partenaires -->
        <h3 class="text-white mb-4 text-center">{{ __('messages.sponsor_packs_title') }}</h3>
        <div class="row mb-4">

        <!-- Sponsor Ivoire -->
        <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-delay="100">
            <div class="sponsor-card">
            <div class="sponsor-badge">{{ __('messages.sponsor_ivoire') }}</div>
            <h4 class="mt-3">{{ __('messages.sponsor_ivoire_price') }}</h4>
            <ul class="sponsor-features">
                @foreach(__('messages.sponsor_ivoire_list') as $item)
              <li>{{ $item }}</li>
            @endforeach
            </ul>
            <a class="btn sponsor-cta" href="mailto:secretariat@oidp-afrique.org?subject=Demande%20Sponsor%20Ivoire%20FIDEPA06">
                {{ __('messages.become_sponsor') }}
            </a>
            </div>
        </div>

        <!-- Sponsor Gold -->
        <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="sponsor-card featured">
            <div class="sponsor-badge">{{ __('messages.sponsor_gold') }}</div>
            <h4 class="mt-3">{{ __('messages.sponsor_gold_price') }}</h4>
            <ul class="sponsor-features">
                @foreach(__('messages.sponsor_gold_list') as $item)
                <li>{{ $item }}</li>
            @endforeach
            </ul>
            <a class="btn sponsor-cta" href="mailto:secretariat@oidp-afrique.org?subject=Demande%20Sponsor%20Gold%20FIDEPA06">
                {{ __('messages.become_sponsor') }}
            </a>
            </div>
        </div>

        <!-- Partenaire Diamond -->
        <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-delay="300">
            <div class="sponsor-card">
            <div class="sponsor-badge">{{ __('messages.partner_diamond') }}</div>
            <h4 class="mt-3">{{ __('messages.partner_diamond_price') }}</h4>
            <ul class="sponsor-features">
               @foreach(__('messages.partner_diamond_list') as $item)
              <li>{{ $item }}</li>
            @endforeach
            </ul>
            <a class="btn sponsor-cta" href="mailto:secretariat@oidp-afrique.org?subject=Demande%20Partenaire%20Diamond%20FIDEPA06">
                {{ __('messages.become_partner') }}
            </a>
            </div>
        </div>

        </div>

    </div>
    </section>



  <!-- Inscription -->
  <section id="inscription" class="py-5  inscription-section">
    <div class="container" data-aos="zoom-in-up">
      <h2 class="section-title">Inscription</h2>
      <div class="text-center">
        <button  class="btn btn-gradient btn-lg" data-bs-toggle="modal" data-bs-target="#registerModal">Lien d'inscription</button>
      </div>
    </div>
  </section>

  <!-- Contact -->
<section id="contact" class="py-5">
  <div class="container" data-aos="fade-left">
    <h2 class="section-title gradient-text">{{ __('Contact') }}</h2>
    <h5 class="text-center">
      {{ __('Bureau Président OIDP Afrique') }} : president@oidp-afrique.org <br>
      {{ __('Secrétariat Général') }} : secretariat@oidp-afrique.org / khadim@oidp-afrique.org
    </h5>
  </div>
</section>


  <!-- Partenaires -->
	<section id="partenaires" class="py-5 bg-light">
	  <div class="container" data-aos="fade-up">
		<h2 class="section-title gradient-text">{{ __('messages.partners') }}</h2>
		<div class="row justify-content-center align-items-center g-4">
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="100">
			<img src="logo/ua.png" alt="Partenaire 1" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="200">
			<img src="logo/cglu.png" alt="Partenaire 2" class="partner-logo">
		  </div>
		 {{--  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="300">
			<img src="logo/ael.png" alt="Partenaire 3" class="partner-logo">
		  </div>
		  <div class="col-6 col-md-3 text-center" data-aos="zoom-in" data-aos-delay="400">
			<img src="logo/enda.png" alt="Partenaire 4" class="partner-logo">
		  </div> --}}
		</div>
	  </div>
	</section>

    <!-- Infos Utiles -->
<section id="infos" class="py-5 infos-section">
  <div class="container" data-aos="fade-up">
    <h2 class="section-title text-white">{{ __('infos.title') }}</h2>

    <!-- Météo -->
    <div class="row mb-5">
      <div class="col-md-12" data-aos="fade-right">
        <div class="info-card">
          <h4>{{ __('infos.weather.title') }}</h4>
          <p>{{ __('infos.weather.intro') }}</p>
          <ul>
            <li>{{ __('infos.weather.temp') }}</li>
            <li>{{ __('infos.weather.climate') }}</li>
            <li>{{ __('infos.weather.advice_day') }}</li>
            <li>{{ __('infos.weather.advice_night') }}</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Tourisme -->
    <h3 class="text-white mb-4 text-center">{{ __('infos.tourism.title') }}</h3>
    <div class="row g-4">

      <!-- Monument -->
      <div class="col-md-4" data-aos="zoom-in">
        <div class="tour-card">
          <img src="logo/dakar.jpg" alt="Monument de la Renaissance Africaine">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.monument') }}</h5>
          </div>
        </div>
      </div>

      <!-- Gorée -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="tour-card">
          <img src="logo/gore.png" alt="Île de Gorée">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.goree') }}</h5>
          </div>
        </div>
      </div>

      <!-- Musée -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="tour-card">
          <img src="logo/musee.avif" alt="Musée des civilisations noires">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.museum') }}</h5>
          </div>
        </div>
      </div>

      <!-- Corniche -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
        <div class="tour-card">
          <img src="logo/corniche.jpg" alt="Corniche Ouest">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.corniche') }}</h5>
          </div>
        </div>
      </div>

      <!-- Madeleine -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="tour-card">
          <img src="logo/madelaine.jpg" alt="Îles de la Madeleine">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.madelaine') }}</h5>
          </div>
        </div>
      </div>

      <!-- Lac Rose -->
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500">
        <div class="tour-card">
          <img src="logo/lacrose.jpg" alt="Lac Rose">
          <div class="tour-info">
            <h5>{{ __('infos.tourism.lacrose') }}</h5>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content p-3">
     {{--  <div class="modal-header">

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

      </div> --}}
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

          <div class="form-group">
            <label for="email">{{ __('messages.structure') }}</label>
            <input type="text" class="form-control" id="organisation" name="organisation" >
          </div>
           <div class="form-group">
            <label for="fonction">{{ __('messages.function') }}</label>
            <input type="text" class="form-control" id="fonction" name="fonction" >
          </div>

          <!-- Liste des pays avec indicatifs -->
          <div class="form-group">
            <label for="pays">{{ __('messages.country') }}</label>
            <select class="form-control" id="pays" name="pays" required>
                <option value="">{{ __('messages.choose') }}</option>
                @foreach ( config('countries') as $country )
                    <option value="{{ $country }}">{{ $country }}</option>
                @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="tel">{{ __('messages.phone') }}</label>
            <input type="tel" class="form-control" id="tel" name="tel" pattern="[0-9+ ]{6,15}" required>
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-t " data-bs-dismiss="modal">{{ __('messages.close') }}</button>

          <button type="submit" class="btn btn-gradient">{{ __('messages.submit') }}</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Loader -->
<div id="loaderOverlay" class="loader-overlay d-none">
  <div class="spinner-border text-light" role="status">
    <span class="visually-hidden">Chargement...</span>
  </div>
</div>

  <!-- Footer -->
  <footer class="footer">
    <div class="container text-center">
      <p>&copy; 2025 FIDEPA - Tous droits réservés </p>
    </div>
  </footer>

  <!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="{{ asset('assets/js/notify.js') }}"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Effet typing
    const text = '"{{ __('messages.forum_theme') }}"';
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
    $("#loaderOverlay").removeClass("d-none");

    // Envoi AJAX
    $.ajax({
      url: "{{ route('ticket.store') }}", // ton endpoint côté serveur (Laravel, PHP, etc.)
      method: "POST",
      data: $("#registerForm").serialize(),
      success: function (response) {
        //alert("Inscription réussie !");
        let message = "{{ __('messages.registration_success') }}";
        $.notify(message, "success");
        $("#registerModal").modal("hide");
        $("#registerForm")[0].reset();
      },
      error: function (xhr) {
        $.notify("Erreur lors de l'inscription.", "error");
       // alert("Erreur lors de l'inscription.");
      },
       complete: function () {
        // Cacher loader
        $("#loaderOverlay").addClass("d-none");
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
