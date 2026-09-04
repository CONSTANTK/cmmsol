<div>
    @if ($sent)
        <div class="alert alert-success" role="alert">
            Thank you. Your enquiry has been sent successfully. We will get back to you shortly.
        </div>
    @endif

    @if ($style === 'appointment')
        {{-- Compact homepage form with a service dropdown --}}
        <form wire:submit.prevent="submit" class="appointment">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="form-field">
                            <div class="select-wrap">
                                <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                <select wire:model.defer="subject" class="form-control @error('subject') is-invalid @enderror">
                                    <option value="" disabled selected>Select a service</option>
                                    @foreach ($subjects as $option)
                                        <option value="{{ $option }}">{{ $option }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea wire:model.defer="message" cols="30" rows="7" class="form-control @error('message') is-invalid @enderror" placeholder="Message"></textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary py-3 px-4" wire:loading.attr="disabled">
                            <span wire:loading.remove wire:target="submit">Send message</span>
                            <span wire:loading wire:target="submit">Sending...</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @else
        {{-- Full labelled contact-page form --}}
        <form wire:submit.prevent="submit" class="contactForm">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="name">Full Name</label>
                        <input type="text" id="name" wire:model.defer="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your full name">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="label" for="email">Email Address</label>
                        <input type="email" id="email" wire:model.defer="email" class="form-control @error('email') is-invalid @enderror" placeholder="you@example.com">
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="subject">Subject</label>
                        <input type="text" id="subject" wire:model.defer="subject" class="form-control @error('subject') is-invalid @enderror" placeholder="How can we help?">
                        @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="label" for="message">Message</label>
                        <textarea id="message" wire:model.defer="message" cols="30" rows="5" class="form-control @error('message') is-invalid @enderror" placeholder="Tell us about your goals or challenge"></textarea>
                        @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary contact-submit-btn" wire:loading.attr="disabled">
                            <span wire:loading.remove wire:target="submit">Send Enquiry</span>
                            <span wire:loading wire:target="submit">Sending...</span>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
