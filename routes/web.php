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

Route::get('/', function () {
    $contact = \App\Contact::all();

    return view('welcome', ['contacts' => $contact]);
});

Route::get('/new', function () {
    return view('form', []);
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|alpha|max:255',
        'email' => 'required|max:255',
        'number' => 'required|numeric|max:255',
        'date' => 'required|date|max:255',
    ]);
    $contact = new App\Contact($data);

    $contact->name = $request->name;
    $contact->email = $request->email;
    $contact->number = $request->number;
    $contact->date = $request->date;
    $contact->description = $request->description;
    $contact->type = $request->type;
    $contact->contact_type = $request->contact_type;
    $contact->save();

    // Save the model
    $contact->save();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact/import', 'ContactController@getImport')->name('import');
Route::post('/import_parse', 'ContactController@parseImport')->name('import_parse');
Route::post('/import_process', 'ContactController@processImport')->name('import_process');

Route::resource('/contact','ContactController');