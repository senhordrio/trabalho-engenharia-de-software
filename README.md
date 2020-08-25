# **TRABALHO DE ENGENHARIA DE SOFTWARE**

** alteração apresenatção

        Equipe: Adriano Oliveira Silva - :computer: github: senhordrio
                Diego Marques Andrade - :computer: github: diego-marque
                Ian Dias Bertolucci - :computer: github: ianbertolucci

        Este trabalho é um produto para a disciplina de Engenharia de Software do período 2020/1.

## **Sistema para empresa distribuidora de equipamentos de proteção individual.**
A empresa de distribuição de equipamentos de proteção individual, utilizava de um modelo
de gerenciamento de vendas, estoque e distribuição obsoleto, o que atendia as vendas até a pandemia do COVID-19.
Após o início da pandemia as vendas aumentaram e existiu uma certa expansão do negócio, o que
resultou em que o sistema obsleto de gerenciamento não atendesse mais a empresa. Ou seja, se viu necessário a utilização de um novo sistema.
Para isso um sistema de gerenciamento de estoque, venda e distribuição de produtos de proteção
individual será desenvolvido.
Esse sistema será capaz adicionar, editar, visualizar e deletar produtos do estoque, o mesmo com
os clientes, e também com as vendas.

## **Tecnologias utilizadas:**

#### **Linguagens:** 

##### Back-End:
        PHP (v7.2.5) 
        Laravel (v7.25.0) 
##### Front-End
        HTML(v5.2), Javascrip ECMAScript 2018, CSS, Vue 2.6.11
#### Servidor:
        Apache 2.4.43.
#### **SGBD:** 
        MySql 15.1
#### **IDE:**
        VSCODE v1.4 3.41.
        PhPStorm 2020.2
#### **Regras e padrões de organização de projeto**
        Como base para regras e padrões de organização de projeto, utilizaremos o git flow, que nos permite algumas nomeclaturas
        padrões, e alguns processos padrões, irei descreve-los aqui:
        -Algumas branchs terão nomes e funcionalidades padrões:
         **Branch master**
         Branch a qual o estado do projeto é o mais maduro possível;
         **Branch develop**
         É a branch que contém o conteúdo em modo preparatório para ser entregue;
         **Branch feature/**
         É a branch responsável pelo desenvolvimento inicial de novas funcionalidades;
         **Branch hotfix/**
         É a branch responsável por correção de bugs críticos;
         **Branch release/**
         É a branch responsável por entregar as novas funcionalidades, ou seja quando já estão maduras;
        -Sempre que alguma funcionalidade for desenvolvida no projeto, utilizaremos os seguintes passos:
         É necessário estar na branch develop, e então criar a nova feature com o comando:
         git flow feature start [nomeDaFuncionalidade]
         E então alterarmos para a branch feature/[nomeDaFuncionalidade]
         Em seguida adicione as modificações feitas, e realize o commit, 
         sempre deixando uma mensagem explicita do que foi feito.
         E após ter compartilhado sua versão com o restente do time, é necessário finalizar o flow, com o comando:
         git flow feature finish [nomeDaFuncionalidade]
        -Sempre que alguma funcionalidade for ser adicionada ao projeto, utilizaremos os seguintes passos:
         É necessário estar na branch develop, e então criar a nova release com o comando:
         git flow release start [versão]
         E então alterarmos para a branch release/[versão]
         Em seguida adicione as modificações feitas, e realize o commit, 
         sempre deixando uma mensagem explicita do que foi feito.
         E após ter compartilhado sua versão com o restente do time, é necessário finalizar o flow, com o comando:
         git flow release finish [versão]
         Após isso, serão necessárias o preenchimento de 3 novas mensagens,
         Uma referente ao merge da branch release com a master, uma referente à descrição da tag de nossa versão, e outrareferente ao merge da branch develop com a master.
        -Sempre que algum bug for ser corrigido no projeto, utilizaremos os seguintes passos:
         É necessário estar na branch master, e então criar o novo hotfix com o comando:
         git flow hotfix start [versão]
         E então alterarmos para a branch hotfix/[versão]
         Em seguida adicione as modificações feitas, e realize o commit, 
         sempre deixando uma mensagem explicita do que foi feito.
         E após ter compartilhado sua versão com o restente do time, é necessário finalizar o flow, com o comando:
         git flow hotfix finish [versão]
         Após isso, serão necessárias o preenchimento de 3 novas mensagens,
         Uma referente ao merge da branch hotfix com a master, uma referente à descrição da tag de nossa versão, e outra referente ao merge da branch develop com a master.


