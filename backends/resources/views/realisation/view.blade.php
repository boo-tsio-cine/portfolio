@extends('template')
@section('content')
    

    <div class="container mt-5">
        <h2>Listes des réalisations</h2>
        <a href="{{url('formrealise')}}">Ajouter nouveau</a>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        @if($realise->isEmpty())
            Aucune études enregistrées
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                     
                        
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Année</th>
                        <th>Modification</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($realise as $r)
                        <tr>
                            
                          
                            <td>{{ $r->nom }}</td>
                            <td>{{ $r->descri }}</td>
                            <td>{{ $r->annee }}</td>
                            <td class="d-flex space-between">
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $r->id }}">
                                    <i class="fa fa-classic fa-regular fa-gears"></i>
                                </a>
                                 <form action="{{route('realise.destroy', $r->id)}}"    method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer?');" >
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">
                                            <i class="fa fa-classic fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                            </td>
                        </tr>
                        <div class="modal fade" id="editModal{{ $r->id }}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modifier la réalisation</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <form id="editForm" method="POST" action="{{ route('realise.update', $r->id) }}"  enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label>Nom</label>
                                                <input type="text" class="form-control" id="edit_name" name="nom" value="{{$r->nom}}">
                                            </div>

                                            <div class="mb-3">
                                                <label>Description</label>
                                                <textarea class="form-control" id="edit_descri" name="descri">{{$r->descri}}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label>Année</label>
                                                <input type="text" class="form-control" id="edit_annee" name="annee" value="{{$r->annee}}">
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
