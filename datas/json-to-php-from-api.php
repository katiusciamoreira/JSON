<?php
    // consultando API CNAE do IBGE
    $consulta="https://servicodados.ibge.gov.br/api/v2/cnae/secoes/A|B/divisoes";
	$data = json_decode(file_get_contents($consulta), true);
    
    // consultando pelo id na posição 0 do array , dados de id, seção, descrição da seção e observações
    echo $data[0]["id"];
    echo "<br />";
    echo $data[0]["secao"]["descricao"];
    echo "<br />";
    echo $data[0]["observacoes"][0]
?>