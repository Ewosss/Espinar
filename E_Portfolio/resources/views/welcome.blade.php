<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'My Portfolio') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        header {
            background: #175739ff;
            color: white;
            padding: 60px 40px; /* Taller header */
        }
        header .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-right: 25px;
        }
        section {
            padding: 60px 0;
        }
        footer {
            background: #090a0aff;
            text-align: center;
            padding: 20px 0;
            color: #0d0d0eff;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="container d-flex align-items-center">
            <img src="{{ asset('seb.jpg') }}" alt="Profile" class="profile-img">
            <div>
                <h1 class="mb-1" style="font-size:2rem;">{{ $name ?? 'SEBASTIAN ESPINAR' }}</h1>
                <p class="mb-0" style="font-size:1.1rem;">{{ $title ?? 'Web Developer | Designer | Programmer' }}</p>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container text-center" style="background-color:#000000; color:white;">
        <h2>About Me</h2>
        <p class="mt-3">
            {{ $about ?? "I am a passionate developer who loves creating modern, responsive websites and applications. I enjoy learning new technologies and solving real-world problems with code." }}
        </p>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-light">
        <div class="container">
            <h2 class="text-center">My Projects</h2>
            <div class="row mt-4">

                <!-- Project One -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Project 1">
                        <div class="card-body text-center">
                            <h5 class="card-title">Project One</h5>
                            <p class="card-text">Packet Tracer - Switch Security Configuration. This project demonstrates network security configuration using Cisco Packet Tracer.</p>
                            <a href="11.6.1 Packet Tracer - Switch Security Configuration.pka" download class="btn btn-primary">
                                Download Project
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Two -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Project Two</h5>
                            <p class="card-text">Another project that highlights your skills and creativity.</p>
                        </div>
                    </div>
                </div>

                <!-- Project Three -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://via.placeholder.com/400x200" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">Project Three</h5>
                            <p class="card-text">Describe your role and what you achieved in this project.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container text-center">
        <h2>Contact Me</h2>
        <p class="mt-3">Feel free to reach out for collaborations or opportunities!</p>
        <a href="mailto:youremail@example.com" class="btn btn-primary mt-3">Email Me</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>© {{ date('Y') }} {{ $name ?? 'SEBASTIAN ESPINAR' }}. All rights reserved.</p>
    </footer>

</body>
</html>
