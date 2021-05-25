<?php

namespace App\Controllers;

class Noticias extends BaseController
{

	//Tabela Noticias
	public function index()
	{
		$model = new \App\Models\modelNoticias();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();


		

		foreach ($data["tabela"] as $key => $value) {

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateDados/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
	
		}

		echo view('noticiasView', $data);
	}



	//Inserir dados
	public function addDados() {
		
		echo view('noticias/addNoticias');

	}

	public function inserir() {
		$model = new \App\Models\modelNoticias();

		$data = $this->request->getPost();

		$model->insert($data);



		$data["tabela"] = $model->findAll();

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateDados/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
			
	
			echo view('noticiasView', $data);
	}









	//Atualizar dados

	public function updateDados($id) {
		$model = new \App\Models\ModelNoticias();
		$carregarDados = $model->find($id);


		echo view('noticias/updateNoticias', $carregarDados);

	}


	public function update(){
		$model = new \App\Models\ModelNoticias();
	
		$data = $this->request->getPost();

		$retorno = $model -> update($data['id'], $data);

		$data["tabela"] = $model->findAll();

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateDados/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
			
	
			echo view('noticiasView', $data);

	}







	//Deletar Dados

	public function Confirmar($id){
		$model = new \App\Models\ModelNoticias();
		$carregarDados = $model->find($id);


		echo view('Noticias/confirmaDelete', $carregarDados);
	}

	

	public function delete(){
		$model = new \App\Models\ModelNoticias();

		$conf = $this->request->getPost();



		if(isset($conf['Sim'])){

		$retorno = $model -> delete($conf['id']); 



		$data["tabela"] = $model->findAll();

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateDados/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
			
	
			echo view('noticiasView', $data);

		} 





		else if(isset($conf['Nao'])) {

			$data["tabela"] = $model->findAll();

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateDados/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
			
	
			echo view('noticiasView', $data);
			

			}
			
		
	}


	public function menu()
	{
        
    echo view('Home');
    }

}
?>
