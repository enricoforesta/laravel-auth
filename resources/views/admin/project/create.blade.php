@extends('layouts.admin')

@section('content')
    <div class="container my-3">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.projects.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo progetto</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" required
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Linguaggio utilizzato</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" required
                    value="{{ old('language') }}">
                @error('language')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Frameworks utilizzati</label>
                <input type="text" class="form-control @error('frameworks') is-invalid @enderror" name="frameworks"
                    required value="{{ old('frameworks') }}">
                @error('frameworks')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Stato</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" required
                    value="{{ old('status') }}">
                @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data Inizio</label>
                <input type="date" class="form-control" name="start_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crea</button>
        </form>
    </div>
@endsection
