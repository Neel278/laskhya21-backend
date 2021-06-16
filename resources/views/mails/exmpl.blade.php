@component('mail::message')
Hello **{{$name}}**,  {{-- use double space for line break --}}
Thank you for choosing Lakshya 2021!

Click below to start enjoying right now
@component('mail::button', ['url' => $link])
Verify E-Mail
@endcomponent
Sincerely,
Lakshya team.
@endcomponent
