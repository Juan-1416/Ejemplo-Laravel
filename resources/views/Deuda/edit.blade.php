@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('deuda.update',$deuda)}}" method="POST">
        @method('PUT')
        {{csrf_field()}}
 
        <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Cliente id</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="cliente_id" value="{{$deuda->cliente_id}}" placeholder="col-form-label">
            </div>

          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Dias de Mora</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="diasMora" value="{{$deuda->diasMora}}" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">ValorPagar</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="valorPagar" value="{{$deuda->valorPagar}}" placeholder="col-form-label">
            </div>
          </div>


          <input type="submit" name="btn_1" value="RegistroDeuda">
    </form>

    </section>

    @endsection
