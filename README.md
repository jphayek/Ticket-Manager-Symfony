# Ticket-Manager-Symfony

Proposer un système de d’inscription et de connexion.
● Disposer de deux niveau de droits des utilisateur : utilisateur et admin (ROLE_USER,
ROLE_ADMIN)
● Tout utilisateur peut créer un ticket et y écrire des messages
● Un administrateur peut voir tous les tickets
● Un administrateur peut assigner un ticket à un utilisateur, administrateur ou non
● Un utilisateur ne voit que les tickets qu’il a créé ou auxquels il est assigné
● Un message doit être lié à un utilisateur
● Un utilisateur ne peut que créer des tickets et des messages, pas les éditer ou les supprimer
● Un administrateur peut créer, éditer, ou supprimer tout ticket ou message
● L’ensemble de la solution doit être sécurisée : un utilisateur non administrateur ne doit pas
pouvoir voir un message qui ne lui ai pas attribué
