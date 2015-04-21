<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		$name = 'Filip';
		return view('pages.about', compact('name'));
	}
	public function contact()
	{
		$contacts = [
			[
				'name' => 'Filip',
				'email' => 'filip@example.com'
			],
			[
				'name' => 'Someone Else',
				'email' => 's.else@example.com'
			]
		];
		return view('pages.contact', compact('contacts'));
	}

}
