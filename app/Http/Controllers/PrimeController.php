<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    //
    public function index()
    {
        return view('prime');
    }

    public function check(Request $request)
    {
        $request->validate([
            'number' => 'required|integer|min:0',
        ]);

        $number = $request->input('number');
        $isPrime = $this->calculatePrime($number);

        return view('prime', [
            'number' => $number,
            'result' => $isPrime,
            'checked' => true
        ]);
    }

    private function calculatePrime($num)
    {
        if ($num <= 1) return false;
        if ($num <= 3) return true;
        if ($num % 2 == 0 || $num % 3 == 0) return false;

        for ($i = 5; $i * $i <= $num; $i += 6) {
            if ($num % $i == 0 || $num % ($i + 2) == 0) {
                return false;
            }
        }
        return true;
    }
}
