# Carteira Virtual
Projeto que gerencia carteiras virtuais

## recursos
transactions
    value
    date
    name
    observation
    category_id (fk)
    wallet_id (fk)

wallets
    user_id(fk)
    nam
    balance

user
    name
    email
    password

category
    name
    user_id(fk)

O saldo da carteira é atualizado à cada transação (seja incluindo, atualizando ou removendo).
Nesse primeiro momento, o usuário terá apenas uma carteira

# features

## Feature 1
O usuário faz login e na primeira tela ja olha a suas carteiras e seu saldo consolidado.
Nessa tela inicial ele poderá visualizar todas as transações.
Na tela inicial, ele terá um botão de adicionar uma transação

### tarefas - backlog
- [ ] fazer bateria de testes

### tarefas - fazendo
- [ ] Criar página de criação de carteiras
- [ ] Criar página de criação de categorias
- [ ] Criar função de criação de categorias
- [ ] Criar função de criação de transações
    - lembrando que essas transações somam no saldo da respectiva carteira
- [ ] Exibir carteiras reais na dashboard
- [ ] Exibir transações reais na dashboard

### tarefas - feito
- [x] criar um service que vai converter centavos para reais e vice-versa
- [x] projetar modelos
    - [x] Wallet
    - [x] Transaction
    - [x] Category
    - [x] adequações no modelo de User
- [x] criar migrations
- [x] integrar modelos
    - [x] carteiras
    - [x] transações
- [x] criar tela de adicionar transações
obs - ainda não tem objeto no banco de dados
- [x] criar tela de login
    - [x] criar form de login
    - [x] criar validação de login
    - [x] criar botão que manda pro form de cadastro
    - [x] criar form de cadastro
    - [x] criar função de cadastro
    - [x] criar testes para feature de login

- [x] criar tela de visualizar carteira
- [x] criar tela de visualizar transações