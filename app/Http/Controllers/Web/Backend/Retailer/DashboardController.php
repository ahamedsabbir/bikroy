<?php
namespace App\Http\Controllers\Web\Backend\Retailer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.retailer.layout.index');
    }
}