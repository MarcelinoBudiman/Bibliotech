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
                <p class="card-text text-center">The red ball sat proudly at the top of the toybox. It had been the last to be played with and anticipated it would be
                    the next as well. The other toys grumbled beneath. At one time each had held the spot of the red ball, but over time they had sunk deeper
                    and deeper into the toy box.</p>

            </div>
        </div>
        <div class="card mt-3">
            <img class="card-img-top" src="https://i.ytimg.com/vi/oTz93Y-qeq0/maxresdefault.jpg" alt="Card image cap">
            <h2 class="card-header text-center text-white " style="background-color:{{PRIMARY_COLOR}};" >
                People
            </h2>
            <div class="card-body" >
                <p class="card-text text-center">At that moment he had a thought that he'd never imagine he'd consider.
                    "I could just cheat," he thought, "and that would solve the problem." He tried to move on from the thought but it was persistent.
                    It didn't want to go away and, if he was honest with himself, he didn't want it to..</p>

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
