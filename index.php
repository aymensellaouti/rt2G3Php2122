<?php
    require_once 'utilities/isAuthenticated.php';

    $pageTitle = 'RT2 G3 2022';
    $notes = [12, 15 , 3, 20];

?>
<?php
    require_once 'fragmenrts/header.php';
?>
</head>
<body>
<ol class="list-group">
    <?php foreach($notes as $note) : ?>
        <li class="list-group-item">
            <?= $note ?>
        </li>
    <?php endforeach ?>
</ol>

<?php
require_once 'fragmenrts/footer.php';
?>