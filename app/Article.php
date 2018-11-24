<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'description', 'content', 'owner_id'
    ];


    public function tags()
    {
        return $this->hasMany(Tag::class);
    }

    public function addTag($task)
    {

        // Above there is a relationship to "tags". this article has these tags
        // $this->tags()->create is saying "within the list of the tags for this model, create
        //compact('variable') replaces (['description' => $description)

        $this->tags()->create($task);
    }

}
