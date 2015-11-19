<form id="form-codigo-patrimonio">   
        <div id="formChamadoLeftUpper">
            <label class="labels labelChamadoLeftUpper">Código de Patrimônio</label>
            <input type="text" name="codPatrimonio" id="codPatrimonio" class="form-control inputChamado inputChamadoleftUpper" maxlength="9">
            <input type="submit" class="w3-btn w3-teal btn-registrar" value="Registrar" name="registrar" onclick="mostrarDadosPatrimonio()">
        </div> 
</form>
<form method="post" action="">
        <div id="formChamadoRightUpper">
            <label class="labels labelChamadoRightUpper">Descrição</label>
            <input type="text" name="nomePatrimonio" class="form-control inputChamado inputChamadoRightUpper" value="<?php $descricao_patrimonio ?>">
            <label class="labels labelChamadoRightUpper">Marca</label>
            <input type="text" name="marcaPatrimonio" class="form-control inputChamado inputChamadoRightUpper" value="<?php $marca_patrimonio ?>">
        </div>
    
    <br>
    <div id="local-problema">
        
            <legend class="sectionChamado">Localização e Descrição do Problema</legend>
            <div id="chamadoLocalizacao">
                <label class="labels labelLocal">Edifício</label>
                <select class="form-control inputLocal inputChamado" name="edificio">
                    <option value="" selected>...</option>
                    <option value="UAC">UAC</option>
                    <option value="UED">UED</option>
                    <option value="MESP">MESP</option>
                </select>
                <br>
                <label class="labels labelLocal">Sala</label>
                <input type="text" name="sala" class="form-control inputLocal inputChamado">
            </div>
            <div id="chamadoDescricao">
                <label class="labels labelDescricao">Problemas</label>
                <textarea  name="descricaoChamado" class="form-control descricao inputChamado" rows="9"></textarea>
            </div>
        
        <input type="submit" value="Enviar" name="enviar" class="w3-btn w3-teal w3-ripple botao-enviar-chamado">
    </div>
</form>