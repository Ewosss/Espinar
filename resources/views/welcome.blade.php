<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ config('app.name', 'My Portfolio') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      color: #eee;
      background-color: #0d0d0d;
      overflow-x: hidden;
      scroll-behavior: smooth;
    }

    h1, h2, h3, h4, h5 {
      font-family: 'Playfair Display', serif;
    }

    /* HEADER */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1000;
      padding: 1rem 3rem;
      background: rgba(0, 0, 0, 0.4);
      transition: background 0.4s, padding 0.3s;
    }

    .navbar.scrolled {
      background: rgba(0, 0, 0, 0.9);
      padding: 0.7rem 3rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.4);
    }

    .navbar-brand {
      color: #fff;
      font-weight: 700;
      font-size: 1.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .navbar-nav .nav-link {
      color: #ddd;
      margin-left: 1.5rem;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .nav-link.active {
      color: #c5a46d;
    }

    /* HERO SECTION */
    .hero {
      position: relative;
      height: 120vh; /* Bigger hero */
      background: url('{{ asset('black2.jpg') }}') center center/cover no-repeat;
      display: flex;
      align-items: center;
      justify-content: flex-start;
      padding-left: 50px;
      overflow: hidden;
    }

    .hero::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.65);
      backdrop-filter: blur(1px);
    }

    .hero-content {
      position: relative;
      z-index: 2;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      gap: 50px;
    }

    .hero-text h1 {
      font-size: 3rem; /* Bigger text */
      text-transform: uppercase;
      letter-spacing: 2px;
      font-weight: 700;
      margin-bottom: 10px;
    }

    .hero-text p {
      font-size: 1.5rem; /* Bigger subtitle */
      letter-spacing: 1px;
      color: #c5a46d;
      font-weight: 500;
    }

    .hero-image img {
      height: 100vh; /* Bigger image */
      max-width: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    /* ABOUT SECTION */
    #about {
      padding: 120px 0;
      background: url('{{ asset('tiles.jpg') }}') center center/cover no-repeat;
      position: relative;
      color: #fff;
    }

    #about::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    #about .container {
      position: relative;
      z-index: 2;
    }

    #about h2 {
      color: #fff;
      font-size: 2.5rem;
      margin-bottom: 30px;
    }

    #about p {
      color: #ddd;
      font-size: 1.05rem;
      line-height: 1.8;
    }

    #about img {
      width: 100%;
      border-radius: 10px;
      box-shadow: 0 0 0 6px #c5a46d, 0 8px 25px rgba(0, 0, 0, 0.6); /* Gold frame */
    }

    /* LESSONS SECTION */
    #lessons {
      background-color: #111;
      padding: 100px 0;
      text-align: center;
    }

    #lessons h2 {
      color: #fff;
      margin-bottom: 50px;
      font-size: 2.5rem;
    }

    .lesson-box {
      color: #ddd;
      padding: 30px;
      background: #1a1a1a;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .lesson-box:hover {
      background: #222;
      transform: translateY(-5px);
    }

    /* CONTACT SECTION */
    #contact {
      background-color: #0d0d0d;
      padding: 100px 0;
      text-align: center;
    }

    #contact h2 {
      color: #fff;
      margin-bottom: 30px;
      font-size: 2.5rem;
    }

    #contact p {
      color: #bbb;
      margin-bottom: 30px;
    }

    /* FOOTER */
    footer {
      background-color: #000;
      text-align: center;
      padding: 40px 0;
      color: #777;
    }

    footer p {
      margin: 0;
      font-size: 0.9rem;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
      .hero-content {
        flex-direction: column;
        align-items: flex-start;
      }

      .hero-image img {
        height: 60vh; /* Smaller on mobile */
        margin-top: 20px;
      }

      .hero-text h1 {
        font-size: 2rem;
      }

      .hero-text p {
        font-size: 1.2rem;
      }
    }
  </style>
</head>

<body>
  <!-- HEADER / NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#hero">{{ $name ?? 'Espinar' }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#hero">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#lessons">Lessons</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="hero" class="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h1>I’m {{ $name ?? 'Sebastian Espinar' }}</h1>
        <p>BEGINNER WEB DEVELOPER</p>
      </div>
      <div class="hero-image">
        <img src="{{ asset('sebbb.png') }}" alt="Sebastian Espinar">
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="container">
      <div class="row align-items-center gy-5">
        <div class="col-md-5">
          <img src="{{ asset('yoww.png') }}" alt="{{ $name ?? 'Profile Picture' }}">
        </div>
        <div class="col-md-7">
          <h2>About Me</h2>
          <p>{{ $about ?? "I'm a beginner web developer passionate about crafting functional, elegant, and responsive websites that bring ideas to life." }}</p>
        </div>
      </div>
    </div>
  </section>

  <!-- LESSONS -->
  <section id="lessons">
    <div class="container">
      <h2>Lessons</h2>
      <div class="row g-4">
        <div class="col-md-4"><div class="lesson-box">🎸 Guitar Basics</div></div>
        <div class="col-md-4"><div class="lesson-box">🎶 Music Theory</div></div>
        <div class="col-md-4"><div class="lesson-box">💡 Performance Tips</div></div>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="container">
      <h2>Contact</h2>
      <p>Interested in collaborating or learning more? Reach out!</p>
      <a href="mailto:your@email.com" class="btn btn-outline-light px-4 py-2">Send Email</a>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>© {{ date('Y') }} {{ $name ?? 'Sebastian Espinar' }} — All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    window.addEventListener("scroll", function() {
      const nav = document.querySelector(".navbar");
      nav.classList.toggle("scrolled", window.scrollY > 50);
    });
  </script>
</body>
</html>
