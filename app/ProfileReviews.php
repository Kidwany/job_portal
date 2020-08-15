<?php

namespace App;

use App;
use App\Traits\Lang;
use App\Traits\IsDefault;
use App\Traits\Active;
use App\Traits\Sorted;
use Illuminate\Database\Eloquent\Model;

class ProfileReviews extends Model
{

    use Lang;
    use IsDefault;
    use Active;
    use Sorted;

    protected $table = 'profile_reviews';
    public $timestamps = true;
    protected $guarded = ['id'];
    protected $dates = ['created_at', 'updated_at'];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
