<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(){

        $activities = Activity::where('subject_type', 'App\Models\User')->get();


        return view('adherent.historique.index', [
            'activities' => $activities
        ]);
    }
}
