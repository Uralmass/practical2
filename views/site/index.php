<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
use app\models\Post;

?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <?php foreach ($posts as $post): ?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?= Url::toRoute(['site/view', 'id' => $post->id]); ?>"></a>

                            <a href="<?= Url::toRoute(['site/view', 'id' => $post->id]); ?>"
                               class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">View Post</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">

                                <h1 class="entry-title"><a
                                            href="<?= Url::toRoute(['site/view', 'id' => $post->id]); ?>"><?= $post->title ?></a>
                                </h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $post->content ?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view', 'id' => $post->id]); ?>" class="more-link">Continue
                                        Reading</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <?= $post->author_id ?>  On <?= $post->create_time ?></span>

                            </div>
                        </div>
                    </article>


                <?php endforeach; ?>


                <?= LinkPager::widget([
                    'pagination' => $pages,
                ]); ?>

            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">


                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <?php foreach ($recent as $post): ?>
                            <div class="thumb-latest-posts">

                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase"><?= $post->title ?></a>
                                        <span class="p-date"><?= $post->create_time ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</div>

