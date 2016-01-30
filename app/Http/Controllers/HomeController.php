<?php namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

	public function form()
	{
		return view('form');
	}

	public function form_store(Request $request)
	{
		$nama1 = $request->input('nama1');
		$nomor1 = $request->input('nomor1');
		$jk1 = $request->input('jk1');
		$nama2 = $request->input('nama2');
		$nomor2 = $request->input('nomor2');
		$jk2 = $request->input('jk2');
		$nama3 = $request->input('nama3');
		$nomor3 = $request->input('nomor3');
		$jk3 = $request->input('jk3');

		$namagp = $request->input('namagp');
		$nomorgp = $request->input('nomorgp');
		$jkgp = $request->input('jkgp');

		DB::table('data_peserta')->insert(
    		[
    			'nama1' => $nama1,
    			'nomor1' => $nomor1, 
    			'jk1' => $jk1, 
    			'nama2' => $nama2, 
    			'nomor2' => $nomor2, 
    			'jk2' => $jk2, 
    			'nama3' => $nama3, 
    			'nomor3' => $nomor3, 
    			'jk3' => $jk3, 
    			'namagp' => $namagp, 
    			'nomorgp' => $nomorgp, 
    			'jkgp' => $jkgp, 
    		]
		);

	}

}
