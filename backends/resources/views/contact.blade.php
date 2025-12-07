@extends('template')

@section('content')
<div class="container mt-5">
    <h2>Liste des contacts</h2>

    @if($contacts->isEmpty())
        <div class="alert alert-info">
            Aucun contact enregistré.
        </div>
    @else
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Message</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $c)
                    <tr>
                        <td>{{ $c->message }}</td>
                        <td>{{ $c->phone }}</td>
                        <td>{{ $c->mail }}</td>
                        <td>{{ \Carbon\Carbon::parse($c->created_at)->format('d/m/Y H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
