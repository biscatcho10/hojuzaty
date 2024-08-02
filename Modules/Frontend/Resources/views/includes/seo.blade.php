<title>{{ Settings::get($page . '_seo_title') }}</title>
<meta name="title" content="{{ Settings::get($page . '_seo_title') }}">
<meta name="description" content="{{ Settings::get($page . '_seo_description') }}">
<meta name="keywords" content="{{ Settings::get($page . '_seo_keywords') }}">

<!-- seo data  -->
{!! Settings::get('facebook_pixel') !!}
{!! Settings::get('google_analects') !!}
{!! Settings::get('google_id_head') !!}
{!! Settings::get('transfer_line') !!}
{!! Settings::get('track_code') !!}

{!! Settings::get('google_tag_manger') !!}
{!! Settings::get('hotjar') !!}
{!! Settings::get('linked_tag') !!}
{!! Settings::get('btn_track_code') !!}
{!! Settings::get('btn_google_id_footer') !!}
