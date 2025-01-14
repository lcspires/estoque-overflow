# Tools

### Gerenciamento de ambientes

- [ ] **Dotfiles**. Esquema tradicional, frequentemente versionado com Git para portabilidade.
- [ ] **Nix**. Cria ambientes de build isolados via linguagem declarativa, [Imutabilidade].
- [ ] **Docker**. Executa os contêineres baseados em imagens OCI (runtimes), [Portabilidade].
- [ ] **Kubernetes**. Orquestra clusters de contêineres distribuídos entre máquinas, [Isolamento].
- [ ] **Terraform**. Cria máquinas virtuais locais ou em nuvem, [Infraestrutura como Código (IaC)].

A combinação de Tecnologias de Contêineres (OCI) com a Gestão de Dependências potencializam ainda mais a confiabilidade e a reprodutibilidade no ciclo de vida de uma aplicação.

Docker, a combinação de ideias fundamentais do kernel do Linux: namespaces, cgroups e chroot. Temos, a partir disto, uma imagem de container pronta para ser instanciada e executada.

Nix, o maior Package Manager Linux do mundo.

**Correndo por fora**

- [ ] **Flatpak**. Implanta aplicativos desktop em pacotes isolados do sistema operacional (Linux).
- [ ] **Podman**. Replacement do Docker (modo rootless, sem daemon) [Segurança, Flexibilidade].
- [ ] **Devbox**. Garante que todos os desenvolvedores trabalhem com o mesmo ambiente via Nix.

Garantir que as dependências de uma aplicação qualquer sejam mantidas isoladas, evitando conflitos com outras aplicações ou bibliotecas no sistema.