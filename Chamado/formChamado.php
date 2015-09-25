<div id="Chamado">
    <h1 class="painelesquerdo">Chamado</h1>
    
    

    <form action="" method="GET">
        <label for="relatado" class="chamado">Relatado Por</label><br />
        <input type="text" name="relatado" size="28" class="campo" id="relatado"/><br />
        <label for="status" class="chamado">Status</label><br />
        <input type="text" name="status" size="28" class="campo" id="status"/><br />
        <label for="impacto" class="chamado">Impacto</label><br />
        <input type="text" name="impacto" size="28" class="campo" id="impacto"/><br />
        <label for="itemConfiguracao" class="chamado">Item de Configuração</label><br />
        <input type="text" name="itemConfiguracao" size="28" class="campo" id="itemConfiguracao"/><br />
        <label for="patrimonio" class="chamado">Número do Patrimônio</label><br />
        <input type="text" name="patrimonio" size="28" class="campo" id="patrimonio"/><br />
        <label for="titulo" class="chamado">Resumo</label><br />
        <input type="text" name="titulo" size="28" class="campo" id="titulo"/><br />
        <label for="descricao" class="chamado">Descrição</label><br />
        <input type="text" name="descricao" size="28" class="campo" id="descricao"/><br />
        <br /><br />
        
        
        <input type="button" name="cancelarchamado" value="CANCELAR" class="botaoCadastro botaoCadastro-blue" onclick="limpaValidacaochamado();limpaForm();"/>
        <input type="submit" name="enviar" value="ENVIAR" class="botaoCadastro botaoCadastro-green" />
    </form>
</div>