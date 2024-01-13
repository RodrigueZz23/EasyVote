<?php

namespace App\Http\Controllers;
use App\Models\Candidat1;
use Illuminate\Http\Request;
use App\Models\Vote;
use Carbon\Carbon;



class Votec1Controller extends Controller
{
    public function votec1()
    {

        if (auth()->check()) {
            return view('votec1');
        } else {


            return view('non_authentifie');
        }
    }
    public function votePost(Request $request)
    {

        $currentDateTime = Carbon::now();
        $deadline = Carbon::create(2023, 12, 20, 23, 59, 0);
        $starttime = Carbon::create(2023, 12, 19, 23, 0, 0);
        if ($currentDateTime->gt($deadline)) {
            abort(403, 'La date limite pour voter est dépassée.');
        }
        if ($currentDateTime->lt($starttime)) {
            abort(403, 'Il n\'est pas encore l\'heure de voter ');
        }


        $userId = auth()->id();

        $hasVoted = Vote::where('user_id', $userId)->exists();

        if ($hasVoted) {
            return back()->with('error', 'Vous avez déjà voté. Une seule tentative est autorisée.');
        }

        $candidat1 = new Candidat1();
        $candidat1->save();

        $vote = new Vote();
        $vote->user_id = $userId;
        $vote->save();

        return back()->with('success', 'Votre réponse a été bien enregistrée');
    }
        public function show(){
            $data=Candidat1::all();
            $count = Candidat1::count();

            return view('listc2', ['Candidat2s' => $data, 'count' => $count]);
        }
}

