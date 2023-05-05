@extends('template/template')

@section('body')
<div class="coffee-container">
    <div class="coffee-category">
    @foreach ($itemtype as $data)
        <button class="btn-coffee-category @if ($data->id == $typeid) chosen @else notchosen @endif">
            <a href="/user/{{$user->id}}/itemtype/{{$data->id}}">{{$data->item_type_name}}</a>
        </button>
    @endforeach
    </div>
    <div class="coffee-list">
        @foreach ($item as $data)
            <div class="coffee-list-content">
                <img class="coffee-image" src="{{asset($data->item_image)}}" alt="{{$data->item_name}} Image">
                <div class="coffee-data-bottom">
                    <div class="coffee-list-desc">
                        <p class="coffee-name">{{$data->item_name}}</p>
                        <p class="coffee-price">Rp {{$data->item_price}},-</p>
                    </div>
                    <a class="coffee-purchase-btn" href="/user/{{$user->id}}/item/{{$data->id}}"> <button> + </button></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/coffee.css')}}">
@endsection
