@extends('layouts.app')

@section('title', 'Create')

@section('main-section')

<h1>Create</h1>
<div class="container">
    <div class="row">
        <div class="col-12">
            
            <form action="{{ route('admin.comics.store') }}" method="POST">
            @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">
                        Title
                    </label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">
                        Description
                    </label>
                    <input type="text" class="form-control" id="description" name="description" >
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">
                        Thumb
                    </label>
                    <input type="text" class="form-control" id="thumb" name="thumb" >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">
                        Price
                    </label>
                    <input type="text" class="form-control" id="price" name="price" >
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">
                        Series
                    </label>
                    <input type="text" class="form-control" id="series" name="series" >
                </div>
                <div class="mb-3">
                    <label for="sale_date" class="form-label">
                        Sale date
                    </label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" >
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">
                        Type
                    </label>
                    <input type="text" class="form-control" id="type" name="type" >
                </div>
                <div class="mb-3">
                    <label for="artists" class="form-label">
                        Artists
                    </label>
                    <input type="text" class="form-control" id="artists" name="artists" >
                </div>
                <div class="mb-3">
                    <label for="writers" class="form-label">
                        Writers
                    </label>
                    <input type="text" class="form-control" id="writers" name="writers" >
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </form>
        </div>
    </div>
</div>


@endsection
