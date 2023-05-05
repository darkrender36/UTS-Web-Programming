@extends('template/template')

@section('body')
<div class="transaction">
    @foreach ($transaction as $data)
        <div class="transaction-container">
            <img class="transaction-coffee-image" src={{asset($data->item->item_image)}} alt="">
            <div class="transaction-text">
                <p class="transaction-desc transaction-date">{{$data->transaction_date}}</p>
                <p class="transaction-desc transaction-coffee-name">{{$data->item->item_name}}</p>
                <p class="transaction-desc transaction-coffee-price">Rp {{$data->item->item_price}},-</p>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('stylesheet')
<link rel="stylesheet" href="{{asset("css/transaction.css")}}">
@endsection
