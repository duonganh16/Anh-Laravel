@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Đặt món ăn cho thú cưng</h2>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf

        <div class="mb-3">
            <label>Khách hàng:</label>
            <select name="customer_id" class="form-control">
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Món ăn:</label>
            <select name="food_id" class="form-control">
                @foreach($foods as $food)
                    <option value="{{ $food->id }}">{{ $food->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Số lượng:</label>
            <input type="number" name="quantity" min="1" class="form-control" value="1">
        </div>

        <button type="submit" class="btn btn-primary">Đặt hàng</button>
    </form>
</div>
@endsection
