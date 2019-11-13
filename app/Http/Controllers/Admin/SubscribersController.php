<?php

namespace App\Http\Controllers\Admin;

use App\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribersController extends Controller
{

    public function index() {
        $subs = Subscription::all();

        return view('admin.subs.index', ['subs'=>$subs]);
    }

    public function create() {
        return view('admin.subs.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'email' => 'required|email|unique:subscriptions'
        ]);

        Subscription::add($request->get('email'));
        return redirect()->route('subscribers.index');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        Subscription::find($id)->delete();
        return redirect()->route('subscribers.index');
    }
}
