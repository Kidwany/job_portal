<?php

namespace App\Traits;

use DB;
use File;
use ImgUploader;
use App\TravelAgent;
use Carbon\Carbon;

trait TravelAgentTrait
{

    private function deleteTravelAgentLogo($id)
    {
        try {
            $travel_agent = TravelAgent::findOrFail($id);
            $image = $travel_agent->logo;
            if (!empty($image)) {
                File::delete(ImgUploader::real_public_path() . 'travel_agent_logos/thumb/' . $image);
                File::delete(ImgUploader::real_public_path() . 'travel_agent_logos/mid/' . $image);
                File::delete(ImgUploader::real_public_path() . 'travel_agent_logos/' . $image);
            }
            return 'ok';
        } catch (ModelNotFoundException $e) {
            return 'notok';
        }
    }

    private function getTravelAgentIdsAndNumJobs($limit = 16)
    {
        return DB::table('jobs')
                        ->select('company_id', DB::raw('COUNT(jobs.company_id) AS num_jobs'))
                        ->groupBy('company_id')
                        ->orderBy('num_jobs', 'DESC')
                        ->limit($limit)
                        ->get();
    }

    private function getIndustryIdsFromTravelAgents($limit = 16)
    {
        $travel_agents = TravelAgent::select('industry_id')->active()->whereHas('jobs', function ($query) {
                    $query->where('expiry_date', '>' ,Carbon::now())->active()->notExpire();
                })->withCount(['jobs' => function ($query) {
                        $query->active()->notExpire();
                    }])->get();

        $industries_array = [];
        foreach ($travel_agents as $travel_agent) {
            if (isset($industries_array[$travel_agent->industry_id])) {
                $industries_array[$travel_agent->industry_id] = $industries_array[$travel_agent->industry_id] + $travel_agent->jobs_count;
            } else {
                $industries_array[$travel_agent->industry_id] = $travel_agent->jobs_count;
            }
        }
        arsort($industries_array);
        return array_slice($industries_array, 0, $limit - 1, true);
    }

    private function getTravelAgentSEO($travel_agent)
    {
        $title = $travel_agent->name;
		
		$description = 'TravelAgent ';
        $keywords = '';

        $description .= ' ' . $travel_agent->name;
        $keywords .= $travel_agent->name . ',';

        $description .= ' ' . $travel_agent->getIndustry('industry');
        $keywords .= $travel_agent->getIndustry('industry') . ',';

        $description .= ' ' . $travel_agent->getOwnershipType('ownership_type');
        $keywords .= $travel_agent->getOwnershipType('ownership_type') . ',';

        $description .= ' ' . $travel_agent->location;
        $keywords .= $travel_agent->location . ',';

        //$description .= ' ' . $travel_agent->description;
        //$keywords .= $travel_agent->description . ',';

        $description .= ' ' . $travel_agent->getCountry('country');
        $keywords .= $travel_agent->getCountry('country') . ',';

        $description .= ' ' . $travel_agent->getState('state');
        $keywords .= $travel_agent->getState('state') . ',';

        $description .= ' ' . $travel_agent->getCity('city');
        $keywords .= $travel_agent->getCity('city') . ',';

        $seo = (object) array(
                    'seo_title' => $title,
                    'seo_description' => $description,
                    'seo_keywords' => $keywords,
                    'seo_other' => ''
        );
        return $seo;
    }

}
