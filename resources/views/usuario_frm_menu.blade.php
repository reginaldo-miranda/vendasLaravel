@extends('layouts.appMenu')

{{-- formulario de menu --}}

@section('conteudo')

   <div class="row"> 
  
    <div class="col-md-4 col-md-4 offset-4 col-sm-8 offset-2 col-xs-12">
      {{-- apresentacao de erros de validacao --}}

        @include('inc.erros')

      {{-------------------------------------------------------------}}

         <form method="POST" action="/usuario_executar_criar_conta">

             {{ csrf_field() }}
             <h1>ca estou</h1>
             <div class>

             </div>
{{-- 
             <div class="text-center">
                  <button type="submit" class="btn btn-primary">Criar nova conta</button>
             </div>  --}}
            
                 {{-- voltar ao inicio --}}
             <div class="text-center margin-top-20">
                <a href="/usuario_logout">Voltar</a>
               {{-- <a href="/">Voltar ao inicio</a>  --}}
             </div> 
         
         </form>

      <div>

    </div>

@endsection