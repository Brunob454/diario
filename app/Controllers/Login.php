<?php

namespace App\Controllers;

use App\Libraries\Hash;

class Login extends BaseController
{
    public function Read(){
        echo view("Logar/Login");
    }

    public function Check(){
    
        //iniciar validação

        $validation = $this->validate([
            
            'Email' => ['rules' => 'required|valid_email|is_not_unique[logar.email]',
                        'errors' => [
                            'required' => 'Adicione um email na caixa de texto',
                            'valid_email' => 'Adicione um email válido',
                            'is_not_unique' => 'Email não cadastrado neste serviço'
                        ]],

            'Senha' => ['rules' => 'required|min_length[5]|max_length[12]',
                        'errors' => [
                            'required' => 'Escreva uma senha na caixa de texto',
                            'min_length' => 'Sua senha deve ter mais de 5 caracteres',
                            'max_length' => 'Sua senha deve ter menos de 12 caracteres']]
        ]);

        if(!$validation){
            return view('Logar/Login', ['validation' => $this -> validator]);
        }else{
            $email = $this->request->getPost('Email');
            $senha = $this->request->getPost('Senha');
            $model = new \App\Models\modelCad();
            $user_info = $model->where('Email', $email)->first();
            $check_password = Hash::check($senha, $user_info['Senha']);

            if(!$check_password){
                session()->setFlashdata('Falhou', 'Senha Incorreta');
                return redirect()->to('/Login/read')->withInput();
            }else{
                $user_id = $user_info['id'];
                session()->set('UsuarioLogado', $user_id);
                return redirect()->to('/Home/index');
            }
        }
    }



    public function logout(){
        if(session()->has('UsuarioLogado')){
            session()->remove('UsuarioLogado');
            return redirect()->to('/Login/Read?access=out')->with('Falhou', 'Você desconectou de sua conta!');
        }
    }
}
?>