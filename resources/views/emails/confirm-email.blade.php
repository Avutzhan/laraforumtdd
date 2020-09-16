@component('mail::message')
# One last step

We just need you to confirm email address

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
