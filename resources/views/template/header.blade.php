<header>
    <div class="header-left">
        @if ($hour >= 5 && $hour < 12)
        <p>Good Morning,</p>
        @elseif($hour >= 12 && $hour < 18)
        <p>Good Afternoon,</p>
        @else
        <p>Good Evening,</p>
        @endif
        <p>{{$user->name}}</p>
    </div>
    <div class="header-right">
        @if($user->loyalty_level == 'Gold Level')
            <p class="gold">Gold Level</p>
        @elseif($user->loyalty_level == 'Green Level')
            <p class="green">Green Level</p>
        @endif
    </div>
</header>
