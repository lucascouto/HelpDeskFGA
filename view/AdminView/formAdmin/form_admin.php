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

<div id="local" data-toggle="modal" data-target="#localModal" class="divButton">
    <span class="fa fa-map-marker fa-5x opcoes-icons"></span>
    <p></p>
    <span class="menu-text">Incluir Local</span>
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
          <p><label class="labels labelChamadoLeftUpper">Número de Chamados:</strong></label>
              <label class="labels labelChamadoLeftUpper"><?php echo count($chamados); ?></label></p>
        
          <label class="labels labelChamadoRightUpper"><strong>Histórico Geral</strong></label>
            <table class="table table-striped"><tr>
                    <td><strong>Número</strong></td>
                    <td><strong>Descrição</strong></td>
                </tr>
                <?php
                $rows = count($chamados);
                for ($row = 0; $row < $rows; $row++) {
                    echo "<tr>";
                     for($col = 0; $col < 2; $col++ ) {
                      echo "<td>".
                       $chamados[$row][$col]."</td>";
                     }
                     echo "</tr>";
                     
                }
                 ?>
            </table>
            
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
                          <input type="radio" name="tipo_usuario" id="solicitante" value="0" checked> Solicitante
                        </label>
                        <label class="btn w3-teal">
                            <input type="radio" name="tipo_usuario" id="tecnico" value="1"> Técnico
                        </label>
           </div>          
          <p> <label class="labels labelChamadoRightUpper">Matrícula</label>
              <input type="text" name="matricula_busca" class="form-control inputChamado inputChamadoRightUpper"></p>
          <p><button type="submit" class="w3-btn w3-teal btn-registrar" id="buscarUsuario" name="buscarUsuario" data-target="#bloquearModal">Buscar</button>
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
                  <input type="hidden" name="tipousuario" value="<?php echo $tipoUsuario?>">
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
        <form method="post" action="">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Técnico</h4>
      </div>
      <div class="modal-body">
             <label class="labels labelSubscribeLeft">Nome Completo</label>
        <input type="text" name="txtName" class="form-control inputSubscribeLeft" tabindex="1" required>
        <label class="labels labelSubscribeLeft">Matrícula</label>
        <input type="text" name="txtMatricula" id="txtMatricula" class="form-control inputSubscribeLeft" tabindex="3" required>
        <label class="labels labelSubscribeLeft">Nome de Usuário</label>
        <input type="text" name="txtUserName" class="form-control inputSubscribeLeft" tabindex="5" required>
        <label class="labels labelSubscribeLeft">Email</label>
        <input type="text" name="txtEmail" class="form-control inputSubscribeLeft" tabindex="5" required>
        <label class="labels labelSubscribeLeft">Senha</label>
        <input type="password" name="txtSenha" id="txtSenha" class="form-control inputSubscribeLeft" tabindex="6" required>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" name="cadastroTecnico" class="w3-btn w3-teal btn-registrar" value="Cadastrar">
      </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal Cadastro Local-->
<div class="modal fade" id="localModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" >
        <form method="post" action="" id="Patrimonio">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Cadastrar Local</h4>
      </div>
       
      <div class="modal-body">
          
           <select class="form-control " name="edificio">
                    <option value="" selected>...</option>
                    <option value="UAC">UAC</option>
                    <option value="UED">UED</option>
                    <option value="MESP">MESP</option>
                </select>
                <br>
                <label class="labels labelLocal">Sala</label>
                <input type="text" name="sala" class="form-control ">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <button type="submit" id="cadastroLocal" name="cadastroLocal" class="w3-btn w3-teal btn-registrar">Cadastrar</button>
      </div>
    </form>
    </div>
  </div>
</div>
