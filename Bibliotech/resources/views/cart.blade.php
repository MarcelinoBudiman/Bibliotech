@extends('template')

@section('body')
    <div class="container">
        <div class="card m-3">
            <div class="card-header text-lg-center" style="background-color:{{PRIMARY_COLOR}}">
                Cart
            </div>
            <div class="card-body">
                <table id="cart" class="table table-borderless">
                    <tbody>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $book)
                            <tr class="text-center align-middle">
{{--                                <td data-th="Product">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-3 hidden-xs"><img src="{{ $details['image'] }}" width="100" height="100" class="img-responsive rounded"/></div>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                                <td>
                                    {{ $book['title'] }}
                                </td>
                                <td>
                                    {{ $book['author'] }}
                                </td>
                                <td>
                                    {{ $book['price'] }}
                                </td>
{{--                                <td>--}}
{{--                                    {{ $details['quantity'] }} item(s)--}}
{{--                                </td>--}}
{{--                                <td class="text-center">--}}
{{--                                    ${{ $details['price'] * $details['quantity'] }}--}}
{{--                                </td>--}}

                            </tr>
                        @endforeach

                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
