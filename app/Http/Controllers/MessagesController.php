<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Activitie;

class MessagesController extends Controller
{
    public function addMess($id) {
        $data = request()->input();
        $validator = validator()->make($data,[
            'title'=> ['required'],
            'contents'=> ['required']
            ]);
        if($validator->passes()) {
        $message = new Message([
        'title' => request()->input('title'),
        'contents' => request()->input('contents'),
        'activitie_id' => $id,
        'poster' => auth()->user()->username
        ]);
        $message->save();
        return back();

    }
        return redirect()->back()->withErrors($validator->errors())->withInput();
    }
}
