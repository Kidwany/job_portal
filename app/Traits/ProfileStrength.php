<?php

namespace App\Traits;

use App\Company;
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

    public function companyProfileStrength(Company $company)
    {
        $percentage = 10;
        $increment = 10;
        /*if ($user->country_id != null)
        {
            $percentage = $percentage + $increment;
        }*/
        if ($company->map != null )
        {
            $percentage = $percentage + $increment;
        }
        /*if ($user->expected_salary)
        {
            $percentage = $percentage + $increment;
        }*/
        if ($company->logo != null)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->country_id)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->no_of_employees)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->fax)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->ceo)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->description)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->industry_id)
        {
            $percentage = $percentage + $increment;
        }
        if ($company->no_of_offices)
        {
            $percentage = $percentage + $increment;
        }

        return $percentage;
    }

}
