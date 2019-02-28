<!DOCTYPE html>

<html>
  
  <head>
    <meta charset="utf-8">
    <title>Game Character OOP</title>
    <link href="../css/styles.css" rel="stylesheet">
  </head>
  <body>
    <h2>Character Score Battle!</h2>
    <?php
    include('inc-game-character-object.php');

      $Elvira = new GameCharacter();
      $CryptKeeper = new GameCharacter();

      $Elvira->setPlayerName('Elvira');
      $CryptKeeper->setPlayerName('CryptKeeper');

      $Elvira->setScore(500);
      $CryptKeeper->setScore(499);

    if ($Elvira->getScore() > $CryptKeeper->getScore())
      $winner = 'Elvira';
    else  
      $winner = 'CryptKeeper';

      print ('<table border = \"1\"><tr><th>Character</th><th>Score</th></tr>
              <tr><td>'.$Elvira->getPlayerName().'</td><td>'.$Elvira->getScore().'</td></tr>
              <tr><td>'.$CryptKeeper->getPlayerName().'</td><td>'.$CryptKeeper->getScore().'</td></tr></table>');

     print ('<p>Our ending scores are as follows: CryptKeeper with '.$CryptKeeper->getScore(). ' points and Elvira with '.$Elvira->getScore(). ' points, making '.$winner.' the winner!</p>')

    ?>
  </body>
  
</html>