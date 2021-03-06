<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $createStatus = new Status();
        $createStatus->name = 'Open';
        $createStatus->save();

        $createStatus = new Status();
        $createStatus->name = 'In Progress';
        $createStatus->save();

        $createStatus = new Status();
        $createStatus->name = 'Closed';
        $createStatus->save();

        $createStatus = new Status();
        $createStatus->name = 'Reopened';
        $createStatus->save();
    }
}
