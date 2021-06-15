<?php

namespace App\Controllers;

class Fontes extends BaseController
{

	
	
	public function read()
	{
		$model = new \App\Models\ModelFontes();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();

		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateInit/".
																						$data["tabela"][$key]["id"]."'>Editar Registro</a>";
			$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																						$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
		}

		$session = session();

		$session->set('ultimoAcess', time());
		if(!isset($_SESSION['listaAcess'])) $session->set('listaAcess', [time()]);
		$session->push('listaAcess', array_merge($session->get('listaAcess'),[time()]));

	
	echo view('fontesView', $data);

	
	}

	public function createInit() {
		echo view('fontes/createForm');

	}

	public function createBE() {
		$model = new \App\Models\ModelFontes();

		$data = $this->request->getPost();

		$model->insert($data);


		$data["tabela"] = $model->findAll();
		$data["teste"] = time();


		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateInit/".
																						$data["tabela"][$key]["id"]."'>Editar Registro</a>";
			$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																						$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
		}

	echo view('fontesView', $data);


		
	}



					//UPDATE





	public function updateInit($id) {
		
		$model = new \App\Models\ModelFontes();
		$dadosFontes = $model->find($id);

		
		echo view('fontes/updateForm', $dadosFontes);

	}

	public function update() {
		$model = new \App\Models\ModelFontes();

		

		$data = $this->request->getPost();

		$retorno = $model->update($data["id"], $data );


		$data["tabela"] = $model->findAll();
		$data["teste"] = time();


		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateInit/".
																						$data["tabela"][$key]["id"]."'>Editar Registro</a>";
			$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																						$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
		}

	echo view('fontesView', $data);
	}
  
  


				//Delete




  
  
  public function Confirmar($id){
		$model = new \App\Models\ModelFontes();
		$carregarDados = $model->find($id);


		echo view('fontes/confirmaDelete', $carregarDados);
	}
  
  

	public function deleteFonte(){
		$model = new \App\Models\ModelFontes();

		$conf = $this->request->getPost();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();





		if(isset($conf['Sim'])){

		$retorno = $model -> delete($conf['id']); 

		foreach ($data["tabela"] as $key => $value) {
			$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateInit/".
																						$data["tabela"][$key]["id"]."'>Editar Registro</a>";
			$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																						$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
		}

	echo view('fontesView', $data);



		} 

		else if(isset($conf['Nao'])) {

			foreach ($data["tabela"] as $key => $value) {
				$data["tabela"][$key]["btnEditar"] = "<a class='btn btn-outline-primary' href='updateInit/".
																							$data["tabela"][$key]["id"]."'>Editar Registro</a>";
				$data["tabela"][$key]["btnDelete"] = "<a class='btn btn-outline-danger' href='Confirmar/".
																							$data["tabela"][$key]["id"]."'>Deletar Registro</a>";
			}
	
			echo view('fontesView', $data);

			}
	}

}


?>
