@component('mail::message')
# Dear {{$recipient}}

{{$email_body}}

@component('mail::table')
@endcomponent

@endcomponent
