@extends('app')

@section('content')
    <h1>Vehicles</h1>
    {{--<div class="form-group">--}}
{{--    {{ Form::open() }}--}}
{{--    {!! Form::select('vehicles[]', $vehicles,null) !!}--}}

        {{--</div>--}}

    {{ Form::open(['url' => 'motorcycles']) }}
    <div class="form-group">
    <div class="row">
        <div class="col">
            <select name="vehicle_make" id="vehicle_make" class="form-control" onchange="displayVehicleModel()">
            @foreach($vehicles as $vehicle)
                <option value="{{$vehicle->id}}">{{$vehicle->make}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="vehicle model" id="vehicle_model" class="form-control">
                <option value="0" selected="selected">model</option>
                @foreach($vehicles as $vehicle)
                    <option value="{{$vehicle->id}}">{{$vehicle->model}}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="vehicle year from" id="vehicle_year_from" class="form-control">
                <option value="0" selected="selected" disabled="disabled">year from</option>
                {{$earliest_date = 1950, $value = 0}}
                @foreach(range(date('Y'), $earliest_date) as $date)
                    <option value="{{$value+=1}}">{{$date}}</option>
                @endforeach
            </select>
        </div>
    <div class="col">
        <select name="vehicle year to" id="vehicle_year_to" class="form-control">
            <option value="0" selected="selected" disabled="disabled">year to</option>
            {{$earliest_date = 1950, $value = 0}}
            @foreach(range(date('Y'), $earliest_date) as $date)
            <option value="{{$value+=1}}">{{$date}}</option>
            @endforeach
        </select>
    </div>
        <div class="col">
            <select id="body_type" class="form-control">
                <option value="0" selected="selected" disabled="disabled">type</option>
                    <option value="1">4x4</option>
            </select>
        </div>
        <div class="col">
            <select name="minimum price" id="vehicle_min_price" class="form-control">
                <option value="0" selected="selected" disabled="disabled">min price</option>
                <option value="1">50,000</option>
            </select>
        </div>
    <div class="col">
        <select name="maximum price" id="vehicle_max_price" class="form-control">
            <option value="0" selected="selected" disabled="disabled">max price</option>
            <option value="2">100,000</option>
        </select>
    </div>
    </div>
    {{--<button class="btn" type="button" onclick="searchVehicle()">Search</button>--}}
        {{--'onclick' => 'searchVehicle()'--}}
    </div>
    <div class="form-group">
        {{Form::submit('Search',['class' => 'btn btn-primary form-control'])}}
    </div>
    {{ Form::close() }}
    <div class="card-deck" id="card_deck">
        @foreach($all as $one)
        <div class="card" id="card_display">
            <img class="card-img-top" src="{{$one->image}}" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">{{$one->make}}</h4>
                <p class="card-text">{{$one->year}}</p>
                <p class="card-text"><small class="text-muted">{{$one->price}}</small></p>
            </div>
        </div>
        @endforeach
    </div>
{{--    {{$all->links()}}--}}
{{--    @include('menu.index', ['object' => $all])--}}
{{--    {{$all->appends(Request::get('search'))->links()}}--}}
{{--    {!! Form::close() !!}--}}
@stop