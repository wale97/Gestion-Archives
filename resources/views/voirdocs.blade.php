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
  <h1 class="d-flex justify-content-center">Documents</h1>
  @if(count($docs) > 1)
   <table id="dtBasicExample" class="table table-bordered table-striped table-sm">
       <thead>
         <tr>
           <th scope="col">Id</th>
           <th scope="col">Objet</th>
           <th scope="col">Reference</th>
           <th scope="col">Cote</th>
           <th scope="col">Type de Document</th>
           <th scope="col">Serie</th>
           <th scope="col">Observations</th>
           <th scope="col">Nom du Fichier</th>
           <th scope="col">Date de Saisie</th>
         </tr>
       </thead>
       <tbody>
       @foreach($docs as $doc)
         <tr>
           <td>{{$doc->id}}</td>
           <td>{{$doc->objet}}</td>
           <td>{{$doc->reference}}</td>
           <td>{{$doc->cote}}</td>
           <td>{{$doc->typedoc}}</td>
           <td>{{$doc->serie}}</td>
           <td>{{$doc->observations}}</td>
           <td><a href='{{asset('storage/'.$doc->nomfichier)}}'>{{asset('storage/'.$doc->nomfichier)}}</a></td>
           <!--<td>{{$doc->nomfichier}}</td>-->
           <td>{{$doc->datesaisie}}</td>
         </tr>
       @endforeach
       </tbody>
     </table>
  @else
  @endif
  <a href="../pages" class="link-secondary mt-4">Page Principale</a>
</div>


<script>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    </div>
</body>
</html>