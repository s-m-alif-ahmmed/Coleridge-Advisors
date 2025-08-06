<?php

namespace App\Http\Controllers\API\CMS\HomePage;

use App\Http\Controllers\Controller;
use App\Models\MainPlaceSlider;
use App\Traits\ApiResponse;

class PlaceSliderController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $data = MainPlaceSlider::where('status', 'Active')->with('placeSliders')->get();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!', $data, 200);
        }
        return $this->error("Data not found", 500);
    }

    public function show($id)
    {
        $data = MainPlaceSlider::where('status', 'Active')->where('id', $id)->with('placeSliders')->first();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!',$data, 200);
        }
        return $this->error("Data not found", 500);
    }
}
