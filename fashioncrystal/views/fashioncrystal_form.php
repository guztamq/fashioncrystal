<h1 class="mb-4"><?= isset($personagem) ? 'Editar Personagem' : 'Adicionar Personagem' ?></h1>

<form action="" method="POST">
    <div class="mb-3">
        <label for="nome_personagem" class="form-label">Nome do Personagem</label>
        <input type="text" class="form-control" id="nome_personagem" name="nome_personagem" value="<?= htmlspecialchars($personagem['nome_personagem'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label for="serie_anime" class="form-label">Série ou Anime</label>
        <input type="text" class="form-control" id="serie_anime" name="serie_anime" value="<?= htmlspecialchars($personagem['serie_anime'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label for="tipo_estilo" class="form-label">Tipo de Estilo</label>
        <input type="text" class="form-control" id="tipo_estilo" name="tipo_estilo" value="<?= htmlspecialchars($personagem['tipo_estilo'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label for="acessorio_magico" class="form-label">Acessório Mágico</label>
        <input type="text" class="form-control" id="acessorio_magico" name="acessorio_magico" value="<?= htmlspecialchars($personagem['acessorio_magico'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label for="cor_principal" class="form-label">Cor Principal</label>
        <input type="text" class="form-control" id="cor_principal" name="cor_principal" value="<?= htmlspecialchars($personagem['cor_principal'] ?? '') ?>" required>
    </div>

    <div class="mb-3">
        <label for="look_descricao" class="form-label">Descrição do Look</label>
        <textarea class="form-control" id="look_descricao" name="look_descricao" rows="3"><?= htmlspecialchars($personagem['look_descricao'] ?? '') ?></textarea>
    </div>

    <div class="mb-3">
        <label for="status" class="form-label">Status:</label>
        <select class="form-select" id="status" name="status" required>
            <option value="em_uso" <?= ($registro['status'] ?? '') === 'em_uso' ? 'selected' : '' ?>>Em Uso</option>
            <option value="favorito" <?= ($registro['status'] ?? '') === 'favorito' ? 'selected' : '' ?>>Favorito</option>
            <option value="arquivado" <?= ($registro['status'] ?? '') === 'arquivado' ? 'selected' : '' ?>>Arquivado</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary"><?= isset($personagem) ? 'Atualizar' : 'Salvar' ?></button>
    <a href="/fashioncrystal/list" class="btn btn-secondary">Cancelar</a>
</form>
