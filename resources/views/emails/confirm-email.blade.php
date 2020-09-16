@component('mail::message')
# One last step

We just need you to confirm email address

@component('mail::button', ['url' => url('/register/confirm?token=' . $user->confirmation_token)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
