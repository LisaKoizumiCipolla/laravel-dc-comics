@extends('layouts.app')

@section('title', 'Admin Comics')

@section('main-section')

<h1>Admin comics</h1>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Comics</h1>
            
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <table class="table table-striped">
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
                        <a class="btn btn-xs btn-success m-2" href="">Edit</a>
                        <a class="btn btn-xs btn-warning m-2" href="">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>
@endsection