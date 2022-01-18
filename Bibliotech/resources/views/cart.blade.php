@extends('template')

@section('body')
    <div class="container">
        <div class="card m-3">
            <div class="card-header text-lg-center" style="background-color:{{PRIMARY_COLOR}};color:white">
                Cart
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tbody>

                    <?php $total = 0 ?>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $book)
                            <?php $total += $book['price']?>
                            <tr class="text-center align-middle">
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Price</th>
                            </tr>

                            <tr class="text-center align-middle">
                                <td>
                                    <div class="col-sm-3 hidden-xs"><img src="{{ $book['image'] }}" width="70" height="100" class="img-responsive "/></div>
                                </td>
                                <td>
                                    {{ $book['title'] }}
                                </td>
                                <td>
                                    {{ $book['author'] }}
                                </td>
                                <td>
                                    Rp {{number_format($book['price'],0,',','.')}}
                                </td>
                            </tr>
                        @endforeach

                    @endif
                    </tbody>

                </table>
            </div>
            @if(session('cart'))
            <div class="card-body " >
                <table class="table table-borderless" >
                    <tbody>
                        <tr class="text-center align-middle">
                            <td>
                                <a href="/checkout" class="btn" style="background-color:{{PRIMARY_COLOR}};color:white">Proceed to Checkout</a>
                            </td>
                            <td>

                            </td>
                            <td class="ms-2">
                                Total price Rp {{number_format($total,0,',','.')}}
                            </td>

                        </tr>
                    </tbody>


                </table>

            </div>
            @endif
        </div>
    </div>
@endsection
