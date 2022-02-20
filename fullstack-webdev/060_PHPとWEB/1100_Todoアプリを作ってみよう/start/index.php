<?php
session_start();
$self_url = $_SERVER['PHP_SELF'];
?>

<form action="<?php echo $self_url; ?>" method="post">
    <input type="text" name="title">
    <input type="submit" name="type" value="create">
</form>

<?php 
//受け取るロジック
if(isset($_POST['type'])) {
    if($_POST['type'] === 'create') {
        $_SESSION['todos'][] = $_POST['title'];
        echo "新しいタスク[{$_POST['title']}]が追加されました";
    }
}

//getメソッド
if(empty($_SESSION['todos'])) {
    $_SESSION['todos'] = [];
    echo "タスクを入力しましょう";
    die();
}
    ?>

<ul>
    <?php for($i = 0; $i < count($_SESSION['todos']); $i++): ?>
    <li>
        <form action="<?php echo $self_url; ?>">
            <input type="hidden" name="id" value="<?php echo $i; ?>">
            <input type="text" name="title" value="<?php echo $_SESSION['todos'][$i]?>">
            <input type="submit" value="delete">
            <input type="submit" value="update">
        </form>
    </li>
    <?php endfor; ?>
</ul>


