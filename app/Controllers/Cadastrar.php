<?php

namespace App\Controllers;
use App\Libraries\Hash;
class Cadastrar extends BaseController
{
    public function __construct(){
        helper(['url', 'form']);
    }
    public function read(){
        echo view('Logar/Cadastrar');
    }
    
    public function cadInit(){
        $model = new \App\Models\modelCad();
        

        $validation = $this->validate([
            'Nome' => [
                'rules' => 'required',
                           'errors' => [
                                'required' => 'Adicione um nome na caixa de texto'
                       ]],


            'Email' => ['rules' => 'required|valid_email|is_unique[logar.email]',
                        'errors' => [
                            'required' => 'Adicione um email na caixa de texto',
                            'valid_email' => 'Adicione um email válido',
                            'is_unique' => 'Este email ja está sendo usado'
                        ]],


            'Senha' => ['rules' => 'required|min_length[5]|max_length[12]',
                        'errors' => [
                            'required' => 'Escreva uma senha na caixa de texto',
                            'min_length' => 'Sua senha deve ter mais de 5 caracteres',
                            'max_length' => 'Sua senha deve ter menos de 12 caracteres']],


            'Usuario' => ['rules' => 'required|is_unique[logar.usuario]',
                          'errors' => [
                              'required' => 'Escreva um nome de usuario na caixa de texto',
                              'is_unique' => 'Este nome de usuario ja está sendo usado'
                          ]]
        ]);
        
    if(!$validation){
        return view('Logar/Cadastrar', ['validation' => $this->validator]);
    }else{
        $nome = $this->request->getPost('Nome');
        $email = $this->request->getPost('Email');
        $senha = $this->request->getPost('Senha');
        $usuario = $this->request->getPost('Usuario');

        $values = [
            'Nome'=>$nome,
            'Email'=>$email,
            'Senha'=> Hash::Make($senha),
            'Usuario'=>$usuario
        ];   

       $data = $model->insert($values);

       if(!$data){
           return redirect() -> back() -> with('Falhou', 'Algo deu errado');
       }else{
           return redirect() -> to('Read') -> with('Pronto', 'Você conseguiu se cadastrar!');
       }
     }
    }
}

?>