<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulletinStoreRequest;
use App\Models\Bulletin;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class BulletinController extends BaseController
{
    public function index (){
        //query data from table blog post
        $bulletin= Bulletin::get();
        //to find specific data from the database by its id
        //$blogPost = BlogPost::find(11);
        //return list of blog post
        return $bulletin;
        //to use resource as resource let us design the output that we wanted
        //$blogPost = User::find(11);
        //return new UserResource($user);
    }
    public function store(BulletinStoreRequest $request){
        // $validate = $request->validate();
        // try{
        // $bulletin = Bulletin::create(
        //     [
        //         "title" => $validate['title'],
        //         "body" => $validate['body'],
        //         "user_id" => $validate['user_id'],
        //     ]
        // );
        // return $bulletin;
        // }catch(Exception $e){
        //     $e -> getMessage();
        // }
        $validated = $request->validated();//validate input
        $validated['user_id'] = Auth::user()->id;//assign current logged in user id
        $bulletin = Bulletin::create($validated);//create blog post
        return $bulletin;
    }
}
