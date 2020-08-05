<?php

namespace App\Events;

use App\Job;
use App\JobApply;
use App\User;
use Illuminate\Queue\SerializesModels;

class ProfileUpdated
{

    use SerializesModels;

    /**
     * @var User
     */
    public $user;


    /**
     * JobApplied constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

}
