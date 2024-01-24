<h1>Fornecedor</h1>
{{---comentario--}}

{{--@dd($fornecedores)--}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
<h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores)>10)
 <h3>Ecistem varios fornecedores cadastrados</h3> 
 @else
 <h3>Ainda não existem fornecedores cadastrados</h3>
 @endif