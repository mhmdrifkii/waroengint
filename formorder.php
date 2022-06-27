<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/fontawesome.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <div class="title">Formulir Pembeli</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nama Lengkap</span>
                        <input type="text" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No Whatsapp</span>
                        <input type="text" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Opsional">
                    </div>
                    <div class="input-box">
                        <span class="input-box">Tanggal Order</label>
                            <input type="date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Pilih Produk :</span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Metode Pembayaran :</span>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>

                <label class="setuju">
                    <input type="checkbox">
                    <span class="checkmark">Saya setuju dengan <a href="https://www.google.com" style="color: #fff">Persyaratan dan Ketentuan</a></span>
                </label>

                <div class="button">
                    <input type="submit" value="Lanjut Pembayaran">
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>