@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('alquiler.update', $alquiler)}}" method="POST">
        @method('PUT')
        {{csrf_field()}}
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label" >Fecha Alquiler</label>
            <div class="col-sm-10">
                <input type="date" step="1" name="fechaAlquiler" value="{{$alquiler->fechaAlquiler}}"> 
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Fecha Devolucion</label>
            <div class="col-sm-10">
                <input type="date" step="1" name="fechaDevulucion" value="{{$alquiler->fechaDevulucion}}"> 
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="colFormLabel"name="nombre" value="{{$alquiler->nombre}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cantidad</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="cantidad" value="{{$alquiler->cantidad}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Sub Total</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="subTotal" value="{{$alquiler->subTotal}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">IVA</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel" name="iva" value="{{$alquiler->iva}}" placeholder="col-form-label">
            </div>
          </div>

          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cliente id</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="cliente_id" value="{{$alquiler->cliente_id}}" placeholder="col-form-label">
            </div>

            <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Pelicula id</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="pelicula_id" value="{{$alquiler->pelicula_id}}" placeholder="col-form-label">
            </div>

          <input type="submit" name="btn_1" value="RegistroAlquiler">
    </form>
         
    </section>

    @endsection