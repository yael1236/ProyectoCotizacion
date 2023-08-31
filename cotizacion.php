
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="css/menu.css">
  	<link rel="stylesheet" href="css/sb-admin-2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="#" href="pdfPage.html">
    <title>Cotizaciones</title>
</head>
<body>
    <div class="row justify-content-center animate__animated animate__fadeIn">
    <div class="col-12 mx-auto my-5">
      <div class="row justify-content-center">
        <div class="col-12 mx-auto">

          <div class="card border rounded bg-light px-md-5">
            <div class="card-body">
              
              <!-- Cotizaciones -->
              
              
              <div class="row">
                <div class="col-6 p-3">
                  <h3>Cotizaciones</h3>
                </div>
              </div>
              
              <div class="row">
                <div class="col-md-6 col-lg-5 col-xl-4 mb-3">
                  <div class="card shadow p-3 bg-body-tertiary">
                    <div class="card-body">
                      <h3>Datos empresariales</h3>
                      <img src="img/datos.png" class="img-fluid">
                      <br>
                      <br>

                      <!-- formulario -->
                      <form action="app/php/conecion2.php" method="POST">
                        <div class="form-group">
                          <label for="responsable">Responsable:</label>
                          <div class="input-group">
                            <input type="text" name="Responsable" id="Responsable" class="form-control mb-3" id="input-Responsable">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="empresa">Nombre de la empresa:</label>
                          <div class="input-group">
                            <input type="text"name="nomEmp" id="nomEmp" class="form-control mb-3">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="fecha">Fecha:</label>
                          <div class="input-group">
                            <input type="date" name="Fecha" id="Fecha" class="form-control mb-3">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="ubicacion">Ubicación:</label>
                          <div class="input-group">
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control mb-3">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="tamano">Tamaño de la Empresa:</label>
                          <div class="input-group">
                            <select id="PyME" name="PyME" class="form-control form-select mb-3">
                              <option id="PyME" value="Micro">Micro </option>
                              <option id="PyME" value="Pequeña">Pequeña </option>
                              <option id="PyME" value="Mediana">Mediana </option>
                              <option id="PyME" value="Grande">Grande </option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="sector">Sector económico:</label>
                          <div class="input-group">
                            <select name="sector" id="sector" class="form-control form-select mb-3">
                                  <option value="Agropecuarío">Agropecuarío</option>
                                  <option value="Minero">Minero</option>
                                  <option value="Manofactura">Manofactura</option>
                                  <option value="Construcción">Construcción</option>
                                  <option value="Comercío">Comercío</option>
                                  <option value="Comercío">Servicios</option>
                                  <option value="Telecomunicaciones">Telecomunicaciones</option>
                                  <option value="Transporte de carga ">Transporte de carga </option>
                                  <option value="Financiero bancarizado">Financiero bancarizado</option>
                                  <option value="Financiero no bancarizado">Financiero no bancarizado</option>
                                  <option value="Logistica">Logistica</option>
                              </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="monto">Monto propuesta económica:</label>
                          <div class="input-group">
                            <input type="number"  name="monto1" id="monto1" class="form-control mb-3">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="cemefi">Monto CEMEFI:</label>
                          <div class="input-group">
                          </div>
                            <input type="text" id="numero" placeholder="introduce un número" class="form-control mb-3"><br><span id="texto" ></span>
                          
                        </div>

                        <div class="form-group">
                          <label for="copy">Copie y pegue la cantidad en letras que se imprimió:</label>
                          <div class="input-group">
                            <input type="text"  id="numero1" name="numero1" class="form-control mb-3">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="horas">Duración del curso en Horas:</label>
                          <div class="input-group">
                            <input type="text"  name="Hora" id="Hora" class="form-control mb-3">
                          </div>
                        </div>

                        <p>Fecha clave 1</p>
                        <div class="form-group">
                          <label for="fecha1">Publicación de la convocatoria y Registro administrativo</label>
                          <div class="input-group">
                            <select id="fecha1" name="fecha1" class="form-control form-select mb-3">
                              <option id="fecha1" value="Enero">Enero</option>
                              <option id="fecha1" value="Febrero">Febrero</option>
                              <option id="fecha1"  value="Marzo">Marzo</option>
                              <option id="fecha1" value="Abril">Abril</option>
                              <option id="fecha1" value="Mayo">Mayo</option>
                              <option id="fecha1" value="Junio">Junio</option>
                              <option id="fecha1" value="Julio">Julio</option>
                              <option id="fecha1" value="Agosto">Agosto</option>
                              <option id="fecha1" value="Septiembre">Septiembre</option>
                              <option id="fecha1" value="Octubre">Octubre</option>
                              <option id="fecha1" value="Noviembre">Noviembre</option>
                              <option id="fecha1" value="Diciembre">Diciembre</option>
                          </select>
                          </div>
                        </div>

                        <p>Fecha clave 2</p>
                        <div class="form-group">
                          <label for="fecha2">Cierre de la convocatoria y evidencias en plataforma</label>
                          <div class="input-group">
                            <select id="fecha2" name="fecha2" class="form-control form-select mb-3">
                              <option id="fecha2" value="Enero">Enero</option>
                              <option id="fecha2" value="Febrero">Febrero</option>
                              <option id="fecha2" value="Marzo">Marzo</option>
                              <option id="fecha2" value="Abril">Abril</option>
                              <option id="fecha2" value="Mayo">Mayo</option>
                              <option id="fecha2" value="Junio">Junio</option>
                              <option id="fecha2" value="Julio">Julio</option>
                              <option id="fecha2" value="Agosto">Agosto</option>
                              <option id="fecha2" value="Septiembre">Septiembre</option>
                              <option id="fecha2" value="Octubre">Octubre</option>
                              <option id="fecha2" value="Noviembre">Noviembre</option>
                              <option id="fecha2" value="Diciembre">Diciembre</option>
                          </select>
                          </div>
                        </div>

                        <p>Fecha clave 3</p>
                        <div class="form-group">
                          <label for="fecha3">Publicación de resultados y obtención de derechos para el uso del logo como ESR ®</label>
                          <div class="input-group">
                            <select id="fecha3" name="fecha3" class="form-control form-select mb-3">
                              <option value="Enero">Enero</option>
                              <option value="Febrero">Febrero</option>
                              <option value="Marzo">Marzo</option>
                              <option value="Abril">Abril</option>
                              <option value="Mayo">Mayo</option>
                              <option value="Junio">Junio</option>
                              <option value="Julio">Julio</option>
                              <option value="Agosto">Agosto</option>
                              <option value="Septiembre">Septiembre</option>
                              <option value="Octubre">Octubre</option>
                              <option value="Noviembre">Noviembre</option>
                              <option value="Diciembre">Diciembre</option>
                          </select>
                          </div>
                        </div>

                        <p>Fecha clave 4</p>
                        <div class="form-group">
                          <label for="fecha4">Reporte de resultados, Ceremonia de reconocimiento y entrega de estatuillas</label>
                          <div class="input-group">
                            <select id="fecha4" name="fecha4" class="form-control form-select mb-3">
                              <option id="fecha4" value="Enero">Enero</option>
                              <option id="fecha4" value="Febrero">Febrero</option>
                              <option id="fecha4" value="Marzo">Marzo</option>
                              <option id="fecha4" value="Abril">Abril</option>
                              <option id="fecha4" value="Mayo">Mayo</option>
                              <option id="fecha4" value="Junio">Junio</option>
                              <option id="fecha4" value="Julio">Julio</option>
                              <option id="fecha4" value="Agosto">Agosto</option>
                              <option id="fecha4" value="Septiembre">Septiembre</option>
                              <option id="fecha4" value="Octubre">Octubre</option>
                              <option id="fecha4" value="Noviembre">Noviembre</option>
                              <option id="fecha4" value="Diciembre">Diciembre</option>
                          </select>
                          </div>
                        </div>

                        <br>

                        <button href="" class="btn btn-primary form-control mt-2" name="PDF">Guardar
                        </button> 
                        
                    
                        


                      </form>
                      <!-- formulario -->
                      
                    

                    </div>
                  </div>                
                </div>
                <!-- tabla -->
                
                <?php 
