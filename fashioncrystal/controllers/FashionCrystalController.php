<?php
require_once APP_PATH . '/models/fashioncrystal.php';

class FashionCrystalController
{
    private $model;

    public function __construct()
    {
        $this->model = new fashioncrystal();
    }

    public function list()
    {
        $personagens = $this->model->getAll();
        $viewPath = APP_PATH . '/views/fashioncrystal_list.php';
        require APP_PATH . '/views/layout.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->createPersonagem(
                $_POST['nome_personagem'],
                $_POST['serie_anime'],
                $_POST['tipo_estilo'],
                $_POST['acessorio_magico'],
                $_POST['cor_principal'],
                $_POST['look_descricao'],
                $_POST['status']
            );

            $_SESSION['message'] = [
                'text' => 'Personagem adicionado com sucesso!',
                'type' => 'success'
            ];
            header("Location: /fashioncrystal/list");
            exit;
        }

        $viewPath = APP_PATH . '/views/fashioncrystal_form.php';
        require APP_PATH . '/views/layout.php';
    }

    public function edit()
    {
        $id = $_GET['id'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->updatePersonagem(
                $id,
                $_POST['nome_personagem'],
                $_POST['serie_anime'],
                $_POST['tipo_estilo'],
                $_POST['acessorio_magico'],
                $_POST['cor_principal'],
                $_POST['look_descricao'],
                $_POST['status']
            );

            $_SESSION['message'] = [
                'text' => 'Personagem atualizado com sucesso!',
                'type' => 'warning'
            ];
            header("Location: /fashioncrystal/list");
            exit;
        }

        $personagem = $this->model->getPersonagemById($id);
        $viewPath = APP_PATH . '/views/fashioncrystal_form.php';
        require APP_PATH . '/views/layout.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->model->deletePersonagem($id);

        $_SESSION['message'] = [
            'text' => 'Personagem excluído com sucesso!',
            'type' => 'danger'
        ];
        header("Location: /fashioncrystal/list");
        exit;
    }
}
