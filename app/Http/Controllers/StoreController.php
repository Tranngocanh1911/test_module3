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
        $store->phonenumber = $request->input('phonenumber');
        $store->email = $request->input('email');
        $store->address = $request->input('address');
        $store->manager = $request->input('manager');
        $store->status = $request->input('status');
        $store->save();
        return redirect()->route('store.index');
    }
    public function delete($id){
        $store = Store::findOrFail($id);
        $store->delete();
        return redirect()->route('store.index');
    }
    public function search(Request $request)
    {
        $store = $request->search;
        $stores = Store::where('name', 'LIKE', "%" . $store . "%")->get();
        return view('store.list', compact('stores'));
    }
}
