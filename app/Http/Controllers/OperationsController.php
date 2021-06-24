<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function subtraction(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_2') - $request->input('number_1');

        return ['result' => $result];
    }

    public function division(Request $request)
    {
        $request->validate([
            'number_1' => 'required|numeric',
            'number_2' => 'required|numeric',
        ]);

        $result = $request->input('number_1') / $request->input('number_2');

        return ['result' => $result];
    }

    public function multiOperation(Request $request)
    {
        
    }
}
