@extends('template')

@section('content')
<div class="container mt-5">
        <h2>Formulaire Réalisation</h2>
        <a href="{{url('listrealise')}}">List</a>
    <form action="{{ url('realisation') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nom_realisation" class="form-label">Nom de la réalisation</label>
            <input type="text" class="form-control" id="nom_realisation" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="descri"></textarea>
        </div>

        <div class="mb-3">
            <label for="annee" class="form-label">Année</label>
            <input type="number" class="form-control" id="annee" name="annee" min="1900" max="{{ date('Y') }}" required>
        </div>
          <div class="mb-3">
            <label for="annee" class="form-label">Jusqu'à</label>
            <input type="number" class="form-control" id="annee" name="fin" min="1900" max="{{ date('Y') }}">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="encore" name="encore">
            <label for="encore" class="form-check-label">Jusqu'à aujourd'hui</label>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection