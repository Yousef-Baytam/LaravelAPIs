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

    public function secondsCount()
    {

        $date1 = date('d-m-y h:i:s');
        $timestamp = strtotime($date1);
        $date2 = date(mktime(0, 0, 0, 4, 14, 1732));
        date_default_timezone_set('Asia/Beirut');
        return response()->json(['seconds passed since April 14 1732 is:' =>  $timestamp - $date2], 200);
    }
}
