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
    <div class="container mt-4 pt-4 pb-4 border">
      @if(Session::get('success'))
        <div class="alert alert-success"></div>
          {{Session::get('success')}}
      @endif

      @if(Session::get('fail'))
        <div class="alert alert-danger"></div>
          {{Session::get('fail')}}~
      @endif
     
        @if ($message = Session::get('successMessage'))
            <div class="alert alert-success alert-block">
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <form method="post" action="{{route('store')}}" enctype="multipart/form-data">
            @csrf
            <p class=" h1 header text-center mt-4 mb-4">AUTORITE CENTRALE EN MATIERE D'ADOPTION INTERNATIONALE EN REPUBLIQUE DU BENIN (ACAIB)</p>
            <div class="form-group">
              <label for="typedoc">Type de document</label>
              <select class="form-control" name="selecttypedoc">
                <option>Lettre</option>
                <option>Note de Service</option>
                <option>Convention</option>
                <option>Message Porté</option>
                <option>Procès Verbal</option>
                <option>Circulaire</option>
                <option>Compte Rendu</option>
                <option>Loi</option>
                <option>Arreté</option>
                <option>Decret</option>
                <option>Rapport</option>
                <option>Note</option>
              </select>
            </div>
            @error('selecttypedoc')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="reference">Reference</label>
                <input type="text" class="form-control rounded" name="selectref" required>
            </div>
            @error('selectref')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control rounded" name="selectdate" required>
            </div>
            @error('selectdate')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="objet">Objet</label>
                <input type="text" class="form-control rounded" name="selectobj" required>
            </div>
            @error('selectobj')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="serie">Serie</label>
                <select class="form-control" name="selectserie" required>
                  <option>GOUVERNANCE</option>
                  <option>LEGISLATION ET REGLEMENTATION</option>
                  <option>GESTION ADMINISTRATIVE</option>
                  <option>FINANCES</option>
                  <option>MATERIEL</option>
                  <option>PASSATION DES MARCHES</option>
                  <option>AUDIT ET COMMISSARIAT AUX COMPTES</option>
                  <option>RESSOURCES HUMAINES</option>
                  <option>REQUETES ET PROCEDURES JUDICIAIRES</option>
                  <option>PROCEDURES D'ADOPTION</option>
                  <option>COOPERATION</option>
                  <option>ETUDES</option>
                  <option>DOCUMENTATION ET ARCHIVES</option>
                  <option>REGISTRE</option>
                  <option>CORRESPONDANCE</option>
                </select>
            </div>
            @error('selectserie')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                <div class="form-group">
              <label for="customSerie">Autre Serie</label>
              <input type="text" class="form-control rounded" name="customSerie">
          </div>
          @error('customSerie')
                  <span class="text-danger">{{ $message }}</span>
              @enderror

            <div class="form-group">
                <label for="cote">Cote</label>
                <input type="text" class="form-control rounded" name="selectcote" required>
            </div>
            @error('selectcote')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="exampleFormControlFile1">Ajouter fichiers</label>
                <input type="file" class="form-control-file rounded" name="selectfile" required>
            </div>
            @error('selectfile')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <div class="form-group">
              <label for="observations">Observations</label>
              <textarea class="form-control rounded" name="selectobs" rows="3" required></textarea>
            </div>
            @error('selectobs')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            <button type="submit" class="btn btn-secondary btn-lg rounded d-flex flex-row">ENTRER</button>
            <a href="/voirdocs" class="link-secondary d-flex flex-row-reverse mb-4">Voir tous les documents</a>
            <a href="{{route('search')}}" class="link-secondary d-flex flex-row-reverse mb-4">Rechercher documents</a>
        </form>
    <script src="{{asset('js/jquery-3.3.1.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
    </div>
</body>
</html>