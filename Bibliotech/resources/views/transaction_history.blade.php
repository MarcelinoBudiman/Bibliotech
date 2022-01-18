@extends('template')

@section('body')
    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-lg-10 ">
                <div class="card-header text-center" style="background-color:{{PRIMARY_COLOR}}; color:white">
                    Transaction History
                </div>
                @if(auth()->user()->role == 'Admin')
                    @foreach($transaction->reverse() as $tr)
                        <div class="card mb-2">
                            <div class="card-body  ">
                                <div>User : {{$tr->name}}</div>
                                <div>Transaction Id : {{$tr->id}}</div>
                                <div>Borrow Date : {{$tr->borrow_date}}</div>
                                <div>Return Date : {{$tr->return_date}}</div>
                                <div>Payment Method : {{$tr->payment_method}}</div>
                                <div>Card Number : {{$tr->card_number}}</div>
                                <div>Total Price : Rp {{number_format($tr->total_price,0,',','.')}}</div>
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Author</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactionDetail as $trd)
                                        @if($trd->transaction_id == $tr->id)
                                            <tr>
                                                <td>{{$trd->title}}</td>
                                                <td>{{$trd->author}}</td>
                                                <td>Rp {{number_format($trd->price,0,',','.')}}</td>
                                                <td>
                                                    <img src="{{$trd->image}}" width="70" height="100" class="img-responsive "/>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>

                                </table>
                                <div>Total price : Rp {{number_format($tr->total_price,0,',','.')}}</div>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($transaction->reverse() as $tr)
                        @if($tr->user_id == auth()->user()->id)
                            <div class="card mb-2">
                                <div class="card-body  ">


                                    <div>Borrow Date : {{$tr->borrow_date}}</div>
                                    <div>Return Date : {{$tr->return_date}}</div>
                                    <div>Payment Method : {{$tr->payment_method}}</div>
                                    <div>Card Number : {{$tr->card_number}}</div>
                                    <div>Total Price : Rp {{number_format($tr->total_price,0,',','.')}}</div>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Image</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transactionDetail as $trd)
                                            @if($trd->transaction_id == $tr->id)
                                                <tr>
                                                    <td>{{$trd->title}}</td>
                                                    <td>{{$trd->author}}</td>
                                                    <td>Rp {{number_format($trd->price,0,',','.')}}</td>
                                                    <td>
                                                        <img src="{{$trd->image}}" width="70" height="100" class="img-responsive "/>
                                                    </td>

                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>

                                    </table>
                                    <div>Total price : Rp {{number_format($tr->total_price,0,',','.')}}</div>
                                </div>
                            </div>
                        @else
                        @endif
                    @endforeach
                @endif
            </div>

        </div>
@endsection
