@component('mail::message')
# Introduction

Novo Passeio para Você e sua Familia!



@component('mail::button', ['url' => 'http://natalpraias.app/'])
Click aqui para ver!
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
