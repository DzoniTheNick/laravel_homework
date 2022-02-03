<?php

namespace Database\Seeders;

use App\Models\Odeljenje;
use App\Models\Struka;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Struka::truncate();
        Odeljenje::truncate();

        $user = User::factory(10)->create();

        $struka_1 = Struka::create(['naziv' => 'Inzenjer', 'opis' => 'Zaduzenje osobe za kreiranje sofrtverskih resenja', 'stepen' => 3]);
        $struka_2 = Struka::create(['naziv' => 'Menadzer', 'opis' => 'Zaduzenje osobe za organizovane rada', 'stepen' => 2]);
        $struka_3 = Struka::create(['naziv' => 'Cistac', 'opis' => 'Zaduzenje osobe za odrzavanje higijene prostora', 'stepen' => 1]);
    
        $odeljenje_1 = Odeljenje::create(['naziv' => 'Razvoj softvera', 'opis' => 'Odelje je zaduzeno za razvoj softverskih resenja firme']);
        $odeljenje_2 = Odeljenje::create(['naziv' => 'Ljudski resursi', 'opis' => 'Odelje je zaduzeno za odrzavanje ljudskih resursa firme']);
        $odeljenje_3 = Odeljenje::create(['naziv' => 'Finansije', 'opis' => 'Odelje je zaduzeno za vodjenje finansija firme']);
        $odeljenje_4 = Odeljenje::create(['naziv' => 'Prodaja', 'opis' => 'Odelje je zaduzeno za sprovodjenje prodaje proizvedenih resenja']);
        $odeljenje_5 = Odeljenje::create(['naziv' => 'Admnistracija', 'opis' => 'Odelje je zaduzeno za administriranje firme']);
    }
}
