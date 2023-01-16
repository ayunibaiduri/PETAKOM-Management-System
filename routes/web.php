<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageElection\ElectionController;
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
    return view('welcome');
});

Route::get('electionCommittee', function () {
    return view('ManageElection.ElectionHomeCommittee');
});

Route::get('electionStudents', function () {
    return view('ManageElection.ElectionHomeStudents');
});

Route::get('electionHOSD', function () {
    return view('ManageElection.ElectionHomeHOSD');
});

Route::get('electionCoordinator', function () {
    return view('ManageElection.ElectionHomeCoordinator');
});

Route::get('apply_election', function () {
    return view('ManageElection.ApplyForElection');
});

Route::get('approve_application', function () {
    return view('ManageElection.ApproveCandidatesApplication');
});

Route::get('viewapplicationstatus', function () {
    return view('ManageElection.ViewApplicationStatus');
});

Route::get('viewcandidates', function () {
    return view('ManageElection.ViewCandidates');
});

Route::get('viewpetakomcommittee', function () {
    return view('ManageElection.ViewPETAKOMCommittee');
});

Route::get('manageresultselection', function () {
    return view('ManageElection.ManageResultsElection');
});

Route::get('vote', function () {
    return view('ManageElection.Vote');
});

//Route::get('add-student', [ElectionController::class, 'create']);
//Route::post('add-student', [ElectionController::class, 'store']);