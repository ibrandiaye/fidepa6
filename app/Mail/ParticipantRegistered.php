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
    public  $logo;

    public function __construct($participant, $eventTitle,$qrcode, $logo)
    {
        $this->participant = $participant;
        $this->eventTitle = $eventTitle;
        $this->qrcode = $qrcode;
        $this->logo = $logo;
    }

    public function build()
    {
        // Génération du PDF
        $pdf = Pdf::loadView('pdf.badge', [
            'participant' => $this->participant,
            'eventTitle' => $this->eventTitle,
            'qrcode' => $this->qrcode,
            'logo' => $this->logo
        ]);

        return $this->subject('Confirmation d\'inscription - '.$this->eventTitle)
                    ->view('emails.confirmation')
                    ->attachData($pdf->output(), 'badge.pdf', [
                        'mime' => 'application/pdf',
                    ]);
    }
}
