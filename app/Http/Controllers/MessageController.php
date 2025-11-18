<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageSaveRequest;
use App\Models\CategoryForMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::with('category')->where('user_id', Auth::id())->get();

        return view('admin.message.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryForMessage::orderBy('title')->get();
        return view('admin.message.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MessageSaveRequest $request)
    {
        $payload = $request->validated();
        $message = new Message();
        $message->user_id = Auth::id();
        $message->fill($payload)->save();

        return redirect()
            ->route('admin.messages.index')
            ->with('notice', 'Message created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        Gate::authorize('message-owner', $message);
        dump($message->keywords);
        return view('admin.message.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        Gate::authorize('message-owner', $message);
        $categories = CategoryForMessage::orderBy('title')->get();
        return view('admin.message.edit', compact('message', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MessageSaveRequest $request, Message $message)
    {
        Gate::authorize('message-owner', $message);
        $payload = $request->validated();
        $message->keywords = collect([1, 2, 3]);
        $message->update($payload);

        return redirect()
            ->route('admin.messages.index')
            ->with('notice', 'Message updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        Gate::authorize('message-owner', $message);
        $message->delete();
        return redirect()
            ->route('admin.messages.index')
            ->with('notice', 'Message deleted');
    }
}
