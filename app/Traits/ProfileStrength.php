<?php

namespace App\Traits;

use App\User;

trait ProfileStrength
{

    public function profileStrength(User $user)
    {
        $percentage = 10;
        $increment = 10;
        /*if ($user->country_id != null)
        {
            $percentage = $percentage + $increment;
        }*/
        if ($user->functional_area_id != null )
        {
            $percentage = $percentage + $increment;
        }
        /*if ($user->expected_salary)
        {
            $percentage = $percentage + $increment;
        }*/
        if ($user->image != null)
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileSummary()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileCvs()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileProjects()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileExperience()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileEducation()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileSkills()->count())
        {
            $percentage = $percentage + $increment;
        }
        if ($user->profileLanguages()->count())
        {
            $percentage = $percentage + $increment;
        }

        return $percentage;
    }

}
