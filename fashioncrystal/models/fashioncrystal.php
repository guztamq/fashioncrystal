<?php
require_once __DIR__ . '/Model.php';

class fashioncrystal extends Model
{
    public function getAll() 
    {
        $stmt = $this -> db->query("SELECT * FROM closet_divas");
        return $stmt-> fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function getPersonagemById($id)
    {
    $stmt = $this->db->prepare("SELECT * FROM closet_divas WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createPersonagem($nome, $anime, $estilo, $acessorio, $cor, $descricao, $status)
    {
        $stmt = $this->db->prepare("
        INSERT INTO closet_divas (nome_personagem, serie_anime, tipo_estilo, acessorio_magico, cor_principal, look_descricao, status)
        VALUES (:nome, :anime, :estilo, :acessorio, :cor, :descricao, :status)");
    return $stmt->execute([
        'nome' => $nome,
        'anime' => $anime,
        'estilo' => $estilo,
        'acessorio' => $acessorio,
        'cor' => $cor,
        'descricao' => $descricao,
        'status' => $status
    ]);
    }
    public function updatePersonagem($id, $nome, $anime, $estilo, $acessorio, $cor, $descricao, $status)
    {
        
        $stmt = $this->db->prepare("
            UPDATE closet_divas SET 
            nome_personagem = :nome, 
            serie_anime = :anime, 
            tipo_estilo = :estilo, 
            acessorio_magico = :acessorio, 
            cor_principal = :cor, 
            look_descricao = :descricao, 
            status = :status
            WHERE id = :id
        ");
        return $stmt->execute([
            'id' => $id,
            'nome' => $nome,
            'anime' => $anime,
            'estilo' => $estilo,
            'acessorio' => $acessorio,
            'cor' => $cor,
            'descricao' => $descricao,
            'status' => $status
        ]);
    }
    
    public function deletePersonagem($id)
    {
        $stmt = $this->db->prepare("DELETE FROM closet_divas WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}