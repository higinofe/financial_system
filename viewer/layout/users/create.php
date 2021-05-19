<?php $v->layout("_theme"); ?>

<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="">Lançamento Contas a Pagar e a Receber</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Lancamentos</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Novo Lancamento</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="dash_content_app_box">
        <div class="nav">
            <ul class="nav_tabs">
                <li class="nav_tabs_item">
                    <a href="#data" class="nav_tabs_item_link active">Dados Cadastrais</a>
                </li>
            </ul>

            <form class="app_form" action="" method="post" enctype="multipart/form-data">
                <div class="nav_tabs_content">
                    <div id="data">
                        <label class="label">
                            <span class="legend">*Titulo Lançamento:</span>
                            <input type="text" name="title" placeholder="Titulo do Lançamento" value="" required/>
                        </label>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Categoria:</span>
                                <select name="category" required>
                                    <option value="male">Salário</option>
                                    <option value="female">diversos</option>
                                    <option value="other">Cartão de crédito</option>
                                </select>
                            </label>

                            <label class="label">
                                <span class="legend">*Valor do Lançamento:</span>
                                <input type="tel" class="" name="valor" placeholder="Valor do Lançamento" 
                                       value="" required/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Quantidade de parcelas:</span>
                                <input type="text" name="placed" placeholder="Quantidade de parcelas"
                                       value=""/>
                            </label>
                        </div>
                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Obeservação:</span>
                                <input type="text" name="obs" placeholder="Obeservação"
                                       value="" required />
                            </label>

                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">Comprovante de pagamento: </span>
                                <input type="file" name="cover">
                            </label>
                        </div>                       

                    </div>
                </div>

                <div class="text-right mt-2">
                    <button class="btn btn-large btn-green icon-check-square-o" type="submit">Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>