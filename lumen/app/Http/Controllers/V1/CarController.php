<?php
namespace App\Http\Controllers\V1;

use App\Car;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class CarController extends Controller
{

    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }
}
