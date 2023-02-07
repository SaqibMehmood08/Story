<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use Botman\Botman\Messages\Incoming\Answer;
class BotmanController extends Controller
{

public function hendleViewPage()
{

    return view('bootman'   );

}
public function handle(){
    $botman=app('botman');
    $botman->hears('My First Message', function ($bot) {
        $bot->reply('Your First Response');
    });
}
public function askName(BotMan $botman){
$botman->ask("What's your name?",function(Answer $answer){
$name=$answer->getText();
$this->say("Nice to meet You".$name);
});
}
}
