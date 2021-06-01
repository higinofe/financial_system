<div class="dash_content_search">

    <div class="dash_content_search_close">
        <p class="text-right">
            <button class="btn btn-red icon-times icon-notext search_close"></button>
        </p>
    </div>

    <header>
        <h3 class="icon-search">Filtro:</h3>
    </header>

    <main>
        <form action="">
            <label>
                <span>Nome:</span>
                <input type="text">
            </label>

            <label>
                <div class="label_g2">
                <span class="legend">*Categoria:</span>
                    <select name="category" required>
                        <?php foreach($categorys as $result): ?>
                            <option value="<?= $result->name; ?>"><?= $result->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </label>

            <div class="label_double">
                <label class="label_50">
                    <span>Vencimento Inicio</span>
                    <input type="text" size="2">
                </label>

                <label class="label_50">
                    <span>Vencimento Fim:</span>
                    <input type="text" size="2">
                </label>
            </div>

            <div class="label_double">
                <label class="label_50">
                    <span>Valor inicio:</span>
                    <input type="text" size="2">
                </label>

                <label class="label_50">
                    <span>Valor Fim:</span>
                    <input type="text" size="2">
                </label>
            </div>

            <button class="btn btn-block btn-large btn-green icon-search">Filtrar</button>
        </form>
    </main>
</div>