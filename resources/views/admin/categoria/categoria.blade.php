@extends('layouts.admin')

@section('conteudo')
    <div class="card-body">
        <div style="align: right">
            <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modelId">
            Novo
        </button>
      </div>
      <br>
        <h4 class="card-title">Categoria Registadas</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr class="table-primary" style="color: blue;" >
                <th><b >Nº DE ORDEM</b> </th>
                <th> <b>NOME CATEGORIA</b></th>
                <th><b>EDITAR</b></th>
                <th><b>ELIMINAR</b></th>
              </tr>
            </thead>
            <tbody>
                @php
                    $cont = 0;
                @endphp
        @foreach ($Categoria as $item)
                @php
                    $cont++;
                @endphp
                <tr>
                <td> {{$cont}} </td>
                <td>{{ $item ->nome }}</td>

                <td>
                    <button class="btn btn-info" data-toggle="modal" data-target="#modelId1" id=""><i class="icon-pencil"></i></button>
                    @php
                        /*$nomes = array("A");
                        array_push($nomes, "B");
                        array_push($nomes, "C");*/
                       @endphp

                    <!-- Modal Editar-->
            <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style="color: black">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Actualizar Categoria </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form action="{{route('categoria.actualizar',$item->id)}}" method="post">
                                        @csrf
                                        @method('put');
                                            <div class="modal-body">
                                            <div class="container-fluid">
                                            Nome: <input type="text" name="nome" id="" value="{{$item->nome}}">
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black">Cancelar</button>
                                            <button type="submit" class="btn btn-primary" style="color: black">Salvar</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                        </form>

                </td>
                <td><form action="{{route('categoria.apagar', $item ->id)}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                </form></td>
              </tr>
        @endforeach
            </tbody>
          </table>
        </div>
      </div>


      <!-- Modal Criar Categoria-->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Nova Categoria</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
 <form action="{{route('registar')}}" method="post">
    @csrf
            <div class="modal-body">
              <div class="container-fluid">
                Nome: <input type="text" name="nome">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" style="color: black">Cancelar</button>
              <button type="submit" class="btn btn-primary" style="color: black">Salvar</button>
            </div>
          </div>
        </div>
      </div>
</form>
      <script>
        $('#exampleModal').on('show.bs.modal', event => {
          var button = $(event.relatedTarget);
          var modal = $(this);
          // Use above variables to manipulate the DOM

        });
      </script>

@stop
