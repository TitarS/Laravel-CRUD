<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Toy extends Model
{
    public static function getAll() {
        return self::simplePaginate(3);
    }

    public static function remove($id) {
        Toy::find($id)->delete();
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
        $imageName = str_random(10) . '.' . $file->getClientOriginalExtension();
        $file->storeAs('uploads/', $imageName);
        $this->image = $imageName;
        $this->save();
    }

    public static function deleteImage($id) {
        $toy = Toy::find($id);
        $image = $toy->image;
        if($image !== NULL) {
            Storage::delete('uploads/'. $image);
            $toy->image = NULL;
            $toy->save();
        }
    }

    public function changeImage($id, $image) {
        Toy::deleteImage($id);
        $this->uploadImage($image);
    }

}
