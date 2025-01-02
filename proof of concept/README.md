#  REFLECTION ANGLE

## Atomic Design

**Dividindo o trabalho em unidades lógicas de tamanho mínimo**

`Exemplo`

1. Implementação de um único endpoint;
2. Criação da tabela e modelo no banco de dados para esse endpoint;
3. Criação do script de migração do banco de dados;
4. Implementação do pipeline para deploy da aplicação;
5. Configuração da infraestrutura como código (IaC).

Cada item desses pode ser um pull request independente, facilitando a rastreabilidade das mudanças do projeto.

**Evitando o Branche Principal, usando Feature Branches para cada nova funcionalidade**

`Exemplo`

- feature/endpoint-x
- feature/migration-database
- feature/pipeline-integration

Cada branch desses pode conter um conjunto de commits que tratam especificamente de uma tarefa.

**Convenção de Mensagens de Commit e de Documentação**

`Exemplo`

- feat: para novas funcionalidades; [feat(endpoint), adiciona novo endpoint de autenticação]
- fix: para correções de bugs; [fix(migrations), corrige falha nas migrações de banco de dados]
- chore: para tarefas de manutenção, como melhorias na configuração de infraestrutura.


