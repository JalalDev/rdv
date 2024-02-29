@extends('inc.master')
@section('title', "Modifier service")

@section('content')

<div class="card">
    <div class="card-body">
        <a href="{{ route('services.index') }}" class="btn btn-primary mb-3">Retour à la liste</a><br><br>
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="text" name="txt_intitule" class="form-control" value="{{ $service->intitule }}"><br>
            <select name="txt_category_id" class="form-select" required>
                <option value="">Choisissez une catégorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $service->category_id == $category->id ? 'selected' : '' }}>{{ $category->intitule }}</option>
                @endforeach
            </select><br>
            <textarea class="form-control" name="txt_description" rows="10">{{ $service->description }}</textarea><br>
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>

@endsection
