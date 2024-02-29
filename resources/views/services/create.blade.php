@extends('inc.master')
@section('title', "Nouveau service")

@section('content')

<div class="card">
    <div class="card-body">
        <a href="{{ route('services.index') }}" class="btn btn-primary mb-3">Retour à la liste</a><br><br>
        <form action="{{ route('services.store') }}" method="POST">
            @csrf
            <input type="text" name="txt_intitule" class="form-control" placeholder="Intitule" required><br>
            <select name="txt_category_id" class="form-select" required>
                <option value="">Choisissez une catégorie</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->intitule }}</option>
                @endforeach
            </select><br>
            <textarea class="form-control" name="txt_description" rows="10" placeholder="Description"></textarea><br>
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>

@endsection
