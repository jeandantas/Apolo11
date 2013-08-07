<html>
    <head>
        <title> Tex Produtos Naturais | Para uma Vida Saudável </title>
        <link href='http://fonts.googleapis.com/css?family=Stalinist+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="standard.css">
        <style type = "text/css">
            #texto	{
                            width: 700px;
                            float:right;
                            margin-left: 20px;
                            margin-right: 5px;
                            text-align: justify;
                            margin-bottom: 20px;
                    }
            #texto h2 {
                            margin-top: 50px;
                            font-size:23px;
                      }
            
            #texto dd   {
                            margin-left: 20px;
                        }
            #texto dl {
                            width:200px;
                            float:left;
                            margin-bottom:30px;
                            margin-right: 25px;
                       }
             #imagens {
                            background:#00C5CD;
                            height:400px;
                            width:250px;
                            float:left;
                            margin-top:0px;
                            margin-bottom:50px;
                            padding-top: 50px;
                            padding-left: 0px;
                      }
             #imagens dt{
                            margin-top: 15px;
                            margin-bottom: 10px;
                            font-size: 20px;
                            color: Green;
                        }
             #imagens dd{
                            font-size: 15px;
                            margin-bottom: 10px;
                            margin: 0px;
                        }
             #imagens dd a{
                            display: block;
                            text-decoration: none;
                            color: black;
                            padding-left: 40px; 
                        }
             #imagens dd a:hover {
                                    background-color: Snow;
                                    color: green;
                                 }
        </style>
    </head>
    <body>
        <div class = "principal">
            <div style = "position:relative; width:980px; height:230px;">
                <div class = "banner">
                        <img src="imagens/perca-medo-ser-feliz-anamaria-767-11279.jpg" width="980px" height="236px" alt="Primeira Foto" />
                </div>


                <ul id = "nav">
                        <li> <a href = "index.php"> HOME </a> </li>
                        <li> <a href = "produtos.php"> PRODUTOS </a> </li>
                        <li> <a href = "contato.php"> CONTATO </a> </li>
                        <li> <a href = "escritorio.php"> ESCRITORIO VIRTUAL </a> </li>
                        <li> <a href = "sobre.html"> SOBRE </a></li>
                </ul>

                <form id="busca">
                        <input type="text" value=" buscar" name="busca" />
                        <input type="submit" value="OK" id="submit" />
                </form>
            </div>
            <img src = "imagens/scan.png" width = "980px" height = "50px" title = "teste" alt = "teste">
            <div id = "texto">
                    <h2> Forever Living </h2>

                    <p>
                            Experience the difference of Forever Living’s products. Infused with 100% pure aloe vera gel and many other beneficial 
                            botanicals, these products will give you something unexpected. Energy. Vibrancy. Wellness. You’ll notice it right 
                            away—and others will too. The difference is only natural.
                    </p>
                    
                    <?php
                        function remove(&$vetor, $item, $size){
                            for($i = $item; $i < $size - 1; $i++){
                                $vetor[$i] = $vetor[$i+1];
                            }
                        }
                        $forever = array("imagens/forever/bebidas/active_boost.jpg", "imagens/forever/higiene/aloe_first.jpg", "imagens/forever/bebidas/aloe_berry_nectar.jpg", "imagens/forever/higiene/aloe_lips.jpg", "imagens/forever/bebidas/aloe_bits.jpg", "imagens/forever/higiene/aloe_liquid_soap.jpg", "imagens/forever/bebidas/aloe_pomesteen.jpg", "imagens/forever/higiene/arctic_sea.jpg", "imagens/forever/bebidas/aloe_vera_gel.jpg", "imagens/forever/higiene/bright_toothgel.jpg", "imagens/forever/bebidas/aloe_freedom.jpg");
                        $info = array("Active Boost", "Aloe Vera First", "Berry Nectar", "Aloe Lips", "Aloe Vera Bits", "Liquid Soap", "Aloe Pomesteen", "Arctic Sea", "Aloe Vera Gel", "Bright Toothgel", "Aloe Freedom");
                        $price = array("U$$ 15,00", "U$$ 18,25", "U$$ 19,00", "U$$ 33,59", "U$$ 19,99", "U$$ 25,36", "U$$ 30,15", "U$$ 28,00", "U$$ 18,60", "U$$ 23,56", "U$$ 15,00");
                    ?>

                    <dl>
                            <dt><img <?php $item = rand(0, 10); echo 'src = ' .$forever[$item]; remove($forever, $item, 11);?>></dt>     
                            <dd><a href='#'><?php echo $info[$item]; remove($info, $item, 11);?></a></dd>
                            <dd>Mais detalhes</dd>
                            <dd> Price: <?php echo $price[$item]; remove($price, $item, 11);?></dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/forever/bee_pollen.jpg" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Bee Pollen</a></dd>
                            <dd>Excellent supplement from the beehive</dd>
                            <dd>Boosts energy</dd>    
                            <dd>May enhance stamina</dd>
                            <dd> Price: U$ 15,00 </dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/forever/bee_pollen.jpg" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Bee Pollen</a></dd>
                            <dd>Excellent supplement from the beehive</dd>
                            <dd>Boosts energy</dd>    
                            <dd>May enhance stamina</dd>
                            <dd> Price: U$ 15,00 </dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/forever/bee_pollen.jpg" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Bee Pollen</a></dd>
                            <dd>Excellent supplement from the beehive</dd>
                            <dd>Boosts energy</dd>    
                            <dd>May enhance stamina</dd>
                    </dl>
                    <hr style = "clear:both; border-width:1px; border-color: red;">
                    <h2> Herbalife </h2>

                    <p>
                            Experience the difference of Forever Living’s products. Infused with 100% pure aloe vera gel and many other beneficial 
                            botanicals, these products will give you something unexpected. Energy. Vibrancy. Wellness. You’ll notice it right 
                            away—and others will too. The difference is only natural.
                    </p>

                    <dl>
                            <dt><img src="imagens/herbalife/xtra_cal.png" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Xtra Cal</a></dd>
                            <dd>50% da ingestão diária recomendada de Vitamina D</dd>
                            <dd>40% da ingestão diária recomendada de Cálcio</dd>    
                            <dd>57% da ingestão diária recomendada de Magnésio</dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/herbalife/xtra_cal.png" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Xtra Cal</a></dd>
                            <dd>50% da ingestão diária recomendada de Vitamina D</dd>
                            <dd>40% da ingestão diária recomendada de Cálcio</dd>    
                            <dd>57% da ingestão diária recomendada de Magnésio</dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/herbalife/xtra_cal.png" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Xtra Cal</a></dd>
                            <dd>50% da ingestão diária recomendada de Vitamina D</dd>
                            <dd>40% da ingestão diária recomendada de Cálcio</dd>    
                            <dd>57% da ingestão diária recomendada de Magnésio</dd>
                    </dl>

                    <dl>
                            <dt><img src="imagens/herbalife/xtra_cal.png" alt="BEE POLLEN" title = "BEE POLLEN"/></dt>     
                            <dd><a href="#">Xtra Cal</a></dd>
                            <dd>50% da ingestão diária recomendada de Vitamina D</dd>
                            <dd>40% da ingestão diária recomendada de Cálcio</dd>    
                            <dd>57% da ingestão diária recomendada de Magnésio</dd>
                    </dl>
            </div>
            <div id = "imagens">
                <dl>
                    <dt> Forever Living </dt>
                        <dd> <a href ='higiene.php'>Higiene Pessoal</a><dd>
                        <dd> <a href ='sucos.php'>Sucos</a></dd>
                    <dt> Herbalife </dt>
                        <dd> <a href ='nutricao.php'>Nutri&ccedil;&abreve;o</a></dd>
                        <dd> <a href ='fragrancias.php'>Fragrancias</a></dd>
                    <dt> Outros Produtos </dt>
                        <dd> <a href ='naturais.php'>Naturais</a><dd>
                        <dd> <a href ='artificiais.php'>Artificiais</a></dd>
                </dl>
            </div>
            <div id = "creditos">
                    <p>Copyright &copy; 2013 - <b>Text</b> <span> Produtos Naturais </span> </p>
            </div>
        </div>
    </body>
</html>