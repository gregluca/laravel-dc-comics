@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Add a new comic</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input required type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select id="type" class="form-select" name="type">
                            <option value="">Select</option>
                            <option @selected(old('type') === 'graphic_novel') value="graphic_novel">Graphic Novel</option>
                            <option @selected(old('type') === 'comic_book') value="comic_book">Comic book</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>

                </form>
            </div>
        </div>

    </div>
@endsection