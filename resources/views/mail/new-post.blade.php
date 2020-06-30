{{-- <style>

    body {
        font-family: sans-serif;
    }
</style>

<h1>New Post published</h1>

<p>A new post published on your blog:</p>

<p><strong>Title: {{ $title }}</strong></p>
<p><strong>Slug: {{ $slug }}</strong></p>

<hr> --}}

@component('mail::message')
# New Post Created

A new post published on your blog:
{{ $title }}
slug: {{ $slug }}

@component('mail::button', ['url' => config('app.url') . '/posts'])
View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent