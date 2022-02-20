<?php 
session_start();
$self_url = $_SERVER['PHP_SELF'] ;
?>

<form action="<?php echo $self_url;?>">
    <input type="text" name="title">
    <input type="submit" name="></form>

    $_SESSION['todos'][$id] = $_POST['title'];
        echo "タスク[{$_POST['title']}]に変更されました。<br>";
    } elseif ($_POST['type'] === 'delete') {
        $id = $_POST['id'];
        array_splice($_SESSION['todos'], $id, 1);
        echo "タスク[{$_POST['title']}]が削除されました。<br>";
    }
}

if (empty($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
    echo "タスクを入力しましょう！";
    die();
}

?>
<ul>
    <?php
    for ($i = 0; $i < count($_SESSION['todos']); $i++) :
    ?>
        <li>
            <form action="<?php echo $self_url; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $i; ?>">
                <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i]; ?>">
                <input type="submit" name="type" value="delete">
                <input type="submit" name="type" value="update">
            </form>
        </li>

    <?php endfor; ?>
</ul>