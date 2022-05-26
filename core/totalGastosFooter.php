<?php	

	$peticionAjax = true;

	require_once "configGenerales.php";

	require_once "mainModel.php";

	

	$insMainModel = new mainModel();

	

	$datos = [

		"fechai" => $_POST['fechai'],

		"fechaf" => $_POST['fechaf'],		

	];		

	
    $query = "SELECT sum(i.total) as total

    FROM ingresos AS i

    INNER JOIN cuentas AS c

    ON i.cuentas_id = c.cuentas_id

    INNER JOIN clientes AS cli

    ON i.clientes_id = cli.clientes_id

    WHERE CAST(i.fecha_registro AS DATE) BETWEEN '".$datos['fechai']."' AND '".$datos['fechaf']."'

    ORDER BY i.fecha_registro DESC";

    $result = $insMainModel->consulta_total_ingreso($query);

    $row = $result->fetch_assoc();
   
    $result = number_format($row['total'],2);	

	echo 'Total: L. '.$result;