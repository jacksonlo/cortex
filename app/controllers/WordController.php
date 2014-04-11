<?php

class WordController extends BaseController {

	public function getDetail()
	{
		if(Request::ajax())
		{
			$id = Input::get('id');
			$word = Traditional::find($id);
			if(!is_null($word)) return json_encode(array('detail' => $word->detail_html, 'word' => $word->word));
			else return "false";
		}
	}

	public function know()
	{
		if(Request::ajax())
		{
			$id = Input::get('id');
			$word = Traditional::find($id);
			if(!is_null($word))
			{
				$user = Auth::user();
				$user->traditionals()->attach($id);
				return "true";
			}
			else return false;
		}
	}

}