<?php

Breadcrumbs::for('dashboard.sliders.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('sliders::sliders.plural'), route('dashboard.sliders.index'));
});

Breadcrumbs::for('dashboard.sliders.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.sliders.index');
    $breadcrumb->push(trans('sliders::sliders.actions.create'), route('dashboard.sliders.create'));
});

Breadcrumbs::for('dashboard.sliders.show', function ($breadcrumb, $sliders) {
    $breadcrumb->parent('dashboard.sliders.index');
    $breadcrumb->push($sliders->title, route('dashboard.sliders.show', $sliders));
});

Breadcrumbs::for('dashboard.sliders.edit', function ($breadcrumb, $sliders) {
    $breadcrumb->parent('dashboard.sliders.show', $sliders);
    $breadcrumb->push(trans('sliders::sliders.actions.edit'), route('dashboard.sliders.edit', $sliders));
});
