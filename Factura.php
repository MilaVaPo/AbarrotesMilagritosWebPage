<html>
<head><title>Factura</title>
</head>
<body bgcolor="#a2f789">
<?php
  
   $E = $_POST['edad'];
  $IMP1 = ($_POST['pre1'])*($_POST['cant1']);
  $IMP2 = ($_POST['pre2'])*($_POST['cant2']);
  $IMP3 = ($_POST['pre3'])*($_POST['cant3']);
  $ST= $IMP1+$IMP2+$IMP3;
  $IGV= (0.18*$ST);
  $TOT= $ST+$IGV;
  
  print "<br>";
  print "<br>";
  print "<br>";
  print "<br>";
  print "<br>";
  print "<br>";
  print "<form>";
  
  print "<table  align=center border=2 width='57.8%' style=' margin-top: -80px;
  margin-right: 10px;
  margin-bottom: 0px;
  margin-left: 526px;' height='1%' cellpadding=5  bgcolor='#f7f589'>";
  print "<tr><td align=center ><img src='logo_abarrotesMili.jpg' width='100%' height='100%'></td><td align=center width='61.8%' align=center>Abarrotes Milagritos<br>Av. condorcanqui 1412 , Carabayllo<br>Telf:962267483</td></tr>";
  print "</table>";
  print "<table border=2 align=Center bgcolor='#f7f589' cellpadding=6  width='22.8%'>";
  print "<tr><td>Nombre o Empresa:</td><td align=center>$_POST[nom]</td></tr>";
  print "<tr><td>Apellidos:</td><td align=center> $_POST[apelli]</td></tr>";
  print "<tr><td>Edad:</td><td align=center> $E</td></tr>";
  print "<tr><td>Direcci&oacute;n Domiciliaria:</td><td align=center> $_POST[dir]</td></tr>";
  print "</table>"; 
  print "</form>";
  
  print "<form>";
  print "<table border=2 align=center style=' margin-top: -16px;
  margin-right: 100px;
  margin-bottom: 200px;
  margin-left: 526px;' bgcolor=#f7f589>";
print "<tr><td>PRODUCTO</td><td align=center>CANTIDAD</td><td>DESCRIPCION</td><td>PRECIO UNITARIO</td><td align= center>IMPORTE</td></tr>";
print "<tr><td align=center><input type='text' value='ACEITE' readonly></td><td align=center width='90%'>$_POST[cant1] </td><td><input type='text' value='' readonly></td><td width='50%' align=center>$_POST[pre1]</td><td align=center width='200%'>$IMP1$</td></tr>";
print "<tr><td align=center><input type='text' value='FIDEOS' readonly></td><td align=center width='30%'>$_POST[cant2]</td><td><input type='text' value='' readonly></td><td align=center>$_POST[pre2]</td><td align=center width='30%'>$IMP2$</td></tr>";
print "<tr><td align=center><input type='text' value='LECHE' readonly></td><td align=center width='30%'>$_POST[cant3]</td><td><input type='text' value='' readonly></td><td align=center>$_POST[pre3]</td><td align=center width='30%'>$IMP3$</td></tr>";
print "</table>";

print "<table border=2 align=center style=' margin-top: -200px;
  margin-right: 20px;
  margin-bottom: -50px;
  margin-left: 1050px;'  width='11.999%' bgcolor=#f7f589>";
print "<tr><td align=center bgcolor='#b8b8b3'>SUBTOTAL</td><td align=center>$ST$</td></tr>";
print "<tr><td align=center bgcolor='#b8b8b3'>IGV (18%)</td><td align=center>$IGV$</td></tr>";
print "<tr><td align=center bgcolor='#b8b8b3'>TOTAL </td><td align=center>$TOT$</td></tr>";
print "</table>";

print "<table align=center border=2 width='39%' style=' margin-top: -95px;
  margin-right: 200px;
  margin-bottom: -500px;
  margin-left: 525px;' height='15%' bgcolor=#f7f589>";
print "<tr><td align=center>CANCELADO <br><br> Lima , <input type='text' value='19' readonly>de <input type='text' value='julio' readonly>  del 2017</td></tr>";
print "</table>";

print "<table align=center border=2 width='35%' style=' margin-top: 105px;
  margin-right: 200px;
  margin-bottom: -510px;
  margin-left: 825px;' height='27.9%' bgcolor=#f7f589 >";
print "<tr align=center>
             <td>R.U.C.</td>
          </tr>";
print "<tr align=center>
             <td  bgcolor='#b8b8b3'><font face='arial black' size=6><b>FACTURA</b></td>
          </tr>";
print "<tr align=center>
             <td>001 - Nro 000100</td>
          </tr>";

print "</table>";
print "</form>";
?> 
</body>
</html>