<div class="mb-4">
    <form action="" method="POST">
        <button class="btn btn-success rounded" style="display: <?= ($pagina_atual <= 1) ? "none" : ""?>;" name="pagina_atual" value="<?=($pagina_atual > 1) ? ($pagina_atual -1) : 1;?>" <?=($pagina_atual <= 1) ? "disabled" : "";?>>&larr;</button>

        <?php for($i=1; $i<= $total_paginas; $i++): ?>
            <button class="btn btn-success rounded" style="<?= ($i == $pagina_atual) ? "background-color: var(--table-border);" : "";  ?>" name="pagina_atual" value="<?= $i; ?>"><?= $i; ?></button>
        <?php endfor; ?>

        <button class="btn btn-success rounded" style="display: <?= ($pagina_atual >= $total_paginas) ? "none" : ""?>;" name="pagina_atual" value="<?=($pagina_atual < $total_paginas) ? ($pagina_atual + 1) : $total_paginas;?>"<?=($pagina_atual >= $total_paginas) ? "disabled" : "";?>>&rarr;</button>
    </form>
</div>