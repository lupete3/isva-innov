<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


@props([
    'pageTitle',
])


<title>@yield('title') | {{ config('variables.templateName', 'ISVA-Innov') }} - {{ config('variables.templateSuffix', "Cabinet d'Audit & Expertise Comptable") }}</title>


<meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
<meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
<!-- laravel CRUD token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Canonical SEO -->
<meta property="og:title" content="{{ config('variables.ogTitle', 'ISVA-Innov | Audit & Expertise Comptable en RDC') }}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url('/') }}" />
<meta property="og:image" content="{{ config('variables.ogImage', '') }}" />
<meta property="og:description" content="{{ config('variables.templateDescription', '') }}" />
<meta property="og:site_name" content="{{ config('variables.templateName', 'ISVA-Innov') }}" />
<link rel="canonical" href="{{ url('/') }}">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />


<!-- Include Styles -->
@include('partials.styles')

@livewireStyles
