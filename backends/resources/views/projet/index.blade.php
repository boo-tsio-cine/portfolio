@extends('template')

@section('content')
  <div class="container mt-5">
    <h2>Listes des projets</h2>
    <a href="{{url('formprojet')}}">Insérer nouveau</a>

         @if(session()->has('info'))
            <div class="notification is-success">
                {{ session('info') }}
            </div>
        @endif
        @if($projet->isEmpty())
            Aucun projet enregistré
        @else
            <table class="table table-bordered">
                    <thead>
                        <tr>
                        
                            
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Lieu</th>
                            <th>Photo</th>
                            <th>Année</th>
                            <th>Paramètre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($projet as $p)
                            <tr>
                                
                            
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->descri }}<br>
                                    <a href="https://{{$p->link}}">{{$p->link}}</a>
                                    
                                    <br>{{$p->langage}}</td>
                                <td>{{ $p->lieu }}</td>
                                <td>
                                    {{$p->photo}}
                                </td>
                                <td>{{ $p->annee }}</td>
                                <td class="d-flex space-between">
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $p->id }}">
                                        <i class="fa fa-classic fa-regular fa-gears"></i>
                                    </button>
                                    <form action="{{ route('projet.destroy', $p->id )}}"    method="post" onsubmit="return confirm('Voulez-vous vraiment supprimer?');" >
                                        @csrf
                                        @method('DELETE')
                                        <button class="button is-danger" type="submit">
                                            <i class="fa fa-classic fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                            <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Modifier le projet</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- FORMULAIRE UNIQUE PAR MODAL -->
                                        <form id="editForm"  action="{{ route('projet.update', $p->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label>Nom</label>
                                                    <input type="text" class="form-control" id="edit_name" name="name"  value="{{ $p->name }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Description</label>
                                                    <textarea class="form-control" id="edit_descri" name="descri"  value="">{{ $p->descri }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label>Lieu</label>
                                                    <input type="text" class="form-control" id="edit_lieu" name="lieu"  value="{{ $p->lieu }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Lien</label>
                                                    <input type="text" class="form-control" id="edit_link" name="link"  value="{{ $p->link }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Photo</label>
                                                    <input type="file" class="form-control" id="edit_photo" name="photo">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Photo actuelle</label><br>
                                                    <img id="preview_photo" src="/upload/{{$p->photo}}" width="150" class="border rounded">
                                                </div>

                                                <div class="mb-3">
                                                    <label>Année</label>
                                                    <input type="number" class="form-control" id="edit_annee" name="annee"  value="{{ $p->annee }}">
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

{{-- MODAL DE MODIFICATION --}}
{{-- 
<script>
function setEditData(p) {
    document.getElementById('edit_name').value = p.name;
    document.getElementById('edit_descri').value = p.descri;
    document.getElementById('edit_link').value = p.link;
    document.getElementById('edit_lieu').value = p.lieu;
    document.getElementById('edit_annee').value = p.annee;


    document.getElementById('edit_photo').value = "";

    // On montre l'image existante
    document.getElementById('preview_photo').src = "/upload/" + p.photo;
    
    
    
    // Mettre l'URL du formulaire : /projet/{id}
    document.getElementById('editForm').action = "{{ route('projet.update', '') }}/" + p.id;
}
</script> --}}
@endsection