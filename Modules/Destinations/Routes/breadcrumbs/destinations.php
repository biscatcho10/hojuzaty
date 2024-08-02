<?php

Breadcrumbs::for('dashboard.destinations.index', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.home');
    $breadcrumb->push(trans('destinations::destinations.plural'), route('dashboard.destinations.index'));
});

Breadcrumbs::for('dashboard.destinations.create', function ($breadcrumb) {
    $breadcrumb->parent('dashboard.destinations.index');
    $breadcrumb->push(trans('destinations::destinations.actions.create'), route('dashboard.destinations.create'));
});

Breadcrumbs::for('dashboard.destinations.show', function ($breadcrumb, $destination) {
    $breadcrumb->parent('dashboard.destinations.index');
    $breadcrumb->push($destination->name, route('dashboard.destinations.show', $destination));
});

Breadcrumbs::for('dashboard.destinations.edit', function ($breadcrumb, $destination) {
    $breadcrumb->parent('dashboard.destinations.show', $destination);
    $breadcrumb->push(trans('destinations::destinations.actions.edit'), route('dashboard.destinations.edit', $destination));
});
