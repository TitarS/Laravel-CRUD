<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Toy extends Model
{
    public static function getAll() {
        return self::simplePaginate(4);
    }

    public function remove() {
        $this->deleteImage();
        $this->delete();
    }

    public function deleteImage() {
        if($this->image != NULL) {
            Storage::delete('uploads/'. $this->image);
        }
    }

    public static function add($title, $content) {
        $toy = new Toy;
        $toy->title = $title;
        $toy->content = $content;
        $toy->save();

        return $toy;
    }

    public function edit($title, $content) {
        $this->title = $title;
        $this->content = $content;
        $this->save();
    }

    public function uploadImage($file) {
        if($file == NULL) {
            return;
        }
        $this->deleteImage();
        $imageName = str_random(10) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads/', $imageName);
        $this->image = $imageName;
        $this->save();
    }
}
