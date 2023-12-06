
<?php
    $nome = $_POST['Usuario'];
    $email = $_POST['id'];
    $idade = $_POST['Feedback'];

    include ('db.php');

    $stmt = $pdo->prepare("INSERT INTO alunos (Nome, Email, Turno) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $idade]);
    echo "Cadastro realizado com sucesso";
?>




<?php
    $dsn = 'mysql:host=localhost;dbname=VictorDB;charset=utf8';
    $usuario = 'root';
    $senha = '';
    try {
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage();
    exit();
    }
?>