<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleFormController extends Controller {

	public function get(Request $request) {

		$form = [];
		$form['usr'] = $request->input('usr', '');
		$form['corp'] = $request->input('corp', '');
		$form['zip'] = $request->input('zip', '');
		$form['pref'] = $request->input('pref', '');
		$form['address'] = $request->input('address', '');
		$form['phone'] = $request->input('phone', '');
		$form['mail'] = $request->input('mail', '');

		return view('bootstrap-examples/simple-form-example', $form);
	}

	public function post(Request $request) {

		$form = [];
		$form['usr'] = $request->input('usr', '');
		$form['corp'] = $request->input('corp', '');
		$form['zip'] = $request->input('zip', '');
		$form['pref'] = $request->input('pref', '');
		$form['address'] = $request->input('address', '');
		$form['phone'] = $request->input('phone', '');
		$form['mail'] = $request->input('mail', '');

		return view('bootstrap-examples/simple-form-example', $form);
	}
}
?>
