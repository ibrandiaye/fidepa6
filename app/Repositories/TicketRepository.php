<?php
namespace App\Repositories;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketRepository extends RessourceRepository{

    public function __construct(Ticket $ticket)
    {
        $this->model = $ticket;
    }

}
