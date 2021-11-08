<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfiniteOperationsRequest;
use Exception;
use Illuminate\Http\JsonResponse;

class InfiniteOperationsAction extends Controller
{
    public function __invoke(InfiniteOperationsRequest $request): JsonResponse
    {
        try {
            $result = self::handleOperations(...$request->input('operations'));
        } catch (Exception $e) {
            return response()->json(["result" => $e->getMessage()], 400);
        }

        return response()->json(["result" => $result]);
    }

    private static function handleOperations($number_1, $operator, $number_2): int|float
    {
        if (is_array($number_1)) {
            $number_1 = self::handleOperations(...$number_1);
        }

        if (is_array($number_2)) {
            $number_2 = self::handleOperations(...$number_2);

            if ($number_2 === 0 && $operator === '/') {
                throw new Exception('You tried to divide by zero.');
            }
        }

        return match ($operator) {
            '+' => $number_1 + $number_2,
            '-' => $number_1 - $number_2,
            '/' => $number_1 / $number_2,
            '*' => $number_1 * $number_2,
        };
    }
}
