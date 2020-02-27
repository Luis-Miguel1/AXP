<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use common\widgets\Alert;
use yii\bootstrap\NavBar;
use backend\assets\AppAsset;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= Yii::$app->request->baseUrl; ?>/favicon.ico?v=1" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

        <?php
      //  $profile = Profile::find()->where(['user_iduser' => Yii::$app->user->identity->id])->one();
     //   if(!$profile){
        //  return Yii::$app->response->redirect(Url::to(['site/login']));
      // }

       // $page = Yii::$app->controller->id;
        ?>

        <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= Url::home(true); ?>"><span>RTC</span>&nbsp;Backoffice</a>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <em class="fa fa-bell"></em><span class="label label-info">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="#">
                                        <div><em class="fa fa-envelope"></em> 1 New Message</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div><em class="fa fa-heart"></em> 12 New Likes</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <div><em class="fa fa-user"></em> 5 New Followers</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <em class="fa fa-user"></em>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="<?= Url::to(['user/update','id'=>Yii::$app->user->identity->id]); ?>">
                                        <div><em class="fa fa-eye"></em>&nbsp;Profile</div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <?= Html::a('<em class="fa fa-power-off"></em>&nbsp;Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <?php
                    if(file_exists($profile->imagem)) {
                        ?>
                        <img src="<?= $profile->imagem; ?>" class="img-responsive" alt="<?= $profile->nome; ?>">
                        <?php
                    } else {
                        ?>
                        <img src="../img/user/default-user.png" class="img-rounded" alt="user_image" style="margin-right: 20px !important; width: 30px;"/>
                        <?php
                    }
                    ?>
                </div>
                <div class="profile-usertitle">
                    <?php
                    $words = explode(" ", $profile->nome);
                    $letters = "";
                    foreach ($words as $value) {
                        $letters .= substr($value, 0, 1);
                    }
                    ?>
                    <div class="profile-usertitle-name"><?= $letters; ?></div>
                    <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>

            <ul class="nav menu">

                <li class="<?php if ($page=='site') { echo "active"; } ?>"><a href="<?= Url::home(true); ?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

                <li class="parent <?php if ($page=='noticia' || $page=='tipo-noticia' || $page=='categoria') { echo "active"; } ?>">
                    <a href="<?= Url::to(['noticia/index']); ?>">
                        <em class="fa fa-newspaper-o">&nbsp;</em>Notícia<span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"></span>
                    </a>
                    <!--
                        <ul class="children collapse" id="noticia">
                            <li><a class="" href="">Lista</a></li>
                            <li><a class="" href="<?= Url::to(['categoria/index']); ?>">Categoria</a></li>
                            <li><a class="" href="<?= Url::to(['tipo-noticia/index']); ?>">Tipo</a></li>
                        </ul>
                    -->
                </li>

                <li class="parent <?php if ($page=='user' || $page=='utilizador') { echo "active"; } ?>">
                    <a data-toggle="collapse" href="#membros">
                        <em class="fa fa-address-book">&nbsp;</em>Utilizadores<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="membros">
                        <li><a class="" href="<?= Url::to(['user/index']); ?>">BackOffice</a></li>
                        <li><a class="" href="<?= Url::to(['utilizador/index']); ?>">App</a></li>
                    </ul>
                </li>

                <li class="parent <?php if ($page=='live' || $page=='audios' || $page=='videos') { echo "active"; } ?>">
                    <a data-toggle="collapse" href="#multimedia">
                        <em class="fa fa-tv">&nbsp;</em>Multimedia<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="multimedia">
                        <li><a class="" href="<?= Url::to(['live/index']); ?>">Live</a></li>
                        <li><a class="" href="<?= Url::to(['audios/index']); ?>">Audios</a></li>
                        <li><a class="" href="<?= Url::to(['arquivos-multimedia/index']); ?>">Imagens</a></li>
                        <li><a class="" href="<?= Url::to(['videos/index']); ?>">Videos</a></li>
                    </ul>
                </li>

                <li class="<?php if ($page=='publicidade') { echo "active"; } ?>">
                    <a href="<?= Url::to(['publicidade/index']); ?>"><em class="fa fa-picture-o">&nbsp;</em>Publicidade</a>
                </li>

                <li class="<?php if ($page=='programacao') { echo "active"; } ?>">
                    <a href="<?= Url::to(['programacao/index']); ?>"><em class="fa fa-picture-o">&nbsp;</em>Programação</a>
                </li>

                <li class="parent <?php if ($page=='programas' || $page=='periodo-transmicao' || $page=='categorias-programas') { echo "active"; } ?>">
                    <a href="<?= Url::to(['programas/index']); ?>">
                        <em class="fa fa-address-book">&nbsp;</em>Programas<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"></span>
                    </a>
                   <!--
                        <ul class="children collapse" id="programas">
                            <li><a class="" href="">Lista</a></li>
                            <li><a class="" href="<?php //= Url::to(['periodo-transmicao/index']); ?>">Periodo De Transmisao</a></li>
                            <li><a class="" href="<?php //= Url::to(['categorias-programas/index']); ?>">Categoria</a></li>
                        </ul>
                    -->
                </li>

                <li class="parent <?php if ($page=='eventos-especias' || $page=='' || $page=='') { echo "active"; } ?>">
                    <a data-toggle="collapse" href="#eventos_especias">
                        <em class="fa fa-picture-o">&nbsp;</em>Eventos Especias<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="eventos_especias">
                        <li><a class="" href="<?= Url::to(['eventos-especias/index']); ?>">Eventos Especias</a></li>
                        <li><a class="" href="<?= Url::to(['eventos-especias/listapreco']); ?>">Preços</a></li>
                        <li><a class="" href="<?= Url::to(['eventos-especias/listasubscritor']); ?>">Subscritores</a></li>
                    </ul>
                </li>

                <li class="parent <?php if ($page=='subscricao' || $page=='') { echo "active"; } ?>">
                    <a data-toggle="collapse" href="#subscricao">
                        <em class="fa fa-picture-o">&nbsp;</em>Plano Subscrição<span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
                    </a>
                    <ul class="children collapse" id="subscricao">
                        <li><a class="" href="<?= Url::to(['subscricao/planos']); ?>">Planos</a></li>
                        <li><a class="" href="<?= Url::to(['subscricao/listprecos']); ?>">Preços</a></li>
                        <li><a class="" href="<?= Url::to(['subscricao/subscritores']); ?>">Subscritores</a></li>
                    </ul>
                </li>


                <li class="<?php if ($page=='apresentador') { echo "active"; } ?>">
                    <a href="<?= Url::to(['apresentador/index']); ?>"><em class="fa fa-user-secret">&nbsp;</em>Apresentador</a>
                </li>


                <li class="<?php if ($page=='live-frequencia') { echo "active"; } ?>">
                    <a href="<?= Url::to(['live-frequencia/index']); ?>"><em class="fa fa-user-secret">&nbsp;</em>Frequência</a>
                </li>

                <li class="<?php if ($page=='settings') { echo "active"; } ?>">
                    <a href="<?= Url::to(['settings/index']); ?>"><em class="fa fa-cogs">&nbsp;</em>Settings</a>
                </li>


                 <!-- <li class="<?php //if ($page=='apresentador-has-tipo') { echo "active"; } ?>">
                    <a href="<?php // Url::to(['apresentador-has-tipo/index']); ?>"><em class="fa fa-user-secret">&nbsp;</em>Apresentador Tipo</a>
                </li> -->

                <!-- <li><a href="<?php //= Url::to(['site/forms']); ?>"><em class="fa fa-plus">&nbsp;</em> Extra</a></li> -->
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
            </div><br>

            <?= Alert::widget() ?>
            <?= $content ?>

        </div>

        <div class="col-sm-12">
            <br><br>
            <p class="back-link">&copy;&nbsp;RTC | Powered by <a href="http://www.bonako.com" title="Bonako" target="_blank">Bonako</a></p>
        </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

