<?php

namespace App\Http\Controllers;

use App\Models\Trainees;
use Illuminate\Http\Request;

class TraineeController extends Controller
{
    public function index(){
        $trainees = Trainees::all();
        return view('admin.pages.trainees.index',compact('trainees'));
    }
    public function show($id){
        $trainee =Trainees::findT($id);
        return view('admin.pages.trainees.show',compact('trainee'));
    }
}
