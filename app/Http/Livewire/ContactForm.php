<?php

namespace App\Http\Livewire;

use App\Mail\ContactEnquiry;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $message = '';

    public $sent = false;

    /**
     * Optional style: "appointment" renders the compact homepage form
     * with a subject dropdown; "full" renders the labelled contact-page form.
     */
    public $style = 'full';

    protected array $subjects = [
        'Custom Software Development',
        'Web Development',
        'Database & Data Management',
        'Server & Security',
        'UX/UI Strategy',
        'Applications',
        'General Enquiry',
    ];

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:5000'],
        ];
    }

    protected array $messages = [
        'email.email' => 'Please enter a valid email address.',
    ];

    public function mount(string $style = 'full'): void
    {
        $this->style = $style;
    }

    /**
     * Validate a single field as the user leaves it (live validation).
     */
    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    public function submit(): void
    {
        $enquiry = $this->validate();

        Mail::to(config('mail.to.address'))->send(new ContactEnquiry($enquiry));

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('livewire.contact-form', [
            'subjects' => $this->subjects,
        ]);
    }
}
