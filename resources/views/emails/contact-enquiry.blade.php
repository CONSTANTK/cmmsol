<h2>New contact enquiry</h2>

<p><strong>Name:</strong> {{ $enquiry['name'] }}</p>
<p><strong>Email:</strong> {{ $enquiry['email'] }}</p>
<p><strong>Subject:</strong> {{ $enquiry['subject'] }}</p>

<p><strong>Message:</strong></p>
<p>{!! nl2br(e($enquiry['message'])) !!}</p>
