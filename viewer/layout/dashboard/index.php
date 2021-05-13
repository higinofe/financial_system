<?php $v->layout("_theme"); ?>
<div style="flex-basis: 100%;">
    <section class="dash_content_app">
        <header class="dash_content_app_header">
            <h2 class="icon-tachometer">Dashboard</h2>
        </header>

        <div class="dash_content_app_box">
            <section class="app_dash_home_stats">
                <article class="control radius">
                    <h4 class="icon-users">Contas a Pagar(Mês Vigente)</h4>
                    <p><b>Quantidade</b> 50</p>
                    <p><b>Total em dinheiro</b> R$ 100,00 </p>
                </article>

                <article class="blog radius">
                    <h4 class="icon-home">Contas Quitadas(Mês Vigente)</h4>
                    <p><b>Quantidade</b> 50</p>
                    <p><b>Total em dinheiro</b> R$ 100,00 </p>
                </article>

                <article class="users radius">
                    <h4 class="icon-file-text">Balanço</h4>
                    <p><b>Saldo disponivel mensal :</b> 455</p>
                    <p><b>Poder de compras :</b> 455</p>
                </article>
            </section>
        </div>
    </section>

    <section class="dash_content_app" style="margin-top: 40px;">
        <header class="dash_content_app_header">
            <h2 class="icon-tachometer">Proximas contas a pagar</h2>
        </header>

        <div class="dash_content_app_box">
            <div class="dash_content_app_box_stage">
                <table id="dataTable" class="nowrap hover stripe" width="100" style="width: 100% !important;">
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
                        <td><a href="" class="text-orange">Casa</a></td>
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
</div>