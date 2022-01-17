@extends('template')

@php
    $user = auth()->user();
@endphp

@section('body')


    <div class="container-fluid col-md-8 mt-4">
        <h1 class="fs-2 text-center mb-8" style="color: {{PRIMARY_COLOR}};">Update Book</h1>
        <form action="/update-book/{{$book->id}}" method="POST" enctype="multipart/form-data" class="text-center">
            {{csrf_field()}}
            <div class="form-group row mt-4">
                <label for="inputTitle" class="col-sm-4 col-form-label">Title</label>
                <div class="col-sm-6">
                    <input type="text" name="title" id="inputTitle" class="form-control" placeholder="{{$book->title}}" value="{{$book->title}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputAuthor" class="col-sm-4 col-form-label">Author</label>
                <div class="col-sm-6">
                    <input type="text" name="author" id="inputAuthor" class="form-control" placeholder="{{$book->author}}" value="{{$book->author}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputPublisher" class="col-sm-4 col-form-label">Publisher</label>
                <div class="col-sm-6">
                    <input type="text" name="publisher" id="inputPublisher" class="form-control" placeholder="{{$book->author}}" value="{{$book->author}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputPrice" class="col-sm-4 col-form-label">Price</label>
                <div class="col-sm-6">
                    <input type="number" name="price" id="inputPrice" class="form-control" placeholder="{{$book->price}}" value="{{$book->price}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputRelease" class="col-sm-4 col-form-label">Release</label>
                <div class="col-sm-6">
                    <input type="number" name="release" id="inputRelease" class="form-control" placeholder="{{date('Y', strtotime($book->release))}}" value="{{date('Y', strtotime($book->release))}}">
                </div>
            </div>
            <div class="form-group row mt-4">
                <label for="inputDescription" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="inputDescription" class="form-control" placeholder="{{$book->description}}" value="{{$book->description}}">
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
                    <button type="submit" class="btn btn-primary" style="background-color: {{PRIMARY_COLOR}}">Update Book</button>
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
