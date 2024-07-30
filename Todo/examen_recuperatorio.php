<?php

    $alumno=[
        ['Nombre'=>'Giovanny','Materia'=>'Ciencia','Calificacion'=>75],
        ['Nombre'=>'jose','Materia'=>'fisica','Calificacion'=>60],
        ['Nombre'=>'miguel','Materia'=>'Ciencia','Calificacion'=>65],
        ['Nombre'=>'juan','Materia'=>'fisica','Calificacion'=>85],
        ['Nombre'=>'gaspar','Materia'=>'Ciencia','Calificacion'=>95]
    ];
    //calcular el prmedio de califica
    $promedio=0;
    foreach ($alumno as $key) {
        $promedio=$promedio+$key['Calificacion'];
        
    }
    echo 'El promedio de las calificaciones es: '.$promedio/count($alumno);
    // maxima calificacion mostrar nombre completo
    $maximo=$alumno[0];
    foreach ($alumno as $key => $value) {
        $maximo=($alumno[$key]['Calificacion']>$maximo['Calificacion'])?$alumno[$key]:$maximo;
    }
    echo '<br> la calificacion maxima es de '.$maximo['Nombre'].'_en la materia de '.$maximo['Materia'].' con la nota '.$maximo['Calificacion'];
    //modificar a juan a 51
    foreach ($alumno as $key => $value) {
        ($alumno[$key]['Nombre']=='juan')?$alumno[$key]['Calificacion']=51:"";
    }
    echo "se modifico la nota de juan a 51 ";
    echo "<pre>";
    var_dump($alumno);
    echo "</pre>";
    //buscar estudiante
    $encontrado=[];
    $estudiante=$_GET['algo'];
    foreach ($alumno as $key =>$value) {
        $encontrado=($alumno[$key]['Nombre']==$estudiante)?$alumno[$key]:$encontrado;
    }
    echo (!empty($encontrado))?"Se encontró a " . $encontrado['Nombre'] . ", Materia: " . $encontrado['Materia'] . ", Calificación: " . $encontrado['Calificacion']:"no encontrado";


?>