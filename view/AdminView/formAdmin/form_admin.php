<div id="cadastrar" data-toggle="modal" data-target="#cadastroModal" class="divButton">
   <span class="fa fa-laptop fa-5x opcoes-icons"></span>
   <br>
   <span class="menu-text">Cadastrar Patrimônio</span>
</div>

<div id="relatorio" data-toggle="modal" data-target="#relatorioModal" class="divButton">
    <p></p>
    <span class="fa fa-file-text fa-5x opcoes-icons"></span>
    <p></p>
    <span class="menu-text">Relatórios</span>
</div>

<div id="bloquear" data-toggle="modal" data-target="#bloquearModal" class="divButton">
    <span class="fa fa-ban fa-5x opcoes-icons"></span>
    <br>
    <span class="menu-text">Remover Acesso</span>
</div>

<div id="gerenciar" data-toggle="modal" data-target="#gerenciarModal" class="divButton">
    <span class="fa fa-user fa-5x opcoes-icons"></span>
    <br>
    <span class="menu-text">Gerenciar Técnico</span>
</div>

<!-- Modal Cadastro Patrimônio -->
<div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" >
        <form method="post" action="" id="Patrimonio">
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

<!-- Modal Remover Acesso -->
<div class="modal fade " id="bloquearModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Remover Acesso</h4>
      </div>
        <form method="post" action="" id="Bloquear">
      <div class="modal-body">
          
          <p><label class="labels labelChamadoRightUpper">Tipo de Usuário</label></p>
          <p><div class="btn-group" data-toggle="buttons">
                        <label class="btn w3-teal active">
                          <input type="radio" name="options" id="solicitante" autocomplete="off" checked> Solicitante
                        </label>
                        <label class="btn w3-teal">
                          <input type="radio" name="options" id="tecnico" autocomplete="off"> Técnico
                        </label>
          </div></p>          
          <p> <label class="labels labelChamadoRightUpper">Matrícula</label>
              <input type="text" name="matricula_busca" class="form-control inputChamado inputChamadoRightUpper"></p>
          <p><button type="submit" class="w3-btn w3-teal btn-registrar" id="buscarUsuario" name="buscarUsuario" data-target="bloquearModal">Buscar</button>
          </p></div></form><form method="post" action="" id="Confirmar"><div class="modal-body">
            <table class="table table-condensed">
           
                <tr>
                  <td>Nome:</td>
                  <td><input type="text" disabled name="nome" class="form-control inputChamado inputChamadoRightUpper" value="<?php if($nome_busca!=NULL) echo $nome_busca ?>"></td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td><input type="text" disabled name="email" class="form-control inputChamado inputChamadoRightUpper" value="<?php if($email_busca!=NULL) echo $email_busca ?>"></td>
                </tr>                
          </table>
                  <input type="hidden" name="excluirMatricula" value="<?php echo $matricula ?>"> 
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="w3-btn w3-teal btn-registrar" id="excluirUsuario" name="excluirUsuario">Excluir</button>
      </div>
        </form>
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
