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
POST /api/substract
{
    "number_1": 8
    "number_2": 4
}

RESPONSE: { "result": 4 }
```

- [x] Division

```
POST /api/divide
{
    "number_1": 10
    "number_2": 2
}

RESPONSE: { "result": 5 }
```
:warning: `number_2` doit être différent de zéro.

## Énoncé

- Ajouter et documenter les fonctionnalités suivantes :

- [ ] Soustraction
- [ ] Division

- Pour l'addition et la multiplication, ajouter la possibilité d'envoyer un tableau `"numbers": [x, y, z]`, et d'obtenir la somme / le produit de tous ces nombres (tout en gardant la compatibilité avec les fonctionnalités existantes).

- Ajouter une fonctionnalité permettant de combiner à l'infini des opérations, par exemple :

`[[34, '+', 32], '/', 3]` => doit renvoyer 22
