<?php

Breadcrumbs::for('dashboard.bookings.show', function ($breadcrumb, $data) {
    $breadcrumb->parent('dashboard.destinations.show', $data[0]);
    $breadcrumb->push($data[1]->name, route('dashboard.bookings.show', $data));
});
