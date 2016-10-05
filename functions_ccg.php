<?php
    /**
    @author: Christian Cruz Garrido.
    @url: http://www.ccruz.ga
    **/

    function calcular_aguinaldo($dias_laborados, $dias_aguinaldo, $sueldo_mensual){
        //obtener sueldo diario
        $sueldo_diario = sueldo_diario($sueldo_mensual);
        //obtener residuo anual
        $residuo_anual = residuo($dias_aguinaldo);
        //
        $residuo_por_salario = residuo_por_salario($residuo_anual, $sueldo_diario);

        return formato_numero($residuo_por_salario * $dias_laborados);
    }

    function formato_numero($numero, $decimales = 2){
        return number_format($numero, $decimales, '.', ',');
    }

    function residuo($dias_aguinaldo) {
        return formato_numero($dias_aguinaldo / 365, 3);
    }

    function sueldo_diario($sueldo_mensual){
        return $quincena = formato_numero($sueldo_mensual / 30);
    }

    function residuo_por_salario($residuo_anual, $sueldo_diario){
        $residuo_anual = str_replace(',', '', $residuo_anual);
        $sueldo_diario = str_replace(',', '', $sueldo_diario);
        return formato_numero($residuo_anual * $sueldo_diario);

    }

	function is_ajax_request(){
		return ( ! empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest');
	}
?>
