<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.A-eLeaning</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">
  <style>
   .display {margin-left:150px; margin-top:0px;}
  </style>
</head>

<body>
  <?php
  require_once('ita-elearning-top.php');
  ?>

  <header>Instituto Tecnologico "Ayacucho" &nbsp &nbsp
        <a href="e-learning-menu.php" style="color:red; text-decoration:none;">&nbsp &nbsp &nbsp  e-LEARNING system</a>
        <a href="e-learning-si-menu.php" style="color:blue; text-decoration:none; font-style:normal; font-size:25px; padding-bottom:0px; padding-top:10px;
                  float:right; margin-right:130px;">Sistemas Informaticos</a>
  </header>

  <?php
    $title_nnn=$_GET['nnn'];

    $title_n1=substr($title_nnn,0,1);
    if($title_n1 == '1')    {$title01='1er año';}
    elseif($title_n1 == '2'){$title01='2do año';} else
                            {$title01='3er año';};

    $title_n2=substr($title_nnn,0,2);
    if($title_n2 == '11'){$title02='Progrmacion 1';}
    elseif($title_n2 == '12'){$title02='Hardware';}
    elseif($title_n2 == '13'){$title02='Sistema';}
    elseif($title_n2 == '14'){$title02='Informatica';}
    elseif($title_n2 == '15'){$title02='Matematicas';}
    elseif($title_n2 == '16'){$title02='Grafica';}
    elseif($title_n2 == '21'){$title02='Estadistica';}
    elseif($title_n2 == '22'){$title02='Programacion';}
    elseif($title_n2 == '23'){$title02='Datos';}
    elseif($title_n2 == '24'){$title02='Redes';}
    elseif($title_n2 == '25'){$title02='Dispositivos';}
    elseif($title_n2 == '26'){$title02='Diseno';}
    elseif($title_n2 == '27'){$title02='Diseno';}
    elseif($title_n2 == '28'){$title02='Database';}
    elseif($title_n2 == '31'){$title02='Programacion';}
    elseif($title_n2 == '32'){$title02='Software';}
    elseif($title_n2 == '33'){$title02='Redes';}
    elseif($title_n2 == '34'){$title02='Taller';}
    elseif($title_n2 == '35'){$title02='Diseno';}
    elseif($title_n2 == '36'){$title02='Diseno';}
    elseif($title_n2 == '37'){$title02='Datos';}
    else {$title02='Error';};

    if($title_nnn=='111')    {$title_file='MATERIALS-SI/1er año/1. PROGRAMACION I/ARREGLOS VECTORES CLASE 1.pdf';}
    elseif($title_nnn=='112'){$title_file='MATERIALS-SI/1er año/1. PROGRAMACION I/ARREGLOS VECTORES CLASE 2.pdf';}
    elseif($title_nnn=='113'){$title_file='MATERIALS-SI/1er año/1. PROGRAMACION I/PROGRAMACION 1.pdf';}
    elseif($title_nnn=='121'){$title_file='MATERIALS-SI/1er año/2. HARDWARE/EnsamblajeDeComputadoras.pdf';}
    elseif($title_nnn=='122'){$title_file='MATERIALS-SI/1er año/2. HARDWARE/Tema 1.1 hardware y software.pdf';}
    elseif($title_nnn=='123'){$title_file='MATERIALS-SI/1er año/2. HARDWARE/Tema1.pdf';}
    elseif($title_nnn=='131'){$title_file='MATERIALS-SI/1er año/3. SISTEMAS OPERATIVOS/clase 2 sistema operativo procesos.pdf';}
    elseif($title_nnn=='132'){$title_file='MATERIALS-SI/1er año/3. SISTEMAS OPERATIVOS/Clase 3 Administracion_de_memoria.pdf';}
    elseif($title_nnn=='133'){$title_file='MATERIALS-SI/1er año/3. SISTEMAS OPERATIVOS/Introduccion Sistemas Operativos.pdf';}
    elseif($title_nnn=='141'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/2_MICROSOFT_2.pdf';}
    elseif($title_nnn=='142'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/4_MICROSOFT_4.pdf';}
    elseif($title_nnn=='143'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/10_GNULINUX_5.pdf';}
    elseif($title_nnn=='144'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/16_TICS_Y_EDUCACION.pdf';}
    elseif($title_nnn=='145'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/Manual-Microsoft-Office-Excel-2010.pdf';}
    elseif($title_nnn=='146'){$title_file='MATERIALS-SI/1er año/4. INFORMATICA APLICADA/ofimaticaLinux.pdf';}
    elseif($title_nnn=='151'){$title_file='MATERIALS-SI/1er año/5. MATEMATICAS/Matematicas para informatica.pdf';}
    elseif($title_nnn=='151'){$title_file='MATERIALS-SI/1er año/5. MATEMATICAS/MATEMATICAS PARA LA COMPUTACION.pdf';}
    elseif($title_nnn=='161'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Diseñar Tipografía.pdf';}
    elseif($title_nnn=='162'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Fundamentos del diseño.pdf';}
    elseif($title_nnn=='163'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Logotype.pdf';}
    elseif($title_nnn=='164'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Practica2 Animación de Textos Photoshop.pdf';}
    elseif($title_nnn=='165'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Práctica3 de Photoshop.pdf';}
    elseif($title_nnn=='166'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/Prácticas1 de laboratorio de Photoshop ITA.pdf';}
    elseif($title_nnn=='167'){$title_file='MATERIALS-SI/1er año/6. TECNOLOGIA GRAFICA MULTIMEDIA/tecnologia multimedia.pdf';}

    elseif($title_nnn=='211'){$title_file='MATERIALS-SI/2do año/1. ESTADISTICA/ESTADÍSTICA.pdf';}
    elseif($title_nnn=='221'){$title_file='MATERIALS-SI/2do año/2. PROGRAMACION II/programación ii.pdf';}
    elseif($title_nnn=='231'){$title_file='MATERIALS-SI/2do año/3. ESTRUCTURA DE DATOS/ESTRUCTURA CONDICIONAL.pdf';}
    elseif($title_nnn=='232'){$title_file='MATERIALS-SI/2do año/3. ESTRUCTURA DE DATOS/ESTRUCTURA SECUENCIAL.pdf';}
    elseif($title_nnn=='241'){$title_file='MATERIALS-SI/2do año/4. REDES DE COMPUTADORAS I/Cableado Estructurado.pdf';}
    elseif($title_nnn=='242'){$title_file='MATERIALS-SI/2do año/4. REDES DE COMPUTADORAS I/Curso de Redes.pdf';}
    elseif($title_nnn=='243'){$title_file='MATERIALS-SI/2do año/4. REDES DE COMPUTADORAS I/Ingenieria de redes.pdf';}
    elseif($title_nnn=='244'){$title_file='MATERIALS-SI/2do año/4. REDES DE COMPUTADORAS I/Redes de computadoras - Tanebaum.pdf';}
    elseif($title_nnn=='251'){$title_file='MATERIALS-SI/2do año/5. PROGRAMACION PARA DISPOSITIVOS/DISPOSITIVOS MOVILES.pdf';}
 /*    elseif($title_nnn=='261'){$title_file='MATERIALS-SI/2do año/6. ANALISIS Y DISEÑO DE SISTEMAS I/ANALISIS DE SITEMAS I-negro-1.pptx';} */
    elseif($title_nnn=='271'){$title_file='MATERIALS-SI/2do año/7. DISEÑO DE PROGRAMACION WEB/El+gran+libro+de+HTML5+CSS3+y+Javascrip.pdf';}
    elseif($title_nnn=='281'){$title_file='MATERIALS-SI/2do año/8. BASE DE DATOS I/TEMA 1 FUNDAMENTOS DE BASES DE DATOS.pdf';}
    elseif($title_nnn=='282'){$title_file='MATERIALS-SI/2do año/8. BASE DE DATOS I/TEMA 2 TIPOS DE BASES DE DATOS.pdf';}

    elseif($title_nnn=='321'){$title_file='MATERIALS-SI/3er año/2. GESTION DE SOFTWARE/FUNDAMENTOS DE SOFTWARE TERCERO.pdf';}
    elseif($title_nnn=='322'){$title_file='MATERIALS-SI/3er año/2. GESTION DE SOFTWARE/ld-Ingenieria.de.software.enfoque.practico.7ed.Pressman.pdf';}
    elseif($title_nnn=='331'){$title_file='MATERIALS-SI/3er año/3. REDES DE COMPUTADORAS II/00 Lab02  Servicios de Servidor y subred.pdf';}
    elseif($title_nnn=='332'){$title_file='MATERIALS-SI/3er año/3. REDES DE COMPUTADORAS II/1ra Evaluacion redes2.pdf';}
    elseif($title_nnn=='333'){$title_file='MATERIALS-SI/3er año/3. REDES DE COMPUTADORAS II/03 Lab03  Configuring Basic Router.pdf';}
    elseif($title_nnn=='334'){$title_file='MATERIALS-SI/3er año/3. REDES DE COMPUTADORAS II/04 Lab4  enrut estatico.pdf';}
    elseif($title_nnn=='335'){$title_file='MATERIALS-SI/3er año/3. REDES DE COMPUTADORAS II/06 Lab6  VLAN.pdf';}
    elseif($title_nnn=='341'){$title_file='MATERIALS-SI/3er año/4. TALLER DE MODALIDAD DE GRADUACION/Modalidades de graduación1.pdf';}
    elseif($title_nnn=='342'){$title_file='MATERIALS-SI/3er año/4. TALLER DE MODALIDAD DE GRADUACION/MMODALIDADES-DE-GRADUACION-1.pdf';}
    elseif($title_nnn=='343'){$title_file='MATERIALS-SI/3er año/4. TALLER DE MODALIDAD DE GRADUACION/PERFIL-ULTIMO.pdf';}
    elseif($title_nnn=='351'){$title_file='MATERIALS-SI/3er año/5. ANALISIS Y DISEÑO DE SISTEMAS II/diseño orientado a objetos-1.pdf';}
    elseif($title_nnn=='352'){$title_file='MATERIALS-SI/3er año/5. ANALISIS Y DISEÑO DE SISTEMAS II/INGENIERIA DE REQUERIMIENTOS-1.pdf';}
    elseif($title_nnn=='361'){$title_file='MATERIALS-SI/3er año/6. DISEÑO Y PROGRAMACION WEB II/iniciacionphp.pdf';}
    elseif($title_nnn=='371'){$title_file='MATERIALS-SI/3er año/7. BASE DE DATOS II/TEMA 1 INTRODUCCION A CONSULTAS SQL - BDDII.pdf';}
    else {echo ('Error-selection-contents');};
?>

  <div class="menu_elearning">
      <div><br></div>
      <div class="menu_carrera">
        <ul>
          <li><a style="background-color:blue; color:white; font-size:20px; text-align:center; margin-top:0px;
                        width:140px; font-style:normal;">
                        <strong><?php echo $title01; ?></strong></a></li>
          <li><a style="background-color:white; color:Black; font-size:15px; width:140px; text-align:center; margin-top:0px;
                        font-style:oblique;"><?php echo $title02; ?></a></li>
        </ul>
      </div>
      <div class="display">
          <iframe src="<?=$title_file ?>" type="application/pdf"
                  style="border-color: blue; width:950px; height:500px; "></iframe>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
