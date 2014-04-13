<?php

class CerebralController extends BaseController {

	private function randomNumbers($min, $max, $quantity) 
	{
	    $numbers = range($min, $max);
	    shuffle($numbers);
	    return array_slice($numbers, 0, $quantity);
	}

	private function randomWeight(array $weightedValues) 
	{
	    $rand = mt_rand(1, (int) array_sum($weightedValues));

	    foreach ($weightedValues as $key => $value) {
	      $rand -= $value;
	      if ($rand <= 0) {
	        return $key;
	      }
	    }
  	}

	public function showCerebral()
	{
		$trad = Traditional::all();
		$all = DB::table('users_traditionals')->where('user_id', Auth::user()->id);

		$all = array_fill(1, 3999, 0);

		$max_char = DB::table('users_traditionals')
						->where('user_id', Auth::user()->id)
						->max('traditional_id');

		$occur = array();		
		for($i = 1; $i <= $max_char+10; ++$i)
		{
			$occur[$i] = DB::table('users_traditionals')
						->where('user_id', Auth::user()->id)
						->where('traditional_id', $i)
						->count();
		}
		if(count($occur) > 0)
		{
			$avg = array_sum($occur) / (count($occur));
			if($avg < 10) $avg = $this->randomNumbers(5, 10, 1)[0];
		}
		else $avg = $this->randomNumbers(5, 10, 1)[0];
		$lower_goal = 0.2*$avg;
		$middle_goal = 0.4*$avg;
		$upper_goal = 0.6*$avg;
		$upper_high_goal = 0.8*$avg;

		//Check if review mode is valid
		if(isset($_GET['mode']))
		{
			if($_GET['mode'] == 'review')
			{
				if(count($occur) < 10) return Redirect::route('home')->with('yellow-message', 'Learn some words before you review!');
			}
		}

		//MODE BASED ON HOW OFTEN NEW WORDS APPEAR
		if(!isset($_GET['mode'])) $new_weight = 25;
		else if($_GET['mode'] == 'review') $new_weight = 0;
		else if($_GET['mode'] == 'slow') $new_weight = 10;
		else if($_GET['mode'] == 'overload') $new_weight = 100;
		else $new_weight = 25;

		$new_count = 0;
		foreach($trad as $char)
		{
			//First time 
			if(!count($occur))
			{
				if($new_count >= 10) break; //End
				if(!isset($_GET['mode'])) $all[$char->id] = $new_weight;
				else if($_GET['mode'] == 'review') continue;
				else $all[$char->id] = $new_weight;
				++$new_count;				
			}
			//10 New Words
			else if($occur[$char->id] < 1)
			{
				if($new_count >= 10) break; //End
				if(!isset($_GET['mode'])) $all[$char->id] = $new_weight;
				else if($_GET['mode'] == 'review') continue;
				else $all[$char->id] = $new_weight;
				++$new_count;
			}
			// Review "Old" Words
			else
			{
				if($occur[$char->id] < $lower_goal)
				{
					$all[$char->id] = 70;
				}
				else if($occur[$char->id] < $middle_goal)
				{
					$all[$char->id] = 50;
				}
				else if($occur[$char->id] < $upper_goal)
				{
					$all[$char->id] = 30;
				}
				else if($occur[$char->id] < $upper_high_goal)
				{
					$all[$char->id] = 20;	
				}
				else if($occur[$char->id] < $avg)
				{
					$all[$char->id] = 10;
				}
			}
		}

		$random = array();
		for($i = 0; $i < 10; ++$i)
		{
			$num = $this->randomWeight($all);
			$random[$i] = $num;
			$all[$num] = 0;
		}

		$data['all'] = Traditional::orderBy(DB::raw('RAND()'))->get();
		$data['random'] = $random;

		$unique_count = DB::table('users_traditionals')
							->where('user_id', Auth::user()->id)
							->distinct()
							->get(array('users_traditionals.traditional_id'));
		$progress = 0;
		foreach($unique_count as $a) { $progress++; }

		$data['progress_width'] = ($progress/3999)*100;

		$data['csrf_token'] = true;
		$data['pageTitle'] = 'Cerebral';
		return View::make('cerebral.cerebral', $data);
	}

	public function showAbout()
	{
		$data['pageTitle'] = 'About Cerebral';
		return View::make('cerebral.about', $data);
	}

	public function showInstructions()
	{
		$data['pageTitle'] = 'Instructions';
		return View::make('cerebral.instructions', $data);
	}

}