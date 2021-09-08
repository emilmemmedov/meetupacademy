<?php

namespace App\Http\Controllers;


use App\Models\LogEmail;
use Illuminate\Http\Request;

class LogEmailController extends Controller
{
    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): string
    {
        $this->validate($request,[
            'email' => 'required|email'
        ]);
        LogEmail::query()->create([
            'email' => $request->get('email')
        ]);
        return 'messages.saved';
    }
}
