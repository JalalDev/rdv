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
            <textarea class="form-control" name="txt_description" rows="10">{{ $service->description }}</textarea><br>
            <button type="submit" class="btn btn-success">Enregistrer</button>
        </form>
    </div>
</div>

@endsection
