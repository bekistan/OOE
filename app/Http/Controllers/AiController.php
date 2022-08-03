<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class AiController extends Controller
{
    public function index(){
        return view('ml.index');
    }
    public function result(Request $request){
        $topic = $request->topic;
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
        $prompt ="Create 7 long sentences regarding general knowledge combined with educational informations for a student about".$topic;

       // Create 7 general knowledge informations, educational informations and kinds for a student about
        $openMlOutput = $open_ai->complete([
            'engine' => 'davinci-instruct-beta-v3',
            'prompt' => $prompt,
            'temperature' => 0.9,
            'max_tokens' => 450,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
         ]);

        $output = json_decode($openMlOutput, true);
        $outputText = $output["choices"][0]["text"];
        return view('ml.index',['result'=>$outputText]);
    }
}
