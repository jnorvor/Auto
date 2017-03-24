<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Requests\SearchVehicleRequest;
use App\Vehicles;
use Response;
//use Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use View;

class VehiclesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicles::select("make")->distinct()->get();
//        $vehicles = Vehicles::all();
        $all = Vehicles::paginate(6);
        return view('Garages.home', compact('vehicles','all'));
//        return view('Garages.home');
    }

    public function eyes(SearchVehicleRequest $request)
    {
//        return view('motorcycles.index');
//        Request::all();
//        $input = Input::get('vehicle model');
        $input = $request->all();
//        $input = Request::all();
        return $input;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function menu()
    {
        $vehicles = Vehicles::select("make")->distinct()->get();
//        $vehicles = Vehicles::all();
        $all = Vehicles::paginate(6);
        return view('menu.index', compact('vehicles','all'));

    }

    public function showVehicle($make)
{
//        'id',
    $vehicles = Vehicles::select('model')->where('make','=',$make)->distinct()->get();
//        return Response::json($vehicles);
    return ($vehicles);
}

    public function vehicleDetails($id)
    {
//        'id',
        $vehicles = Vehicles::where('id','=',$id)->get();
//        return Response::json($vehicles);
        return ($vehicles);
    }
//, $fromYear, $toYear, $fromPrice, $toPrice, $bodyType
    public function searchVehicle(SearchVehicleRequest $request){
        $results= (new Vehicles())->newQuery();

        if($request->make){
            $results->where('make', 'LIKE', '%'.$request->make. '%');
        }

        if($request->model){
            $results->where('model','LIKE', '%'.$request->model.'%');
        }
        return $results->paginate(10);

//        $make=$request->all();
//        $make=$request->input('make');
//        $model=$request->input('model');
//        $vehicle_model=Input::get('veh/icle_model');
//        $pieces = explode(";", $vehicle);
//            $make = $pieces[0];
//            $model = $pieces[1]; ->paginate(2)  ->get()
//        $results = Vehicles::where('make', 'LIKE', '%'.$make. '%')->orWhere('model','LIKE', '%'.$model.'%')->paginate(2);
// Vehicles::paginate(6);
//        DB::enableQueryLog();
//        dd(DB::getQueryLog());
//        where('make', 'LIKE', '%'.$vehicle_make. '%')->orWhere('model','LIKE', '%'.$vehicle_model.'%')->paginate(2);
//        return ($vehicle_make);
//        return ($vehicle_model);
//        return ($results);
//        return view('menu.index', ['all' => $results]);
//        return Response::json(\View::make('Garages.home', array('all' => $results))->render());
//        return view('Garages.home', compact(array('all' => $results)));
//        return view('menu.index', compact('results','all'));
//
//        }
// ->where('model','LIKE', '%'.$model.'%')->whereBetween('year', [$fromYear, $toYear])->whereBetween('price', [$fromPrice, $toPrice])->where('vehicle_group', 'LIKE', '%'.$bodyType.'%')
    }

    public function search()
    {
        $input = Request::all();
        return($input);
    }
}
