@extends('layouts.admin')

@section('conteudo')
    <h1>CATEGORIAS</h1>
       <button type="button" class="btn btn-inverse-primary btn-fw"><a href="{{url("/novo")}}">NOVO </a></button>
      
    <div class="card-body">
        <h4 class="card-title">Categoria Registadas</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-dark">
            <thead>
              <tr>
                <th> Nº DE ORDEM</th>
                <th> NOME CATEGORIA</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
              </tr>
            </thead>
            <tbody>
        @foreach ($Categoria as $item)
              <tr>
                <td> {{(int) $cont =1}} </td>
                <td>{{ $item -> nome }}</td>
                <td></td>
                <td><form action="{{route('categoria.apagar', $item ->id)}}" method="post">
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit">Eliminar</button>  
                </form></td>
              </tr> 
        @endforeach
            </tbody>
          </table>
        </div>
      </div>
     <!--
      <div class="text-center">
        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Click for demo<i class=" icon-arrow-right-circle ms-1"></i></button>
      </div>
    
        
        <!-- Dummy Modal Starts 
        <div class="modal demo-modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-light">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Dummy Modal Ends -->
        <!-- Modal starts 

        <div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel-2" style="display: none;" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Ends 
  
    --> 
@stop