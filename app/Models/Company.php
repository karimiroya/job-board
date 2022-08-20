<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameCompany',
        'user_id',
        'emailCompany',
        'web',
        'country',
        'city',
        'address',
        'descriptionCompany',
    ];
    
    //رابطه یک به چند 
    public function job()
    {
        return $this->hasMany(Job::class,'company_id','id');
    }
    public function scopesourcenature($query,$str)
    {
        $result=Job::where('nature', 'like', '%'.$str)->pluck('company_id')->toArray();
        if(count($result)!=0){
        // foreach( $result as $res){
            
            return $query->whereIn('id',$result);
        // }
    }
        return $query;
    }
    public function scopesourcecategory($query,$str)
    {
        $result=Job::where('category', 'like', '%'.$str)->pluck('company_id')->toArray();
        if(count($result)!=0){
        // foreach( $result as $res){
            
            return $query->whereIn('id',$result);
        // }
    }
        return $query;
    }
    public function scopesourcesalary($query,$str)
    {
        $result=Job::where('salary', 'like', '%'.$str)->pluck('company_id')->toArray();
        if(count($result)!=0){
        // foreach( $result as $res){
            
            return $query->whereIn('id',$result);
        // }
    }
        return $query;
    }
    public function scopesourcenamejob($query,$str)
    {
        $result=Job::where('nameJob', 'like', '%'.$str)->pluck('company_id')->toArray();
        if(count($result)!=0){
        // foreach( $result as $res){
            
            return $query->whereIn('id',$result);
        // }
    }
        return $query;
    }
    
   
}
