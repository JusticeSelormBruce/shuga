<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $date = Carbon::now();
        $date = $date->format('h:m:s');
        $details  = Data::orderByDesc('id')->paginate(20);
        return view('home', compact('date', 'details'));
    }

    public function store(Request $request)
    {

        $data = $request->except('_token');
        Data::create($data);
        return back()->with('msg', 'Detail saved  Successfully');
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method', 'id']);
        Data::find($request->id)->update($data);
        return back()->with('msg', 'Details Updated Successfully');
    }

    public function delete($id)
    {
       Data::find($id)->delete();
       return back()->with('msg', 'Detail Deleted  Successfully');
    }
}
