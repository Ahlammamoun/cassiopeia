# SQL

Récupérer tous les class (les cursus).

```sql
SELECT * FROM class
```

Récupérer les students(étudiants).

```sql
SELECT * FROM class
```

Récupérer les students(étudiants) en fonction de leur cursus.

```sql
SELECT * FROM class
```

Récupérer les reviews(avis) pour un cursus et le nom du user associé.

```sql
SELECT * FROM review.description, user.name FROM review
INNER JOIN class ON class.id = review.class_id
INNER JOIN user ON user.id = review.user_id
WHERE class.id = 1
```

Calculer poiur chaque class, la moyenne des avis 