<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{url('usuario')}}">
{!! csrf_field()!!}
  <table width="958" height="332" border="1" align="center">

    <tr>
      <td colspan="2"><div align="center">Registrar Usuario </div></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label>
        <input name="nombre" type="text" id="nombre" />
      </label></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><input name="apellido" type="text" id="apellido" /></td>
    </tr>
    <tr>
      <td>Edad</td>
      <td><input name="edad" type="text" id="edad" /></td>
    </tr>
    <tr>
      <td>Genero</td>
      <td><label>
        <select name="genero" id="genero">
          <option value="Hombre">Hombre</option>
          <option value="Mujer">Mujer</option>
          <option value="Otros">Otros</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Correo</td>
      <td><input name="correo" type="text" id="correo" /></td>
    </tr>
    <tr>
      <td>Ciudad</td>
      <td><input name="ciudad" type="text" id="ciudad" /></td>
    </tr>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="Submit" value="Enviar" />
          </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
