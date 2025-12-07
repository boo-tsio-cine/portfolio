@extends('template')

@section('content')
    <div class="container mt-5">
        <h2>Formulaire Études</h2>
        <a href="{{url('listetude')}}">List</a>
        <form action="{{url('etude')}}" method="POST">
            @csrf
               <!-- Message de succès -->
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                   <!-- Affichage des erreurs -->
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <!-- Type -->
            <div class="mb-3">
                <label for="type" class="form-label">Type d'établissement</label>
                <select class="form-select" id="type" name="type" required>
                    <option value="" selected disabled>Choisir un type</option>
                    <option value="université">Université</option>
                    <option value="lycée">Lycée</option>
                    <option value="collège">Collège</option>
                    <option value="primaire">Primaire</option>
                </select>
            </div>

            <!-- Lieu -->
            <div class="mb-3">
                <label for="lieu" class="form-label">Lieu</label>
                <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Ex: Antananarivo" required>
            </div>

            <!-- Nom -->
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de l'établissement</label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Ex: Lycée Moderne" required>
            </div>

            <!-- Diplôme -->
            <div class="mb-3">
                <label for="diplome" class="form-label">Diplôme</label>
                <input type="text" class="form-control" id="diplome" name="diplome" placeholder="Ex: Baccalauréat" required>
            </div>

            <!-- Année -->
            <div class="mb-3">
                <label for="annee" class="form-label">Année d'obtention</label>
               <input type="number" class="form-control" id="annee" name="annee" placeholder="Ex: 2025" min="1900" max="2099" required>
            </div>

            <!-- Bouton -->
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>

    
@endsection