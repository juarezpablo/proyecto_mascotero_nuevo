@foreach ($mascota as $mascotas)
<table>
     <thead>
         <tr>
             <th>Nombre de mascota</th>
             <th>Tipo de Mascota</th>
             <th>Sexo</th>
             <th>Edad</th>
                 
         </tr>
     </thead>
     <tbody>
     <tr>
         <td>{{ $mascotas->nombre }}</td>
         <td>{{ $mascotas->tipo_mascota }}</td>
         <td>{{ $mascotas->sexo }}</td>
         <td>{{ $mascotas->edad }}</td>
     
     </tr>
    </tbody>
</table>
<a href="" class="btn btn-success">Link</a>
<br><br><br>    
@endforeach