<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

class Trainees
{
    public static $trainees = [
        [
            'id' => 1,
            'name' => 'Roxy',
            'email' => 'ahasanstu@gmail.com',
            'country' => 'BD',
            'is_active' => true
        ],
        [
            'id' => 2,
            'name' => 'Aysha',
            'email' => 'ayasha@gmail.com',
            'country' => 'PaK',
            'is_active' => false
        ],
        [
            'id' => 3,
            'name' => 'Rani',
            'email' => 'rani@gmail.com',
            'country' => 'BD',
            'is_active' => true
        ]
    ];
    public static function all()
    {
        // return $this->$trainees;
        return Trainees::$trainees;
    }

    public static function findT($id){
        // dd(collect(self::$trainees)->firstWhere('id', $id));
        return collect(self::$trainees)->firstWhere('id',$id);
    }

}
?>
