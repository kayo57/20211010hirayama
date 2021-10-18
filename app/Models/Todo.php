<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    protected $fillable = ['id', 'content', 'created_at', 'updated_at'];
    public static $rules = array(
        'id' => 'required',
        'content' => 'required|max:20',
    );
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->content . '' . $this->created_at . '' . $this->updated_at;
        return $txt;
    }
}