<x-mail::message>
# New Contact Inquiry

You have received a new message from the contact form on your website.

**Name:** {{ $data['name'] }}
**Email:** {{ $data['email'] }}
**Phone:** {{ $data['phone'] }}
**Subject:** {{ $data['subject'] }}

**Message:**
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
