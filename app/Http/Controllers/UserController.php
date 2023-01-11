<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        public function login(LoginRequest $request){
            $validated=$request->validated();
            $email = $validated["email"];
            $password = $validated["password"];
            if (Auth::attempt( ['email'=>$email,'password'=>$password])){
                $user = Auth::user();
                $accessToken = $user->createToken('authToken')->plainTextToken;
    
                $user->access_token = $accessToken;
                return new UserResource($user);
            }else{
                return"failed";
            }  
        }
        public function register(RegisterRequest $request){
        
            $validated = $request->validated();
            
           try{
            $user = User::create(
                [
                    "name" => $validated['name'],
                    "username"=>$validated['username'],
                    "email" => $validated['email'],
                    "password" => Hash::make($validated['password']),
                    "ic_number"=> $validated['ic_number'],
                ]
            );
            return $user; 
           }catch(Exception $e){
            return $e -> getMessage();
           }
        }
}
