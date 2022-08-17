<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('/user',function (Request $request) {

        // $user = User::withCount(['posts','comments'])->get();
        // $user = User::withCount(['posts','comments'])->where('id',2)->orWhere('id',10)->orWhere('id',4)->get()->paginate(2);
        $users = User::with(['posts' => function ($query) {
            $query->paginate(200);
        },'comments' => function ($query) {
            $query->paginate(200);
        }])->get();

        foreach($users as $user)
        {
            $posts[] = $user->posts;
        }
        //2 10 4
    //     $user = User::all();
    // dd($user);
        return response()->json($posts);
});