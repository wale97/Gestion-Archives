<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name', 'Gestion-Archives')}}</title>
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Fonts-->
    <link href="{{asset('fontawesome/css/all.css')}}" rel="stylesheet">
</head>
<body>
   
   
    <div class="container mt-4">
        <img src="{{asset('images/logo2.jpeg')}}" class="img-fluid mx-auto d-block" alt="Responsive image">
    </div>
    <div class="container">
      <p class=" h1 header text-center mt-4 mb-4">AUTORITE CENTRALE EN MATIERE D'ADOPTION INTERNATIONALE EN REPUBLIQUE DU BENIN (ACAIB)</p>
      <div class="container">
        
        <form method="post" action="{{route('search')}}">
          @csrf
        <input class="typeahead form-control" id="search" type="text" name="search">
        <button type="submit">Voir</button>
        </form>

    </div>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    </div>
</body>
</html>