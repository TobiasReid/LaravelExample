<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;

class ArticleTagsController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Article $article)
    {
        $attributes = request()->validate(['title' => 'required']);
        $article->addTag($attributes);
        return back();
    }


}
