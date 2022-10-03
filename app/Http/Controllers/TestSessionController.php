<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestSessionController extends Controller
{
    public function test(Request $request)
    {
        $rules = [
            'example1' => 'required|max:5000',
            'example2' => 'required|max:1000',
            'example3' => 'required|max:1000',
            'example4' => 'required|max:1000',
            'example5' => 'required|max:1000',
            'example6' => 'required|max:1000',
        ];

        $messages = [
            'example1' => 'fgdsgdfsgdfgfd',
            'example2' => 'fgdsgdfsgdfgfd',
            'example3' => 'fgdsgdfsgdfgfd',
            'example4' => 'fgdsgdfsgdfgfd',
            'example5' => 'fgdsgdfsgdfgfd',
            'example6' => 'fgdsgdfsgdfgfd',
        ];


        $this->validate($request, $rules, $messages);

        return redirect()->back()->withInput();

    }
}
