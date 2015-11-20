<div id="cadastrar" data-toggle="modal" data-target="#cadastroModal">
   <span class="fa fa-laptop fa-5x opcoes-icons"></span>
   <br>
   <span class="menu-text">Cadastrar Patrimônio</span>
</div>

<div id="relatorio" data-toggle="modal" data-target="#relatorioModal">
    <span class="fa fa-file-text fa-5x opcoes-icons"></span>
    <br>
    <span class="menu-text">Relatórios</span>
</div>

<div id="bloquear" data-toggle="modal" data-target="#bloquearModal">
    <span class="fa fa-lock fa-5x opcoes-icons"></span>
    <br>
    <span class="menu-text">Bloquear Acesso</span>
</div>

<div id="gerenciar" data-toggle="modal" data-target="#gerenciarModal">
    <span class="fa fa-user fa-5x opcoes-icons"></span>
    <br>
    <span class="menu-text">Gerenciar Técnico</span>
</div>

<!-- Modal Cadastro Patrimônio -->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" >
        <form method="post" action="" id="cadastrarPatrimonio">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Patrimônio</h4>
      </div>
       
      <div class="modal-body">
          
            <label class="labels labelChamadoLeftUpper">Código de Patrimônio</label>
            <input type="text" name="codPatrimonio" id="codPatrimonio" class="form-control inputChamado inputChamadoleftUpper" maxlength="9" >
            <label class="labels labelChamadoRightUpper">Descrição</label>
            <input type="text" name="nomePatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <label class="labels labelChamadoRightUpper">Marca</label>
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="cadastrarPatrimonio" name="cadastrarPatrimonio" class="w3-btn w3-teal btn-registrar">Cadastrar</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal de Relatório -->
<div class="modal fade" id="relatorioModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Relatório</h4>
      </div>
      <div class="modal-body">
            <label class="labels labelChamadoLeftUpper">Dado 1</label>
            <input type="text" name="codPatrimonio" id="codPatrimonio" class="form-control inputChamado inputChamadoleftUpper" maxlength="9" >
            <label class="labels labelChamadoRightUpper">Dado 2</label>
            <input type="text" name="nomePatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <label class="labels labelChamadoRightUpper">Histórico Geral</label>
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
      </div>
      <div class="modal-footer">
        <button type="button" class="w3-btn w3-teal btn-registrar" >Exibir Histórico de Técnico</button>
        <button type="button" class="w3-btn w3-teal btn-registrar">Exibir Histórico de Solicitante</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Bloquear Acesso -->
<div class="modal fade" id="bloquearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Bloquear Acesso</h4>
      </div>
      <div class="modal-body">
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Tipo de Usuário
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Solicitante</a></li>
                    <li><a href="#">Técnico</a></li>
                </ul>
                </div>
             <label class="labels labelChamadoRightUpper">Matrícula</label>
            <input type="text" name="nomePatrimonio" class="form-control inputChamado inputChamadoRightUpper">
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="w3-btn w3-teal btn-registrar">Buscar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Gerenciar Tecnico -->
<div class="modal fade" id="gerenciarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Patrimônio</h4>
      </div>
      <div class="modal-body">
            <label class="labels labelChamadoLeftUpper">Código de Patrimônio</label>
            <input type="text" name="codPatrimonio" id="codPatrimonio" class="form-control inputChamado inputChamadoleftUpper" maxlength="9" >
            <label class="labels labelChamadoRightUpper">Descrição</label>
            <input type="text" name="nomePatrimonio" class="form-control inputChamado inputChamadoRightUpper">
            <label class="labels labelChamadoRightUpper">Marca</label>
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="button" class="w3-btn w3-teal btn-registrar">Cadastrar</button>
      </div>
    </div>
  </div>
</div>
