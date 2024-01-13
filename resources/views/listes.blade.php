<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>EasyVote</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
              <div class="navbar navbar-expand-lg" style="right: 10px;">
              <a class="nav-link larger-link color " href="{{ url('/listes') }}">Listes</a>

              <a class="nav-link larger-link " href="{{ url('/register') }}">Add</a>

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

@media (max-width: 767px) {
    .navbar  {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
}
    .container {
        text-align: center;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
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
tr th[scope="row"] {
    background-color: #3498db;
    color: black;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    padding: 20px;
    border-radius: 10px;

}
tr th[scope="row"]::before {
    content: "\1F4CA ";
    font-size: 36px;
    margin-right: 10px;
    transition: transform 0.3s;
}
    </style>


<div class="container mt-5">
<img src="images/lbs.jpg" alt="" style="width: 200px; margin-top:-10px;">
    <h2 class="mb-4">christopher</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th scope="row" colspan="4" style="background-color:#42B8FF;">Total vote: {{ $Candidat1 }}</th>
        </tr>
    </table>
</div>

<div class="container mt-5">
    <h2 class="mb-4">christian</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th scope="row" colspan="4" style="background-color:#42B8FF;">Total vote: {{ $Candidat2 }}</th>
        </tr>
    </table>
</div>


<div class="container mt-5">
    <h2 class="mb-4">Bulletin nul</h2>
    <table class="table table-bordered table-hover">
        <tr>
            <th scope="row" colspan="4" style="background-color:#FF3131;">Total vote: {{ $Null_vote }}</th>
        </tr>
    </table>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
