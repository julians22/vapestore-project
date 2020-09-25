<?php

Breadcrumbs::for('admin.product.index', function ($trail) {
    $trail->push('Title Here', route('admin.product.index'));
});