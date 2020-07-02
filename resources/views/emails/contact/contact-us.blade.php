@component('mail::message')

Message from <strong>{{ $data['name'] }} </strong>

With Email <strong>{{ $data['email'] }} </strong>


With Message: <p><strong>{{ $data['message'] }} </strong></p>


@endcomponent
