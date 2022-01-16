@extends('template')

@php
    $user = auth()->user();
@endphp

@section('body')

    <div class="container-fluid mt-4">
        <div class="row justify-content-end">
            <form action="/search" class="col-md-4">
                <div class="input-group mt-4">
                    <input type="search" class="form-control rounded" name="q" id="search" placeholder="Search by book's name" aria-label="Search" aria-describedby="search-addon" value="{{!empty($q) ? $q : ""}}"/>
                    <button type="submit" class="btn" style="color: white; background-color: {{PRIMARY_COLOR}};">Search</button>
                </div>
            </form>
        </div>

        <div class="row mt-4">
            @forelse ($books as $b)
                <div class="col-md-3 mt-2">
                    <div class="card shadow" style="background-color: {{PRIMARY_COLOR}};">
                        <a href="/detail/{{$b->id}}"><img class="card-img-top" style="width: 100%; height: 300px; object-fit: cover;" src="{{Storage::url('images/'.$b->image)}}" alt="{{$b->title}}"></a>
                        <div class="card-body text-center">
                            <h5 class="card-title text-white">{{$b->title}}</h5>
                            <p class="text-white">Rp.{{number_format($b->price,0,',','.')}}</p>
                            <div class="row justify-content-around">
                                @if ($user!=null && $user->role == 'Admin')
                                    <a href="/update-book-page/{{$b->id}}" class="btn btn-light col col-sm-4" style="color: {{PRIMARY_COLOR}}">Update</a>
                                    <form action="/delete-book/{{$b->id}}" method="POST" class="d-inline col col-sm-4">
                                        {{method_field('delete')}}
                                        {{csrf_field()}}
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                @else
                                    <a href="{{$user ? '/add-to-cart/'.$b->id : '/login'}}" class="btn btn-light col col-sm-8" style="color: {{PRIMARY_COLOR}}">Add to Cart</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <i class="text-center fs-1 text-muted mt-5">NO DATA</i>
            @endforelse
        </div>
        <div class="text-center my-4">
            @if (session()->has('message'))
                <i class="text-success">{{session()->get('message')}}</i>
            @endif
        </div>
        @if (!empty($books))
            <div class="row my-4 justify-content-center">
                <nav class="col-md-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a  style="color: {{PRIMARY_COLOR}}; text-decoration: none;" href="{{$books->previousPageUrl()}}"><< Previous</a></li>
                        <span class="mx-2"></span>
                        <li class="page-item"><a  style="color: {{PRIMARY_COLOR}}; text-decoration: none;" href="{{$books->nextPageUrl()}}">Next >></a></li>
                    </ul>
                </nav>
            </div>
        @endif
    </div>

@endsection
