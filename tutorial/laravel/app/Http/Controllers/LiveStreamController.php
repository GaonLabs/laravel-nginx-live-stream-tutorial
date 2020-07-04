<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveStreamController extends Controller
{
	public function on_publish(Request $request) {
		if ($request->name == "mystream") {
			return response('Good', 200)->header('Content-Type', 'text/plain');
		} else {
			return response('No', 400)->header('Content-Type', 'text/plain');
		}
	}
}
