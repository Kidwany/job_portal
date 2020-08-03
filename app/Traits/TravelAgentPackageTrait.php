<?php

namespace App\Traits;

use DB;
use Carbon\Carbon;
use App\TravelAgent;

trait TravelAgentPackageTrait
{

    public function addTravelAgentPackage($travel_agent, $package)
    {
        $now = Carbon::now();
        $travel_agent->package_id = $package->id;
        $travel_agent->package_start_date = $now;
        $travel_agent->package_end_date = $now->addDays($package->package_num_days);
        $travel_agent->jobs_quota = $package->package_num_listings;
        $travel_agent->availed_jobs_quota = 0;
        $travel_agent->update();
    }

    public function updateTravelAgentPackage($travel_agent, $package)
    {
        $package_end_date = $travel_agent->package_end_date;
        $current_end_date = Carbon::createFromDate($package_end_date->format('Y'), $package_end_date->format('m'), $package_end_date->format('d'));

        $travel_agent->package_id = $package->id;
        $travel_agent->package_end_date = $current_end_date->addDays($package->package_num_days);
        $travel_agent->jobs_quota = ($travel_agent->jobs_quota - $travel_agent->availed_jobs_quota) + $package->package_num_listings;
        $travel_agent->availed_jobs_quota = 0;
        $travel_agent->update();
    }

}
