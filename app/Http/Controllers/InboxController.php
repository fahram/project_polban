<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $inboxs = Inbox::paginate(10);
        return view('inbox.index', compact('inboxs'));
    }

    public function create()
    {
        return view('inbox.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:200',
            'phone' => 'required|max:20|min:10',
            'message' => 'required|min:200',
        ]);
        Inbox::create($request->all());
        return redirect()->route('inbox.index');
    }

    public function show(Inbox $inbox)
    {
        return view('inbox.show', compact('inbox'));
    }

    public function edit(Inbox $inbox)
    {
        return view('inbox.edit', compact('inbox'));
    }

    public function update(Request $request, Inbox $inbox)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        $inbox->update($request->all());
        return redirect()->route('inbox.index');
    }

    public function destroy(Inbox $inbox)
    {
        $inbox->delete();
        return redirect()->route('inbox.index');
    }
}
