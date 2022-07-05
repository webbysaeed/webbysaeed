<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('subject.index' , compact('subjects'));
    }
    public function create()
    {
        return view('subject.create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
           'name' => 'required',
        ]);
        subject::create($validate);
        return redirect('home');
    }
    public function edit($id)
    {
        $subject = Subject::findorFail($id);
        return view('subject.edit' ,compact('subject'));
    }
    public function update($id, Request $request)
    {
        $subject = Subject::findorfail($id);
        $validate = $request-> validate([
           'name' => 'required',
        ]);
        $subject->update($validate);
        return redirect()->route('home.index');
    }
    public function delete($id, Request $request)
    {
        $subject = Subject::findorfail($id);
        $subject->delete();
        return redirect()->route('home.index');
    }
}
