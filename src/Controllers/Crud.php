<?php

namespace Source\Controllers;

use Source\Models\User;


class Crud
{
    // CREATE
    public function create($data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->login = $data['login'];
        $user->password = $data['password'];
        $user->save();
        header('Location: ./');
    }

    // MOSTRAR TODOS OU BUSCAR POR ID
    public function read($data)
    {
        if (isset($data['id'])) {
            $user = new User();
            $list = $user->findById($data['id']);
            echo $list->name;
        } else {
            $user = new User();
            $list = $user->find()->fetch(true);
            $rep = 1;
            foreach ($list as $user) {
                echo "<h1>User {$rep}</h1>";
                echo "<p><strong>Nome:</strong> {$user->name}</p>";
                echo "<p><strong>Login:</strong> {$user->login}</p>";
                echo "";
                echo '
                <div style="display:flex; gap: 20px;" >
                    <a href="./register/' . $user->id . '">Atualizar Usuário</a>
                    <form action="./delete" method="POST">
                        <input type="hidden" name="id" value="' . $user->id . '">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit">Deletar Usuário</button>
                    </form>
                </div>
                ';
                $rep++;
            }
        }
        echo '<br><br><br><a href="./register">Cadastrar novo usuário</a>';
    }

    // UPDATE
    public function update($data)
    {
        echo $data['id'];
        $user = (new User())->findById($data['id']);
        $user->name = $data['name'];
        $user->login = $data['login'];
        $user->password = $data['password'];
        $user->save();
        var_dump($user);
        header('Location: ../');
    }


    // DELETE
    public function delete($data)
    {
        $user = (new User)->findById($data['id']);
        $user->destroy();
        header('Location: ./');
    }

    // METODO PARA MOSTRAR FORMULARIO DE CADASTRO E ATUALIZAÇÂO
    public function registerForm($data)
    {
        if (isset($data['id'])) {
            $get = new User();
            $user = $get->findById($data['id']);
            $name = $user->name;
            $login = $user->login;
            $password = $user->password;
            $method = "PUT";
            $route = "../update/{$data['id']}";
            $button = "Atualizar";
            $verTodos = "../";

        } else {
            $name = "";
            $login = "";
            $password = "";
            $method = "POST";
            $route = "./create";
            $button = "Cadastrar";
            $verTodos = "./";
        }
        echo '<form action="' . $route . '" method="POST">
                <div>
                    <label for="name">Nome: </label>
                    <input type="text" name="name" id="name" value="' . $name . '">
                </div> <br>
                <div>
                    <label for="login">Login: </label>
                    <input type="text" name="login" id="login" value="' . $login . '">
                </div><br>
                <div>
                    <label for="password">Senha: </label>
                    <input type="password" name="password" id="password" value="' . $password . '">
                </div><br>
                <input type="hidden" name="_method" value="' . $method . '">
                <div style="display:flex; gap: 20px;">
                    <button>' . $button . '</button>
                    <a href="' . $verTodos . '">Ver todos</a>
                <div>
            </form>';
    }

}