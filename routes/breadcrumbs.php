<?php


// トップ
Breadcrumbs::for('top', function ($trail) {
    $trail->push('トップ', route('top'));
});


// トップ > メーカー一覧
Breadcrumbs::for('maker-list', function ($trail) {
    $trail->parent('top');
    $trail->push('メーカー一覧', route('maker_list'));
});

// トップ > メーカー一覧 > メーカー名
Breadcrumbs::for('maker', function ($trail, $maker) {
    $trail->parent('maker-list');
    $trail->push($maker->japanese_name, route('maker', $maker->id));
});

// トップ > メーカー一覧 > メーカー名 > シューズ名
Breadcrumbs::for('shoes', function ($trail, $shoes) {
    $trail->parent('maker', $shoes->maker);
    $trail->push($shoes->name, route('shoes', $shoes->id));
});

// トップ > メーカー一覧 > メーカー名 > シューズ名 > レビュー投稿
Breadcrumbs::for('posts_create', function ($trail, $shoes) {
  $trail->parent('shoes', $shoes);
  $trail->push('レビュー作成', route('posts_create', $shoes->id));
});

// トップ > メーカー一覧 > メーカー名 > シューズ名 > レビュー詳細
Breadcrumbs::for('posts_show', function ($trail, $post) {
    $trail->parent('shoes', $post->shoes);
    $trail->push($post->user->name. 'さんのレビュー', route('posts_show', $post->id));
});

// トップ > メーカー一覧 > メーカー名 > シューズ名 > レビュー詳細 > レビュー編集
Breadcrumbs::for('posts_edit', function ($trail, $post) {
    $trail->parent('posts_show', $post);
    $trail->push('編集する', route('posts_edit', $post->id));
});

// トップ > メーカー一覧 > メーカー名 > シューズ名 > レビュー詳細 > コメント編集
Breadcrumbs::for('comments_edit', function ($trail, $comment) {
    $trail->parent('posts_show', $comment->post);
    $trail->push('編集する', route('comments_edit', $comment->id));
});
