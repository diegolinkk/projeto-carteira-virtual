# Carteira Virtual
Projeto que gerencia carteiras virtuais

## componentes

transação
    valor
    data/hora
    nome
    categoria (fk)
    carteira (fk)

carteira
    user(fk)
    nome
    saldo

O saldo da carteira é atualizado à cada transação (seja incluindo, atualizando ou removendo).
Nesse primeiro momento, o usuário terá apenas uma carteira

# features


## Feature 1
O usuário faz login e na primeira tela ja olha a sua carteira.
Nessa tela inicial ele terá um botão de visualizar todas as transações.
Na tela inicial, ele terá um botão de adicionar uma transação

### tarefas - backlog
- [ ] criar tela de visualizar carteira
- [ ] criar tela de visualizar transações
- [ ] criar tela de adicionar transações
- [ ] fazer bateria de testes

### tarefas - fazendo
- [ ] criar tela de login
    - [x] criar form de login
    - [x] criar validação de login
    - [x] criar botão que manda pro form de cadastro
    - [x] criar form de cadastro
    - [x] criar função de cadastro

### tarefas - feito
