```
# 🚀 PHP Laravel - API RestFul CRUD (Swagger Docs)

Este projeto demonstra a implementação de um CRUD completo utilizando o **Laravel**, seguindo os padrões RESTful. A API foi construída utilizando controllers do tipo resource e possui documentação interativa via Swagger.

## 🛠️ Tecnologias e Conceitos
* **Framework:** [Laravel](https://laravel.com/) (PHP 8.2+)
* **ORM:** Eloquent (Gestão de Banco de Dados)
* **Documentação:** Swagger / OpenAPI
* **Ferramenta CLI:** Artisan
* **Banco de Dados:** SQLite/MySQL

## ⚙️ Configuração e Instalação

1. **Clone o repositório:**
   ```bash
   git clone [https://github.com/vitoria-fsdev/PHP-ApiRestFul.git](https://github.com/vitoria-fsdev/PHP-ApiRestFul.git)
   cd PHP-ApiRestFul

```

# Estrutura do Projeto
```
├── 📁 app
│   ├── 📁 Http
│   │   ├── 📁 Controllers
│   │   │   ├── 🐘 Controller.php
│   │   │   └── 🐘 UserController.php
│   │   ├── 📁 Requests
│   │   │   ├── 🐘 StoreUserRequest.php
│   │   │   └── 🐘 UpdateUserRequest.php
│   │   └── 📁 Resources
│   │       ├── 🐘 UserCollection.php
│   │       └── 🐘 UserResource.php
│   ├── 📁 Models
│   │   └── 🐘 User.php
│   ├── 📁 OpenApi
│   │   ├── 📁 Parameters
│   │   │   └── 🐘 UserParameter.php
│   │   ├── 📁 Schemas
│   │   │   ├── 🐘 CreateUserRequest.php
│   │   │   ├── 🐘 UpdateUserRequest.php
│   │   │   └── 🐘 UserSchema.php
│   │   └── 🐘 OpenApiSpec.php
│   └── 📁 Providers
│       └── 🐘 AppServiceProvider.php
├── 📁 bootstrap
│   ├── 🐘 app.php
│   └── 🐘 providers.php
├── 📁 config
│   ├── 🐘 app.php
│   ├── 🐘 auth.php
│   ├── 🐘 cache.php
│   ├── 🐘 database.php
│   ├── 🐘 filesystems.php
│   ├── 🐘 l5-swagger.php
│   ├── 🐘 logging.php
│   ├── 🐘 mail.php
│   ├── 🐘 queue.php
│   ├── 🐘 sanctum.php
│   ├── 🐘 services.php
│   └── 🐘 session.php
├── 📁 database
│   ├── 📁 factories
│   │   └── 🐘 UserFactory.php
│   ├── 📁 migrations
│   │   ├── 🐘 0001_01_01_000000_create_users_table.php
│   │   ├── 🐘 0001_01_01_000001_create_cache_table.php
│   │   ├── 🐘 0001_01_01_000002_create_jobs_table.php
│   │   └── 🐘 2026_01_22_193923_create_personal_access_tokens_table.php
│   ├── 📁 seeders
│   │   └── 🐘 DatabaseSeeder.php
│   ├── ⚙️ .gitignore
│   └── 📄 database.sqlite
├── 📁 public
│   ├── ⚙️ .htaccess
│   ├── 📄 favicon.ico
│   ├── 🐘 index.php
│   ├── ⚙️ openapi.yaml
│   └── 📄 robots.txt
├── 📁 resources
│   ├── 📁 css
│   │   └── 🎨 app.css
│   ├── 📁 js
│   │   ├── 📄 app.js
│   │   └── 📄 bootstrap.js
│   └── 📁 views
│       └── 🐘 welcome.blade.php
├── 📁 routes
│   ├── 🐘 api.php
│   ├── 🐘 console.php
│   └── 🐘 web.php
├── 📁 storage
│   ├── 📁 api-docs
│   │   └── ⚙️ openapi.json
│   ├── 📁 app
│   │   ├── 📁 private
│   │   │   └── ⚙️ .gitignore
│   │   ├── 📁 public
│   │   │   └── ⚙️ .gitignore
│   │   └── ⚙️ .gitignore
│   ├── 📁 framework
│   │   ├── 📁 sessions
│   │   │   └── ⚙️ .gitignore
│   │   ├── 📁 testing
│   │   │   └── ⚙️ .gitignore
│   │   ├── 📁 views
│   │   │   ├── ⚙️ .gitignore
│   │   │   └── 🐘 5a80b483212703e484a9e5ceb9d70ace.php
│   │   └── ⚙️ .gitignore
│   └── 📁 logs
│       └── ⚙️ .gitignore
├── 📁 tests
│   ├── 📁 Feature
│   │   └── 🐘 ExampleTest.php
│   ├── 📁 Unit
│   │   └── 🐘 ExampleTest.php
│   ├── 🐘 Pest.php
│   └── 🐘 TestCase.php
├── ⚙️ .editorconfig
├── ⚙️ .env.example
├── ⚙️ .gitattributes
├── ⚙️ .gitignore
├── 📝 README.md
├── 📄 artisan
├── ⚙️ composer.json
├── ⚙️ package-lock.json
├── ⚙️ package.json
├── ⚙️ phpunit.xml
└── 📄 vite.config.js
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

**Maria Vitória** - https://github.com/vitoria-fsdev
