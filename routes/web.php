<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('guest.index'); 
});
Route::get("/formtosendpostmethod",function(){
	return view("guest.form");
});

Route::post("/testrequest",function(Request $request){
	$data=[
		"name"=>$request->post()["name"]
	];
	return view("guest.table",["newdata"=>$data]);
})->name("posttest");


Route::get("/parameter/{id}",function($id){
	return $id;
})->name("gettest");
Route::get("/mainpage",function(){
	return view("guest.index");
});
Route::post("/secondpage",function(Request $req){
	// return $req->post()["name"];
	$data=[
		[
			"name"=>$req->post()["name"],
			"surname"=>$req->post()["surname"],
			"add"=>$req->post()["add"],
			"info"=>$req->post()["info"],
			"dateofbirth"=>$req->post()["dateofbirth"],
		]
	];
	return view("Task_2.Output",["newdata"=>$data]);
})->name("secondpage");

/*
	error sadaaa? error ara ubralod is rogor gadmowere unda mekitxa da es index.blade php gadmovakopire daver vpoulob :d lol :D ras ver poulob zustad es sworad gizis layouts gaklia folderi da inc aui D;

	eg routebshi unda gauwero ukve anu web.php shi ra misamartze mogitxovos  tu viewbshi mekitxebi layousts eqneba layouts.main da menus eqneba inc.menu kargi vcdi mashin  tu arm momwere ar mogeridos <# kargi ^_^
*/ 