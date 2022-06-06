<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class assignmentController extends Controller
{
    public $arr = ['mamamiya', 'hello', 'abba'];
    public $names = ['mira', 'raya', 'Pablo', 'yousef', 'john'];

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

    public function text()
    {
        $url = 'https://icanhazdadjoke.com/slack';
        $contents = json_decode(file_get_contents($url), true)["attachments"][0]['text'];
        return response()->json(['Joke' => $contents], 200);
    }

    public function getRecipe()
    {
        $url = 'https://api.punkapi.com/v2/beers';
        $contents = json_decode(file_get_contents($url), true);
        $num = rand(0, count($contents));
        return response()->json(['Beer Recipe' => $contents[$num]], 200);
    }

    public function getNominee()
    {
        $x = [];
        foreach ($this->names as $i) {
            if ($i == 'Pablo')
                array_push($x, [$i, rand(1, 20)]);
            else
                array_push($x, [$i, rand(1, 10)]);
        }
        $num = 0;
        $nominee = '';
        foreach ($x as $i) {
            if ($num < $i[1]) {
                $num = $i[1];
                $nominee = $i[0];
            }
        }
        echo $nominee;
    }
}
