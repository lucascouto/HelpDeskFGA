        <h4 class="modal-title" id="myModalLabel">Relatório</h4>
      
      
          <p><label class="labels labelChamadoLeftUpper">Número de Chamados:</label>
              <label class="labels labelChamadoLeftUpper"><?php echo $numChamados; ?></label></p>
        
          <label class="labels labelChamadoRightUpper"><strong>Histórico Geral</strong></label>
            <table class="tablesorter-bootstrap table table-striped" cellspacing="0" width="100%" id="historicoGeralTable" data-sort-name="name" data-sort-order="desc"><tr>
                    <th data-field="numero" data-align="right" data-sortable="true">Número</th>
                    <th data-field="descricao" data-align="center" data-sortable="true">Descrição</th>
                    <th data-field="status" data-sortable="true">Status</th>
                </tr>
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
                 ?>
            </table>
            
        <button type="button" class="w3-btn w3-teal btn-registrar" >Exibir Histórico de Técnico</button>
        <button type="button" class="w3-btn w3-teal btn-registrar">Exibir Histórico de Solicitante</button>
      