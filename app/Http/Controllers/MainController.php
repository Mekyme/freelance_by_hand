<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{

    public function main() {
        return view('main');
    }

    public function creating_orders() {
        return view('creating_orders');
    }
    public function creating_orders_check(Request $request) {
        $valid = $request->validate([
            'type_of_work'=> 'required|min:4|max:100',
            'location' =>'required|min:4|max:100',
            'price' => 'required|min:2|max:100',
            'message' => 'required|min:20|max:500'
        ]);
    }
    public function sign_in() {
        return view('sign_in');
    }
}
