<?php

namespace App\Http\Controllers\API\CMS;

use App\Http\Controllers\Controller;
use App\Models\BottomBanner;
use App\Traits\ApiResponse;

class BottomBannerController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $data = BottomBanner::where('status', 'Active')->get();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!', $data, 200);
        }
        return $this->error("Data not found", 500);
    }

    public function show($id)
    {
        $data = BottomBanner::where('status', 'Active')->where('id', $id)->first();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!',$data, 200);
        }
        return $this->error("Data not found", 500);
    }
}
