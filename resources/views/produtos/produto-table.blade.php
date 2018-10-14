<div class="table-responsive">
    <table id="tabela-jqueyDataTable"
           class="table  table-striped  table-bordered  table-hover  table-condensed  js-sticky-table">
        <thead class="aw-table-header-solid">
        <tr>
            <th>Ações</th>
            <th>#</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
        </tr>
        </thead>
        <tbody id="tb-produto-data">
        @foreach ($produtos as $produto)
            <tr>
                <td class="table-pesq-produto-col-acoes">
                    @can('update-produto', $produto)
                        <a id="link_edit" class="btn  btn-primary btn-xs sig-cursor sig-underline js-tooltip" data-toggle="tooltip" title="Editar produto" href="{{ route('edit_produto', ['id' => $produto->id]) }}"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></a>
                    @endcan
                </td>
                <td>{{$produto->id}}</td>
                <td>{{$produto->descricao}}</td>
                <td>{{$produto->quantidade}}</td>
                <td>R$ {{number_format($produto->valor, 2, ',', '.')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>