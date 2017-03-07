<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{url('cinema')}}">
{!! csrf_field()!!}
  <table width="527" height="234" border="1" align="center">
    <tr>
      <td colspan="2"><div align="center">cinema</div></td>
    </tr>
    <tr>
      <td>titulo </td>
      <td><label>
        <input name="titulo" type="text" id="titulo" />
      </label></td>
    </tr>
    <tr>
      <td>genero</td>
      <td><label>
       <select name="genero" id="genero">
          <option value="sel:">sel:</option>
          <option value="terror">terror</option>
          <option value="comedia">comedia</option>
          <option value="ficcion">ficcion</option>
          <option value="romance">romance</option>
          <option value="infantil">infantil</option>
          <option value="accion">accion</option>
        
        </select>
      </label></td>
    </tr>
    <tr>
      <td>protagonistas</td>
      <td><input name="protagonistas" type="text" id="protagonistas" /></td>
    </tr>
    <tr>
      <td>idioma</td>
      <td><input name="idioma" type="text" id="idioma" /></td>
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
