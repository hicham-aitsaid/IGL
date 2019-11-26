<?php
use Illuminate\Http\Request;

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

use Illuminate\Support\Facades\URL;
use App\etudiant;


Route::get('/', function () {

    return view('welcome');
});
Route::get('/etudiant', function () {
    return view('etudiant');
});
Route::get('/afficher', function () {
    error_log('hello');
    $etudiant = etudiant::all();
    return json_encode($etudiant) ;
    
})->middleware('cors');
Route::post('/etudiant/ajouteretudiant', function(Request $request){
$req = json_decode($request->getContent())->data; 
      $name = $req->name ;
	 $password= $req->password;
	 $promo=$req->promo;
    $matricule=$req->matricule ;
   $email=$req->email ;
     $groupe  = $req->groupe;
  
    
            ////
            //  move_uploaded_file($contenu, $directionid);
                DB::insert('INSERT INTO etudiants(name,email,password,promo,matricule,groupe) VALUES (:name,:email,:password,:promo,:matricule,:groupe)',[
				     	'name'=>$name,
				     	'email'=>$email,
				     	'password'=>$password,
				     	'promo'=>$promo,
				     	'matricule'=>$matricule,
				     	'groupe'=>$groupe

				     ]);

          

   
    
      return view ('etudiant');

          
});



//Route::resource('cours', 'CoursController');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
