<?php namespace App;

use Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $table = 'articles';
	protected $dates = ['published_at'];
	protected $fillable = ['title', 'body', 'published_at'];

	public function setPublishedAtAttribute($date)
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
	}
	
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}
}
