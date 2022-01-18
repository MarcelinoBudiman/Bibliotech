@extends('template')

@section('body')
    {{--   css--}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="m-5" >

    </div>
    <div class="m-5">
        <div class="card">
            <h2 class="card-header text-center text-white " style="background-color: {{PRIMARY_COLOR}};" >
                About Us
            </h2>
            <div class="card-body" >
                <p class="card-text text-center">Blibliotech was founded in 2022. Bilibliotech started as a small team consisted of college students taht
                eager to create a library for the betterment of the human lives. Blibliotech provides a good amount of book selection including the rarest and strangest ones.
                    Blibliotech mission is to give user a way to borrow books, without the hassle of going to libraries which is nonexistent in small cities, and if it exists
                    , its usually pretty bad and almost abandoned.
                </p>

            </div>
        </div>
        <div class="card mt-3">
            <img class="card-img-top" src="https://cdni.rbth.com/rbthmedia/images/2018.05/article/5b0821d415e9f917c2730963.jpg" alt="Card image cap">
            <h2 class="card-header text-center text-white " style="background-color:{{PRIMARY_COLOR}};" >
                People
            </h2>
            <div class="card-body" >
                <p class="card-text text-center">In blibliotech we appreciate people life by providing the best
                of the best service that we can give. We always delve into the depth of human mind to find the perfect way to provide service to bte applied
                in our app</p>

            </div>
        </div>
        <div class="card mt-3">

            <div class="card-body text-center text-decoration: none;" >
                <i class="fa fa-instagram m-2 " style="font-size:28px;color:{{PRIMARY_COLOR}}"></i>
                <i class="fa fa-twitter m-2" style="font-size:28px;color:{{PRIMARY_COLOR}}"></i>
                <i class="fa fa-facebook m-2" style="font-size:28px;color:{{PRIMARY_COLOR}}"></i>
                <i class="fa fa-youtube m-2" style="font-size:28px;color:{{PRIMARY_COLOR}}"></i>
            </div>
        </div>
    </div>

@endsection
