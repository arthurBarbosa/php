<?php 

$hierarquia = array(
	//inicio: diretor comercial
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio diretor comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//inicio gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//termino gerente de vendas
				)
			),
			//termino do diretor comercial
			//inicio diretor financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//inicio de gerente de contas a pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//inicio do supervisor de pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//termino do supervisor de pagamentos
						)
					),
					//termino de gerentes de contas a pagar
					//inicio de gerentes de compras
					array(
						'nome_cargo'=>'Gerente de Compras',
						'subordinados'=>array(
							//inicio de superviso de suplementos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo' => 'Funcionario'
									)
								)

							)
							//termino de superviso de suplementos
						)
					)
					//termino gerente de compras
				)
			)
			//termino diretor financeiro
			
		)
	)


);

function exibe ($cargos){

	$html ='<ul>';

		foreach ($cargos as $cargo) {
			$html .= "<li>";
			$html .= $cargo['nome_cargo'];
			$html .= "</li>";

			if(isset($cargo['subordinados'])&& count($cargo['subordinados']) > 0){
				$html .=exibe($cargo['subordinados']);
			}
		}

	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);


?>