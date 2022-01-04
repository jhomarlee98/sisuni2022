<?php
$alumno= $_POST['txtname'];
$email= $_POST['txtmail'];
$cel = $_POST['txtphone'];
$curso= $_POST['txtcurname'];
$f = $_POST['txtcurfre'];
$dni=$_POST['txtdni'];
$horario = $_POST['txtcurhor'];
$inicio = $_POST['txtcurini'];
$frecuencia='';
$asunto="Inscripcion al curso";
$para="sisuni.info@uni.edu.pe";


switch ($f){
    case 1:
        $frecuencia= 'Lunes, miercoles y viernes';
    break;
    case 2:
        $frecuencia= 'Martes y jueves';
        break;
    case 3:
        $frecuencia= 'Sábados';
        break;
    case 4:
        $frecuencia= 'Domingos';
        break;
}


$link="mailto:".$para."?subject=".$asunto." ".$curso."&body=Nombres y apellidos: ".$alumno."%0D%0ACorreo:".$email."%0D%0ACelular: ".$cel."%0D%0ADNI: ".$dni."%0D%0ACurso: ".$curso."%0D%0AHorario: ".$frecuencia." - ".$horario."%0D%0AInicio: ".$inicio;
//echo $link;
header("Location:".$link);
