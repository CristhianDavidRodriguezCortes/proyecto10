<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="{{url('crear')}}">
{!! csrf_field()!!}
  <table width="415" height="158" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">crear productos </div></td>
    </tr>
    <tr>
      <td>producto</td>
      <td><label>
        <input type="text" name="nombre" />
      </label></td>
    </tr>
    <tr>
      <td>precio</td>
      <td><input type="text" name="precio" /></td>
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
