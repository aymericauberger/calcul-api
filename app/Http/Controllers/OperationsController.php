<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SubstractRequest;
use App\Http\Requests\DivideRequest;

class OperationsController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_1') + $request->input('number_2');

        return ['result' => $result];
    }

    public function multiply(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_1') * $request->input('number_2');

        return ['result' => $result];
    }

    public function substract(SubstractRequest $request): JsonResponse
    {
        return response()->json(['result' => $request->input('number_1') - $request->input('number_2')]);
    }

    public function divide(DivideRequest $request): JsonResponse
    {
        return response()->json(['result' => $request->input('number_1') / $request->input('number_2')]);
    }
}
