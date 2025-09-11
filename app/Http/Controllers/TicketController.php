<?php

namespace App\Http\Controllers;

use App\Mail\ParticipantRegistered;
use App\Mail\TicketMail;
use App\Repositories\TicketRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TicketController extends Controller
{
     protected $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = $this->ticketRepository->getAll();
        return view('ticket.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ticket.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email|unique:users',
            'tel' => 'required|string',
        ]);

        $code = strtoupper(uniqid("FDP"));
        $qrPath = 'qrcodes/'.$code.'.svg';
        $request->request->add(['qr_path' => $qrPath,'code_unique' => $code]);

        QrCode::format('svg')
            ->size(300)
            ->generate($code, public_path($qrPath));

        $ticket = $this->ticketRepository->store($request->all());
       // dd($ticket);
        //Mail::to($request->email)->send(new TicketMail($ticket));
        // Envoi du mail avec PDF en pièce jointe
       // $qrcode = QrCode::size(300)->generate(config('app.url').'/'.$ticket->id);
        $qrcode = base64_encode(QrCode::format('svg')->size(300)->generate(config('app.url').'/'.$ticket->id));
        Mail::to($ticket['email'])->send(new ParticipantRegistered($ticket, "FIDEPA 6",$qrcode));
       // return redirect('ticket');
       return response()->json(['success' => true, 'message' => 'Inscription réussie !']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = $this->ticketRepository->getById($id);
        return view('ticket.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = $this->ticketRepository->getById($id);
        return view('ticket.edit',compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->ticketRepository->update($id, $request->all());
        return redirect('ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->ticketRepository->destroy($id);
        return redirect('ticket');
    }
}
