<x-mail::message>
# Hello, you have got an enquiry

<h3>Name : {{$data['name']}}</h3>
<h3>Phone : {{$data['phone']}}</h3>
<h3>Email : {{$data['email']}}</h3>
<h3>Subject : {{$data['subject']}}</h3>
<h3>Message : {{$data['messageContent']}}</h3>

<!-- <x-mail::button :url="$url">
    View More Details
</x-mail::button> -->

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
