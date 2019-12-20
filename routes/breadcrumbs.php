<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home
Breadcrumbs::for('admin', function ($trail) {
    $trail->push('Admin', route('admin'));
});
