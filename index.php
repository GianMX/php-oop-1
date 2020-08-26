<<?php
  class user
    {

    public $id;
    public $email;
    public $nome;
    public $cognome;
    public $eta;
    public $citta;
    public $hobby;
  }

  $users = [
    [
    'id' => 1,
    'email' => 'asd@dsa.com'
    'nome' => 'NomeFalso',
    'cognome' => 'CognomeFalso',
    'eta' => 95,
    'citta' => 'None'
    'hobby' => 'poco'
    ],
    [
    'id' => 2,
    'email' => 'asd@dsa2.com'
    'nome' => 'Sam',
    'cognome' => 'Sung',
    'eta' => 38,
    'citta' => 'N.P',
    'hobby' => 'mobile',
    ],
    [
    'id' => 3,
    'email' => 'asd@dsa3.com'
    'nome' => 'Final',
    'cognome' => 'Fantasy',
    'eta' => 34,
    'citta' => 'Midgar',
    'hobby' => 'Ex-Soldier',
    ],
  ];

  foreach ($users as $user) {
    $userDataPrint = new user();
    $userDataPrint->id = $user['id'];
    $userDataPrint->email = $user['email'];
    $userDataPrint->nome = $user['nome'];
    $userDataPrint->cognome = $user['cognome'];
    $userDataPrint->eta = $user['eta'];
    $userDataPrint->citta = $user['citta'];
    $userDataPrint->hobby = $user['hobby'];
  }
?>
