<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;

class CardController extends Controller
{
    public function addCard(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'background' => 'required',
            'number' => 'required',
            'expiration' => 'required',
            'cvv' => 'required'
        ]);

        $card = new Card();
        $card->setTitleAttribute($request->title);
        $card->setBackgroundAttribute($request->background);
        $card->setNumberAttribute($request->number);
        $card->setExpirationAttribute($request->expiration);
        $card->setCvvAttribute($request->cvv);
        $card->user_id = auth()->user()->id;
        $card->save();

        return redirect('dashboard');
    }

    public function deleteCard(Request $request)
    {
        $card = Card::find($request->id);
        $card->delete();

        return redirect('dashboard');
    }

    public function viewCard(Request $request)
    {
        $card = Card::find($request->id);

        return view('card', compact('card'));
    }
}
