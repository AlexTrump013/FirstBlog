<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;

    protected $fillable = [
        'title',
        'content',
        'date',
        ];

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public static function add($fields){
        $post = new self();
        $post->fill($fields);
        $post->save();

        return $post;
    }

    public function toggleFeatured($value){
        if ($value === null){
            $this->is_featured = 0;
            return $this->save();
        }
        $this->is_featured = 1;
        return $this->save();
    }

    public function toggleStatus($value){
        if ($value === null){
            $this->status = 0;
            return $this->save();
        }
        $this->status = 1;
        return $this->save();
    }

    public function getImage(){
        if ($this->image === null){
            return '/images/no-image.png';
        }
        return '/uploads/'.$this->image;
    }

    public function setTegs($ids){
        if ($ids == null){
            return;
        }
        $this->tags()->sync($ids);
    }

    public function uploadImage($image){
        if ($image == null){
            return;
        }
        $filename = $this->generateRandomString(10).'.'.$image->extension();
        $image->storeAs('uploads', $filename);
        $this->image = $filename;
        $this->save();
    }

    function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            ceil($length/strlen($x)) )),1,$length);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function setCategory($id){
        if ($id === null){
            return;
        }
        $this->category_id = $id;
        $this->save();
    }

    public function tags()
    {
        return $this->belongsToMany(
            Tag::class,
            'posts_tags',
            'post_id',
            'tag_id'
        );
    }

    public function getCategoryID()
    {
        return $this->category != null ? $this->category->id : null;
    }

    public function getCategoryTitle(){
        if($this->category !== null){
            return $this->category->title;
        }
        echo "don`t have category";
    }

    public function getTagsTitles(){
        if(!$this->tags->isEmpty()){
            return implode(',' , $this->tags->pluck('title')->all());
        }
        echo "don`t have tags";
    }
}

