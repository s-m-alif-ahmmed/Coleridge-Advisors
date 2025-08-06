<?php

namespace App\Http\Controllers\API\CMS\Team;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use App\Traits\ApiResponse;

class OurTeamController extends Controller
{
    use ApiResponse;

    public function index()
    {
        $data = OurTeam::where('status', 'Active')->get();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!', $data, 200);
        }
        return $this->error("Data not found", 500);
    }

    public function show($id)
    {
        $data = OurTeam::where('status', 'Active')->where('id', $id)->first();
        if ($data) {
            return $this->ok('Data Retrieve Successfully!',$data, 200);
        }
        return $this->error("Data not found", 500);
    }
}
