<?php $v->layout("_theme"); ?>
<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Lancamentos</a></li>
                </ul>
            </nav>

            <a href="dashboard.php?app=users/create" class="btn btn-orange icon-user ml-1">Novo +</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Parcela</th>
                    <th>Data Venciamento</th>
                    <th>observação</th>
                    </tr>
                </thead>
                    <tbody>
                    <tr>
                        <td><a href="" class="text-orange"><?= $paymente->id; ?></a></td>
                        <td><a href="" class="text-orange">Financiamento Imobiliario</a></td>
                        <td>47/420</td>
                        <td><?= date('d/m/Y'); ?></td>
                        <td>NT</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>