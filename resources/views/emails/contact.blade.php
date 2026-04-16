<x-mail::message>
# Hello, You Have Got An Enquiry!

{{-- <p>Name:- {{ $validatedData['name']}}</p>
<p>Email:- {{ $validatedData['email']}}</p>
<p>Phone:- {{ $validatedData['phone']}}</p>
<p>Address:- {{ $validatedData['location']}}</p>
<p>Services:- {{ $validatedData['selected_value']}}</p>
<p>Message:- {{ $validatedData['message']}}</p> --}}

<p>Name: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>
<p>Address: {{ $location }}</p>
<p>Select eVAHAN Services: {{ $selected_value }}</p>
<p>Message: {{ $message }}</p>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
