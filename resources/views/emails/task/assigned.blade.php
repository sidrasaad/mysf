@component('mail::message')
# Hello {{$assigned_to}}!<br>

{{$assigned_by}} has created New Task.

Task : {{$title}}<br/>
Due Date : {{$due_date}}

@component('mail::button', ['url' => ''])
View Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
