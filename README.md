# CalculApi

L'API pour tous vos calculs !

## Fonctionnalités

- [x] Addition

```
POST /api/add
{
    "number_1": 2
    "number_2": 3
}

RESPONSE: { "result": 5 }
```

- [x] Multiplication

```
POST /api/multiply
{
    "number_1": 2
    "number_2": 3
}

RESPONSE: { "result": 6 }
```


- [x] Soustraction

```
POST /api/subtraction
{
    "number_1": 2
    "number_2": 3
}

RESPONSE: { "result": 1 }
```

- [x] Division

```
POST /api/division
{
    "number_1": 6
    "number_2": 2
}

RESPONSE: { "result": 3 }
```


## Énoncé

- Ajouter et documenter les fonctionnalités suivantes :

- [ ] Soustraction
- [ ] Division

- Pour l'addition et la multiplication, ajouter la possibilité d'envoyer un tableau `"numbers": [x, y, z]`, et d'obtenir la somme / le produit de tous ces nombres (tout en gardant la compatibilité avec les fonctionnalités existantes).

- Ajouter une fonctionnalité permettant de combiner à l'infini des opérations, par exemple :

`[[34, '+', 32], '/', 3]` => doit renvoyer 22
