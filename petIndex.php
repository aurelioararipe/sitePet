<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Pet Computação UECE</title>
    <link rel="icon" href="Media/LogoPET.png">
    <!--<link rel="stylesheet" type="text/css" href="Css/reset.css">-->
    <link href="Css/petCss.css" rel="stylesheet" type="text/css" />
    
    <link href="scripts/sliders.js" rel="stylesheet" type="text/javascript" />
    
    
</head>

<body>
	
    <!--<div id="paginaTotal">-->
    <header>
      
      	<div id="logoCabecalho">
        	<div id="logoCabecalhoImgpet">
            	<img src="Media/LogoPET.png" alt="PET Computação Logomarca" width="107px" height="77px"/>
            </div>
            <div id="logoCabecalhoTexto">
            	Programa de Educação Tutorial Computação <span class="laranja">UECE</span>
            </div>
        </div>
        
        <nav>
        	<ul>
            	<li>
                    <a href="petIndex.php"> <!-- 1 -->
                        
                        <div class="menuOpcaoTextoTitulo">
                            Ínicio
                        </div>
                        <div class="menuOpcaoCor" id="menuOpcaoCorVerde">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="petIndex.php#atividades"> <!-- 2 -->
                        
                        <div class="menuOpcaoTextoTitulo">
                            Atividades
                        </div>
                        <div class="menuOpcaoCor" id="menuOpcaoCorAzul">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="petIndex.php#integrantes"> <!-- 3 -->
                        <div class="menuOpcaoTextoTitulo">
                            Integrantes
                        </div>
                        <div class="menuOpcaoCor" id="menuOpcaoCorAzulEscuro">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="petIndex.php#sobre"> <!-- 4 -->
                        <div class="menuOpcaoTextoTitulo">
                            Sobre
                        </div>
                        <div class="menuOpcaoCor" id="menuOpcaoCorAmarelo">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="petIndex.php#rodape"> <!-- 5 -->
                        <div class="menuOpcaoTextoTitulo">
                            Contato
                        </div>
                        <div class="menuOpcaoCor" id="menuOpcaoCorVermelho">
                        </div>
                    </a>
                </li>
            </ul>
        </nav>
        
    </header> <!-- FIM CABEÇALHO -->
      
    <main>
      	<aside>
        
            <!--<div class="w3-container">
              <h2>Slideshow Indicators</h2>
              <p></p>
            </div> -->
            <div id="novidadesTexto">Fique por dentro das novidades!</div>
    
            <div class="w3-content w3-display-container" style="max-width:1000px">
              <img class="mySlides" src="media/slide1.jpg">
              <img class="mySlides" src="media/slide2.jpg">
              <img class="mySlides" src="media/slide3.jpg">
              <img class="mySlides" src="Media/secomp.fw.png">
              <div class="w3-row-padding w3-section">
              	<div class="w3-col">
                  <img class="demo w3-border w3-hover-shadow" 
                  src="media/slide1.jpg" onclick="currentDiv(1) ">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-border w3-hover-shadow"
                  src="media/slide2.jpg" onclick="currentDiv(2)">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-border w3-hover-shadow" 
                  src="media/slide3.jpg" onclick="currentDiv(3)">
                </div>
                <div class="w3-col s4">
                  <img class="demo w3-border w3-hover-shadow" 
                  src="Media/secomp.fw.png" onclick="currentDiv(4)">
                </div>
             </div>
              
                <!--<div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
                    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                </div>-->
            </div>

        
        	<script src="scripts/sliders.js"> </script>
        
        	<!--<div id="novidadesTexto">
            	Confira as últimas novidades
            </div>-->
        	
            
        </aside><!--Fim corpoNovidades -->

        <!--<div id="palestrasECursos">
        	<div id="palestrasECursosImagemFundo">
        		<div id="palestrasECursosTexto">
            
        			<div id="palestrasECursosTextoEsquerda">
            			Palestras e Cursos
                		<p> O Pet Computação busca trazer palestras, cursos e minicursos para os estudantes de graduação em Ciência da Computação, com o intuito de estimular o conhecimento em outras áreas.</p>
            		</div>
            		<div id="palestrasECursosTextoDireita">
            			<ul>Mais próximos <p></p>
            				<li> Java Script 05/10/2016</li>
                			<span id="palestrasECursosTextoDireitaTipo">Curso </span>
            	    		<li> GIT 05/10/2016</li>
                			<span id="palestrasECursosTextoDireitaTipo">Curso </span>
                			<li> QR Code 14/08/2016</li>
                			<span id="palestrasECursosTextoDireitaTipo">Palestra </span>
               	 			<li> Total Cross 15/07/2016</li>
                			<span id="palestrasECursosTextoDireitaTipo">Curso </span>
                		</ul>
            		</div>
            	</div>
            	<a id="palestrasECursosTextoDireitaBotao" href="Template/atividades.php">
            	Acesse o calendário geral
            	</a>
         	</div>
        </div> --><!--Fim corpoPalestras -->
        
        <aside>
        	<div id="atividadesTipos">
            	<div class="atividadesTiposCada"> <!-- 1 -->
                	<div class="atividadesTiposCadaImg">
                    	<img src="Media/tutoriaBanner.jpg" alt="Ensino Tutoria" width="318px" height="191px" />
                    </div>
                    <div class="atividadesTiposCadaTexto">
                    	Ensino
                        <p> Projetos para melhorar a graduação de Computação na Universidade Federal do Ceará</p>
                    </div>
                </div>
                <div class="atividadesTiposCada"> <!-- 2 -->
                	<div class="atividadesTiposCadaImg">
                    	<img src="Media/robotica.jpg" alt="Pesquisa" width="318px" height="191px" />
                    </div>
                    <div class="atividadesTiposCadaTexto">
                    	Pesquisa
                        <p> Bandos de Dados, Computação Gráfica, Inteligência Artificial, Interação Humano Computador, Segurança da Informação, entre outros...</p>
                    </div>
                </div>
                <div class="atividadesTiposCada"> <!-- 3 -->
                	<div class="atividadesTiposCadaImg">
                    	<img src="Media/extensao.fw.png" alt="Extensão" width="318px" height="191px" />
                    </div>
                    <div class="atividadesTiposCadaTexto">
                    	Extensão
                        <p> Organizamos a Semana Acadêmica da Computação e a Olímpiada Cearense de Informática</p>
                    </div>
                </div>
                 
            </div>
            <!--<div id="atividadesLinkTexto">
            	Conheça melhor <a href="Template/atividades.php"><span class="laranja">nossas atividades</span></a>
            </div>-->
            <a href="Template/atividades.php" id="atividadesLinkTexto">
            	Conheça melhor nossas atividades
            </a>
        </aside> <!--Fim corpoAtividades -->
        
        <aside>
        	<div id="integrantesTitulo">
            	Integrantes Pet Computação
            </div>
            
            <div id="integrantesPetianos">
            
           		<div id="integrantesPetianosTutor">
                	<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		TUTOR<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
          		</div>
                
            	<div class="integrantesPetianosBolsistasPrimeiros"> <!-- INICIO LINHA 1 -->
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		Aurélio Araripe<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> 
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		2<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div>
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		3<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> <!--FIM DA LINHA 1 -->
                
                <div class="integrantesPetianosBolsistasPrimeiros"> <!--INICIO LINHA 2 -->
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		Aurélio Araripe<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> 
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		2<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div>
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		3<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> <!-- FIM DA LINHA 2 -->   
                
                <div class="integrantesPetianosBolsistasPrimeiros"> <!-- INICIO LINHA 3 -->
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		Aurélio Araripe<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> 
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		2<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div>
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		3<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> <!-- FIM LINHA 3 -->
                
                <div class="integrantesPetianosBolsistasPrimeiros"> <!-- INICIO LINHA 4 -->
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		Aurélio Araripe<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> 
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		2<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div>
                
                <div class="integrantesPetianosBolsistasDepois">
            		<div class="integrantesPetianosFotos">
                    	<img src="Media/aurPet.fw.png" alt="Integrante PET Computação" width="110" height="122"/>
                    </div>
                    <div class="integrantesPetianosDescricao">
                    		3<br />
                        	<span class="laranja">Petiano desde:</span> dez/2015<br />
                        	<span class="laranja">Vínculo:</span> Bolsista<br />
                        	<span class="laranja">Comissão:</span> Eventos<br />
                        	<span class="laranja">Tutoria:</span> Cálculo I<br />
                    </div>
            	</div> <!-- FIM DA LINHA 4 --> 
                
            </div>
        </aside> <!-- FIM corpoINTEGRANTES-->
        
        <aside>
        	<div id="sobrePet">
                       	
                <div id="sobrePetEsquerdaImg">
                    <img id="sobrePetFoto1" src="Media/Tutor.jpeg" alt="Cultura Organizacional PET" width="250px" height="200px"  />
                    <img id="sobrePetFoto2" src="Media/Tutor.jpeg" alt="Cultura Organizacional PET" width="200px" height="260px"  />
                    <img id="sobrePetFoto3" src="Media/Tutor.jpeg" alt="Cultura Organizacional PET" width="180px" height="220px"  />
                    <img id="sobrePetFoto4" src="Media/Tutor.jpeg" alt="Cultura Organizacional PET" width="300px" height="180px"  />
                    
                </div>
                	
                
            	
            </div>
            
            <blockquote>
            	<p> Grupo PET</p>
