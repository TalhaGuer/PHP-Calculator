<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit Hesap Makinesi</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .hesap-makinesi-kapsayici {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            justify-items: center;
            resize: both;
            overflow: auto;
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px;
            max-width: 500px;
            min-width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .hesap-makinesi-kapsayici form {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 10px;
            align-items: center;
            justify-content: center;
        }

        .hesap-makinesi-kapsayici button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hesap-makinesi-kapsayici button:hover {
            background-color: #3e8e41;
        }

        .hesapla-butonları {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .sonuc {
            grid-column: 1 / 2;
            grid-row: 6 / 7;
            align-self: end;
            font-size: 1.5em;
            font-weight: bold;
            text-align: right;
        }
    </style>
</head>
<body>
<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Active</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link" href="#">Link</a>
  <a class="nav-link disabled" aria-disabled="true">Disabled</a>
</nav>
    <div class="hesap-makinesi-kapsayici">
        <h1>Basit Hesap Makinesi</h1>
        <form method="post">
            <input type="number" name="sayi1" required>
            <select name="islem">
                <option value="toplama">Toplama</option>
                <option value="cikarma">Çıkarma</option>
                <option value="carpma">Çarpma</option>
                <option value="bolme">Bölme</option>
            </select>
            <input type="number" name="sayi2" required>
        </form>
        <div class="hesapla-butonları">
            <button type="submit" name="hesapla">Hesapla</button>
            <?php if (isset($sonuc)): ?>
                <button class="cevap">Cevap</button>
            <?php endif; ?>
        </div>
        <?php if (isset($sonuc)): ?>
            <div class="sonuc"><?= htmlspecialchars($sonuc) ?></div>
        <?php endif;

        if (isset($_POST['hesapla'])) {
            $sayi1 = $_POST['sayi1'];
            $islem = $_POST['islem'];
            $sayi2 = $_POST['sayi2'];
        }

            switch ($islem) {
                case 'toplama':
                    $sonuc = $sayi1 + $sayi2;
                    break;
                case 'cikarma':
                    $sonuc = $sayi1 - $sayi2;
                    break;
                case 'carpma': }