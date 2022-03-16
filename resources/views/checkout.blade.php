@extends('master')

@section('content')
<div class="container mt-5">
    <h3 class="mb-5">Checkout</h3>
    <div class="w-50 mx-auto">
        <table class="table">
            <tbody>
                <tr>
                    <td>Total Amount</td>
                    <td>{{ $productSum }} Tk</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 Tk</td>
                </tr>
                <tr>
                    <td>Delivery Charge</td>
                    <td>120 Tk</td>
                </tr>
                <tr>
                    <td>Total Bill</td>
                    <td>{{ $productSum + 120 }} Tk</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="w-75 mt-5 mx-auto">
        <h3>Delivery Information</h3>
        <form action="/order-place" method="POST">
            @csrf
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="payment">Payment Method</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="cash" value="cash" checked>
                    <label class="form-check-label" for="cash">
                        Cash On Delevery
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="bkash" value="bkash">
                    <label class="form-check-label" for="bkash">
                        Bkash
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="mastercard" value="mastercard">
                    <label class="form-check-label" for="mastercard">
                        Mastercard
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Order Now</button>
        </form>
    </div>

</div>


@endsection