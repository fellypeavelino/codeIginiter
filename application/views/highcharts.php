<!DOCTYPE html>
    <html lang="pt-BR">
        <head>
            <meta charset="utf-8">
            <script src="../../js/jquery.js"></script>
            <script src="../../js/highcharts.js"></script>
        </head>
        <body>
            <?php 
                $obj = array(
                    "chart" => array(
                       "renderTo" => "container"
                    ),
                    /*grafico de valores*/
                    "title" => array(
                        "text" => "Array PHP to Josn"
                    ),
                    "crosshairs" => array(true),
                    "xAxis" => array(
                       "type" => 'datetime' 
                    ),
                    "series" => array(
                        array(
                            "name" => "pedro",
                            "data" => array(
                                29.9, 71.5, 
                                106.4, 129.2, 
                                144.0, 176.0, 
                                135.6, 148.5, 
                                216.4, 194.1, 
                                95.6, 54.4
                            ),
                            "pointStart" => mktime(0, 0, 0, 1, 10, 1985),
                            "pointInterval" => 3600 * 1000
                        ),
                        array(
                            "name" => "felipe",
                            "data" => array(
                                30.9, 20.5, 
                                10.4, 180.2, 
                                147.0, 176.0, 
                                155.6, 199.5, 
                                200.4, 20.1,
                                95.6, 54.4
                            ),
                           "pointStart" =>  mktime(0, 0, 0, 1, 22, 1985),
                           "pointInterval" => 3600 * 1000
                        )
                    )
                );
               $obj2 = array(
                   "chart" => array(
                       "type" => "bar"
                    ),
                   "title" => array(
                        "text" => "Array PHP to Josn"
                    ),
                   "xAxis" => array(
                       "categories" => array(
                           'Apples', 'Bananas', 'Oranges','Pear'
                       )
                    ),
                   "yAxis" => array(
                        "text" => "Fruit eaten"
                    ),
                   "series" => array(
                       array(
                            "name" => "pedro",
                            "data" => array(
                                1, 0, 4, 8
                            )
                       ),
                       array(
                            "name" => "felipe",
                            "data" => array(
                                5, 7, 3
                            )
                      )
                   )
               );
                echo"<pre>";
                    //print_r($obj);
                echo"</pre>";
                $objJSON = json_encode($obj);
            ?>
            <div id="container" style="width:100%; height:400px;"></div>
        </body>
        <script>
            var obj = <?php  echo $objJSON;  ?>;
            obj.tooltip = {
    		formatter: function() {
                    return 'The value for <b>' + this.x + '</b> is <b>' + this.y + '</b>, in series '+ this.series.name;
    		},
    		/*
                    formatar o balão de mensagem
                    formatter: callback com retorno
                    ou {css}
    		*/
    		crosshairs: [true]
                /* cada posição no array indica uma serie(elemento no grafico)*/
            };
            $(function(){ 
                $('#container').highcharts(obj);
            });
        </script>
    </html>
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
