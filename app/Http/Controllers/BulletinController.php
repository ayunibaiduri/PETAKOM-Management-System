<?php

namespace App\Http\Controllers;

use App\Http\Requests\BulletinEditRequest;
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
        //query data from table bulletin
        $bulletin= Bulletin::get();
        //return list of bulletin
        return $bulletin;
        
    }
    public function store(BulletinStoreRequest $request){
        $validated = $request->validated();//validate input
        $validated['user_id'] = Auth::user()->id;//assign current logged in user id
        $bulletin = Bulletin::create($validated);//create blog post
        return $bulletin;
    }
    public function update(BulletinEditRequest $request,$bulletin_id){
        $validated = $request->validated();//validate input
        $validated['user_id'] = Auth::user()->id;//assign current logged in user id
        $bulletin = Bulletin::find($bulletin_id);
        $bulletin->update($validated);//update bulletin
        return $bulletin;
    }
    public function destroy($id){
        $bulletin = Bulletin::find($id);//find id to be deleted
        $bulletin->delete();//delete process
        return $bulletin;
    }
}
