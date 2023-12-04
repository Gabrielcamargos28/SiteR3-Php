			<?php
                define('BASE_DIR','/siteR3/visao/');
				//assume que o controle passou uma lista
				foreach($lista as $c){
                    echo "<section class='section-decoracao'>";
                    echo "<div class='box-img'>";
                    echo "<img src='". BASE_DIR. $c->getFoto() . "' alt='' class='img-festas'>";
                    echo "</div>";
                    echo "<div class='texto-decoracao'>";
                        echo "<h1>". $c->getTitulo() ."</h1>";
					
					    echo "<p>" . $c->getTexto() . "</p>";
                    echo "</div>";					
                    echo "<div class='box-produtos'>";
                    echo "<button class='btn-produto'>DECORAÇÃO INFANTIL</button>";
                    echo "<button class='btn-produto'>DECORAÇÃO ADULTO</button>";
                    echo "<button class='btn-produto'>DECORAÇÃO TEMÁTICA</button>";
                    echo "</div>";
                    echo "</section>";
				}
			?>	
            