<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Models\Client;
use App\Models\LegalCase;
use App\Models\Meetings;

class LawyerController extends Controller
{
    public function dashboard()
    {
           
           $latestClients = Client::latest()->take(5)->get();

       
           $latestLegalCases = LegalCase::latest()->take(5)->get();
           
           
   
           // Retrieve the total number of cases
           $totalCases = LegalCase::count();
   
           // Retrieve the total number of clients
           $totalClients = Client::count();

           $totalMeetings = Meetings::where('status', 'pending')->count();
   
           // Return the view with the compacted data
           return view('lawyerdash', compact('latestClients', 'latestLegalCases', 'totalCases', 'totalClients','totalMeetings'));
    }
}
