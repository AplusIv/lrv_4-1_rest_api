<?php

namespace App\Http\Controllers;

use App\Models\Car;
// use Illuminate\Http\Request;
// validation request CarRequest
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Car::paginate(10);
        return Car::all();

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        return Car::create($request->validated()); // уточнить метод
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Car::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        $car->fill($request->validated());
        return $car->save(); // вернёт либо истину, либо ложь при попытке обновить значения
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        // проверка возможности удаления
        // $car->delete();
        if ($car->delete()) {
            // return response(null, 404);
            return response()->json(null, 204);
        }
        return null; // если запись не найдена
    }
}
