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
                        <div class="label_gc">
                            <span class="legend">Tipo:</span>
                            <label class="label">
                                <input type="checkbox" name="lessor"><span>Crédito</span>
                            </label>

                            <label class="label">
                                <input type="checkbox" name="lessee"><span>Debito</span>
                            </label>
                        </div>

                        <label class="label">
                            <span class="legend">*Titulo Lançamento:</span>
                            <input type="text" name="name" placeholder="Titulo do Lançamento" value=""/>
                        </label>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Categoria:</span>
                                <select name="genre">
                                    <option value="male">Salário</option>
                                    <option value="female">diversos</option>
                                    <option value="other">Cartão de crédito</option>
                                </select>
                            </label>

                            <label class="label">
                                <span class="legend">*Valor do Lançamento:</span>
                                <input type="tel" class="mask-doc" name="document" placeholder="Valor do Lançamento"
                                       value=""/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Obeservação:</span>
                                <input type="text" name="document_secondary" placeholder="Obeservação"
                                       value=""/>
                            </label>

                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Quantidade de parcelas:</span>
                                <input type="text" name="place_of_birth" placeholder="Cidade de Nascimento"
                                       value=""/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">Comprovante de pagamento: </span>
                                <input type="file" name="cover">
                            </label>
                        </div>                       

                        <div class="app_collapse mt-2">

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