<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get()
    {
        $cars = Car::query()
            ->with("owner")
            ->get();

        return response()->json($cars);
    }

    public function createCar(CarRequest $request)
    {
        
        $cars = Car::create($request->all());
        return response()->json($cars, 201);
    }

    public function updateCar(Car $cars, CarRequest $request)
    {
       
        $cars->update($request->all());

        return response()->json($cars);
    }

    public function deleteCar(Car $cars)
    {
        $cars->delete();

        return response()->json("", 204);
    }
}
