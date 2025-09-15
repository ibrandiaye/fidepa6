<?php

namespace App\Http\Controllers;

use App\Repositories\TicketRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $ticketRepository;
    public function __construct(TicketRepository    $ticketRepository)
    {
        $this->middleware('auth');
        $this->ticketRepository = $ticketRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nbTickets = $this->ticketRepository->countTickets();
        $jour1 = $this->ticketRepository->countJour1();
        $jour2 = $this->ticketRepository->countJour2();
        $jour3 = $this->ticketRepository->countJour3();
        return view('home',compact("nbTickets","jour1","jour2","jour3"));
    }
}
