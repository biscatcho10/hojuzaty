<?php

Breadcrumbs::for('dashboard.places.index', function ($breadcrumb, $destination) {
    $breadcrumb->parent('dashboard.destinations.show', $destination);
    $breadcrumb->push(trans('destinations::places.plural'), route('dashboard.places.index', $destination));
});

Breadcrumbs::for('dashboard.places.create', function ($breadcrumb, $destination) {
    $breadcrumb->parent('dashboard.places.index', $destination);
    $breadcrumb->push(trans('destinations::places.actions.create'), route('dashboard.places.create', $destination));
});

Breadcrumbs::for('dashboard.places.show', function ($breadcrumb, $data) {
    $breadcrumb->parent('dashboard.destinations.show', $data[0]);
    $breadcrumb->push($data[1]->name, route('dashboard.places.show', $data));
});

Breadcrumbs::for('dashboard.places.edit', function ($breadcrumb, $data) {
    $breadcrumb->parent('dashboard.places.show', $data);
    $breadcrumb->push(trans('destinations::destinations.actions.edit'), route('dashboard.destinations.edit', $data));
});
