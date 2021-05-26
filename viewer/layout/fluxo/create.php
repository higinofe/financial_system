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
                                <?php foreach($categorys as $result): ?>
                                    <option value="<?= $result->name; ?>"><?= $result->name; ?></option>
                                <?php endforeach; ?>
                                </select>
                            </label>
                            <label class="label">
                                <span class="legend">*Quantidade de parcelas:</span>
                                <input type="number" name="placed" placeholder="Quantidade de parcelas" autocomplete="off"
                                       value=""/>
                            </label>
                        </div>
                        <div class="label_g2">
                            <label class="label">
                                <span class="field icon-money">Valor do Lançamento:</span>
                                <input class="radius mask-money" type="text" name="description" required/>
                            </label>
                            <label class = "label">
                                <span class="field icon-filter">Data Vencimento:</span>
                                <input class="radius masc-date" type="date" name="due_at" required/>
                            </label>  
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                    <span class="legend">*Obeservação:</span>
                                    <input type="text" name="obs" placeholder="Obeservação"
                                    value="" required />
                            </label>
                            <div class="label_check">
                            <p class="field icon-exchange">Repetição:</p>

                            <label class="check"
                                data-checkbox="true"
                                data-slideup=".repeate_item_expense, .repeate_item_income">
                                <input type="radio" name="repeat" value="" checked> Única
                            </label>

                            <label data-checkbox="true"
                                data-slideup=".repeate_item_expense"
                                data-slidedown=".repeate_item_income">
                                <input type="radio" name="repeat" value="income"> Fixa
                            </label>

                            <label data-checkbox="true"
                                data-slideup=".repeate_item_income"
                                data-slidedown=".repeate_item_expense">
                                <input type="radio" name="repeat" value="expense"> Parcelada
                            </label>
                        </div>

                        <label class="repeate_item repeate_item_income" style="display: none">
                            <select name="period">
                                <option value="month">&ofcir; Mensal</option>
                                <option value="year">&ofcir; Anual</option>
                            </select>
                        </label>

                        <label class="repeate_item repeate_item_expense" style="display: none">
                            <input class="radius" type="number" min="1" placeholder="1 parcela" name="enrollments"/>
                        </label>
                 </div>  
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