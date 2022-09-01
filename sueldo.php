<?php 
$sueldo = $_POST["sueldoM"];
$diasTrabajados = $_POST["diasT"];
$planP = $_POST["planPago"];
$planRet = $_POST["Pret"];
$prestaciones = $_POST["OPres"];
$fechaE = $_POST["fechaEnt"];
$fechaS = $_POST["fechaSal"];


//Calcular tiempo transcurrido entre la fecha de entrada y fecha de salida
    $fechainicial = new DateTime($fechaE);
    $fechafin = new DateTime($fechaS);
    $diferencia_dias = $fechainicial -> diff($fechafin);
    $Diferencia = $diferencia_dias ->days - ($diferencia_dias->y*365);

if($planRet==0){ //Condicional de plan de retiro por finiquito
    if($planP == 0){//Condicional anidado de Plan de pago semanal
        $SD =$sueldo/7;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M mes(es) %D dia(s)')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por finiquito es de: ".floor($finiquito)."<br>";
    }

    elseif($planP == 1){//Condicional anidado de Plan de pago quincenal
        $SD = $sueldo/15;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M meses %D dias')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por finiquito es de: ".floor($finiquito)."<br>";

    }

    elseif($planP == 2){//Condicional anidado de Plan de pago mensual
        $SD = $sueldo/30;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M meses %D dias')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por finiquito es de: ".floor($finiquito)."<br>";
    }
}


else if($planRet==1){//Condicional de plan de retiro por liquidacion
    if($planP == 0){//Condicional anidado de Plan de pago semanal

        $SD = $sueldo/7;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;
        $liquidacion = $finiquito + ($SD*90);

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M meses %D dias')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por liquidacion es de: ".floor($liquidacion). "<br>";
    }
    elseif($planP == 1){//Condicional anidado de Plan de pago quincenal

        $SD = $sueldo/15;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;
        $liquidacion = $finiquito + ($SD*90);

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M meses %D dias')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por liquidacion es de: ".floor($liquidacion). "<br>";
}
    elseif($planP == 2){//Condicional anidado de Plan de pago mensual

        $SD = $sueldo/30;
        $pagoDiasT = $diasTrabajados*$SD;
        $PropAg = (($Diferencia*15)/360)*$SD;
        $PropVac = (($Diferencia*8)/360)*$SD;
        $PrimVac = $PropVac/4;

        $finiquito = $pagoDiasT + $PropAg + $PropVac + $PrimVac + $prestaciones;
        $liquidacion = $finiquito + ($SD*90);

        print "fecha de entrada: $fechaE <br> fecha de salida: $fechaS <br>";
        print "El tiempo transcurrido es de " .$diferencia_dias ->format('%Y año(s) %M meses %D dias')."<br>";
        // print "El pago de los ultimos dias trabajados es de $PagoDiasT <br>";
        // print "El proporcional de aguinaldo es de: $PropAg <br>";
        // print "El proporcional de vacaciones es de: $PropVac <br>";
        // print "La prima de vacaciones es de: $PrimVac <br>";
        print "Su dinero total por liquidacion es de: ".floor($liquidacion). "<br>";
    }
}
?>