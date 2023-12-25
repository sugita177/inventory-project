<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Check;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Check>
 */
class CheckFactory extends Factory
{
    protected $model = Check::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date_date_time = $this->faker->dateTimeBetween('-6months', 'now');
        $start_date = $start_date_date_time->format('Y-m-d');
        $interval_day = rand(0, 1);
        $end_date = $start_date_date_time->modify("+{$interval_day}days")->format('Y-m-d');
        $start_hour = rand(8, 17);
        $start_minute = rand(0, 59);
        $start_time_date_time = new DateTime("2023-12-25 {$start_hour}:{$start_minute}:00");
        $start_time = $start_time_date_time->format('H:i:s');
        $end_hour = $start_hour + rand(1, 2);
        $end_minute = intdiv(($start_minute + rand(0, 59)), 60);
        if($start_hour == $end_hour && $start_minute > $end_minute) {
            $end_hour += 1;
        }
        $end_time_date_time = new DateTime("2023-12-25 {$end_hour}:{$end_minute}:00");
        $end_time = $end_time_date_time->format('H:i:s');
        $completed = true;

        return [
            'check_start_date' => $start_date,
            'check_start_time' => $start_time,
            'check_end_date' => $end_date,
            'check_end_time' => $end_time,
            'completed' => $completed,
            'user_id' => rand(2, 4)
        ];
    }
}
