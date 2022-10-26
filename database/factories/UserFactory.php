<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Label84\HoursHelper\Facades\HoursHelper;
use Ramsey\Uuid\Type\Integer;
use Illuminate\Support\Arr;

$array = [1, 2, 3, 4, 5];

$random = Arr::random($array);


function randomScheduleDate()
{
    do {
        $n = mt_rand(16, 27);
    } while (in_array($n, array(21, 22)));

    return $n;
}

function randomScheduleTime()
{
    do {
        $n = mt_rand(4, 9);
    } while (in_array($n, array(5, 6, 7)));

    return $n;
}


class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $array = [9, 12, 4];

        $random = Arr::random($array);


        $start = strtotime(1);
        $end =  strtotime(5);
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'matric_no' => "CSC/2018/00" . $this->faker->randomDigitNot(20),
            "department" => "Computer Science",
            "phone" => $this->faker->phoneNumber,
            "schedule_date" => randomScheduleDate(),
            "schedule_time" => $random,
            "level" => "100",
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
