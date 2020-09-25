<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class AppController extends Controller
{
    public function index()
    {
        return view('apps.index');
    }

    public function generateIpsum(Request $request)
    {
		$int = $request->amt;
		$type = $request->syntax;

		$script_json = public_path() . "/download/script.json";
		$contents = file_get_contents($script_json);
		$array = json_decode($contents, true);
		$ran = rand(0,1650);
		$data = '';

		switch ($type) {

		case 'Paragraphs':

			$count = $int * 4;
			$newpar = true;

			for ($i=1; $i <= $count; $i++) { 

				if ($newpar) {
					$parline = substr($array[$ran], 1);
				} else {
					$parline = $array[$ran];
				}

				if (($i % 4) == 0) {
					$data .= $parline . PHP_EOL;
					$newpar = true;
				} else {
					$data .= $parline;
					$newpar = false;
				}
				
				$ran = $ran + 1;
			}

		  break;

		  case 'Sentences':

			for ($i=1; $i <= $int; $i++) { 

				$data .= $array[$ran];
				
				$ran = $ran + 1;
			}

			$data = substr($data, 1);

		  break;

		  case 'Words':

			for ($i=1; $i <= 5; $i++) { 

				$data .= $array[$ran];
				
				$ran = $ran + 1;
			}

			$data = substr($data, 1);

			$explode = explode(" ", $data);

			$data = '';

			for ($i=0; $i <= $int; $i++) { 

				$data .= $explode[$i] . " ";

			}

		  break;

		}

		$response = array(
		  'status' => 'success',
		  'data' => $data,
		);

		return response()->json($response); 
    }

}