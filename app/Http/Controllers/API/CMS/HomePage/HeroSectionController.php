<?php

namespace App\Http\Controllers\API\CMS\HomePage;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use App\Traits\ApiResponse;

class HeroSectionController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $data = HeroSection::where('status', 'Active')->get();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!', $data, 200);
        }
        return $this->error("Data not found", 500);
    }

    public function show($id)
    {
        $data = HeroSection::where('status', 'Active')->where('id', $id)->first();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!',$data, 200);
        }
        return $this->error("Data not found", 500);
    }
}
