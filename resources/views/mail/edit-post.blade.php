@component('mail::message')
# Post updated!

A new post published on your blog:
{{ $title }}
slug: {{ $slug }}

{{ $body }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent