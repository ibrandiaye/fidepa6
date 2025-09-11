<?php

namespace App\Mail;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ParticipantRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $participant;
    public $eventTitle;
    public $qrcode;

    public function __construct($participant, $eventTitle,$qrcode)
    {
        $this->participant = $participant;
        $this->eventTitle = $eventTitle;
        $this->qrcode = $qrcode;
    }

    public function build()
    {
        // Génération du PDF
        $pdf = Pdf::loadView('pdf.badge', [
            'participant' => $this->participant,
            'eventTitle' => $this->eventTitle,
            'qrcode' => $this->qrcode
        ]);

        return $this->subject('Confirmation d\'inscription - '.$this->eventTitle)
                    ->view('emails.confirmation')
                    ->attachData($pdf->output(), 'badge.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
