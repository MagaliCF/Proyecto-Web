<%
String nombre=request.getParameter('Nombre');
String []materias=request.getParameterValues("Materias");
%>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Nombre: <%=nombre%>
    <br>
      Materias:
      <%
      if (materias!=null) {
          for (int i=0;i<materias.lenght ;i++ ) {
              out.println(materias[i]);
          }
      }
      %>
      <br>
  </body>
</html>
