<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JoinTeamMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    // public $filePath;
    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
        // $this->filePath = $filePath;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Lead eVAHAN Join Team',
            // from: new Address('kartik.seospacecastle@gmail.com', 'eVAHAN'),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'emails.jointeam',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    public function build()
    {
        return $this->view('emails.jointeam')
                    ->with([
                        'name_of_candidate' => $this->data['name_of_candidate'],
                        'fathers_name' => $this->data['fathers_name'],
                        'email' => $this->data['email'],
                        'phone' => $this->data['phone'],
                        'location' => $this->data['location'],
                        'city' => $this->data['city'],
                        'zip_code' => $this->data['zip_code'],
                        'education' => $this->data['education'],
                        'aadhar_card_number' => $this->data['aadhar_card_number'],
                        'file_upload' => $this->data['file_upload'],
                    ]);

        // return $this->markdown('emails.jointeam')
        //     ->attach($this->file_upload);

        // return $this->markdown('emails.jointeam')
        //         ->attach($this->file->getRealPath(), [
        //             'as' => $this->file->getClientOriginalName(),
        //             'mime' => $this->file->getMimeType(),
        //         ]);
    }
}
