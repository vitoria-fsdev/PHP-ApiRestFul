```markdown
# 🚀 PHP Laravel - API RestFul CRUD (Swagger Docs)

Este projeto demonstra a implementação de um CRUD completo utilizando o **Laravel**, seguindo os padrões RESTful. A API foi construída utilizando controllers do tipo resource e possui documentação interativa via Swagger.

## 🛠️ Tecnologias e Conceitos
* **Framework:** [Laravel](https://laravel.com/) (PHP 8.2+)
* **ORM:** Eloquent (Gestão de Banco de Dados)
* **Documentação:** Swagger / OpenAPI
* **Ferramenta CLI:** Artisan
* **Banco de Dados:** SQLite/MySQL

---

## ⚙️ Configuração e Instalação

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/vitoria-fsdev/PHP-ApiRestFul.git](https://github.com/vitoria-fsdev/PHP-ApiRestFul.git)
   cd PHP-ApiRestFul

```

2. **Instale as dependências:**
```bash
composer install

```


3. **Configure o ambiente:**
```bash
cp .env.example .env
php artisan key:generate

```


4. **Prepare o banco de dados e dados fakes:**
```bash
php artisan migrate:fresh --seed

```


5. **Inicie o servidor:**
```bash
php artisan serve

```



---

## 📑 Documentação Swagger

As rotas foram documentadas utilizando a biblioteca **L5-Swagger**. A documentação visual e interativa permite testar os endpoints diretamente pelo navegador.

**Rota de acesso:** `http://localhost:8000/api/documentation`

### ⚡ Geração Automática (Recomendado)

Para que a documentação seja atualizada automaticamente sempre que você alterar o código, adicione esta linha ao seu arquivo `.env`:

```env
L5_SWAGGER_GENERATE_ALWAYS=true

```

### Gerar Manualmente

Caso prefira não usar a automação, atualize os docs manualmente com:

```bash
php artisan l5-swagger:generate

```

---

## 🛣️ Estrutura de Rotas (API Resource)

A API utiliza o comando `Route::apiResource`, que gerencia automaticamente o ciclo de vida do recurso:

| Método | Endpoint | Ação | Descrição |
| --- | --- | --- | --- |
| **GET** | `/api/users` | `index` | Lista todos os registros. |
| **POST** | `/api/users` | `store` | Cria um novo registro (com validação). |
| **GET** | `/api/users/{id}` | `show` | Exibe os detalhes de um registro. |
| **PUT** | `/api/users/{id}` | `update` | Atualiza um registro existente. |
| **DELETE** | `/api/users/{id}` | `destroy` | Remove um registro do banco. |

---

## 🧠 Destaques Técnicos

* **Documentação In-Code:** Uso de OpenApi Annotations no Controller para gerar o Swagger automaticamente.
* **Validação:** Uso de Form Requests para manter a lógica de validação isolada.
* **Segurança:** Atribuição em massa protegida via `$fillable` nos Models.
* **Tratamento de Erros:** Blocos `try/catch` para capturar exceções e retornar Status Codes apropriados (200, 201, 400, 404, 500).

---

## 👩‍💻 Autora

**Maria Vitória** - [vitoria-fsdev](https://www.google.com/search?q=https://github.com/vitoria-fsdev)

```
