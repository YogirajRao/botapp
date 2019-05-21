<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi|Hey|hey|hi|hii|hello|Hello', function ($bot) {
    $bot->reply('Hello My Name is Jhalli! How can i help you !');
});
$botman->hears('.*difficulties.*', function ($bot) {
    $bot->reply('Can i know the exact error you are getting ');
});
$botman->hears('.*issues.*', function ($bot) {
    $bot->reply('Can i know the exact error you are getting ');
});
$botman->hears('.*stuck.*', function ($bot) {
    $bot->reply('Can i know the exact error you are getting ');
});
$botman->hears('.*game.*', function ($bot) {
    $bot->reply('So sorry that you are facing this issue. I will let the developer know about it');
});
$botman->hears('.*Thank.*', function ($bot) {
    $bot->reply('Welcome ! Is there anything else i can help you with ?');
});
$botman->hears('.*No.*', function ($bot) {
    $bot->reply('Thank You! Its been pleasure to serve you.');
});
$botman->hears('.*change my email.*', function ($bot) {
    $bot->reply('Ok. Please Let me know your new updated email address');
});
$botman->hears('.*.com*', function ($bot) {
    $bot->reply('Thank you. Its been updated as per requirements.');
});
$botman->hears('.*suspended*.', function ($bot) {
    $bot->reply('Sorry that you are facing this issue.Please tell me your email address.');
});
$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands.');
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');
