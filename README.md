
# Azapfy - Controle de Pagamento por Entregas

## Introdução

A Azapfy é uma empresa inovadora que busca automatizar e otimizar a gestão de entrega e comprovação. Anteriormente, esses processos eram manuais, mas agora são realizados de forma automatizada, proporcionando alta performance e controle. Isso garante que os prestadores de serviço recebam pelo trabalho realizado no menor prazo e com o menor custo operacional, enquanto identificam em tempo real todas as etapas do processo.

Neste desafio, foi desenvolvida uma API para o controle de pagamento pelas entregas realizadas. Também foi disponibilizada uma API para a consulta de notas fiscais, facilitando o cálculo de pagamento (Url da API: http://homologacao3.azapfy.com.br/api/ps/notas)

.

## Tecnologias Utilizadas

- Laravel: Utilizado para o desenvolvimento da API, proporcionando uma estrutura robusta e eficiente.
- Docker: Empregado para a containerização do ambiente de desenvolvimento, garantindo a consistência entre diferentes ambientes.
- Arquitetura em Camadas (Model, Service e Controller): Organização do código para melhor manutenção e escalabilidade.
- Middleware de Erro para API Externa: Implementado para lidar com cenários onde a API externa não responda.

## Executando o Projeto

Para executar o projeto, siga os passos abaixo:

1. Abra um terminal e clone o repositório do GitHub (git@github.com:DAYANE1130/azapfy_project.git) , digite no seu terminal o comando abaixo:

    `git clone git@github.com:DAYANE1130/azapfy_project.git`
   
2. Certifique-se de ter o Docker instalado em sua máquina.
   
3. Abra um terminal na raiz do projeto e execute o comando `docker-compose up -d` para iniciar o ambiente.
   
4. Acessar o container
   `docker-compose exec app bash`
   
5- Instalar as dependências do projeto
   `composer install`
   
6. Acesse a API através do endpoint fornecido http://localhost:8989 o retorno será (sucess:true)
   Pronto agora você já pode entrar na rota escolhida usando o endpoint acima acrescentando a rota desejada.



# Documentação API de Notas

Esta API permite gerenciar notas fiscais, fornecendo endpoints para realizar diversas operações.

Desenvolvido por [Dayane Barbosa Martins] utilizando o Postman.

A documentação completa e detalhada está no link https://documenter.getpostman.com/view/31041446/2s9YXiYM3A#intro 

## Endpoints

Obs: o nome_do_remetente é encontrado no arquivo Url da API: http://homologacao3.azapfy.com.br/api/ps/notas  no campo (nome_remete: "CARVALHO ONIBUS LTDA")

### Agrupar Notas por Remetente 

GET http://localhost:8989/notasRemetente/nome_do_remetente

Retorna uma lista de notas agrupadas por remetente.


### Calcular Valor Total das Notas por Remetente

GET http://localhost:8989/notasRemetente/nome_do_remetente/calculateTotals

Calcula o valor total das notas para um remetente específico.


### Calcular Valor a Receber pelo que Já Foi Entregue

GET http://localhost:8989/notasRemetente/nome_do_remetente/calculateDelivered

Calcula o valor que o remetente irá receber pelo que já foi entregue.


### Calcular Valor a Receber pelo que Ainda Não Foi Entregue

GET  http://localhost:8989/notasRemetente/nome_do_remetente/calculateNotDelivered


Calcula o valor que o remetente irá receber pelo que ainda não foi entregue.

### Calcular Valor Devido devido ao Atraso na Entrega

GET http://localhost:8989/notasRemetente/nome_do_remetente/calculateDelay

Calcula quanto o remetente deixou de receber devido ao atraso na entrega.


Espero que essa documentação atenda às suas necessidades! Se precisar de mais alguma coisa, estou à disposição.







