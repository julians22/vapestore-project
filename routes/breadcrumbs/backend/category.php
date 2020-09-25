<?php

Breadcrumbs::for('admin.category.index', function ($trail) {
    $trail->push('Title Here', route('admin.category.index'));
});