echo '
<div class="col-md-6 col-lg-7 col-xl-8 mb-3">
                  <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                      <thead class="bg-primary">
											  <table class="table table-sm table-bordered table-striped mb-0">
														<tr>
														  <th class="text-center" scope="col">#</th>
														  <th scope="col">Responsable</th>
														  <th scope="col">Empresa</th>
														  <th scope="col">PYME</th>
                              <th scope="col"></th>
															</tr>
													<tbody>	
                      </thead                   
                  </div>
</div>
';

$conConTabla = new SQLite3("app/data/cotCORSEC.db");

$cs2 = $conConTabla -> query("SELECT * FROM cotizacion ORDER BY id DESC LIMIT 1 ");
	while ($resul = $cs2 -> fetchArray()) {

    $id = $resul['id'];
    $Responsable = $resul['Responsable'];
    $nomEmp= $resul['nomEmp'];
    $PyME= $resul['PyME'];
    $Fecha = $resul['Fecha'];
    $Hora= $resul['Hora'];
    $fecha1= $resul['fecha1'];
    $fecha2= $resul['fecha2'];
    $fecha3= $resul['fecha3'];
    $fecha4= $resul['fecha4'];
    $monto1= $resul['monto1'];
    $numero= $resul['numero'];
    $numero1= $resul['numero1'];

    echo '	
    <tr class="align-middle" style="font-size: .8em;">										
															<tr>
																<td scope="row" style="text-align: center;" name="idel" id="idel">'.$id.'</td>
																<td class="border-3">'.$Responsable.' </td>
															    <td class="border-3">'.$nomEmp.'</td>
															    <td class="border-3">'.$PyME.' </td>
                                  
                                  
                          <div class="btn-group">
                                                                <td><a href="app/php/eliminar.php"class="btn bg-danger text-light " data-toggle="modal" data-target="#borrarT"><i class="fas fa-trash text-light"></a>
                                                                <a href="javascript:genPDF()" method="POST" type="file" name="archivo" id="archivo" type="button" class="btn btn-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                                                                <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"></path>
                                                                </svg>
                                                                </a>
                                                                </td>
															</tr>
    ';
}
?>
<?php
    echo '												
													</tbody>

                                        
											</table>                                       
    ';
    ?>  
    <div class="mt-5 h3" style="text-align: right;">
    <a href="menu.php" class="a"><svg xmlns="http://www.w3.org/2000/svg" width="2.7rem" height="2.7rem" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg> Regresar</a>
                </div>     
            <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/jspdf.min.js"></script>
        <script type="html2.bundele.min.js"></script>
        <script type="text/javascript">
            function genPDF(){
                /*declareamos las imagenes para visulizarlas en el pdf*/
                var doc=new jsPDF();
                let Nombre=('<?php echo $Responsable; ?>');
                let nomEmp=('<?php echo $nomEmp; ?>');
                let fecha=('<?php echo $Fecha; ?>');
                let PyME=('<?php echo $PyME; ?>');
                let hora=('<?php echo $Hora; ?>');
                let fecha1=('<?php echo $fecha1; ?>');
                let fecha2=('<?php echo $fecha2; ?>');
                let fecha3=('<?php echo $fecha3; ?>');
                let fecha4=('<?php echo $fecha4; ?>');
                let monto=('<?php echo $monto1; ?>');
                let textNum=('<?php echo $numero1; ?>');
                
                var img0=new Image();
                img0.src='img/portada.png';
                var imgse=new Image();
                imgse.src='img/sello.jpg';
                var img1=new Image();
                img1.src='img/img1.png';
                var img2=new Image();
                img2.src='img/img2.png';
                var img3=new Image();
                img3.src='img/img3.png';
                var img4=new Image();
                img4.src='img/img4.png';
                var img5=new Image();
                img5.src='img/img5.png';
                var img7=new Image();
                img7.src='img/img7.png';
                var img8=new Image();
                img8.src='img/img8.png';
                var img9=new Image();
                img9.src='img/img9.png';
                var imagen=new Image();
                imagen.src='img/img3 - copia.png';
                var img10=new Image();
                img10.src='img/img10.png';
                var img11=new Image();
                img11.src='img/img11.png';
                var img12=new Image();
                img12.src='img/img12.png';
                var img13=new Image();
                img13.src='img/img13.png';
                var img14=new Image();
                img14.src='img/img14.png';
                var img15=new Image();
                img15.src='img/img15.png';
                var img16=new Image();
                img16.src='img/img16.png';
                /*
                let mensaje=document.getElementById('esc').value;
                doc.text(20,20,mensaje);
                doc.addPage();*//*codigo para incertar datos*/
                /*primera pagina pdf*/
                /*incertaamos la imagen por su variable*/
                doc.addImage(img0, 'JPEG', 0, 0,216,300);
                /*declarar el tamaño de la letra*/
                doc.setFontSize(16);
                /*declarar el color de la letra*/
                doc.setTextColor(255,255,255);
                doc.text(10,124,'PROPUESTA TÉCNICO – ECONÓMICA');
                doc.text(10,140,'LA GESTIÓN Y OBTENCIÓN DEL DISTINTIVO ');
                doc.text(10,147,'COMO EMPRESA SOCIALMENTE ');
                doc.text(10,154,'RESPONSABLE 2024 EN LA CATEGORÍA DE');
                /*Agregar la pyme por la bd*/
                doc.text(10,161,(("PyME/  ")+(PyME)));
                /*2 pagina pdf*/
                doc.addPage();
                doc.setTextColor(0,0,0);
                doc.addImage(img1, 'JPEG', 0, 0,216,300);
                doc.setFontSize(12);
                doc.text(134,53,(('México a  ')+(fecha)));
                /*Agregar el nombre por la bd*/
                doc.text(15,62,Nombre);
                /*Agregar el nombre por la bd
                doc.setFontType("bold");
                doc.setFontStyle("normal");
                */
                doc.text(15,72,nomEmp);
                doc.text(15,80 ,'PRESENTE:');
                doc.setFontSize(11);
                doc.text(15,98,'Con el gusto de saludarle, me es grato presentar una propuesta técnico-económica para la gestión y ');
                doc.text(15,104,'obtención del');
                doc.setFontType("bold");
                doc.text(39,104,'Distintivo como Empresa Socialmente Responsable 2024');
                doc.setFontStyle("normal");
                doc.text(145,104,(('en la categoría de ')+(PyME)));
                doc.text(15,111,'alineada al nuevo modelo de postulación que establece el Centro Mexicano para la Filantropía, (CEMEFI).');
                doc.text(15,122,'Es importante resaltar que nuestro modelo de consultoría establece una');
                doc.setFontType("bold");
                doc.text(140,122,'base sólida estructural');
                doc.setFontStyle("normal");
                doc.text(182,122,', que');
                doc.text(15,129,(('aporte valor y este alineado a los objetivos estratégicos de ')+(nomEmp)));
                doc.text(15,139,'A escala mundial, las empresas y sus partes interesadas, son cada vez más conscientes de la necesidad');
                doc.text(15,145,'y los beneficios de un comportamiento socialmente responsable, enfocado a la');
                doc.setFontType("bold");
                doc.text(152,145,'reducción de riesgos,');
                doc.text(15,151,'generando una ventaja competitiva. ');
                doc.setFontType("bolditalic");
                doc.setLineWidth(0.5);
                doc.line(20, 204,70, 204);
                doc.text(20,203,'MARCO DE REFERENCIA');
                doc.setFontStyle("normal");
                doc.setFontType("bold");
                doc.text(20,212,'“La Responsabilidad Social Corporativa es el conjunto de principios y normas éticas ');
                doc.setFontStyle("normal");
                doc.text(177,212,' de ');
                doc.text(20,219,'conducta empresarial que minimizan los impactos sociales, ambientales y de gestión. El objetivo de la');
                doc.text(20,226,'Responsabilidad Social es contribuir al Desarrollo Sostenible, mediante un comportamiento ético y');
                doc.text(20,233,'transparente, que tome en consideración las necesidades y expectativas de sus partes interesadas,');
                doc.text(20,240,'cumpla con la legislación y este alineada a la normatividad internacional de comportamiento y sea');
                doc.text(20,247,'transversal a la estrategia del negocio”. (ISO 26000).');
                /*Pagina 3*/
                doc.addPage();
                doc.addImage(imagen, 'JPEG', 0, 0,216,300);
                doc.setFontType("bold");
                doc.text(20,35,'El Centro Mexicano para la Filantropía (CEMEFI), hace referencia: ');
                doc.text(20,52,'“El Distintivo ESR® es un proceso sistémico');
                doc.setFontStyle("normal");
                doc.text(105,52,'para medir y comparar el nivel de madurez de ');
                doc.text(20,59,'las buenas prácticas de responsabilidad social a través de indicadores en los ámbitos ambiental,');
                doc.text(20,66,'social y de gobernanza (ASG) en las empresas.');
                doc.setFontType("bold");
                doc.text(103,66,'Está referenciado con legislación nacional ');
                doc.text(20,73,'y normativa internacional');
                doc.setFontStyle("normal");
                doc.text(68,73,'y contempla la revisión de evidencias para soportar el grado de');
                doc.text(20,80,'ycumplimiento de RS y sostenibilidad de las organizaciones, con el fin de acreditarlas con un ícono');
                doc.text(20,87,'de valor (ESR) que las destaca y diferencia de las empresas que operan en México y América.”');
                doc.text(20,97,'Así mismo le reitero que contamos con un equipo de consultores altamente calificados en este tema y');
                doc.text(20,104,'acreditados por el CEMEFI, lo que nos permite extender una GARANTÍA en nuestros servicios en el');
                doc.text(20,111,'proceso de postulación al Distintivo de Empresa Socialmente Responsable, para esta convocatoria 2024');
                doc.text(20,118,'o la devolución del honorario recibido');
                doc.text(20,138,'El objetivo es alcanzar el más alto nivel, que solo lo vamos a lograr de una manera gradual y orientado');
                doc.text(20,145,'a un sistema de gestión integral.');
                doc.addImage(img2, 'JPEG', 30,155,150,110);
                /*pagina 4*/
                doc.addPage();
                doc.addImage(imagen, 'JPEG', 0, 0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(10);
                doc.text(20,35,'DIEZ ARGUMENTOS PARA INTRODUCIR LA RESPONSABILIDAD SOCIAL EN LA ESTRATEGIA EN');
                doc.text(20,43,nomEmp);
                doc.setLineWidth(0.25);
                doc.line(20, 36,184, 36);
                /*Ingresar nombre de la empreza */
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.text(20,58,'1.	En caso de materializarse un riesgo, a mayor reputación, menor incidencia.');
                doc.text(20,65,'2.	Una buena estrategia de sustentabilidad es un espejo de la buena gobernanza.');
                doc.text(20,72,'3.	En los últimos años se ha presentado un crecimiento y preferencia por el consumo de  ');
                doc.text(30,79,'productos y servicios socialmente responsables, que estén ligados a la atención de ');
                doc.text(30,86,'necesidades sociales y medioambientales.');
                doc.text(20,94,'4.	Integración de cambios y cumplimiento regulatorio federal y local. ');
                doc.text(20,101,'5.	De cara al cliente se envía un mensaje de solidez en la gestión empresarial a largo ');
                doc.text(30,108,'plazo, esto favorece los procesos de evaluación de proveedores. ');
                doc.text(20,115,'6.	Establece los elementos de una comunicación transparente ante los inversionistas y/o ');
                doc.text(30,122,'socios de negocio y grupos de interés, alineando la metodología del global reporting (GRI)  ');
                doc.text(30,129,'para reportes de sustentabilidad.');
                doc.text(20,136,'7.	Influencia en la toma de decisiones de inversionistas y clientes, que hoy en día ');
                doc.text(30,143,'consideran factores ambientales, sociales y de gobernanza, ESG por sus siglas en ingles.  ');
                doc.text(20,150,'8.	Tener como ventaja competitiva la identificación y gestión de riesgos considerándolos ');
                doc.text(30,157,'dentro de su materialidad.');
                doc.text(20,164,'9.	La administración pública confía en aquellas empresas que cooperan con ella en  ');
                doc.text(30,171,'alcanzar objetivos de país en materia de sustenibilidad alineados al Plan Nacional  ');
                doc.text(30,178,'de Desarrollo y a los Objetivos del Desarrollo Sostenible. ');
                doc.text(20,185,'10.	La inversión de carteras ESG en corporaciones con buen desempeño en');
                doc.text(30,192,'sustenibilidad va ganando terreno.');
                /*pagina 5*/
                doc.addPage();
                doc.addImage(img4, 'JPEG', 0, 0,216,300);
                doc.text(44,94,'Somos una empresa especializada en servicios de capacitación, asesoría y');
                doc.text(60,101,'consultoría en Sistemas de Gestión, Desarrollo Empresarial y ');
                doc.text(80,108,'Responsabilidad Social Corporativa.');
                doc.setFontType("bold");
                doc.setFontSize(14);
                doc.text(88,120,'www.corsec.com.mx');
                doc.setFontStyle("normal");
                /*Pagina 6*/
                doc.addPage();
                doc.setFontSize(11);
                doc.addImage(img5, 'JPEG', 0, 0,216,300);
                /*pagina 7*/
                doc.addPage();
                doc.addImage(imagen, 'JPEG', 0, 0,216,300);
                doc.setFontType("bold");
                doc.text(15,25,'LA LÍNEAS ESTRATÉGICAS QUE ESTABLECE EL NUEVO MODELO DE POSTULACIÓN');
                doc.text(54,33,'ESTÁN ALINEADAS A LOS CRITERIOS ESG/ASG');
                doc.line(15, 26,175, 26);
                doc.line(50, 34,147, 34);
                doc.setFontStyle("normal");
                doc.text(15,50,'Las siglas ESG / ASG (ambiental, social y gobernanza), hacen referencia a los factores que convierten a ');
                doc.text(15,57,'una compañía en sostenible a través de su');
                doc.setFontType("bold");
                doc.text(90,57,'compromiso social, ambiental y de buen gobierno, sin ');
                doc.text(15,64,'descuidar los aspectos financieros.');
                doc.text(15,74,'Criterios Ambientales ');
                doc.line(15, 75,55, 75);
                doc.setFontStyle("normal");
                doc.text(15,82,'Se consideran como criterios ambientales dentro de una estrategia ASG/ESG, aquellas actividades ');
                doc.text(15,89,'empresariales que tienen un impacto positivo en el medio ambiente. ');
                doc.setFontType("bold");
                doc.text(15,99,'Criterios Sociales ');
                doc.line(15, 100,46, 100);
                doc.setFontStyle("normal");
                doc.text(15,106,'Principalmente son las acciones relacionadas con condiciones laborales, la equidad e inclusión, el respeto');
                doc.text(15,113,'a los Derechos Humanos, así la promoción de espacios saludables para los colaboradores y la comunidad');
                doc.text(15,120,'en general.');
    
                doc.setFontType("bold");
                doc.text(15,130,'Criterios de Buen Gobierno ');
                doc.line(15, 131,65, 131);
                doc.setFontStyle("normal");
                doc.text(15,137,'Esta área engloba las cuestiones relacionadas con el gobierno corporativo de las organizaciones, su ');
                doc.text(15,144,'corporativa, su cultura y sus procesos de gestión. Cobra especial atención la elaboración de políticas ');
                doc.text(15,151,'internas sólidas y con indicadores claros que se alineen al cumplimiento normativo o la aptitud de los  ');
                doc.text(15,158,'empleados, entre otros.');
                /*pagina 8*/
                doc.addPage();
                var imagen1=new Image();
                imagen1.src='img/imagen1.png';
                doc.addImage(imagen1, 'JPEG', 0, 0,216,300);
                doc.text(15,200,'Fuente: Centro Mexicano para la Filantropía CEMEFI ');
                /*pagina9*/
                doc.addPage();
                doc.addImage(img7,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.text(15,40,'Alineación a los Objetivos del Desarrollo Sostenible (ODS).');
                doc.line(15, 41,130, 41);
                doc.setFontStyle("normal");
                doc.text(15,200,'Fuente. Centro Mexicano para la Filantropía CEMEFI');
                /*pagina 10*/
                doc.addPage();
                doc.addImage(img8,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.setTextColor(255,255,255);
                doc.text(60,35,'ETAPA 1: DEFINIR EL NIVEL DE MADUREZ POR ÁMBITO Y SUB');
                doc.text(115,40,'ÁMBITO');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(15,70,'Para la postulación al Distintivo de Empresa Socialmente Responsable ESR® 2024-2025 de');
                doc.text(15,76,nomEmp);
                doc.text(15,84,'Alineado al nuevo modelo, se requiere definir el nivel de madurez en cada criterio de acuerdo al');
                doc.text(15,90,'ámbito y sub ámbitos.');
                doc.text(15,235,'Fuente: Centro Mexicano para la Filantropía CEMEFI');
                /*Pagina 11*/
                doc.addPage();
                doc.addImage(img9,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.setTextColor(255,255,255);
                doc.text(60,35,'ETAPA 2: PROCESO DE CAPACITACIÓN Y DESARROLLO DE');
                doc.text(115,40,'COMPETENCIAS');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(15,70,'Dirigido: Responsables del proceso y/o comité de RS.');
                doc.text(15,77,'Nota:  En caso de no estar integrado el comité de RS, se brindará la asesoría para conformarlo.');
                doc.setFontType("bold");
                doc.text(35,93,'Curso');
                doc.setFontStyle("normal");
                doc.text(35,100,'Responsabilidad Social como Eje Transversal en la Empresa.');
                doc.setFontType("bold");
                doc.text(35,120,'Objetivo;');
                doc.setFontStyle("normal");
                doc.text(35,127,'Desarrollo de competencias en materia de Responsabilidad Social para la');
                /*Insertar nombre de la empresa*/
                doc.text(40,134,(('Postulación de ')+(nomEmp)+(' al Distintivo ESR®.')));
                doc.setFontType("bold");
                doc.text(35,140,'Temario');
                doc.setFontStyle("normal");
                doc.text(40,145,'Curso de sensibilización “Responsabilidad Social como Eje Transversal en la ');
                doc.text(40,150,'Empresa".');
                doc.text(40,157,'Estructura del modelo de Postulación para la obtención del Distintivo de ESR ®.');
                doc.text(40,164,'Objetivos del Desarrollo Sostenible y Pacto Mundial de las Naciones Unidas.');
                doc.text(40,171,'Elementos para desarrollar un “Plan de Responsabilidad Social”.');
                doc.text(40,178,'Elementos básicos de un sistema de gestión de la Responsabilidad Social.');
                doc.text(40,185,'Componentes básicos de un sistema de gestión de la Responsabilidad Social. ');
                doc.text(40,192,'Procesos de implementación.');
                doc.text(40,199,'Evaluación.');
                doc.text(40,206,'Comunicación.');
                doc.text(40,213,'Mejora continua. ');
                doc.text(40,222,(('Duración; ')+(hora)+(' (estas pueden ser divididas).')));
                /*pagina 12*/
                doc.addPage();
                doc.addImage(img10,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.setTextColor(255,255,255);
                doc.text(78,37,'ETAPA 3:  DESARROLLO DOCUMENTAL ');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(15,70,'Estructura documental del Sistema de Gestión de Responsabilidad Social y entregables de acuerdo a');
                doc.text(15,75,'cada ámbito como lo establece el Modelo de Postulación 2024-2025. ');
                doc.text(20,83,'1.	Análisis de temas materiales');
                doc.text(25,90,'ENTREGABLE ');
                doc.text(25,97,'Análisis de temas materiales ');
                doc.text(20,106,'2.	Desarrollo y/o actualización de los siguientes documentos alineados a los criterios ASG que ');
                doc.text(25,113,'establece el Nuevo Modelo de Postulación ');
                doc.text(15,120,'NOTA: si ya cuenta con alguno se considera o actualiza');
                doc.setFontType("bold");
                doc.text(15,130,'2.1 AMBIENTAL');
                doc.text(25,137,'ENTREGABLES');
                doc.setFontStyle("normal");
                doc.text(30,144,'Programa de gestión ambiental');
                doc.text(30,151,'Programa de recursos ambientales');
                doc.text(30,158,'Programa de manejo de residuos');
                doc.text(30,165,'Plan de gestión ambiental');
                doc.setFontType("bold");
                doc.text(15,173,'2.2 SOCIAL');
                doc.text(25,180,'ENTREGABLES');
                doc.setFontStyle("normal");
                doc.text(30,187,'Programa de derechos laborales');
                doc.text(30,194,'Programa de productos y servicios');
                doc.text(30,201,'Programa de proveedores');
                doc.text(30,208,'Plan social');
                /*pagina 13*/
                doc.addPage();
                doc.addImage(imagen,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.text(15,30,'2.3 GOBERNANZA');
                doc.text(25,37,'ENTREGABLES');
                doc.setFontStyle("normal");
                doc.text(30,44,'Contexto de la RS, partes interesadas, materialidad');
                doc.text(30,51,'Programa de integridad y antisoborno');
                doc.text(30,58,'Programa de concientización de denuncia');
                doc.text(30,65,'Programa conflictos interés');
                doc.text(30,72,'Programa afiliación en cámaras empresariales');
                doc.text(30,79,'Programa de uso de regalos, hospitalidades y donaciones');
                doc.setFontType("bold");
                doc.text(15,88,'2.4 CONTEXTO GLOBAL');
                doc.text(25,95,'ENTREGABLES');
                doc.setFontStyle("normal");
                doc.text(30,102,'Programa de contexto global');
                doc.text(30,109,'Plan de contexto global - prevención de COVID');
                /*Pagina 14*/
                doc.addPage();
                doc.addImage(img11,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.setTextColor(255,255,255);
                doc.text(60,35,'ETAPA 4: PROCESOS DE IMPLEMENTACIÓN Y ACOPIO DE ');
                doc.text(115,40,'EVIDENCIAS');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(62,78,'Elaboración y seguimiento del Plan de ');
                doc.text(62,83,'actividades.');
                doc.text(62,125,'Acopio y clasificación de evidencias.');
                doc.text(62,165,'Registro de evidencias en la Plataforma del ');
                doc.text(62,170,'Centro Mexicano para la Filantropía ');
                doc.text(62,175,'CEMEFI 2024.');
                doc.text(62,213,'Acompañamiento en el evento de ');
                doc.text(62,218,'premiación. ');
                /*pagina 15*/
                doc.addPage();
                doc.addImage(img12,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.text(90,30,'Fechas clave');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                /*mes1*/
                doc.text(115,82,fecha1);
                doc.text(152,72,'Publicación de la ');
                doc.text(149,77,'convocatoria y Registro ');
                doc.text(153,82,'administrativo');
                /*mes 2*/
                doc.text(80,119,fecha2);
                doc.text(29,109,'Cierre de la convocatoria');
                doc.text(33,114,'y evidencias en ');
                doc.text(38,119,'plataforma');
                /*mes3*/
                doc.text(115,155,fecha3);
                doc.text(149,145,'Publicación de resultados y');
                doc.text(149,150,'obtención de derechos para');
                doc.text(149,155,'el uso del logo como ESR ®');
                /*mes 4*/
                doc.text(80,192,fecha4);
                doc.text(29,182,'Reporte de resultados,');
                doc.text(33,187,'Ceremonia de ');
                doc.text(27,192,'reconocimiento y entrega');
                doc.text(34,197,'de estatuillas');
                /*pagina 16*/
                doc.addPage();
                doc.addImage(img13,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(14);
                doc.text(25,25,'BENEFICIOS DE UNA EMPRESA SOCIALMENTE RESPONSABLE');
                doc.setTextColor(255,255,255);
                doc.setFontSize(23);
                doc.text(37,52,'1');
                doc.text(37,80,'2');
                doc.text(37,107,'3');
                doc.text(37,135,'4');
                doc.text(37,164,'5');
                doc.text(37,193,'6');
                doc.text(37,221,'7');
                doc.text(37,249,'8');
                doc.setFontStyle("normal");
                doc.setTextColor(0,0,0);
                doc.setFontSize(11);
                doc.text(75,50,'Mejora de la comunicación con los grupos de interés.');
                doc.text(75,78,'Contribuye a la identificación, gestión y análisis de riesgos.');
                doc.text(75,105,'Reducción de los impactos negativos en la sociedad y el ');
                doc.text(75,110,'entorno, favoreciendo la licencia social para operar. ');
                doc.text(75,132,'Mejora de la imagen y reputación de frente a clientes');
                doc.text(75,137,'nacionales e internacionales y grupos de interés.');
                doc.text(75,162,'Atracción de talento. ');
                doc.text(75,193,'Confiabilidad de inversionistas y socios. ');
                doc.text(75,214,'Integración de otros referenciales como ISO 9001, ');
                doc.text(75,219,'ISO 14001, ISO 45001, NOM 35STPS, 030, 019, por ');
                doc.text(75,224,'mencionar algunos. ');
                doc.text(75,247,'Evaluación de programas sociales.');
                /*pagina 17*/
                doc.addPage();
                doc.addImage(imagen,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.text(15,35,'1.	Requerimientos para la consultoría ');
                doc.setLineWidth(0.25);
                doc.line(15, 36,90, 36);
                doc.setFontStyle("normal");
                /*Nombre de la empresa*/
                doc.text(15,50,(('Asignación de un líder de proyecto para su coordinación con ')+(nomEmp)));
                doc.text(15,60,'Disposición del personal para realizar las labores con el consultor, es de suma importancia para');
                doc.text(15,65,'el logro del proyecto.');
                doc.text(15,73,'Las recomendaciones de mejora deberán de ser implementadas por la empresa en');
                doc.text(15,78,'acompañamiento del equipo consultor.');
                /*Pagina 18*/
                doc.addPage();
                doc.addImage(img14,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(13);
                doc.setTextColor(255,255,255);
                doc.text(105,38,'PROPUESTA ECONÓMICA ');
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(60,72,'CONCEPTO');
                doc.text(145,72,'MONTO');
                doc.setFontStyle("normal");
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(32,79,'Servicio de consultoría para la postulación al ');
                doc.text(32,84,'distintivo como empresa socialmente ');
                doc.text(32,89,'responsable 2024.');
                doc.text(125,79,(('$')+(monto)+(' + IVA.')));
                doc.text(125,84,(('EJEMPLO')+(' pesos más IVA.')));
                doc.text(125,89,'M.N');
                doc.text(25,105,'1.	El monto total se puede pagar en 2 emisiones, el 50% al inicio del proyecto, una vez ');
                doc.text(35,112,'aceptada la propuesta, y el 50% restante al estar todas las evidencias documentales en la');
                doc.text(35,119,'plataforma. ');
    
                doc.text(25,139,'2.	La presente propuesta no incluye el pago al Centro Mexicano para la Filantropía (CEMEFI),');
                doc.text(35,146,(('el cual es un monto de ')+(textNum)+(' CANTIDAD EN LETRA 00/100 M/N). ')));
                
                doc.setFontType("bold");
                doc.text(50,182,'GARANTIZAMOS NUESTROS SERVICIOS EN EL PROCESO DE');
                doc.text(50,187,'POSTULACIÓN AL DISTINTIVO DE EMPRESA SOCIALMENTE ');
                doc.text(50,192,'RESPONSABLE O LA DEVOLUCIÓN DEL HONORARIO INVERTIDO');
                doc.setFontStyle("normal");
                /*pagina 19*/
                doc.addPage();
                doc.addImage(img15,'JPEG',0,0,216,300);
                doc.setFontSize(17);
                doc.setFont("times");
                doc.setFontType("roman");
                doc.text(130,32,'DRA. C. FABIOLA ');
                doc.text(127,39,'POLO MELGAREJO');
                doc.setFontSize(11);
                doc.setFont("arial");
                doc.setFontType("normal");
                doc.text(130,52,'EXPERTA EN SISTEMA DE ');
                doc.text(127,59,'GESTIÓN Y RESPONSABILIDAD ');
                doc.text(132,66,'SOCIAL Y DESARROLLO');
                doc.text(140,73,'SUSTENTABLE');
                doc.setFont("times");
                doc.setFontType("italic");
                doc.setFontSize(10.6);
                doc.text(140, 83, 'fpolo@corsec.com.mx.');
                doc.text(143, 90, 'www.corsec.com.mx');
                doc.text(150, 97, 'Linkedin: ');
                doc.text(105, 104, 'https://www.linkedin.com/in/fabiola-polo-melgarejo-8b1509a2');
                doc.setFont("courier");
                doc.setFontType("normal");
                doc.setFontSize(11);
                doc.text(20, 136, 'DRA. C. FABIOLA POLO MELGAREJO');
                doc.line(18, 137,100, 137);
                doc.setFont("times");
                doc.setFontStyle("normal");
                doc.text(14,144,'Estudios de Doctorado en Innovación y Responsabilidad Social, Maestría en Responsabilidad Social por la');
                doc.text(14,149,'Universidad Anáhuac México Norte, licenciatura en Psicología Social por la Universidad Metropolitana, Estudios de');
                doc.text(14,154,'especialización en Sistemas de Gestión en Responsabilidad Social en la Asociación Española de Normalización,');
                doc.text(14,159,'Madrid España, Certificación en Modelo ESG por la International Association For Sustainable Economy ( IASE ).');
    
                doc.text(14,166,'Socia fundadora de Consultores en Responsabilidad Social Empresarial y Calidad S.C. (GRUPO CORSEC).');
                doc.text(14,171,'Con presencia en México, Latinoamérica, España y Estados Unidos.   ');
                
                doc.text(14,178,'Consultora en empresas nacionales y transnacionales por 25 años en los temas de responsabilidad social ');
                doc.text(14,183,'corporativa, optimización empresarial, riesgos, sistemas de gestión (calidad, medio ambiente y seguridad ');
                doc.text(14,188,'y salud ocupacional), desarrollo y cultura organizacional y fortalecimiento institucional.');
    
                doc.text(14,195,'Especialista en desarrollo de estudios de impacto social EVIS, diagnósticos, procesos de medición y vinculación');
                doc.text(14,200,'comunitaria, Especialista en Factores de Riesgos Psicosociales.');
    
                doc.text(14,207,'Auditor líder Certificado por la Social Accountability International conforme a la Norma SA8000. Especialista en ');
                doc.text(14,212,'auditoria social, laboral y calidad. Implementación e integración de sistemas de gestión de Calidad y ');
                doc.text(14,217,'Responsabilidad Social: ISOS 26000, 9001, 31000, SA8000, AA100, 45000, RS10. Normas 035-STPS 2018, 019, 025,');
                doc.text(14,222,'030. Instructor externo en la Asociación Española de Normalización y Certificación AENOR. Desarrollo de');
                doc.text(14,227,'estrategias en responsabilidad social y sustentabilidad empresarial. Administración de proyectos, análisis de');
                doc.text(14,232,'riesgos, mercadotecnia social, diagnósticos comunitarios, desarrollo sostenible, voluntariado corporativo,');
                doc.text(14,237,'empresa social, organizaciones de la sociedad civil.');
    
                doc.text(14,244,'Conferencista y catedrático en diversas organizaciones nacionales e internacionales. Diseño de materias,');
                doc.text(14,249,'Diplomados y Planes Magistrales.');
                /*pagina 20*/
                doc.addPage();
                doc.addImage(img16,'JPEG',0,0,216,300);
                doc.setFontType("bold");
                doc.setFontSize(14);
                doc.setTextColor(255,255,255);
                doc.text(45,38,'CONFIDENCIALIDAD');
                doc.setFontSize(11);
                doc.setTextColor(0,0,0);
                doc.text(20,72,'GRUPO CORSEC');
                doc.setFontStyle("normal");
                doc.setFont("arial");
                doc.setFontType("normal");
                doc.setFontSize(12);
                doc.text(51,72,', considera y tratará con la mayor privacidad y confidencialidad toda la ');
                doc.text(20,82,'información para la atención del asunto que nos ocupa, ya que ello es la base más importante');
                doc.text(20,92,'para la prestación de nuestros servicios, lo que incluye el contenido del presente documento ');
                doc.text(20,102,'y por ello se clasifica como INFORMACIÓN CONFIDENCIAL.');
                doc.text(20,112,'Agradezco sus atenciones, para cualquier cambio y ajuste a la presente, estamos a sus');
                doc.text(20,122,'órdenes:');
                doc.text(20,142,'Atentamente');
                /*Insertar el sell*/
                doc.addImage(imgse,'JPG',75,145,65,54);    
                doc.text(70,210,'DRA. C. FABIOLA POLO MELGAREJO');
                doc.text(60,217,'DIRECCIÓN DE RESPONSABILIDAD SOCIAL Y ');
                doc.text(90,224,'SUSTENTABILIDAD ');
    
                doc.text(15,232,'Para el caso de estar de acuerdo con la presente propuesta agradeceremos el nombre, cargo y  ');
                doc.text(15,239,'la firma de quien autoriza.');
                doc.text(20,142,'Atentamente;');
                /*insertar nombre*/
                doc.text(17,264,Nombre);
                doc.line(15, 265,100, 265);
                doc.text(35,270,'Nombre');
                doc.line(110, 265,150, 265);
                doc.text(115,270,'Firma');
                /*insertar fecha*/
                doc.text(160,264,fecha);
                doc.line(155, 265,205, 265);
                doc.text(160,270,'Fecha');
    
                doc.save((('Vx-PR-ESR')+(fecha)+(nomEmp)));
            }
        </script>
        <?php 
        $conConTabla -> close();
    ?> 
  
                                </div>
                        </div>
                   
                       
            <!-- fin login -->

        </div>
    </div>

</body>
</html>
<script>
document.getElementById("numero").addEventListener("keyup",function(e){
    document.getElementById("texto").innerHTML=NumeroALetras(this.value);
});
 
 
function Unidades(num){
 
  switch(num)
  {
    case 1: return "uno";
    case 2: return "dos";
    case 3: return "tres";
    case 4: return "cuatro";
    case 5: return "cinco";
    case 6: return "seis";
    case 7: return "siete";
    case 8: return "ocho";
    case 9: return "nueve";
  }
 
  return "";
}
 
function Decenas(num){
 
  decena = Math.floor(num/10);
  unidad = num - (decena * 10);
 
  switch(decena)
  {
    case 1:
      switch(unidad)
      {
        case 0: return "diez";
        case 1: return "once";
        case 2: return "doce";
        case 3: return "trece";
        case 4: return "catorce";
        case 5: return "quince";
        default: return "dieci" + Unidades(unidad);
      }
    case 2:
      switch(unidad)
      {
        case 0: return "veinte";
        default: return "veinti" + Unidades(unidad);
      }
    case 3: return DecenasY("treinta", unidad);
    case 4: return DecenasY("cuarenta", unidad);
    case 5: return DecenasY("cincuenta", unidad);
    case 6: return DecenasY("sesenta", unidad);
    case 7: return DecenasY("setenta", unidad);
    case 8: return DecenasY("ochoenta", unidad);
    case 9: return DecenasY("noventa", unidad);
    case 0: return Unidades(unidad);
  }
}//Unidades()
 
function DecenasY(strSin, numUnidades){
  if (numUnidades > 0)
    return strSin + " y " + Unidades(numUnidades)
 
  return strSin;
}//DecenasY()
 
function Centenas(num){
 
  centenas = Math.floor(num / 100);
  decenas = num - (centenas * 100);
 
  switch(centenas)
  {
    case 1:
      if (decenas > 0)
        return "ciento " + Decenas(decenas);
      return "cien";
    case 2: return "doscientos " + Decenas(decenas);
    case 3: return "trescientos " + Decenas(decenas);
    case 4: return "cuatrocientos " + Decenas(decenas);
    case 5: return "quinientos " + Decenas(decenas);
    case 6: return "seiscientos " + Decenas(decenas);
    case 7: return "setecientos " + Decenas(decenas);
    case 8: return "ochocientos " + Decenas(decenas);
    case 9: return "novecientos " + Decenas(decenas);
  }
 
  return Decenas(decenas);
}//Centenas()
 
function Seccion(num, divisor, strSingular, strPlural){
  cientos = Math.floor(num / divisor)
  resto = num - (cientos * divisor)
 
  letras = "";
 
  if (cientos > 0)
    if (cientos > 1)
      letras = Centenas(cientos) + " " + strPlural;
    else
      letras = strSingular;
 
  if (resto > 0)
    letras += "";
 
  return letras;
}//Seccion()
 
function Miles(num){
  divisor = 1000;
  cientos = Math.floor(num / divisor)
  resto = num - (cientos * divisor)
 
  strMiles = Seccion(num, divisor, "mil", "mil");
  strCentenas = Centenas(resto);
 
  if(strMiles == "")
    return strCentenas;
 
  return strMiles + " " + strCentenas;
 
  //return Seccion(num, divisor, "UN MIL", "MIL") + " " + Centenas(resto);
}//Miles()
 
function Millones(num){
  divisor = 1000000;
  cientos = Math.floor(num / divisor)
  resto = num - (cientos * divisor)
 
  strMillones = Seccion(num, divisor, "un millon", "millones");
  strMiles = Miles(resto);
 
  if(strMillones == "")
    return strMiles;
 
  return strMillones + " " + strMiles;
 
  //return Seccion(num, divisor, "UN MILLON", "MILLONES") + " " + Miles(resto);
}//Millones()
 
function NumeroALetras(num,centavos){
  var data = {
    numero: num,
    enteros: Math.floor(num),
    centavos: (((Math.round(num * 100)) - (Math.floor(num) * 100))),
    letrasCentavos: "",
  };
  if(centavos == undefined || centavos==false) {
    data.letrasMonedaPlural="";
    data.letrasMonedaSingular="";
  }else{
    data.letrasMonedaPlural="";
    data.letrasMonedaSingular="";
  }
 
  if (data.centavos > 0)
    data.letrasCentavos = "punto " + NumeroALetras(data.centavos,true);
 
  if(data.enteros == 0)
    return "cero " + data.letrasMonedaPlural + " " + data.letrasCentavos;
  if (data.enteros == 1)
    return Millones(data.enteros) + " " + data.letrasMonedaSingular + " " + data.letrasCentavos;
  else
    return Millones(data.enteros) + " " + data.letrasMonedaPlural + " " + data.letrasCentavos;
}//NumeroALetras()
</script>