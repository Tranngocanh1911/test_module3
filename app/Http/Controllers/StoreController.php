<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('store.list', compact('stores'));
    }

    public function create()
    {
        return view('store.create');
    }

    public function store(StoreRequest $request)
    {
        $store = new Store();
        $store->name = $request->name;
        $store->phonenumber = $request->phonenumber;
        $store->email = $request->email;
        $store->address = $request->address;
        $store->manager = $request->manager;
        $store->status = $request->status;
        $store->save();
        return redirect()->route('store.index');
    }
    public function edit($id){
        $store = Store::findOrFail($id);
        return view('store.edit', compact('store'));
    }
    public function update(StoreRequest $request, $id){
        $store = Store::findOrFail($id);
        $store->name = $request->input('name');
        $store->name = $request->input('phonenumber');
        $store->name = $request->input('email');
        $store->name = $request->input('address');
        $store->name = $request->input('manager');
        $store->name = $request->input('status');
        $store->save();
        return redirect()->route('store.index');
    }
    public function delete($id){
        $store = Store::findOrFail($id);
        $store->delete();
        return redirect()->route('store.index');
    }
}
