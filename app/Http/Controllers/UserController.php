<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;
use Illuminate\Support\Collection\collect;
class UserController extends Controller
{
    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }

    public function index1()
    {
        return new UserCollection(User::orderBy('karma_score', 'DESC')->paginate());
    }
    public function index()
    {
    //     $UCol =    new UserCollection(User::orderBy('karma_score', 'DESC'));
    //     $UCol->each(function ($item, $key) {
    //         return $item;
    //     })->paginate();
    //     return $UCol;
    
    
    // $collection = collect([1, 2, 3, 4, 5]);
    // $collection1 = User::orderBy('karma_score', 'DESC');
    // $multiplied = $collection1->each(function ($item) {
    //   return $item ;
    // });
//  
    // return $multiplied->all();
    $UCol =   new UserCollection(User::orderBy('karma_score', 'DESC')->get());

    return $UCol;
    }
   


}
