<h1>View de Home</h1>
<?=$data['name']?>

<form action="../controllers/teste.php" method="POST">
    nome: <input type="text" name="username" value="<?=$data['name']?>"><br />
    Email: <input type="text" name="email"><br />

    <button type="submit">Enviar</button>
</form>
