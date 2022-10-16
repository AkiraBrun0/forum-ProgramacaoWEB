## Atividade: Fórum ADS
<p align="center">
<img src="https://img.shields.io/github/issues/AkiraBrun0/forum-ProgramacaoWEB"/>
<img src="https://img.shields.io/github/forks/AkiraBrun0/forum-ProgramacaoWEB"/>
<img src="https://img.shields.io/github/stars/AkiraBrun0/forum-ProgramacaoWEB"/>
<img src="https://dcbadge.vercel.app/api/shield/358074186721132545" />
</p>
:construction: Projeto em construção :construction:
<br>
**Página desenvolvida para ativadade no curso de Analise e Desenvilvimento de Sistemas. Com um arquivo XML contendo uma breve descriação de signos, deve-se filtrar as datas a partir de uma entrada de data no formulario, onde a filtragem é realizada pelo arquivo "seletor.php", então mostrada a informação pelo arquivo "mostrar-signo.php"**

Não foi necessário estilizar por enquanto, pois o intuito da tarefa é mostrar corretamente as informações no arquivo XML.

## ✔️ Tecnologias utilizadas
Confira cada uma delas no link.

- [PHP](https://pt.wikipedia.org/wiki/PHP): Linguagem geralmente utilizada no lado do servidor, utilizada para filtrar os dados do formulario HTML e XML.
- [HTML](https://pt.wikipedia.org/wiki/HTML): Utilizado na construção das páginas na Web.
- [XML](https://pt.wikipedia.org/wiki/XML): Utilizada para marcar os dados dos signos armazenados no documento.
- [XAMPP](https://www.apachefriends.org/pt_br/index.html): Utilizado o Apache para servidor web local.

## 🔨 Funcionalidades do projeto
**Arquivo index.HTML** - responsável por colher a informação de data através de um input de tipo "date" de um formulário e enviar via método POST para uma página php associada.

**Arquivo seleter.PHP** - responsável por receber os dados da págia HTML e filtrar a informação com base
nos dados do arquivo "signos.xml", faz a comparação das datas e associa à variável "signoUsuario",
esta variável será usada para ser mostrada pelo arquivo "mostrar-signo.html"

## 🛠️ Abrir e rodar o projeto

Pode estar sendo baixado ou clonado.

Para rodar numa máquina local é necessário um servidor web e PHP, pode ser utilizado o Apache para servidor web. Para editar, qualquer editor de texto ou IDE serão uteis.

Para facilitar todo o processo de configuração utilizei o Xampp, aplicativo que já vem com Apache, MySQL e PHP. 

Depois de ter o Xampp instalado, o projeto deve ser alocado em uma pasta chamada "htdocs" localizada dentro da pasta de instalação do Xampp, de preferencia criar uma pasta para cada projeto separadamente, questão de organização.
Exemplo: C:/xampp/htdocs/`projetosigno/index.html`

Todo projeto que necessite do PHP rodando no navegador vai precisar de estar nesse diretório/pasta htdocs.

Inicie o Xampp e *start* o serviço Apache.

Em um navegador, acesse digitando "localhost", verá que está funcionando, pois irá aparecer informações do Xampp, mas diretamente pode acessar o projedo digitando "localhost/projetosigno/".
