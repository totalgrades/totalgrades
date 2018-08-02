<?php

namespace App\Http\Controllers\AdminAuth\GradebookActivities;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CrudeController extends Controller
{
    public function activities()
    {
    	return view('admin.superadmin.schoolsetup.gradebookActivities.activities');
    }
}
