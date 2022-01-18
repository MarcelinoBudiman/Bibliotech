@extends('template')


@php
    $user = auth()->user();
    
@endphp


@section('body')

<div class="container">

    <div class="row justify-content-center">

        <div class="text-center title m-5">
            Library Onsite Daily Queue
            
        </div>


        <div class="col-md-10">
            <div class="card">
                <div class="card-header ">List Library</div>
                <div class="card-body d-flex " style="background-color: {{PRIMARY_COLOR}}">

                    @foreach($libraries as $lib)

                    <div class="col-3">

                        <div class="card m-3">

                            <div>
                                {{$lib->name}}
                            </div>
                            <div>
                                {{$lib->address}}
                            </div>
                            <div>
                                {{count($lib->Queue)}} / {{$lib->capacity}}
                            </div>

                        </div>


                        <a type="button" class="btn btn-success " style="margin-left: 5rem;" href="addtoqueue/{{$user->id}}/{{$lib->id}}">
                              join
                         </a>



                    </div>

                    @endforeach

                </div>
            </div>
        </div>


        <div>



        </div>

    </div>



</div>

</div>





@endsection