@component('mail::message')
# You have a new message!

## IP:
{{ $sender_ip }}


## User Agent:
{{ $browser }}

From: {{ $from }}

@component('mail::panel')
    {{ $message }}
@endcomponent

@endcomponent
