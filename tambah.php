<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dompetku - Login</title>
    <link rel="stylesheet" href="login.css">
<body>
    <div class="container">
        <header>
            <h1>Dompetku</h1>
        </header>
        <main>
            <div class="login-box">
                <h2>DOMPETKU</h2>
                <form action="tambahproses.php" method="POST">
                    <label for="saldo">Masukkan Nominal</label>
                    <input type="number" id="saldo" name="saldo" placeholder="Masukkan jumlah saldo" required>

                    <label for="metode">Pilih Metode Pembayaran</label>
                    <select id="metode" name="metode" required>
                        <option value="bank_transfer">Bank Transfer</option>
                        <option value="ewallet">E-Wallet</option>
                        <option value="credit_card">Kartu Kredit</option>
                    </select>

                    <button type="submit">Tambah Saldo</button>
                </form>
            </div>
        </main>
     
    </div>
   
</body>
</html>
