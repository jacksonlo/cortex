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

}