
Vista de lista de usuarios

@foreach ($Tabla as $usuario)
<table>
     <thead>
         <tr>
             <th>Alias</th>
             <th>Contraseña</th>
             <th>Nombre</th>
             <th>Apellido</th>
                 
         </tr>
     </thead>
     <tbody>
     <tr>
         <td>{{ $usuario->alias }}</td>
         <td>{{ $usuario->contrasena }}</td>
         <td>{{ $usuario->nombre }}</td>
         <td>{{ $usuario->apellido }}</td>
     
     </tr>
    </tbody>
</table>
<a href="" class="btn btn-success">Link</a>
<br><br><br>    
@endforeach

