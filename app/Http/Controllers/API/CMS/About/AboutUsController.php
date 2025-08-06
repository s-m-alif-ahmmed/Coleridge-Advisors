<?php

namespace App\Http\Controllers\API\CMS\About;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Traits\ApiResponse;

class AboutUsController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $data = AboutUs::where('status', 'Active')->get();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!', $data, 200);
        }
        return $this->error("Data not found", 500);
    }

    public function show($id)
    {
        $data = AboutUs::where('status', 'Active')->where('id', $id)->first();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!',$data, 200);
        }
        return $this->error("Data not found", 500);
    }
}
