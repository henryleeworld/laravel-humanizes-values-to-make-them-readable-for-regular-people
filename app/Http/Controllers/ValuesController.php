<?php

namespace App\Http\Controllers;

use Coduo\PHPHumanizer\CollectionHumanizer;
use Coduo\PHPHumanizer\DateTimeHumanizer;
use DateTime;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\App;

class ValuesController extends Controller 
{
    public function humanize() 
    {
        $locale = App::currentLocale();
        $now = Carbon::now();
        $year = $now->format('Y');
        $month = $now->format('m');
        $time = '12:00:00';
        $startTime = $year . '-' . $month . '-23 ' . $time;
        $endTime = $year . '-' . $month . '-26 ' . $time;
		echo __('The main characters of DAN DA DAN are ') . CollectionHumanizer::oxford([__('Takakura Ken'), __('Momo Ayase'), __('Seiko Ayase'), __('Shiratori Aira')], 2, $locale) . PHP_EOL;
        echo __(':end_time is :start_time ', ['start_time' => $startTime, 'end_time' => $endTime ]) . DateTimeHumanizer::difference(new DateTime($startTime), new DateTime($endTime), $locale) . PHP_EOL;
    }
}
