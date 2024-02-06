@extends('layouts.admin')

@section('content')
    <ul>
        @foreach ($projects as $project)
            <li>
                <h2>{{ $project->title }}</h2>
            </li>
        @endforeach
    </ul>
@endsection
