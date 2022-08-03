@extends('Template.Template')
@section('plantillaWeb')
<table class="table">
  <div class="container col-12">
  <a href="/deuda/create" class="btn btn-primary">Crear</a>
  </div>
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Cliente</th>
        <th scope="col">Dias Mora </th>
        <th scope="col">Valor a pagar</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($deudas as $deuda)
        <tr>
            <th scope="row">{{$deuda->id}}</th>
            <td>{{$deuda->cliente_id}}</td>
            <td>{{$deuda->diasMora}}</td>
            <td>{{$deuda->valorPagar}}</td>

            <td>
                <a class="btn btn-warning" href="{{route('deuda.edit', $deuda)}}" role="button">editar</a>
            </td>
            <td>
               <form action="{{route('deuda.destroy',$deuda->id)}}" method="Post">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger">Eliminar</button>
               </form>
            </td>
          </tr>
        @endforeach
     

    </tbody>
  </table>
  {{$deudas->links()}}
@endsection
  