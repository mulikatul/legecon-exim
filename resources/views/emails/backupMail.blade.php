@component('mail::message')
# {{ $maildata['title'] }}
Please find attachment.

Thanks,<br>
{{ config('app.name') }}
@endcomponent