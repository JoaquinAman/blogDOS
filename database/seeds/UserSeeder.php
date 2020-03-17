<?php

use App\Profession;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professionId = Profession::where('title', 'Desarrollador back-end')->value('id');

        factory(User::class)->create([
            'name' => 'Joaquin', //si comentara solo el nombre el faker genera solo el nombre
            'email' => 'joaco.aman@gmail.com',
            'password' => bcrypt('laravel'),
            'profession_id' => $professionId,
            // 'is_admin' => true,
        ]);

        factory(User::class)->create([
            'profession_id' => $professionId
        ]);

        factory(User::class, 3)->create();

    }
}
