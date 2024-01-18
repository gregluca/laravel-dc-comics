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
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection