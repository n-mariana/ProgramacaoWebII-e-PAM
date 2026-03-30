# Atividade - Cookies e Sessions no PHP

## Grupo
- Henrique Suhr 
- Maria Eduarda Nascimento dos Santos
- Mariana da Silva Gonçalves

---

## Exercício 1 — Pergunta conceitual
**Responsável:** Maria Eduarda Nascimento dos Santos

Cookies e sessions são mecanismos usados para manter dados entre requisições em aplicações web, porém eles não funcionam da mesma forma. Os cookies são armazenados no navegador do usuário, podendo ser acessados e até modificados por ele, o que os torna menos seguros. Já as sessions armazenam os dados no servidor, enviando apenas um identificador ao cliente, o que aumenta a segurança. Os cookies são mais indicados para armazenar preferências simples, como idioma ou tema do site. Sessions são mais adequadas para informações sensíveis, como autenticação de usuários. Por isso, em sistemas reais, geralmente se utiliza sessions para login e cookies como apoio.

---

## Exercício 2 — Pergunta de aplicação
**Responsável:** Henrique Suhr

### Manter o usuário logado: 

Sessions são utilizadas para criar sessões assim que o usuário faz login, gerando um ID único para aquela sessão. O ID é armazenado em um cookie no navegador do usuário, assim quando for feita uma nova requisição, o navegador envia o cookie com o ID para o servidor, permitindo que ele reconheça o usuário sem necessidade do login. Com isso, a identificação é feita somente pelo ID, permitindo que dados sensíveis (como senhas) sejam mantidos no servidor, garantindo maior segurança.

### Armazenar itens temporários no carrinho:

Cookies podem ser utilizados para armazenar informações simples do carrinho, como os IDs dos produtos e suas quantidades, diretamente no navegador do usuário, o que permite que o carrinho seja mantido mesmo se o navegador for fechado e aberto novamente depois. Já as sessions oferecem uma alternativa em que o carrinho é mantido no servidor e vinculado ao session ID, garantindo maior segurança e controle dos dados do usuário. Portanto, cookies oferecem maior praticidade e são melhores em situações de rápida persistência do cliente, enquanto sessions são mais seguras e armazenam os dados no servidor.

### Registrar preferências do usuário

Para esse tipo de situação, os cookies são os mais indicados e utilizados. Informações como preferências de idioma, tema (claro/escuro), categorias/produtos favoritos, etc. não são consideradas dados sensíveis, portanto não há necessidade das sessions, caso contrário, o servidor poderia ficar sobrecarregado de dados que não pedem por segurança e controle maiores.

---

## Exercício 3 — Pergunta de investigação
**Responsável:** Mariana da Silva Gonçalves

Ao executar o arquivo pela primeira vez no navegador, apareceu a mensagem "Cookie ainda não disponível". Isso aconteceu pois era a primeira vez que o código foi acessado, portanto não havia nenhum cookie salvo ainda. Ao atualizar a página, como ela foi acessada anteriormente, apareceu a seguinte mensagem: "Valor do cookie: 1", mostrando que um cookie foi salvo desde de o último acesso. Ao utilizar as ferramentas do navegador para visualizar os cookies, foi possível observar dados como: nome do cookie, valor, domínio, data de expiração, tamanho, entre outros. Ao limpar os cookies do site, a mensagem retorna a ser "Cookie ainda não disponível", pois essa ação remove os cookies do último acesso, como se o arquivo nunca tivesse sido acessado.

---

## Exercício 4 — Pergunta de reflexão
**Responsável:** (Nome)

*(Resposta aqui)*

---

## Referências
- https://www.php.net/manual/pt_BR/
- https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Cookies
*(Adicionar caso utilize fontes externas)*
