<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',function (Request $request) {

    // $user = User::withCount(['posts','comments'])->get();
    // $user = User::withCount(['posts','comments'])->where('id',2)->orWhere('id',10)->orWhere('id',4)->get()->paginate(2);
    $user = User::with(['posts' => function ($query) {
        $query->paginate(2);
    },'comments' => function ($query) {
        $query->paginate(2);
    }])->get();
    //2 10 4
//     $user = User::all();
// dd($user);
    // return response()->json($user);
    return view('welcome',['user' => $user, 'posts' => $user->posts, 'comments' => $user->comments]);
});
