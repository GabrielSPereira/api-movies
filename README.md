# API-MOVIES 📽️
##  🎞️Sobre
- **API-MOVIES** é uma plataforma de consulta e registro de filmes. Nela é possível cadastrar filmes especificando seu título e descrição, e então listá-los através de um JSON.
## 💻Run this App

#clonando o repositório
```
$ git clone https://github.com/GabrielSPereira/api-movies.git
```
Primeiro precisamos rodar o bd_api_movies.sql no PHPMYADMIN e rodar o código no diretório da API
```
$ php artisan serve
```
## 💻 Tecnologias
-   [LARAVEL 8](https://laravel.com/)
-   [JSON](https://www.json.org/json-en.html)

#  Doc API 

## Recomendações

Para está API, é utilizado HTTP para a realização das requisições. É recomendável a utilização do software Postman para realizar as requisições e testes. O formato de retorno de todas as requisições é em JSON.

Para todas as requisições, você deve utilizar a URL abaixo.
```
http://127.0.0.1:8000
```

## Endpoints
### ALL
```
GET /api/movies
```
Responses
```
CODE 200 - SUCESSO

{
    "error": "",
    "result": [
        {
            "id": 1,
            "title": "Viúva Negra"
        },
        {
            "id": 2,
            "title": "O Esquadrão Suicida"
        }
    ]
}
```

### ONE
```
GET  /api/movie/{:id}
```
Responses
```
CODE 200 - SUCESSO

{
    "error": "",
    "result": {
        "id": 1,
        "title": "Viúva Negra",
        "body": "Depois de ter sido adiado em 2020 por conta da COVID-19, 'Viúva Negra' finalmente chegou as telonas e ao Disney Plus em 8 de julho deste ano (2021). "
    }
}
```

```
CODE 404 - ID NÃO ENCONTRADO

{
    "error": "ID not found",
    "result": []
}
```

### NEW
```
POST  /api/movie
```
Parameters (path)
```
title : string *required
body : string *required
```
Responses
```
CODE 200 - SUCESSO

{
    "error": "",
    "result": {
        "id": 3,
        "title": "Liga da Justiça (2021)",
        "body": "Sem dúvidas um dos filmes mais esperados de 2021 foi o Snyder Cut de Liga da Justiça."
    }
}
```

```
CODE 403 - PARAMÊTROS ERRADOS

{
    "error": "Fields not found",
    "result": []
}
```

```
CODE 404 - ID NÃO ENCONTRADO

{
    "error": "ID not found",
    "result": []
}
```

### EDIT
```
PUT  /api/movie/{:id}
```

Responses
```
CODE 200 - SUCESSO

{
    "error": "",
    "result": {
        "id": "3",
        "title": "Enola Holmes",
        "body": "Enola Holmes é um filme original da Netflix, que adapta o livro Enola Holmes: O Caso do Marquês Desaparecido."
    }
}
```

```
CODE 403 - PARAMÊTROS ERRADOS

{
    "error": "Fields not found",
    "result": []
}
```

```
CODE 404 - ID NÃO ENCONTRADO

{
    "error": "ID not found",
    "result": []
}
```

### DELETE
```
DELETE  /api/movie/{:id}
```
Responses
```
CODE 200 - SUCESSO

{
    "error": "",
    "result": []
}
```

```
CODE 404 - ID NÃO ENCONTRADO

{
    "error": "ID not found",
    "result": []
}
```
