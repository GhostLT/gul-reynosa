<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
function ver(image){
document.getElementById('image').innerHTML = "<img src='"+image+"'>" 
}
</script>
<form action="funciones/sube.php" method="post" enctype="multipart/form-data"> 
    Archivo: <input name="file" type="file"  onChange="ver(form.file.value)"> 
    <input name="submit" type="submit" value="Upload!">  
</form><br> <span id="image"></span> 
</head>
<body>
	La imagen fue enviada con exito.<br><strong>Datos:</strong><br>
<ul>
  <li>Tipo <?=$tipo?></li>
  <li>Ubicasion http://www.midomini.com.ar/<?=$destino . '/' .$cad.'.'.$tipo?></li>
</ul><br>
<strong>Codigo HTML:</strong><br>
<textarea name="html" id="html"><img src="http://www.midomini.com.ar/<?=$destino.'/'.$cad.'.'.$tipo?>"><br>Por www.midomini.com.ar</textarea><br>
<img src="http://www.midomini.com.ar/<?=$destino.'/'.$cad.'.'.$tipo?>"> 
</body>
</html>