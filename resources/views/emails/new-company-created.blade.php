<x-mail::message>
# Introduction

Hi,

A new company is created in system with name <b>{{$company->name}}</b> is created by <b>{{$authUser->name}}</b>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
