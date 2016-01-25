<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Control de Asistencia de SIGC</title>
   <style type="text/css">
		.hr {
		  page-break-after: always;
		  border: 0;
		  margin: 0;
		  padding: 0;
		}
   </style>
</head>
<body>
    <header>
        <div style="position:relative;">
    		<img src="public/images/centroinvestigacion.png" alt="" style="width:150px;">
    		<img src="public/images/logovacaciones.png" alt="" style="position:absolute; right:50px top:0px; width:140px;">      		
        </div>
        <H3 ALIGN=CENTER><strong>PLANIFICACION DE VACACIONES <?=date('Y')?></strong></H3>
        <H4 ALIGN=CENTER><strong>GERENCIA CENTRO DE INVESTIGACION Y GESTIÓN DEL CONOCIMIENTO</strong></H4>
        <p  ALIGN=CENTER>Intervalo desde Fecha:</p>
    </header>
    <section class="contenido">

        <TABLE BORDER=1>

			<TR>
				<TD  rowspan="2"ALIGN=CENTER WIDTH=15>Nro</TD>
				<TD  rowspan="2"ALIGN=CENTER WIDTH=30>Ficha</TD>
				<TD  rowspan="2"ALIGN=CENTER WIDTH=150>Nombres y Apellidos</TD>
				<TD  rowspan="2"ALIGN=CENTER WIDTH=10></TD>
				<TD  colspan="12" ALIGN=CENTER WIDTH=350><?=date('Y')?></TD>
				<TD  rowspan="2"ALIGN=CENTER WIDTH=150>Observaciones</TD>
			</TR>

			<TR>
				<TD  ALIGN=CENTER>ENE</TD>
				<TD  ALIGN=CENTER>FEB</TD>
				<TD  ALIGN=CENTER>MAR</TD>
				<TD  ALIGN=CENTER>ABR</TD>
				<TD  ALIGN=CENTER>MAY</TD>
				<TD  ALIGN=CENTER>JUN</TD>
				<TD  ALIGN=CENTER>JUL</TD>
				<TD  ALIGN=CENTER>AGO</TD>
				<TD  ALIGN=CENTER>SEP</TD>
				<TD  ALIGN=CENTER>OCT</TD>
				<TD  ALIGN=CENTER>NOV</TD>
				<TD  ALIGN=CENTER>DIC</TD>
			</TR>

			<TR>
				<TD  rowspan="2" ALIGN=CENTER>ENE</TD>
				<TD  rowspan="2" ALIGN=CENTER>FEB</TD>
				<TD  rowspan="2" ALIGN=CENTER>MAR</TD>
				<TD  ALIGN=CENTER>P</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  ALIGN=CENTER>0</TD>
				<TD  rowspan="2"></TD>
			</TR>
			<TR>
				<TD  ALIGN=CENTER>R</TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>
				<TD  ALIGN=CENTER></TD>

			</TR>

		</TABLE>
    	
    </section>
</body>
</html>﻿