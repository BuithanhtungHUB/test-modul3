<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;
use App\Models\Agency;
use App\Models\Status;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function index()
    {
        $status = Status::all();
        $agencies = Agency::all();
        return view('list',compact( 'agencies', 'status'));
    }

    public function create()
    {
        $status = Status::all();
        return view('create', compact('status'));
    }

    public function store(Agency $agency, RegisterRequest $request)
    {
        $agency->code = $request->code;
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status_id = $request->status;
        $agency->save();
        return redirect()->route('agency.list');
    }

    public function edit($id)
    {
        $agency = Agency::findOrFail($id);
        $status = Status::all();
        return view('update', compact('agency', 'status'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->code = $request->code;
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status_id = $request->status;
        $agency->save();
        return redirect()->route('agency.list');
    }

    public function destroy($id)
    {
        $agency =Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.list');

    }

    public function search(Request $request)
    {
        $agencySearch = $request->search;
        $agencies = Agency::where('name', 'LIKE', "%" . $agencySearch . "%")->get();
        return view('list', compact('agencies'));
    }
}
