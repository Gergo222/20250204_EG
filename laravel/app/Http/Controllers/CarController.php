<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function get()
    {
        $cars = Car::query()->get();

        return response()->json($cars);
    }

    public function createCar(Request $request)
    {
        $cars = Car::create($request->all());
        return response()->json($cars, 201);
    }

    public function updateCar(Car $cars, Request $request)
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
