@extends('Template.Template')
@section('plantillaWeb')
    <section class="container">
      <form action="{{route('deuda.store')}}" method="POST">
        {{csrf_field()}}

        <div class="row mb-3">
          <label for="colFormLabel" class="col-sm-2 col-form-label">Cliente id</label>
          <div class="col-sm-10">
            <select type="number" class="form-control" id="colFormLabel" name="cliente_id" placeholder="col-form-label">
              @foreach ($clientes as $cliente )
              <option value="{{$cliente->id}}">{{$cliente->nombres}}</option>
              @endforeach
            </select>
          </div>
        </div>

          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Dias de Mora</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="diasMora" placeholder="col-form-label">
            </div>
          </div>
          <div class="row mb-3">
            <label for="colFormLabel" class="col-sm-2 col-form-label">Valor Pagar</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="colFormLabel"name="valorPagar" placeholder="col-form-label">
            </div>
          </div>


          <input type="submit" name="btn_1" value="RegistroAlquiler">
    </form>

    </section>

    @endsection
