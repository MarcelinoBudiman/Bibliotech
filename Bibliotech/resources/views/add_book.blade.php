@extends('template')

@section('body')

    <div class="container-fluid col-md-8 mt-4">
        <h1 class="fs-2 text-center mb-8" style="color: {{PRIMARY_COLOR}};">Add Book</h1>
        <form action="/add-book" method="POST" enctype="multipart/form-data" class="text-center">
            {{csrf_field()}}
            <div class="form-group row mt-4">
                <label for="inputTitle" class="col-sm-4 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" name="title" id="inputTitle" class="form-control" placeholder="Book Title">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputAuthor" class="col-sm-4 col-form-label">Author</label>
                <div class="col-sm-6">
                    <input type="text" name="author" id="inputAuthor" class="form-control" placeholder="Author">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputPublisher" class="col-sm-4 col-form-label">Publisher</label>
                <div class="col-sm-6">
                    <input type="text" name="publisher" id="inputPublisher" class="form-control" placeholder="Publisher">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="number" name="price" id="inputPrice" class="form-control" placeholder="Book Price">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputRelease" class="col-sm-4 col-form-label">Release</label>
                <div class="col-sm-6">
                    <input type="number" name="release" id="inputRelease" class="form-control" placeholder="Year of Release">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputDescription" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="inputDescription" class="form-control" placeholder="Description">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputImage" class="col-sm-4 col-form-label">Image</label>
                <div class="col-sm-6">
                    <input type="file" name="image" id="inputImage" class="form-control">
                </div>
            </div>
            <div class="form-group row mt-4">
                <div class="col-sm-12 text-center">
                    <button type="submit" class="btn btn-primary px-5" style="background-color: {{PRIMARY_COLOR}}">Add Book</button>
                </div>
            </div>
        </form>
        <div class="text-center my-4">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <i class="text-danger">{{$error}}</i>
                    <br>
                @endforeach
            @endif
        </div>
        <div class="text-center my-4">
            @if (session()->has('message'))
                <i class="text-success">{{session()->get('message')}}</i>
            @endif
        </div>
    </div>

@endsection
