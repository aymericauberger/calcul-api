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
}
