<?php

use yii\widgets\ActiveForm;

?>

<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">

                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">

                            <h1 class="entry-title"><?= $post->title ?></a></h1>

                        </header>
                        <div class="entry-content">
                            <?= $post->content ?>
                        </div>
                        <div class="decoration">
                            <a class="btn btn-default"><?= $post->tags ?></a>
                        </div>

                        <div class="social-share">
							<span
                                    class="social-share-title pull-left text-capitalize"> By <?= $post->author_id ?> On <?= $post->create_time ?></span>

                        </div>
                    </div>
                </article>


                <?php if (!empty($comments)): ?>

                    <?php foreach ($comments as $comment): ?>

                        <div class="bottom-comment">
                            <h4>comments</h4>

                            <div class="comment-text">

                                <h5><?= $comment->author; ?></h5>

                                <p class="comment-date">
                                    <?= $comment->create_time; ?>
                                </p>


                                <p class="para"><?= $comment->content; ?></p>
                            </div>
                        </div>


                    <?php endforeach; ?>

                <?php endif; ?>


                <div class="leave-comment">
                    <h4>Leave a reply</h4>
                    <?php if (Yii::$app->session->getFlash('comment')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= Yii::$app->session->getFlash('comment'); ?>
                        </div>
                    <?php endif; ?>


                    <?php $form = ActiveForm::begin(['action' => ['site/comment', 'id' => $post->id],
                        'options' => ['class' => 'form-horizontal contact-form', 'role' => 'form']]) ?>

                    <div class="form-group">

                        <div class="col-md-12">

                            <?= $form->field($commentForm, 'comment')->textarea(['class' => 'form-control', 'placeholder' => 'Write Message'])->label(false) ?>

                        </div>
                    </div>
                    <button type="submit" class="btn send-btn">Post Comment</button>
                    <?php ActiveForm::end(); ?>

                </div>
            </div>

        </div>
    </div>
</div>
