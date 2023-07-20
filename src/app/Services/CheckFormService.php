<?php

namespace App\Services;

class CheckFormService
{
    public static function checkGender($data){
        if($data->gender === 0){
            return '男性';
        }
        return '女性';
    }

    public static function checkAge($data){
        if($data->age === 1) {
            return '~19歳';
        } elseif($data->age === 2) {
            return '20歳~29歳';
        } elseif($data->age === 3) {
            return '30歳~39歳';
        } elseif($data->age === 4) {
            return '40歳~49歳';
        } elseif($data->age === 5) {
            return '50歳~59歳';
        }
        return '60歳~';
    }
};