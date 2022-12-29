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

Breadcrumbs::for('users', function ($trail) {
    $trail->parent('home');
    $trail->push('Danh sách người dùng', route('list_users'));
});

Breadcrumbs::for('add_blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Bài viết', route('list_blog'));
    $trail->push('Thêm bài viết', route('add_blog'));
});
