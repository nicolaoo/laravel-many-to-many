@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h1>I miei Progetti</h1>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.create') }}">Nuovo progetto</a>
        </div>

    </div>
</div>

<div class="container py-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">Tipologia</th>
                <th scope="col">contenuto</th>
                <th scope="col">Technologie</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id}}</td>
                <td>
                    <h3>
                        <a href="{{ route('projects.show', $project ) }}">
                            {{ $project->title ? $project->title : '-'}}
                        </a>
                    </h3>
                </td>
                <td>
                    <strong>
                        @forelse($project->type()->orderBy('name')->get() as $type)
                        <span class="badge rounded-pill my-2 text-bg-light">{{ $type->name }} </span>
                        @empty
                        ---- TYPE -------
                        @endforelse
                    </strong>
                </td>
                <td>{{ $project->content ? $project->content : 'NESSUN CONTENUTO'}}</td>
                <td>
                    @forelse($project->technology()->orderBy('name')->get() as $tech)
                    <span class="badge rounded-pill my-2 text-bg-light">{{ $tech->name }} </span>
                    @empty
                    ---- TECH -------
                    @endforelse
                </td>
                <td><a class="btn btn-secondary" href="{{ route('projects.edit', $project) }}">Modifica</a></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>



@endsection