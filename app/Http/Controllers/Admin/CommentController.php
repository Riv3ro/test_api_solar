<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Comment;



class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get comments tree 
        $comments = Comment::getTree()->latest()->paginate(5);

        // return view with data
        return view('admin.comments.index', [
            'title' => 'Комментарии',
            'comments' => $comments
        ]);
    }

    /**
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        // return view with data
        return view('admin.comments.edit', [
            'title' => 'Редактирование комментария',
            'comment' => $comment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\CommentRequest  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentRequest $request, Comment $comment)
    {
        // for comment data validation using Form Request Validation

        // update comment data
        $comment->update($request->only('author', 'text'));

        // rediect back with success status
        return redirect()->back()->with('status', 'Комментарий обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        // destroy comment (with all comment tree)
        $comment->delete();

        // redirect back with success status
        return redirect()->back()->with('status', 'Комментарий удален.');
    }
}
