# Aprendendo POO

## Introdução

Esse repositorio vou colocar todos os trabalhos sobre Programação orientada a objetos, que tive que realizar na faculdade.

## `Conta Bancaria`

`Objetivo`: colocar os conhecimentos vistos em sala sobre visibilidade e acessibilidade.

Construir uma classe ' Conta' com as seguintes variáveis privadas:  agência, conta, dígito, banco, saldo, nomeCliente, cpfCliente e status. Deve-se pensar nos métodos de get e set para cada variável.

Deve-se implementar as seguinte funções: saque, depósito, liberar conta (status), bloquear conta(status).

Lembrando sempre das regras para saque, só é possível sacar um valor quando este for menor ou igual ao saldo disponível, para depósito, só é possível depositar um valor maior que zero.

* Resumo

Aprendendo sobre encapsulamento e colocando em pratica

`Link`

* [Conta Bancaria](/Conta-Bancaria/)

## `Trabalho Computador em PHP`

Criar uma classe computador com o que vimos até hoje em sala, sua classe deve conter dados sobre as configurações do seu computador (**processador, clock, memória, armazenamento**), pode usar a imaginação. Você deve ter ações programadas, por exemplo liga e desliga, executa um programa, fecha um programa.
Lembre-se para um programa ser executado, o computador deve estar ligado. É um computador simples, de 90 e bolinha, ele executa um S.O. em D.O.S. e por bloco, ou seja, só executa um programa por vez. Não existe tarefa.

* Não precisa ter uma interface HTML.
* Só a classe computador em um arquivo.
* Fazer os testes no mesmo arquivo.
* Lembre-se usar parâmetros, return, echo e outros que vimos em sala.
* Deve usar pelo menos uma vez:
* função com parâmetros e return
* método construtor
* variáveis da classe (aquelas que acessamos com $this->...)

`Link`

* [Computador](/Computador/)

## `Animal`

A partir dos conhecimentos vistos nas aulas e do último exemplo de código visto (em anexo), implemente o método construtor para as classes Mamifero e Ave. Para construir vai precisar usar os conceitos de sobrescrita e sobrecarga. Dica, vai precisar o comando "parent" que vimos em sala.

No construtor da classe Mamífero, você deve informar um parâmetro a mais, o "habitat", por exemplo "doméstico" ou "selvagem".

No construtor da classe  Ave, você deve ter um parâmetro boolean que informa se a ave é capaz de voar ou não. Assim quando instanciar um novo objeto das classes Mamifero e Ave, você irá precisar passar esse parâmetros.

* `Resumo`

Nessa aula vimos herança, sobrescrita e sobrecarga.

`Link`

* [Animal](/Heranca/)