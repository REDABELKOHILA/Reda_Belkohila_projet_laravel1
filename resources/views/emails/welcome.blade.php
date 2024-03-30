@component('mail::message')
@slot('header')
@lang('Welcome to our application')
@endslot

@lang('Hi') {{ $user->name }},

@lang('Welcome to our application! We are glad to have you on board.')

@lang('Please feel free to explore our features and contact us if you have any questions.')

@lang('Sincerely'),

@lang('The Team')
@endcomponent
