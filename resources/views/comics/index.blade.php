@extends('layouts.app')

@section('content')
    <div class="container">
        Lista dei fumetti 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">titolo</th>
                    <th scope="col">tipo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic )
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title  }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">Details</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-warning" href="{{ route('comics.create') }}">Add a new comic</a>
    </div>
@endsection