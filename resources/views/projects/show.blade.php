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
                {{ $project->type->name }}
            </strong>

        </td>
    </div>
    <div>
        <h5>
            TECHNOLOGIA:
        </h5>
        <strong>
            <ul>
                @foreach($project->technology()->get() as $tech)
                <li>{{ $tech->name }}</li>
                @endforeach
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