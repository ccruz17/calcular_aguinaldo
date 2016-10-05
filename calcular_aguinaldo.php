<?php
    include ('functions_ccg.php');
    if(is_ajax_request()) {

        $dias_laborados = $_POST['dias_laborados'];
        $dias_aguinaldo = $_POST['dias_aguinaldo'];
        $sueldo_mensual = $_POST['sueldo_mensual'];

        if(is_numeric($dias_laborados) && is_numeric($dias_aguinaldo) && is_numeric($sueldo_mensual)) {
            $aguinaldo = calcular_aguinaldo($dias_laborados, $dias_aguinaldo, $sueldo_mensual);
            echo json_encode(array('result' => 1, 'msg' => $aguinaldo));
        } else {
            $errors = array();
            if(!is_numeric($dias_laborados)){
                $errors['dias_laborados'] = '<div class="text-danger"><b>Ingresa un valor correcto</b></div>';
            } else if($dias_laborados <= 0 || $dias_laborados > 365){
                $errors['dias_laborados'] = '<div class="text-danger"><b>Ingresa un valor entre 1 y 365</b></div>';
            }

            if(!is_numeric($dias_aguinaldo)){
                $errors['dias_aguinaldo'] = '<div class="text-success"><b>Ingresa un valor correcto</b></div>';
            } else if($dias_aguinaldo < 15){
                $errors['dias_aguinaldo'] = '<div class="text-success"><b>El minimo de días a pagar es de 15</b></div>';
            }

            if(!is_numeric($sueldo_mensual)){
                $errors['sueldo_mensual'] = '<div class="text-info"><b>Ingresa un valor correcto</b></div>';
            } else if($sueldo_mensual < 100){
                $errors['sueldo_mensual'] = '<div class="text-info"><b>Ingresa tu sueldo mensual real</b></div>';
            }


            echo json_encode(array('result' => 0, 'errors' => $errors));

        }

    } else {
        header('location: http://www.calcularaguinaldo.com');
    }
 ?>
