<h1 class="mb-4 text-center text-primary fw-bold">Personagens</h1>

<a href="?action=create" class="btn btn-success mb-4">➕ Adicionar nova personagem</a>

<div class="row">
    <?php foreach ($personagens as $personagem): ?>
        <div class="col-md-6 col-lg-4">
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-danger fw-bold"><?= htmlspecialchars($personagem['nome_personagem']) ?></h5>
                    <p class="card-text"><strong>Série / Anime:</strong> <?= htmlspecialchars($personagem['serie_anime']) ?></p>
                    <p class="card-text"><strong>Estilo:</strong> <?= htmlspecialchars($personagem['tipo_estilo']) ?></p>
                    <p class="card-text"><strong>Acessório Mágico:</strong> <?= htmlspecialchars($personagem['acessorio_magico']) ?></p>
                    <p class="card-text"><strong>Cor Principal:</strong> <?= htmlspecialchars($personagem['cor_principal']) ?></p>
                    <p class="card-text"><strong>Descrição do Look:</strong> <?= htmlspecialchars($personagem['look_descricao']) ?></p>
                    <p class="card-text"><strong>Status:</strong> <?= htmlspecialchars($personagem['status']) ?></p>

                    <a href="/fashioncrystal/edit?id=<?= $personagem['id'] ?>" class="btn btn-warning btn-sm">✏️ Editar</a>

                    <a href="/fashioncrystal/delete?id=<?= $personagem['id'] ?>" 
                         class="btn btn-danger btn-sm delete-btn" 
                         onclick="return confirm('Tem certeza que deseja excluir <?= htmlspecialchars($personagem['nome_personagem']) ?>?');"> ❌ Excluir</a>

                 
                    <!-- Fim do modal -->
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
