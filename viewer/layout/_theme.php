<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <link rel="stylesheet" href=<?=uri("assets/css/reset.css");?> />
    <link rel="stylesheet" href=<?=uri("assets/js/datatables/css/jquery.dataTables.min.css");?> />
    <link rel="stylesheet" href=<?=uri("assets/js/datatables/css/responsive.dataTables.min.css");?> />
    <link rel="stylesheet" href=<?=uri("assets/js/select2/css/select2.min.css");?> />
    <link rel="stylesheet" href=<?=uri("assets/css/boot.css");?> />
    <link rel="stylesheet" href=<?=uri("assets/css/style.css");?> />
    <link rel="icon" type="image/png" href=<?= uri("assets/images/favicon.png"); ?> />

    <title><?= $head ?></title>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="ajax_response"></div>

<div class="dash">
    <aside class="dash_sidebar">
        <article class="dash_sidebar_user">
            <img class="dash_sidebar_user_thumb" src=<?= uri("assets/images/avatar.jpg"); ?> alt="" title=""/>

            <h1 class="dash_sidebar_user_name">
                <a href="">Fernando Higino</a>
            </h1>
        </article>

        <ul class="dash_sidebar_nav">
            <li class="dash_sidebar_nav_item active">
                <a class="icon-tachometer" href=" <?= url(); ?>">Dashboard</a>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-users" href="">Pagar e Receber</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="<?= url("fluxo"); ?>">Fluxo de Caixa</a></li>
                    <li class=""><a href="<?= url("criacao"); ?>">Lançametos</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-file-text" href="dashboard.php?app=contracts/index">Simulações</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href=" <?= url(); ?>">Ver Simulaçoes</a></li>
                    <li class=""><a href=" <?= url(); ?> ">Criar Simulção</a></li>
                </ul>
            </li>
        </ul>

    </aside>

    <section class="dash_content">

        <div class="dash_userbar">
            <div class="dash_userbar_box">
                <div class="dash_userbar_box_content">
                    <span class="icon-align-justify icon-notext mobile_menu transition btn btn-green"></span>
                    <h1 class="transition">
                        <i class=""></i><a href=""><?= $head; ?></a>
                    </h1>
                    <div class="dash_userbar_box_bar no_mobile">
                        <a class="text-red icon-sign-out" href="">Sair</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="dash_content_box">
            <?= $v->section("content"); ?>
        </div>
    </section>
</div>



<script src="viewer/layout/assets/js/jquery.min.js"></script>
<script src="viewer/layout/assets/js/tinymce/tinymce.min.js"></script>
<script src="viewer/layout/assets/js/datatables/js/jquery.dataTables.min.js"></script>
<script src="viewer/layout/assets/js/datatables/js/dataTables.responsive.min.js"></script>
<script src="viewer/layout/assets/js/select2/js/select2.min.js"></script>
<script src="viewer/layout/assets/js/select2/js/i18n/pt-BR.js"></script>
<script src="viewer/layout/assets/js/jquery.form.js"></script>
<script src="viewer/layout/assets/js/jquery.mask.js"></script>
<script src="viewer/layout/assets/js/scripts.js"></script>

</body>
</html>