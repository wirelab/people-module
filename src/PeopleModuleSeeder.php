<?php namespace Wirelab\PeopleModule;

use Anomaly\Streams\Platform\Database\Seeder\Seeder;
use Wirelab\PeopleModule\Person\PersonSeeder;

class PeopleModuleSeeder extends Seeder
{

    /**
     * Run the seeder.
     */
    public function run()
    {
        $this->call(PersonSeeder::class);
    }
}
