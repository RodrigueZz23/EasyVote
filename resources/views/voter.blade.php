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
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <nav class="nav-bar">
              <div class="navbar navbar-expand-lg" style="right: 20px;">
    <a class="nav-link larger-link " href="{{ url('/home') }}">Home</a>
    <a class="nav-link larger-link color" href="{{ url('/voter') }}">Voter</a>
    <a class="nav-link larger-link " href="{{ url('/results') }}">Resultats</a>
</div>
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
    <img src="images/lbs.png" alt="">

    <style>

@media (max-width: 767px) {
    .navbar{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}

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

            background-color: white;
            margin: 0;
            padding: 0;
            text-align: center;
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
    </style>

<div class="images">
    <style>
        .images img{
            transition: transform 0.2s ease-in-out;
        }

        .images img:hover{
            transform: scale(1.05);
        }
    </style>
    <div class="img_lbs">
    <img src="images/lbs.jpg" alt="" style="width: 200px; margin-left:20px; margin-top:-10px;">
    </div>

    <h1 style="margin-top: 10px; color:#3498db">Choisir votre candidat 👇</h1>
 <div class="candidate-container">
        <a class="candidate-link1" href="{{ url('/votec1') }}">
            <img src="images/im1.jpg" alt="Candidate 1" class="im1">
            <div class="candidate-info">

                <button class="vote-button">Vote 📩</button>
            </div>
        </a>

        <a class="candidate-link2" href="{{ url('/votec2') }}">
            <img src="images/im2.jpg" alt="Candidate 2">
            <div class="candidate-info">

                <button class="vote-button">Vote 📩</button>
            </div>
        </a>
        <a class="candidate-link2" href="{{ url('/bulletin_null') }}">
            <img src="images/im3.png" alt="null" class="null-img">
            <div class="candidate-info">

           <button class="vote-button">Vote nul 📩</button>
            </div>
        </a>


    </div>

<style>

 h1{
    margin-top: 50px;
 }

    .container {
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;

        }

        .candidate-container {
            margin: 50px auto;
        }

        .candidate-link1 {
            text-decoration: none;
            color: black;
            font-size: 30px;
            display: inline-block;
            margin: 0 20px;
            position: relative;
            overflow: hidden;
        }

        .candidate-link2 {
            text-decoration: none;
            color: black;
            font-size: 30px;
            display: inline-block;
            margin: 0 20px;
            position: relative;
            overflow: hidden;
        }

        .candidate-link1 img {
            width: 400px;
            display: block;
            transition: transform 0.5s ease;
            border-radius: 30px;
        }

        .candidate-link2 img {
            width: 400px;
           position: relative;
            display: block;
            transition: transform 0.5s ease;
            border-radius: 30px;

        }

        .candidate-link1:hover img {
            transform: scale(1.1);
        }
        .candidate-link2:hover img {
            transform: scale(1.1);
        }

        .candidate-info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .candidate-link1:hover .candidate-info {
            opacity: 1;
        }
        .candidate-link2:hover .candidate-info {
            opacity: 1;
        }
        .candidate-name {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .vote-button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .img_lbs img:hover{
            transition: none;
            transform: none;
            opacity: none;
        }

</style>

</body>

