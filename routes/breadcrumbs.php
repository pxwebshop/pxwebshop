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

Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Danh sách liên hệ', route('contact'));
});

Breadcrumbs::for('profile', function ($trail) {
    $trail->parent('home');
    $trail->push('Người dùng', route('list_users'));
    $trail->push('Hồ sơ', route('profile'));
});

Breadcrumbs::for('add_blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Bài viết', route('list_blog'));
    $trail->push('Thêm bài viết', route('add_blog'));
});

Breadcrumbs::for('outstanding', function ($trail) {
    $trail->parent('home');
    $trail->push('Bài viết nổi bật', route('outstanding'));
});

Breadcrumbs::for('add_training', function ($trail) {
    $trail->parent('home');
    $trail->push('Bài viết', route('list_training'));
    $trail->push('Thêm bài viết', route('add_training'));
});