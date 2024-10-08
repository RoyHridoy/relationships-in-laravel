<?php

use App\Models\Article;
use App\Models\Comment;
use App\Models\Episode;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Article::with('comments')->get();
});

Route::get('/insert', function () {
    $article = Article::findOrFail(1);
    $comment = new Comment();
    $comment->commentable()->associate($article);
    $comment->body = 'Hello form comments';
    $comment->save();
});
