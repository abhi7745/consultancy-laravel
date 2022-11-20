{{-- <x-mail::message> --}}
# Hello, Iam {{ $mailData['name'] }} <br>

Subject : {{ $mailData['subject'] }} <br>

Message : <br>
{{ $mailData['message'] }} <br>

Email ID : {{ $mailData['email'] }}

{{-- <x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
