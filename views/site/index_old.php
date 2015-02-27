<?php
use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
$this->title = 'Guild Dash - Gerenciador de Guildas de Ultima Online';

?>
<div class="site-index">

    <div class="col-lg-12">
        <div class="col-lg-2 col-sm-2"">
            <img src="<?php echo Yii::$app->urlManager->baseUrl . '/images/logo-medium-v1.png'; ?>">
        </div>

        <div class="col-lg-3 col-sm-3 text-center" style="border-right: solid black 1px;">
            <h3><strong> GAME OVER - GO</strong></h3>
        </div>
        <div class="col-lg-3 col-sm-3" style="border-right: solid black 1px;">
            <span><strong>Guild-Master: </strong> Sir Stenzyl</span><br />
            <span><strong>Membros: </strong> - </span>
            <p></p>
        </div>
        <div class="col-lg-3 col-sm-3">
            <span><strong>Última Atualização:</strong></span> <br />
            <span> -  </span>
        </div>
    </div>
<hr>
<div class="body-content">
    <div class="row">
        <div class="col-lg-12">
            <hr style="border: 0;height: 1px;background: #333;background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc); background-image: -moz-linear-gradient(left, #ccc, #333, #ccc);background-image: -ms-linear-gradient(left, #ccc, #333, #ccc); background-image: -o-linear-gradient(left, #ccc, #333, #ccc); ">
            <h2>Anúncio - <small><?php echo date( "d/m/Y - H:i:s",strtotime($ultimoAnuncio->data_hora)); ?></small></h2>
            <p class="well">
               <?php echo $ultimoAnuncio->anuncio . '<br /><em>Postado por:</em> <strong>' . $ultimoAnuncio->player . '</strong>'; ?>

            </p>
        </div>
        <div class="col-lg-3">
            <h2 class="text-info">Champion</h2>

            <p>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProviderChampion,
                    'summary' => false,
                    'columns' => [
                        [
                           'attribute' => 'nome',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'data_hora',
                            'format' => 'raw',
                            'value' => function($model){
                                return date("d/m/Y - H:i:s",strtotime($model->data_hora));
                            },
                        ],
                    ],
                    'options' => ['class' => 'text-center']
                ]);

                ?>
            </p>


        </div>
        <div class="col-lg-2">
            <h2 class="text-danger">Boss</h2>

            <p>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProviderBoss,
                    'summary' => false,
                    'columns' => [
                        [
                            'attribute' => 'nome',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'data_hora',
                            'format' => 'raw',
                            'value' => function($model){
                                return date("d/m/Y - H:i:s",strtotime($model->data_hora));
                            },
                        ],

                    ],
                    'options' => ['class' => 'text-center']

                ]);

                ?>
            </p>


        </div>
        <div class="col-lg-4">
            <h2 class="text-success">Respaw Animal</h2>

            <p>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProviderRespawAnimal,
                    'summary' => false,
                    'columns' => [
                        [
                            'attribute' => 'animal',
                            'format' => 'raw',
                            'value' => function($model){
                                return substr($model->animal, 0,5);
                            },
                        ],
                        [
                            'attribute' => 'color',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'player',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'data_hora',
                            'format' => 'raw',
                            'value' => function($model){
                                return date("d/m/Y - H:i:s",strtotime($model->data_hora));
                            },
                        ],
                    ],
                    'options' => ['class' => 'text-center']
                ]);

                ?>
            </p>


        </div>
        <div class="col-lg-3">
            <h2 class="text-warning">True Prisma</h2>

            <p>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProviderPrisma,
                    'summary' => false,
                    'columns' => [
                        [
                            'attribute' => 'nome',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'tinta',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'player',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'data_hora',
                            'format' => 'raw',
                            'value' => function($model){
                                return date("d/m/Y - H:i:s",strtotime($model->data_hora));
                            },
                        ],
                    ],
                    'options' => ['class' => 'text-center']
                ]);

                ?>
            </p>


        </div>
        <div class="clearfix"></div>
        <div class="col-lg-8">
            <h2 class="text-primary">Fila de Armas</h2>

            <p>
                <?php
                echo GridView::widget([
                    'dataProvider' => $dataProviderFilaArma,
                    'summary' => false,
                    'columns' => [
                        [
                            'attribute' => 'posicao',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'player',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'arma',
                            'format' => 'text'
                        ],
                        [
                            'attribute' => 'data_hora',
                            'format' => 'raw',
                            'value' => function($model){
                                return date("d/m/Y - H:i:s",strtotime($model->data_hora));
                            },
                        ],
                    ],
                    'options' => ['class' => 'text-center']
                ]);

                ?>
            </p>


        </div>
        <div class="col-lg-4">
            <h2 class="text-muted">Registrar Ação</h2>

            <p><?= Html::a('ADD Champion', ['champion/create'], ['class' => 'btn btn-primary btn-lg btn-block']) ?></p>
            <p><?= Html::a('ADD Boss', ['boss/create'], ['class' => 'btn btn-primary btn-lg btn-block']) ?></p>
            <p><?= Html::a('ADD Respaw Animal', ['respaw-animal/create'], ['class' => 'btn btn-primary btn-lg btn-block']) ?></p>
            <p><?= Html::a('ADD Prisma', ['prisma/create'], ['class' => 'btn btn-primary btn-lg btn-block']) ?></p>
            <p><?= Html::a('ADD Fila de Armas', ['fila-arma/index'], ['class' => 'btn btn-primary btn-lg btn-block']) ?></p>

        </div>
    </div>

</div>

