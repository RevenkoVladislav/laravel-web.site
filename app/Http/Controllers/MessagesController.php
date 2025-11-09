<?php

namespace App\Http\Controllers;

use App\Rules\Test;
use Illuminate\Http\Request;
use App\Services\MessagesStorageService;
class MessagesController extends Controller
{
    public function __construct(protected MessagesStorageService $messagesStorage)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = $this->messagesStorage->all();

        return view('index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => ['required', 'string', Test::class]
        ]);

        //save $data

        return redirect()->route('messages.index')->with('message', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        if(!$this->messagesStorage->has($id)){
            abort(404);
        }
        $message = $this->messagesStorage->get($id);

        return view('show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
