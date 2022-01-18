@extends('template')


@php
    $user = auth()->user();
    $Date = date('d.m.Y');
@endphp


@section('body')

</script>

<div class="container">

    <div class="row justify-content-center">

        <div class="text-center title m-5">
           
            <h1 class="fs-2 text-center mb-8" style="color: {{PRIMARY_COLOR}};">
            Library Onsite Daily Queue 
            ({{$Date}})
            </h1>
            
         

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ticket</h5>
   
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @if($user && $user->id &&  $user->Queue && $user->Queue->id)
      <div class="modal-body">

         
      This is your code for going into the library today! LiB{{$user->id}}{{$user->Queue->id}}

      
      </div>
      @endif
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        </div>
     

        <div class="col-md-10">
            <div class="card">
                <div class="card-header " style="color: {{PRIMARY_COLOR}};">List Library</div>
                <div class="card-body d-flex " style="background-color: {{PRIMARY_COLOR}} ">

                    @foreach($libraries as $lib)

                    <div class="col-3" >

                        <div class="card m-3" style="padding-left:1rem ">

                        <div>
                            <img  style="width: 150px; height: 100px; object-fit: contain;" src="{{Storage::url('images/' .$lib->image)}}">
                        </div>
                      
                            <div>
                                <b>
                                {{$lib->name}}
                                </b>
                            </div>
                            <div>
                                Address: {{$lib->address}}
                            </div>
                            <div>
                                Capacity : {{count($lib->Queue)}} / {{$lib->capacity}}
                            </div>

                        </div>

                        @if($user->Queue==null)
                            <a type="button" class="btn btn-success"  style="margin-left: 5rem;" href="addtoqueue/{{$user->id}}/{{$lib->id}}">
                              join
                         </a>
                        @elseif($user->Queue->library_id == $lib->id)

                            <button type="button" class="btn btn-success "
                         style="margin: 3rem;" data-toggle="modal" data-target="#exampleModal">
                            Check Ticket
                         </button>
                        
                        @endif
                       
                    
                        
                 



                    </div>

                    @endforeach

                </div>

                @if (!empty($libraries))
            <div class="row my-4 justify-content-center">
                <nav class="col-md-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a  style="color: {{PRIMARY_COLOR}}; text-decoration: none;" href="{{$libraries->previousPageUrl()}}"><< Previous</a></li>
                        <span class="mx-2"></span>
                        <li class="page-item"><a  style="color: {{PRIMARY_COLOR}}; text-decoration: none;" href="{{$libraries->nextPageUrl()}}">Next >></a></li>
                    </ul>
                </nav>
            </div>
        @endif
            </div>
        </div>


        <div>



        </div>

    </div>



</div>

</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



@endsection