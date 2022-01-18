@extends('template')

@section('body')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

    <form method="POST" action="/addTransaction" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="card m-3">
                <div class="card-header text-lg-center" style="background-color:{{PRIMARY_COLOR}};color:white">
                    Cart
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                        <tr class="text-center align-middle">
                            <th scope="col"></th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Price</th>
                        </tr>
                        <?php $total = 0 ?>
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $book)
                                <?php $total += $book['price']?>

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
                <div class="container">
                    <div class="card m-3">
                        <div class="card-body">

                            <div class="row mb-3 ">
                                <label for="payment_method" class="col-md-4 col-form-label text-md-right">Payment Method</label>
                                <div class="col-md-6 d-flex ">
                                    <div class="form-check me-2 ">
                                        <input class="form-check-input" type="radio" name="payment_method" id="credit" value ="credit">
                                        <label class="form-check-label " for="credit">
                                            Credit
                                        </label>
                                    </div>
                                    <div class="form-check ">
                                        <input class="form-check-input" type="radio" name="payment_method" id="debit" value="debit">
                                        <label class="form-check-label" for="debit">
                                            Debit
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="card_number" class="col-md-4 col-form-label text-md-right">Card Number</label>
                                <div class="col-md-6">
                                    <input id="card_number" type="text" class="form-control @error('card_number') is-invalid @enderror" name="card_number" >

                                    @error('card_number')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="card_number" class="col-md-4 col-form-label text-md-right">Return Date</label>
                                <div class="col-md-6">
                                    <input class="date form-control" type="text" name="return_date">
                                </div>
                                <script type="text/javascript">
                                    $('.date').datepicker({
                                        format: 'yyyy-mm-dd'
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body " >
                    <table class="table table-borderless" >
                        <tbody>
                        <tr class="text-center align-middle">
                            <td>
                                <button type="submit" class="btn btn-primary px-5" style="background-color: {{PRIMARY_COLOR}};color:white">Checkout</button>
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
            </div>
        </div>
    </form>

@endsection
