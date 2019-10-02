<!DOCTYPE html>
<html lang="fr">
<head>
 <meta charset="utf-8">
 </head>
 <body>
 <h1>ApprentiPasSage</h1>
<p>Vous avez reçu un message de :{{ $mailer['name'] }}</p>
 <p>
     Nom: {{ $mailer['name'] }}
 </p>
 <p>
     Email: {{ $mailer['email'] }}
 </p>
 <p>
     Message: {{ $mailer['message'] }}
 </p>
 </body>
 </html>