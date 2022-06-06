<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assignmentController extends Controller
{
    public $arr = ['mamamiya', 'hello', 'abba'];

    public function findPalindroms()
    {
        $final = [];
        $count = 0;
        foreach ($this->arr as $i) {
            if (strrev($i) === $i) {
                $count++;
                array_push($final, $i);
            }
        }
        return response()->json(['palindrom count' => $count, 'palindroms' => $final], 200);
    }
}
