<?php
namespace App\Repositories;

use App\Models\Ticket;
use Illuminate\Support\Facades\DB;

class TicketRepository extends RessourceRepository{

    public function __construct(Ticket $ticket)
    {
        $this->model = $ticket;
    }

    public function countJour1(){
        return $this->model->where('jour1',1)->count();
    }
    public function countJour2(){
        return $this->model->where('jour2',1)->count();
    }
    public function countJour3(){
        return $this->model->where('jour3',1)->count();
    }

    public function countTickets(){
        return $this->model->count();
    }

    public function getByJour($jour){
        return $this->model->where('jour'.$jour, 1)->get();
    }

}
