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
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/Logo.png') }}" type="image/x-icon">

</head>
<div class="container">
        <div class="content">
        <img src="images/lbs.jpg" alt="" style="margin-top: -150px;">
            <h1 class="title">EasyVote</h1>
            <p class="description">La plateforme qui vous facilite le choix et le vote de votre candidat.</p>
            <div class="buttons">
                <a href="{{ url('/login') }}"class="login-button">Connectez vous maintenant !</a>
            </div>
        </div>
    </div>

   <style>
   body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    background-color: #0078d4;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    text-align: center;
    color: #fff;
}

.title {
    font-size: 48px;
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInUp 1s ease-in-out forwards 0.5s;
}

.description {
    font-size: 24px;
    margin-bottom: 30px;
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInUp 1s ease-in-out forwards 0.8s;
}

.buttons {
    display: flex;
    justify-content: center;
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInUp 1s ease-in-out forwards 1.1s;
}

img{
    opacity: 0;
    transform: translateY(-20px);
    animation: fadeInUp 1s ease-in-out forwards 1.1s;
}


.login-button, .register-button {
    display: inline-block;
    padding: 10px 20px;
    margin: 0 10px;
    text-decoration: none;
    background-color: red;
    color:  white;
    border: none;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
}



@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

   </style>

    <style>
    *{
        margin: 0;
        padding: 0;
    }
    </style>
</body>

</html>
