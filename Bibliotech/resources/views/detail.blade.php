@extends('template')

@php
    $user = auth()->user();
@endphp

@section('body')

    <div class="container-fluid col-md-8 mt-4">
        <h1 class="fs-2 text-center mb-5" style="color: {{PRIMARY_COLOR}};">{{$book->title}}</h1>
        <div class="row justify-content-center mb-5" style="color: {{PRIMARY_COLOR}}">
            <div class="col col-md-4">
                <img style="width: 100%; object-fit: cover;" src="{{Storage::url('images/'.$book->image)}}" alt="{{$book->title}}">
            </div>
            <div class="col col-md-4">
                <h2 class="fs-4 mt-4">Name : {{$book->title}}</h2>
                <h2 class="fs-4 mt-4">Author : {{$book->author}}</h2>
                <h2 class="fs-4 mt-4">Publisher : {{$book->publisher}}</h2>
                <h2 class="fs-4 mt-4">Release : {{date('Y', strtotime($book->release))}}</h2>
                <h2 class="fs-4 mt-4">Price : Rp.{{number_format($book->price,0,',','.')}}</h2>
                <h2 class="fs-4 mt-4">Description : {{$book->description}}</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <a class="btn btn-primary py-3 px-5 mx-3 col-md-2" style="background-color: {{PRIMARY_COLOR}}" href="{{URL::previous()}}">Back</a>
            @if ($user!=null && $user->role == 'Admin')
                <a class="btn btn-success py-3 px-5 mx-3 col-md-2" href="/update-book-page/{{$book->id}}">Update</a>
                <form action="/delete-book/{{$book->id}}" method="POST" class="col-md-2">
                    {{method_field('delete')}}
                    {{csrf_field()}}
                    <button class="btn btn-danger mx-3 py-3 px-5 col-md-12">Delete</button>
                </form>
            @else
                <a href="{{$user ? '/add-to-cart/'.$book->id : '/login'}}" class="btn btn-primary mx-3 py-3 px-5 col-md-2" style="background-color: {{PRIMARY_COLOR}}">Add to Cart</a>
            @endif
        </div>
        <div class="text-center my-4">
            @if (session()->has('message'))
                <i class="text-success">{{session()->get('message')}}</i>
            @endif
        </div>
    </div>

@endsection
