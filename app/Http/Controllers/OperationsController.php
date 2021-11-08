<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddRequest;
use App\Http\Requests\SubstractRequest;
use App\Http\Requests\DivideRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class OperationsController extends Controller
{
    public function add(AddRequest $request): JsonResponse
    {
        if ($request->input('numbers')) {
            return response()->json(['result' => array_sum($request->input('numbers'))]);
        }

        return response()->json(['result' => $request->input('number_1') + $request->input('number_2')]);
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
