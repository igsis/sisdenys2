<div class="box">
    <div class="box-header">
        <form action="{{route('chamado.filtro')}}"
              method="post" class="form form-inline mb-2">
            @csrf
            <input type="text" name="titulo" class="form-control"
                   placeholder="Titulo do chamado"
                   style="margin-right: 5px;">

            <select name="status" class="form-control">
                <option value=''>Selecione um Status</option>
                <option value="Aberto">
                    Aberto
                </option>
                <option value="Em_Atendimento">
                    Em atendimento
                </option>
                <option value="Fechado">
                    Fechado
                </option>
            </select>

            <input type="date" name="data"
                   class="form-control ml-1 mr-1">

            <input type="text" name="name"
                   placeholder="Nome Usuário"
                   class="form-control mr-1">

            <input type="text" name="tecnico"
                   placeholder="Nome Técnico"
                   class="form-control mr-1">

            <button type="submit" class="btn btn-primary">
                Pesquisar
            </button>
        </form>
    </div>
</div>
