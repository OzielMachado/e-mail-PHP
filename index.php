<html>
<head>
    <meta http-equiv="Content-Type" content="text/html: charset=UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Enviando e-mails</title>
</head>
<body>
    <h1>Contato</h1>
    <form name="email" method="post" action="envia.php">
        <label>E-mail</label><br>
        <input type="email" name="email.txt"><br>
        <label>Assunto</label><br>
        <input type="text" name="assunto_txt"><br>
        <label>Mensagem</label><br>
        <textarea name="msg_text" rows="5" cols="25"></textarea><br><br>
        <span><input type="submit" value="Enviar"></span>
    </form>
</body>
<body>