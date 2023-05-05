@extends('template/template')

@section('body')
<div class="first">
    <div class="redeem">
        <div class="points">
            <p class="redeem_number">{{$user->loyalty_point}}</p>
            <p class="point_label">star balance</p>
        </div>
        <button class="btn_redeem">Redeem Stars</button>
    </div>
    <div class="changeuser">
        @if($user->id == 1)
            <a href="/user/2/home">
                <button>Change User</button>
            </a>
        @elseif($user->id == 2)
            <a href="/user/1/home">
                <button>Change User</button>
            </a>
        @endif
    </div>
</div>
<div class="promo_body">
    <div class="promo_text">Promo Information</div>
    <div class="promo">
        <div class="promo_content">
            <img class= "promo_image" src={{asset("../images/promo/promo_buy1get1.jpg")}} alt="promo_buy1get1">
            <div class="promo_">
                <p class="promo_title">Buy 1 Get 1 Coffee</p>
                <p class="promo_desc">Looking for a delicious and affordable way to start your day? Look no further than our "buy 1 get 1" coffee promotion!</p>
            </div>
        </div>
        <div class="promo_content">
            <img class= "promo_image" src={{asset("images/promo/promo_tumbler.jpg")}} alt="promo_tumbler">
            <div class="promo_">
                <p class="promo_title">Tumblers Day</p>
                <p class="promo_desc">Celebrate Tumbler Day with us and get your hands on the perfect reusable cup to keep your drinks hot or cold all day long. Don't miss out on this limited time offer!</p>
            </div>
        </div>
    </div>
</div>
<div class="coffee">
    <a href="/user/{{$user->id}}/itemtype/1">
        <button class="btn_coffee">
            Coffee
        </button>
    </a>

</div>
@endsection

@section('stylesheet')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
