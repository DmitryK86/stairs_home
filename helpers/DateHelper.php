<?php

namespace app\helpers;


class DateHelper
{
    private static $_mapping = [
        'Январь',
        'Февраль',
        'Март',
        'Апрель',
        'Май',
        'Июнь',
        'Июль',
        'Август',
        'Сентябрь',
        'Октябрь',
        'Ноябрь',
        'Декабрь',
    ];

    public static function getDateWithMonthAsWord(string $date){
       $d = new \DateTime($date);

       return static::$_mapping[$d->format('m')-1] . ' ' . $d->format('Y');
    }
}