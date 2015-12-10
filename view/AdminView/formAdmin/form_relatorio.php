<div id="relatorio-historico"> 
<p><label class="labels labelChamadoLeftUpper">Número de Chamados:</label>
              <label class="labels labelChamadoLeftUpper"><?php echo $numChamados; ?></label></p>
        
          <label class="labels labelChamadoRightUpper"><strong>Histórico Geral</strong></label>
          <div class="text-center" ><table class="table table-striped" id="historicoGeralTable">
                  <thead>
                  <tr>
                    <th data-field="numero" data-align="right" data-sortable="true">Número</th>
                    <th data-field="descricao" data-align="center" data-sortable="true">Descrição</th>
                    <th data-field="status" data-sortable="true">Status</th>
                  </tr></thead>
                  <tbody id="myTable">
                <?php
                $rows = count($chamados);
                for ($row = 0; $row < $rows; $row++) {
                    echo "<tr>";
                     for($col = 0; $col < 2; $col++ ) {
                      echo "<td>".
                       $chamados[$row][$col]."</td>";
                     }
                     switch ( $chamados[$row][6]){
                         default :
                             echo "<td>Aberto</td>";
                             break;
                         case 2 :
                             echo "<td>Em Desenvolvimento</td>";
                             break;
                         case 3 :
                             echo "<td>Em Homologação</td>";
                             break;
                         case 2 :
                             echo "<td>Resolvido</td>";
                             break;   
                     }
                     echo "</tr>";
                     
                }
                ?></tbody>
              </table>
         
              <ul class="pagination pagination-sm" id="myPager"></ul>
          </div></div>
          <div class="btns-historico" >
              
        <button id="btn-historico-tecnico" type="button" class="w3-btn w3-teal" >Histórico de Técnico</button>
              <button id="btn-historico-solicitante" type="button" class="w3-btn w3-teal">Histórico de Solicitante</button>
          </div>
          
          <div id="card-historico-tecnico">
              <button class="w3-btn w3-teal" id="btn-voltar-tecnico"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;Voltar</button>
                </div>
          
          <div id="card-historico-solicitante">
              <button class="w3-btn w3-teal" id="btn-voltar-solicitante"><span class="fa fa-chevron-left"></span>&nbsp;&nbsp;Voltar</button>
                </div>
      