<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard;

class DashboardController extends Controller
{
   public function showDashboard()
   {
      return view('dashboard');
   }
}