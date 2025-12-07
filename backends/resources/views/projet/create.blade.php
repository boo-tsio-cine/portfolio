@extends('template')

@section('content')

    <div class="container mt-5">
        <h2>Formulaire projet</h2>
        <a href="{{url('listprojet')}}">List</a>
        <form action="{{ url('projet') }}" method="POST" enctype="multipart/form-data">
            @csrf
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

            <div class="mb-3">
                <label for="nom_realisation" class="form-label">Nom projet</label>
                <input type="text" class="form-control" id="nom_realisation" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="descri"></textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Langage</label>
                <textarea class="form-control" id="langage" name="langage"></textarea>
            </div>

            <div class="mb-3">
                <label for="nom_realisation" class="form-label">Lieu</label>
                <input type="text" class="form-control" id="nom_realisation" name="lieu" required>
            </div>

            <div class="mb-3">
                <label for="nom_realisation" class="form-label">Lien</label>
                <input type="text" class="form-control" id="nom_realisation" name="link">
            </div>

            <div class="mb-3">
                <label for="nom_realisation" class="form-label">Photo</label>
                <input type="file" class="form-control" name="photo" accept="image/*" required>
            </div>

            <div class="mb-3">
                <label for="annee" class="form-label">Année</label>
                <input type="number" class="form-control" id="annee" name="annee" min="1900" max="{{ date('Y') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>    

@endsection