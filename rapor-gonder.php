

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Rapor Gönderme Formu</title>
            <link rel="stylesheet" href="css/rapor.css">
            <link rel="stylesheet" href="css/yan-menu.css">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
        </head>
    
        <body style="background-color: #0D0B21">




            <div class="container">
                <h2>Personel Rapor Formu   <i class="fa-solid fa-circle-xmark fa-lg" style="color: #ed3535; cursor: pointer;" onclick="cikisYap()"></i></h2>
              

            
            
              
                <form id="raporForm" onsubmit="return validateForm()">
                    <label for="personelAdi">Personel Adı:</label>
                    <input type="text" id="personelAdi" name="personelAdi" required>

                    <label for="magazaSecimi">Mağaza Seçimi:</label>
                    <select id="magazaSecimi" name="magazaSecimi" required>
                        <option value="magaza1">Mağaza 1</option>
                        <option value="magaza2">Mağaza 2</option>
                        <!-- Diğer mağaza seçenekleri ekleyebilirsiniz -->
                    </select>

                    <label for="sehirSecimi">Şehir Seçimi:</label>
                    <select id="sehirSecimi" name="sehirSecimi" required>
                        <option value="sehir1">Şehir 1</option>
                        <option value="sehir2">Şehir 2</option>
                        <!-- Diğer şehir seçenekleri ekleyebilirsiniz -->
                    </select>

                    <label for="satisAdeti">Satış Adeti:</label>
                    <input type="number" id="satisAdeti" name="satisAdeti" required>

                    <label for="raporTarihi">Satış Rapor Tarihi:</label>
                    <input type="date" id="raporTarihi" name="raporTarihi" required>

                    <label for="urunSecimi">Ürün Seçimi:</label>
                    <select id="urunSecimi" name="urunSecimi" required>
                        <option value="urun1">Ürün 1</option>
                        <option value="urun2">Ürün 2</option>
                        <!-- Diğer ürün seçenekleri ekleyebilirsiniz -->
                    </select>

                    <label for="toplamTutar">Toplam Satış Tutarı (₺):</label>
                    <input type="text" id="toplamTutar" name="toplamTutar" required>

                    <!-- Butonları içeren div -->
                    <div class="button-container">
                        <button type="button" onclick="submitForm()">Gönder</button>
                        <button type="button" onclick="cikisYap()">İptal Et</button>
                    </div>
                </form>
            </div>

            <script src="rapor.js"></script>
            <script src="https://kit.fontawesome.com/889bfe0e92.js" crossorigin="anonymous"></script>
            <script>
                function validateForm() {
                    // JavaScript ile ek kontrolleri yapabilirsiniz
                    // Örneğin: Toplam Satış Tutarı alanının geçerli bir değere sahip olup olmadığını kontrol edebilirsiniz
                    var toplamTutar = document.getElementById("toplamTutar").value;
                    if (toplamTutar.trim() === "") {
                        alert("Toplam Satış Tutarı alanı boş bırakılamaz.");
                        return false;
                    }
                    
                    // Diğer alanlar için gerekli kontrolleri ekleyebilirsiniz

                    return true; // Formun gönderilmesine izin ver
                }
            </script>

<script>
    function cikisYap() {
        // Çıkış yapma işlemleri buraya gelecek
        alert("Çıkış yapıldı"); // Örnek bir bildirim
        // Diğer çıkış işlemlerini ekleyebilirsiniz
        window.location.href = "index.php";
    }
</script>

        </body>
        </html>
</div>