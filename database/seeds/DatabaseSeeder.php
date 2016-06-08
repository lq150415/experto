<?php

use Illuminate\Database\Seeder;
use experto\Medico;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');

        Model::reguard();
    }
}
class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medico')->delete();

        Medico::create([
            'CodMed' => 'MED-001',
            'NomMed' => 'Luis',
            'PatMed' => 'Quisbert',
            'MadMed' => 'Quispe',
            'FecNacMed' => '16/09/93',
            'CIMed' => '7074342',
            'UsuMed' => 'usuario123',
            'password' =>bcrypt('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon:: now()
        ]);
    }

}

