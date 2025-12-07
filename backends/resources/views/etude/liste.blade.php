@extends('template')
@section('content')
    

    <div class="container mt-5">
        <h2>Listes des études</h2>
        <a href="{{url('formetude')}}">Ajouter nouveau</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        @if($etudes->isEmpty())
            Aucune études enregistrées
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                     
                        <th>Type</th>
                        <th>Lieu</th>
                        <th>Nom</th>
                        <th>Diplôme</th>
                        <th>Année</th>
                        <th>Modification</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($etudes as $etude)
                        <tr>
                            
                            <td>{{ $etude->type }}</td>
                            <td>{{ $etude->lieu }}</td>
                            <td>{{ $etude->nom }}</td>
                            <td>{{ $etude->diplome }}</td>
                            <td>{{ $etude->annee }}</td>
                              <td class="d-flex space-between">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $etude->id }}">
                                        <i class="fa fa-classic fa-regular fa-gears"></i>
                                    </button>
                                     <form action="{{ route('etude.destroy', $etude->id) }}" method="post" 
                                        onsubmit="return confirm('Voulez-vous vraiment supprimer?');">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Supprimer</button>
                                    </form>
                                    
                                </td>
                        </tr>
                         <div class="modal fade" id="editModal{{ $etude->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Modifier le projet</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- FORMULAIRE UNIQUE PAR MODAL -->
                                        <form id="editForm"  action="{{ route('etude.update', $etude->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="type" class="form-label">Type d'établissement</label>
                                                   <select class="form-select" id="type" name="type" required>
                                                     <option value="{{$etude->type}}">{{$etude->type}}</option>
                                                        <option value="Université" {{ $etude->type == 'Université' ? 'selected' : '' }}>Université</option>
                                                        <option value="Lycée" {{ $etude->type == 'Lycée' ? 'selected' : '' }}>Lycée</option>
                                                        <option value="Collège" {{ $etude->type == 'Collège' ? 'selected' : '' }}>Collège</option>
                                                        <option value="Primaire" {{ $etude->type == 'Primaire' ? 'selected' : '' }}>Primaire</option>
                                                    </select>

                                                </div>

                                                <!-- Lieu -->
                                                <div class="mb-3">
                                                    <label for="lieu" class="form-label">Lieu</label>
                                                    <input type="text" class="form-control" id="lieu" name="lieu" value="{{$etude->lieu}}" required>
                                                </div>

                                                <!-- Nom -->
                                                <div class="mb-3">
                                                    <label for="nom" class="form-label">Nom de l'établissement</label>
                                                    <input type="text" class="form-control" id="nom" name="nom" value="{{$etude->nom}}" required>
                                                </div>

                                                <!-- Diplôme -->
                                                <div class="mb-3">
                                                    <label for="diplome" class="form-label">Diplôme</label>
                                                    <input type="text" class="form-control" id="diplome" name="diplome" value="{{$etude->diplome}}" required>
                                                </div>

                                                <!-- Année -->
                                                <div class="mb-3">
                                                    <label for="annee" class="form-label">Année d'obtention</label>
                                                <input type="number" class="form-control" id="annee" name="annee" value="{{$etude->annee}}" required>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>


@endsection