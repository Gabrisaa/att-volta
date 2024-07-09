@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">CADASTRE UM NOVO CONTATO</h1>
            </div>
            <form action="{{route('gravaNovoContato')}}" method="POST">
        </div>
        <div class="form-group">
            @csrf
            <label for="nomeContato">Nome:</label>
                <input type="text" class="form-control" name="nomeContato" placeholder="Informe o nome do contato">
        </div>
    <div class="form-group">
        <label for="nome Contato">Telefone:</label>
            <input type="text" class="form-control" name="telContato" maxlength="11" onkeyup="formatar Telefone(this)" placeholder="() ">
</div>
    <div class="form-group">
        <label for="nomeContato">E-mail:</label>
        <input type="email" class="form-control" name="emailContato" placeholder="Informe o e-mail do contato">
    </div>
    <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
    <button onclick="window.location.href='{{route('indexContatos')}}';" type="button"
        class="btn btn-outline-danger btn-sm">Cancelar</button>
            </form>
</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
function formatarTelefone (input) {
// Remove todos os caracteres não numericos
var telefone
input.value.replace(/\D/g,'');
// Insere os parénteses, espaço e traço nos lugares corretos
telefone telefone.replace(/(\d{2})(\d{5)) (\d{4})/, '($1)52-53');
// Atualiza o valor de campo de entrada com o telefone formatado
input.value telefone;
}
</script>
@endsection