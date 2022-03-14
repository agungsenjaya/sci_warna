<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Carbon;

class Kartu extends Model
{
    use Searchable;
    // 
    // 
    protected $fillable = ['judul','img','pdf','slug'];
    public function getImgAttribute($img)
    {
    	return asset($img);
    }
    public function getPdfAttribute($pdf)
    {
    	return asset($pdf);
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();
        return array(
            'id' => $array['id'],
            'judul' => $array['judul'],
            'img' => $array['img'],
            'pdf' => $array['pdf'],
            'tgl' => Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $array['updated_at'])->format('d M Y'),
            'slug' => $array['slug'],
    );
    }
}
