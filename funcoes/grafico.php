<?php

include_once ('phplot/phplot.php');

                    
               $d = filter_input(INPUT_GET, 'd', FILTER_SANITIZE_STRING);
               $i=  filter_input(INPUT_GET, 'i', FILTER_SANITIZE_STRING);
                $s =  filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING);
               $c =  filter_input(INPUT_GET, 'c', FILTER_SANITIZE_STRING);


//           grafico
           
 // Array com dados de Ano x Índice de fecundidade Brasileira 1940-2000
// Valores por década
$data = array(
             array('Dominancia' , $d), 
             array('Influencia' ,  $i ),
             array('Estabilidade' ,  $s ),
             array('Cautela' , $c )
            
             );     
# Cria um novo objeto do tipo PHPlot com 500px de largura x 350px de altura                 
$plot = new PHPlot(700 , 450);     
  
// Organiza Gráfico -----------------------------
$plot->SetTitle('Grafico - Teste DISC');
# Precisão de uma casa decimal
$plot->SetPrecisionY(1);
# tipo de Gráfico em barras (poderia ser linepoints por exemplo)
$plot->SetPlotType("linepoints");
# Tipo de dados que preencherão o Gráfico text(label dos anos) e data (valores de porcentagem)
$plot->SetDataType("text-data");
# Adiciona ao gráfico os valores do array
$plot->SetDataValues($data);
// -----------------------------------------------
  
// Organiza eixo X ------------------------------
# Seta os traços (grid) do eixo X para invisível
$plot->SetXTickPos('none');
# Texto abaixo do eixo X
//$plot->SetXLabel("Fonte: Censo Demográfico 2000, Fecundidade e Mortalidade Infantil, Resultados\n Preliminares da Amostra IBGE, 2002");
# Tamanho da fonte que varia de 1-5
$plot->SetXLabelFontSize(3);
$plot->SetAxisFontSize(3);
// -----------------------------------------------
  
// Organiza eixo Y -------------------------------
# Coloca nos pontos os valores de Y
$plot->SetYDataLabelPos('plotin');
// -----------------------------------------------
$plot->DrawGraph();

