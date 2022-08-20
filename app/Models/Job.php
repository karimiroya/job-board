<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameJob',
        'salary',
        'category',
        'nature',
        'descriptionJob',
        'knowledge',
        'experience',
        'company_id',
       
    ];
    //رابطه چند به یک
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
    public function scopesourcename($query,$str)
    {
        $result=Company::where('city', 'like', '%'.$str)->pluck('id')->toArray();
        if(count($result)!=0){
            return $query->whereIn('city',$result);
        }
        return $query;
    }
    

}
