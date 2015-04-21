<?php namespace App\Http\Controllers;

use Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticlesController extends Controller {

	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();
		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(Requests\ArticleRequest $request)
	{
		Article::create($request->all());
		return redirect('articles');
	}

	public function update($id, Requests\ArticleRequest $request)
	{
		Article::find($id)->update($request->all());
		return redirect('articles');
	}
	
	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

}
