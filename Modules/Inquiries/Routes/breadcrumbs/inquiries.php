<?php

Breadcrumbs::for('dashboard.inquiries.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('inquiries::inquiries.plural'), route('dashboard.inquiries.index'));
});

Breadcrumbs::for('dashboard.inquiries.show', function ($breadcrumb, $inquiries) {
    $breadcrumb->parent('dashboard.inquiries.index');
    $breadcrumb->push($inquiries->title, route('dashboard.inquiries.show', $inquiries));
});

