<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyVote</title>
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-6m4gyMcLHz6VcncbQg5yGrh4qWXSAYDPYmPVraFAT6z5sjcJ4p8f+gny5ZinP+mW"
        crossorigin="anonymous">
    <style>

        body {
            background-color:#0078d4;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: green;
            color: white;
            text-align: center;
            padding: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            font-size: 18px;
            width: 100%;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 10px;
            font-size: 20px;
            color: white;
            transition: background-color 0.3s;
            display: inline;
            margin: 0 auto;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        .icon-academic {
            font-size: 48px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .icon {
            font-size: 24px;
            color: #007bff;
            margin-right: 10px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 20px;
            text-align: center;
            color: white;
        }
    </style>
</head>
<img src="images/lbs.png" alt="">
<body>
    <div class="container">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1><i class="fas fa-graduation-cap icon-academic"></i><b>Voulez-vous vraiment voter christian ? 📩</b></h1>
                </div>

                <div class="card-body form-container">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('votec2') }}" method="POST">
                        @csrf

                        <div align="center" class="mb-3">

<button class="btn btn-primary" style="padding :10px;">OUI</button>

<div style="background-color:red; padding:14px; margin-top:-50px; " class="btn btn-primary"><a href="{{url('/home')}}" style="color: white; text-decoration:none;">RETOUR</a></div>

</div>
</form>
        </div>
    </div>
</body>
</html>


