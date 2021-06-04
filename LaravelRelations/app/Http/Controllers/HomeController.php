<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Brand;
use App\Car;
use App\Pilot;

class HomeController extends Controller
{
    public function home(){

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function pilot($id){

        $pilot = Pilot::findOrFail($id);

        return view('pages.pilot', compact('pilot'));
    }

    public function createCar(){

        $brands = Brand::all();
        $pilots = Pilot::all();

        return view('pages.new-car', compact('brands', 'pilots'));
    }

    public function storeCar(Request $request){



        $validated = $request -> validate([

            'name' => 'required|string|min:2',
            'model' => 'required|string|min:2',
            'kW' => 'required|integer|min:10|max:300',
        ]);

        $brand = Brand::findOrFail($request -> get('brand_id'));

        $car = Car::make($validated);

        $car -> brand() -> associate($brand);

        $car -> save();

        $car -> pilots() -> attach($request -> get('pilots_id'));

        $car -> save();

        return redirect() -> route('home');
    }
}