O PET conta com 779 grupos distribuídos entre 114 Instituições de Ensino Superior distribuídas entre as diferentes áreas do conhecimento e as diversas regiões geográficas do país. De acordo com o estabelecido na Lei nº 11.180/2005, e regulamentado na Portaria MEC 976 de 27 de julho de 2010.
                <p>O que é o PET?</p>
                O PET é desenvolvido por grupos de estudantes, com tutoria de um docente, organizados a partir de formações em nível de graduação das Instituições de Ensino Superior do país, orientados pelo princípio da indissociabilidade entre ensino, pesquisa e extensão. Atualmente, está sob a responsabilidade da Coordenação-Geral de Relações Estudantis (CGRE) da Diretoria da Rede IFES (DIFES). <br />Fonte: 
                <cite> <a href="http://portal.mec.gov.br/index.php?option=com_content&view=article&id=12223&ativo=481&Itemid=480">Portal MEC</a></cite>

				<a class="sobrePetBotao" id="sobrePetBotao" href="Template/sobre.php">
            			Saiba mais
            	</a>
            </blockquote>
            
        </aside> <!-- FIM corpoSobre -->
        
    </main> <!-- FIM CORPO -->
      
    <footer>
      	
        <div id="rodapeTextoContato">
           	Entre em contato conosco
            <div class="icones">
            	<img src="Media/icoMail.fw.png" alt="Endereço eletrônico" width="50px" height="30px"  />
            </div>
            
            <p class="rodapeDetalhesLaranja">petcompuece@googlegroups.com</p>
            
        </div>

        <span class="rodapeDetalhesLaranja">&copy PET Computação Uece</span>

        <div id="rodapeTextoLocaliza">
        	Não sabe onde o Pet Computação fica?
            
            <a href="https://www.google.com.br/maps/dir/-3.7871105,-38.5539198//@-3.786916,-38.5541562,19z" target="new"> 
                	<div class="icones">
                		<img class="bw" src="Media/icoMaps.fw.png" alt="Localização PET" width="50" height="40"/>
                    </div>
                    <div id="rodapeTextoLocalizaTexto" class="rodapeDetalhesLaranja">
    	             	Localize-nos
                    </div>   
            </a>

            
        </div>  

    </footer> <!-- FIM RODAPE -->
      
    <!--</div>--> <!-- FIM PAG TOTAL -->
    
    
</body>
</html>