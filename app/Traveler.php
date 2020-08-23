<?php

namespace App;

use App\Traits\CountryStateCity;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use CountryStateCity;

    protected $table = 'travelers';
    public $timestamps = true;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 
    ];

    protected $dates = [
        'created_at', 'updated_at', 'date_of_birth'
    ];

    public function printTravelerImage($width = 0, $height = 0)
    {
        $image = (string)$this->image;
        $image = (!empty($image)) ? $image : 'no-no-image.gif';
        return \ImgUploader::print_image("traveler_images/$image", $width, $height, '/admin_assets/no-image.png', $this->getName());
    }

    public function getName()
    {
        $name = '';
        if (!empty($this->first_name))
            $name .= $this->first_name;

        if (!empty($this->last_name))
            $name .= ' ' . $this->last_name;

        return $name;
    }

    public function getAge()
    {
        if ((!empty((string)$this->date_of_birth)) && (null !== $this->date_of_birth)) {
            return $this->date_of_birth->age;
        }
    }

    public function gender()
    {
        return $this->belongsTo('App\Gender', 'gender_id', 'gender_id');
    }

    public function getGender($field = '')
    {
        $gender = $this->gender()->lang()->first();
        if (null === $gender) {
            $gender = $this->gender()->first();
        }
        if (null !== $gender) {
            if (!empty($field))
                return $gender->$field;
            else
                return $gender;
        }
    }

    public function maritalStatus()
    {
        return $this->belongsTo('App\MaritalStatus', 'marital_status_id', 'marital_status_id');
    }

    public function getMaritalStatus($field = '')
    {
        $maritalStatus = $this->maritalStatus()->lang()->first();
        if (null === $maritalStatus) {
            $maritalStatus = $this->maritalStatus()->first();
        }
        if (null !== $maritalStatus) {
            if (!empty($field)) {
                return $maritalStatus->$field;
            } else {
                return $maritalStatus;
            }
        }
    }

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id')->withDefault();
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id')->withDefault();
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id')->withDefault();
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id')->withDefault();
    }

    public function functionalArea()
    {
        return $this->belongsTo(FunctionalArea::class, 'functional_area_id')->withDefault();
    }

    public function degree()
    {
        return $this->belongsTo(DegreeLevel::class, 'degree_id')->withDefault();
    }

}
