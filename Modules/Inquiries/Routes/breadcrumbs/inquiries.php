<?php

Breadcrumbs::for('dashboard.inquiries.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('inquiries::inquiries.plural'), route('dashboard.inquiries.index'));
});

Breadcrumbs::for('dashboard.inquiries.show', function ($breadcrumb, $inquiry) {
    $breadcrumb->parent('dashboard.inquiries.index');
    $breadcrumb->push($inquiry->name, route('dashboard.inquiries.show', $inquiry));
});

