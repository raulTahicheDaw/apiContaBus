<?php

use Illuminate\Database\Seeder;
use App\Day;
use App\User;
use App\Task;
use App\Company;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Schema::disableForeignKeyConstraints();

        Day::truncate();
        User::truncate();
        Task::truncate();
        Company::truncate();

        //Tabla companies

        Company::create([
            "name" => "Lanzarote Bus",
            "cif" => "B35000000",
            "address" => "Calle Velacho 21 - Arrecife",
            "telephone" => "928 810 810"
        ]);

        //Tabla task_tyoes

        //Seed tabla users
        $users = factory(User::class, 15)->create();


        $day = new Carbon('2018-06-01');
        $hours = ['04:30', '05:00', '05:30', '06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30',
            '11:00', '11:30', '15:00', '15:30', '16:00', '16:30', '17:00'];

        $transfer = ['Entrada', 'Salida'];
        $sitios = ['ACE', 'PC', 'CT', 'PB', 'TEG', 'SB'];
        $excursiones = ['Norte', 'S/N', 'Sur', 'Timanya'];
        $status = ['Terminado', 'Pendiente', 'Cancelado'];
        $diaId = 1;

        for ($u = 1; $u < 16; $u++) { //Para cada uno de los 15 users

            // Seed tabla days
            for ($i = 1; $i < 150; $i++) {
                $startTime = new Carbon($hours[random_int(0, 19)]);
                $endTime = new Carbon($startTime);
                $endTime = $endTime->addHours(random_int(6, 10));
                if ($i % 8 == 0) {
                    $tPartStart = new Carbon($startTime->addHours(random_int(2, 5)));
                    $tPS = $tPartStart->format('H:i');
                    $tPartEnd = new Carbon($tPartStart->addHours(random_int(2, 5)));
                    $tPE = $tPartEnd->format('H:i');

                } else {
                    $tPS = null;
                    $tPE = null;
                }
                App\Day::create([
                    "date" => $day->format('Y-m-d'),
                    "start_time" => $startTime->format('H:i'),
                    "end_time" => $endTime->format('H:i'),
                    "part_time_start" => $tPS,
                    "part_time_end" => $tPE,
                    "user_id" => $u
                ]);
                $num_servicios = random_int(1, 8);
                for ($s = 0; $s < $num_servicios; $s++) { //Crea servicios para cada uno de los dias
                    $description = '';
                    $tipo = random_int(1, 4);
                    switch ($tipo) {
                        case 1:
                            if (array_rand($transfer) == 'Entrada') {
                                $description = 'APTO Entrada ' . $sitios[array_rand($sitios)];
                            } else {
                                $description = $sitios[array_rand($sitios)] . ' Salida APTO';
                            }
                            break;
                        case 2:
                            $description = $sitios[array_rand($sitios)] . ' Traslado ' . $sitios[array_rand($sitios)];
                            break;
                        case 3:
                            $description = $excursiones[array_rand($excursiones)] . ' ' . $sitios[array_rand($sitios)];
                            break;
                        case 4:
                            $description = $faker->sentence($nbWords = 3, $variableNbWords = true);
                    }
                    $taskStartTime = new Carbon($faker->time('H:i'));
                    $taskEndTime = new Carbon($taskStartTime);
                    $taskEndTime = $taskEndTime->addHour(random_int(1, 2));

                    Task::create([
                        "date" => $day->format('Y-m-d'),
                        "start_time" => $taskStartTime->format('H:i'),
                        "end_time" => $taskEndTime->format('H:i'),
                        "description" => $description,
                        "status" => $status[array_rand($status)],
                        "client" => $faker->company,
                        "pax" => random_int(2, 59),
                        "order_number" => $faker->numberBetween($min = 1, $max = 10000),
                        "user_id" => $u,
                        "task_type_id" => $tipo,
                        "day_id" => $diaId
                    ]);

                }


                if ($i % 5 == 0) {
                    $day->addDay(1);
                }

                $day->addDay(1);
                $diaId++;
            }
        }

        Schema::enableForeignKeyConstraints();
        // $this->call(UsersTableSeeder::class);
    }
}
