# Conversor de Moedas - REST API

## Introdução
Este projeto consiste em uma REST API que realiza a conversão de moedas.
Inspirado no projeto/desafio [back-end-challenge]

## Especificações
A API permite a conversão entre diferentes moedas seguindo a estrutura de URL:

```
http://localhost:8000/exchange/{from}/{to}/?amount={amount}&price={price}
```

Exemplo de requisição:
```
http://localhost:8000/exchange/BRL/USD/?amount=100&price=5.58
```

### Parâmetros:
- **from**: Moeda de origem.
- **to**: Moeda de destino.
- **amount**: Valor a ser convertido.
- **price**: Cotação da moeda de referência.

### Resposta esperada:
```json
{
  "valorConvertido": 17.92,
  "moeda": "R$"
}
```

## Conversões Disponíveis
A API suporta as seguintes conversões:
- **Real para Dólar**
- **Dólar para Real**
- **Real para Euro**
- **Euro para Real**

### Símbolos Utilizados
- **Real (BRL)**: R$
- **Dólar (USD)**: $
- **Euro (EUR)**: €

## Exemplos de Uso

### Dólar para Real
```
http://localhost:8000/exchange/USD/BRL/?amount=100&price=5.58
```
#### Resposta esperada:
```json
{
  "valorConvertido": 558,
  "moeda": "R$"
}
```

### Euro para Real
```
http://localhost:8000/exchange/EUR/BRL/?amount=100&price=6.70
```
#### Resposta esperada:
```json
{
  "valorConvertido": 670,
  "moeda": "R$"
}
```

### Real para Euro
```
http://localhost:8000/exchange/BRL/EUR/?amount=100&price=6.70
```
#### Resposta esperada:
```json
{
  "valorConvertido": 670,
  "moeda": "€"
}
```

## Como Executar
1. Levantar o servidor PHP embutido:
```
php -S localhost:8000 index.php
```


