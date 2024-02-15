@extends('inc.master')
@section('title', "Liste des services")

@section('content')

<div class="card">
    <div class="card-body">
        <a href="{{ route('services.create') }}" class="btn btn-success mb-3">Ajouter un service</a>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Intitulé</th>
                    <th>Description</th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->intitule }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

