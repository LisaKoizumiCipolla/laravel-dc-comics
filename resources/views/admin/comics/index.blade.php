@extends('layouts.app')

@section('title', 'Admin Comics')

@section('main-section')

<h1>Admin comics</h1>

<div class="container">
    <div class="row">
        <div class="col-12 m-5 text-center">
            <h1>Comics</h1>
        </div>
    </div>
    <div class="row">
        @if(session('delete'))
        <div class="col-12">
            <div class="alert alert-warning">
                {{ session('delete')}} has been exterminate succesfully!
            </div>
        </div>
        @elseif (session('created'))
        <div class="col-12">
            <div class="alert alert-primary">
                {{ session('created')}} has been created succesfully!
            </div>
        </div>

        @endif
        <div class="col-12">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                    <th scope="col">Artists</th>
                    <th scope="col">Writers</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comicList as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->artists }}</td>
                    <td>{{ $comic->writers }}</td>
                    <td class="">
                        <a class="btn btn-xs btn-primary m-2" href="{{ route('admin.comics.show', $comic->id) }}">View</a>
                        <a class="btn btn-xs btn-success m-2" href="{{ route('admin.comics.edit', $comic->id) }}">Edit</a>
                        <form action="{{ route('admin.comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-warning m-2">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>
@endsection