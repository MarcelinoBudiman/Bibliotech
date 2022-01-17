@extends('template')

@section('body')

<div class="container">

    <div class="row justify-content-center">

        <div>
            Library Onsite Daily Queue
        </div>



        <div class="col-md-10">
            <div class="card">
                <div class="card-header "></div>
                <div class="card-body d-flex " style="background-color: #0dcaf0">

                    @foreach($library as $library)

                    <div>
                        {{$library->name}}
                    </div>
                    <div>
                        {{$library->address}}
                    </div>
                    <div>
                     {{$library->Queue->count}}   / {{$library->capacity}}
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