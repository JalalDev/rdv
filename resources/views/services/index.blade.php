@extends('inc.master')
@section('title', "Liste des services")

@section('content')

<div class="card">
    <div class="card-body">
        <a href="{{ route('services.create') }}" class="btn btn-success mb-3">Ajouter un service</a>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas libero officiis beatae, culpa, impedit dolore dignissimos cupiditate, ipsa velit pariatur labore possimus ex corporis! Reprehenderit tenetur nemo quis repellat saepe.</p>
    </div>
</div>

@endsection

