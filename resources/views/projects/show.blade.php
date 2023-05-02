@extends('layouts.app')

@section('content')

<div class="container py-4">
    <div class="row justify-content-between">
        <div class="col-auto">
            <h3>{{ $project->title}}</h3>

        </div>
        <div class="col-auto">
            <a class="btn btn-danger" href="{{ route('projects.index') }}">HOME</a>

        </div>

    </div>
</div>

<div class="container py-4">
    <div class="py-3">
        <td>
            <h5>
                TIPOLOGIA:
            </h5>
            <strong>
                @forelse($types as $type)
                <li>{{ $type->name }}</li>
                @empty
                --- NESSUNA TYPE ---
                @endforelse
            </strong>

        </td>
    </div>
    <div>
        <h5>
            TECHNOLOGIA:
        </h5>
        <strong>
            <ul>
                @forelse($technologies as $tech)

                <li>{{ $tech->name }}</li>
                @empty
                --- NESSUNA TECH ---
                @endforelse
            </ul>
        </strong>
    </div>
    <div>
        <h5>
            DESCRIPTION:
        </h5>
        <td>{{ $project->content}}</td>
    </div>
</div>


@endsection