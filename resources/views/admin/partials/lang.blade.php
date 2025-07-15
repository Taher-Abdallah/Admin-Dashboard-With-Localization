@php
$locale=LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar';
$printLocale=LaravelLocalization::getCurrentLocale() == 'ar' ? 'EN' : 'العربية';
@endphp
<a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($locale) }}" id="Switcher">
    {{($printLocale)}}
</a>