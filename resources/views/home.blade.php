<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyVote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="#"><strong style="color: #38B6FF; font-size:25px;">Easy</strong><strong style="color:#FF3131; font-size:25px">Vote</strong></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <nav class="nav-bar">
              <div class="navbar navbar-expand-lg" style="right: 20px;">
                 <a class="nav-link larger-link color " href="{{ url('/home') }}">Home</a>
                 <a class="nav-link larger-link " href="{{ url('/voter') }}">Voter</a>
                 <a class="nav-link larger-link " href="{{ url('/results') }}">Resultats</a>
</nav>
            </li>
            </ul>
            <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
    </nav>
    <style>

   .nav-bar {
    display: flex;
    padding: 10px;

  }
  .nav-link {
    text-decoration: none;
    color: #333;
    padding: 10px;
    transition: background-color 0.3s, color 0.3s;
  }

  .nav-link:hover {
    background-color: red;
    color: #fff;
  }



  body {
    font-family: 'Poppins', sans-serif;
        }


    .larger-link {
    font-size: 20px;
    }
    .color{
    color:#dc3545;
    }


    .navbar-brand {
        color: black;
    }


@media (max-width: 767px) {
    .navbar  {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}
    </style>

<div class="container">
<img src="images/lbs.jpg" alt="" style="width: 200px; margin-left:20px; margin-top:-10px;">

       <h1> HELLO, {{ Auth::user()->name }}  🙋‍♂️</h1>
       <p>Bienvenue sur <strong style="color: red;">EasyVote</strong>, l'application web innovante qui rend le processus de vote aussi simple que jamais, tout en garantissant la sécurité de chaque voix. Notre plateforme conviviale a été conçue pour faciliter votre expérience de vote, vous permettant d'exprimer votre choix de manière rapide et efficace.<a class="nav-link larger-link color" href="{{ url('/voter') }}">Cliquer ici pour voter</a></p>
      <img src="images/vote-for-blog.jpg" alt="">
      <style>
         .container {
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        h1 {
            color: #3498db;
        }

        strong {
            color: #e74c3c;
        }
        img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(0);
            animation: zoomIn 1s forwards;
        }

        @keyframes zoomIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        h1 {
            color: #3498db;
        }

        strong {
            color: #e74c3c;
        }

        p {
            font-size: 18px;
            margin-top: 30px;
            color: #555;
        }

      </style>
</div>
