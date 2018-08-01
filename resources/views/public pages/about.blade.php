@extends('layouts.app')

@section('content')
    <div class="container justify-conent-center text-center pb-5">
        @component('layouts.card')
            @slot('cardHeader')
                <h2 class="card-title">True craftsmanship and pride of perfection go into every piece that we create!</h2>
            @endslot
            @slot('cardImg')
                <img class="card-img-bottom" src="{{ asset('pictures/fabshop/432x321.jpg') }}" alt="fabrication shop 1">
            @endslot
        @endcomponent
        
        @component('layouts.card')
            @slot('cardHeader')
                <h2 class="card-title">Our History</h2>
            @endslot
            @slot('cardBody')
                <div class="text-left">
                <p class="card-text">Viktor Grishcuk came to the United States from the Ukraine in 1994 and began granite fabrication in Seattle Washington in 2000. In 2003 Viktor moved to Kentucky and began installation and fabrication for several local fabricators. In November 2005 Quality Stone Countertops was born with Viktor and Alex Glushchak, along with two other fabricators.</p>
                <p class="card-text">Today, we are growing and expanding over the entire state of Kentucky. With Viktor and Alex's reputation for craftmandship and service word has spread quickly. We aquire most of our business from word of mouth and referrals in the industry.</p>
                </div>    
            @endslot
            @slot('cardImg')
                <img class="card-img-bottom" src="{{ asset('pictures/history/owners.jpg') }}" alt="the owners">
                <p class="pt-3">Alex and Viktor in Chicago for the 2007 Coverings Trade Show</p>
                <img class="card-img-bottom" src="{{ asset('pictures/history/jen.jpg') }}" alt="Stone consultant Jennifer">
                <p class="pt-3">Jennifer Wiseman in Chicago for the 2007 Covering Trade show</p>
            @endslot
        @endcomponent
    </div>

@endsection