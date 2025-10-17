## Redémarrer proprement le projet

Pour redémarrer le lab et réinitialiser la base de données, utilisez toujours la ligne de commande suivante depuis la racine du projet :

```bash
# Arrêter les services et supprimer les volumes (réinitialise la BDD)
docker compose down -v

# Relancer et rebuild les services
docker compose up -d --build
```
<p style="color:red; font-weight:700; font-size:1.05em;">⚠️ GROSSE ATTENTION — NE PAS SUPPRIMER LES CONTENEURS VIA DOCKER DESKTOP (🗑️)</p> <p>Ne supprimez **jamais** les conteneurs directement depuis l'interface Docker Desktop en cliquant sur l'icône poubelle : cela peut laisser les volumes attachés ou entraîner un état incohérent entre conteneurs et volumes. Utilisez toujours les commandes ci‑dessus pour arrêter proprement l'environnement et réinitialiser la base de données.<code>docker compose down -v</code>.</p> 
