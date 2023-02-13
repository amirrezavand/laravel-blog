<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=['user_id','title','slug','body','lu_content_status','img','lu_level','lu_lang','short_description'
    ,'price','seo_keywords','seo_description'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
