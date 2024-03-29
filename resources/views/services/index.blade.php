@extends('inc.master')
@section('title', "Liste des services")

@section('content')

<div class="card">
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('services.create') }}" class="btn btn-success mb-3">Ajouter un service</a>
            </div>
            <div class="col-md-6">
                <form action="{{ route('services.search') }}" method="POST">
                    @csrf
                    <select name="category_id" class="form-select">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-success">Filtrer</button>
                    <a href="{{ route('services.index') }}" class="btn btn-info">Initialiser</a>
                </form>
            </div>
        </div>


        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Intitulé</th>
                    <th>Catégorie</th>
                    <th>Description</th>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->intitule }}</td>
                        <td>{{ $service->category->intitule }}</td>
                        <td>{{ $service->description }}</td>
                        <td>
                            <a href="{{ route('services.edit', $service->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                            <form action="{{ route('services.destroy', $service->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet élément ?')" class="btn btn-sm btn-icon btn-danger" data-bs-toggle="tooltip" data-bs-target="top" title="Supprimer"><i
                                     class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

