<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Dashboard', route('home'));
});

Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Danh sách bài viết', route('list_blog'));
});

Breadcrumbs::for('category', function ($trail) {
    $trail->parent('home');
    $trail->push('Danh sách mục', route('categories'));
});