<?php

namespace Database\Seeders;

use App\Models\Membership;
use Database\Factories\MembershipFactory;
use Illuminate\Database\Seeder;

class MembershipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membership::factory()->count(20)->create();

        $ids = range(1,20);

        Membership::factory()->count(20)->create()->each(function ($user) use($ids){
            shuffle($ids);
            $user->memberships()->attach(array_slice($ids, 0, rand(1,5)));
        });
    }
}
