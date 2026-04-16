<x-mail::message>
# Hello, Join Our Team Enquiry!


<p>Name Of Candidate: {{ $name_of_candidate }}</p>
<p>Father's Name: {{ $fathers_name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>
<p>Address: {{ $location }}</p>
<p>City: {{ $city }}</p>
<p>Zip Code: {{ $zip_code }}</p>
<p>Education: {{ $education }}</p>
<p>Aadhar Card Number: {{ $aadhar_card_number }}</p>
<p>Upload A File: {{ $file_upload }}</p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
