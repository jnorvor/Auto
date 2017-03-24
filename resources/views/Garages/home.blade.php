@include('header')
<div class="search-banner" style="background-image:url('{{asset('img/tyre1.png') }}')">
    <div class="section-container">
        <h1 class="page-title">Local Garages</h1>
        <div class="search-field-wrap">
            {{ Form::open(['route' => 'search','method' => 'GET']) }}
            <div>
                <div class="outer-wrapper">
                <div class="select-title">Make</div>

                <div class="wrapper-dropdown-5" tabindex="1" >
                    <span class="placeholder">Select make</span>
                    <ul class="dropdown make" style="z-index:1000" name="make" id="vehicle_make">
                        @foreach($vehicles as $vehicle)
                            {{--{{$vehicle->id}}--}}
                            <li class="option-make" id="make" value="{{$vehicle->make}}"><div style="background:url('img/bmw.png');" class="car-logo" ></div><a class="car-name">{{$vehicle->make}}</a></li>
                            @endforeach
                    </ul>
                </div>
            </div>
            <div class="outer-wrapper">
                <div class="select-title">Model</div>
                <div id="dd" class="wrapper-dropdown-5 inactive" tabindex="2"  >
                    <span class="placeholder">Select model</span>
                    <ul class="dropdown" id="vehicle_model" name="model">
                    </ul>
                </div>
            </div>
            <div class="outer-wrapper">
                <div class="select-title">Car type</div>
                <div id="dd" class="wrapper-dropdown-5 " tabindex="3">
                    <span class="placeholder">Select type</span>
                    <ul class="dropdown">
                        <li class="option"><a>Profile</a></li>
                    </ul>
                </div>
            </div>
            <div class="outer-wrapper">
                <div class="select-title">Year</div>
                <div id="dd" class="wrapper-dropdown-5 mini-left" tabindex="4">
                    <span class="placeholder">From</span>
                    <ul class="dropdown">
                        <?php $earliest_date = 1950; $value = 0;?>
                        @foreach(range(date('Y'), $earliest_date) as $date)
                            <li class="option" value="{{$value+=1}}"><a>{{$date}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div id="dd" class="wrapper-dropdown-5  mini-right" tabindex="4">
                    <span class="placeholder">To</span>
                    <ul class="dropdown" style="margin-left: -100px;">
                        <?php $earliest_date = 1950; $value = 0;?>
                        @foreach(range(date('Y'), $earliest_date) as $date)
                            <li class="option" value="{{$value+=1}}"><a>{{$date}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="outer-wrapper">
                <div class="select-title">Price Range</div>
                <div id="dd" class="wrapper-dropdown-5 mini-left" tabindex="5">
                    <span class="placeholder">Min</span>
                    <ul class="dropdown">
                        <li class="option"><a>50,000</a></li>
                    </ul>
                </div>
                <div id="dd" class="wrapper-dropdown-5  mini-right" tabindex="5">
                    <span class="placeholder">Max</span>
                    <ul class="dropdown" style="margin-left: -100px;">
                        <li class="option"><a>100,000</a></li>
                    </ul>
                </div>
            </div>

            </div>

        </div>
        <div class="button-wrap">
            {{Form::submit('Search', ['class' => 'submit-button'])}}
        </div>
        {{ Form::close() }}
    </div>
</div>
<div class ="categories-section">
    <div class="section-container">

        <div class="content-area">
            @foreach($all as $one)
            <div class="image-card" onClick="showDetails({{$one->id}})">
                <div class="card-wrap">
                    <div class="card-icon" style="background-image:url('{{asset('img/car1.jpg') }}')">

                    </div>
                </div>
                <div class="card-description">
                    <div class="card-text">
                        <div class="card-text-wrapper">
                            <div class="card-details">
                                <p class="vehicle-name">{{$one->make}}</p>
                                <p class="vehicle-details">{{$one->year}}</p>
                                <p class="vehicle-details">{{$one->type}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">
                        <div class="card-text-wrapper">

                            <h1 class="price-tag">¢ {{$one->price}}</h1>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach

                {{--['class' => 'archive-pages']--}}
                {{$all->links()}}
            {{--<div class="wrapper">--}}

                {{--<!--Pagination Start-->--}}
                {{--<section class="archive-pages">--}}
                    {{--<ul>--}}
                        {{--<li class="first"><a href="#" title="first page">first page</a></li>--}}
                        {{--<li class="previous"><a href="#" title="previous page">previous page</a></li>--}}
                        {{--<li class="selected">1</li>--}}
                        {{--<li><a href="#" title="Pagina 2">2</a></li>--}}
                        {{--<li><a href="#" title="Pagina 3">3</a></li>--}}
                        {{--<li><a href="#" title="Pagina 4">4</a></li>--}}
                        {{--<li><a href="#" title="Pagina 5">5</a></li>--}}
                        {{--<li class="next"><a href="#" title="next page">next page</a></li>--}}
                        {{--<li class="last"><a href="#" title="last page">last page</a></li>--}}
                    {{--</ul>--}}
                {{--</section>--}}
                {{--<!--End-->--}}

            {{--</div>--}}

        </div>
        <div class="side-content">
            <img class="ad-images" src="img/advert-02.jpg">

        </div>
    </div>
</div>
</div>
    {{--<div>--}}

@include('footer')