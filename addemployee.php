<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
 
    <link rel="stylesheet" href= "css/rapor.css">
    <style>
        /* Custom styles to center the form */
        .form-container {
            max-width: 600px; /* Adjust the maximum width as needed */
            margin: auto;
        }
        body {
            background-color: #020024; /* Set the background color here */
            color: #fff; /* Set text color to white */
        }
    </style>
    <title>PTS - Çalışan ekle</title>
</head>



<body>

    <div class="container mt-5 form-container"> <!-- Add the form-container class here -->
        <div class="d-flex align-items-center mb-4">
        <h2>Çalışan Ekle  <i class="fa-solid fa-circle-xmark fa-lg" style="color: #ed3535; cursor: pointer;" onclick="cikisYap()"></i>  </h2>
        </div>
            <form action="create_employee.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="ad">Ad</label>
                        <input type="text" class="form-control" id="ad" name="ad" placeholder="Ad" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="soyad">Soyad</label>
                        <input type="text" class="form-control" id="soyad" name="soyad" placeholder="Soyad" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-row">
                    <!--
                    <div class="form-group col-md-6">
                        <label for="magaza">Mağaza</label>
                        <input type="text" class="form-control" id="magaza" name="magaza" placeholder="Mağaza" required>
                    </div>
                    -->
                    <div class="form-group col-md-6">
                        <label for="magaza">Mağaza</label>
                        <select id="magaza" name="magaza" class="form-control">
                            <option value="" disabled selected>Seçiniz...</option>
                            <option value="Media Markt">Media Markt</option>
                            <option value="Teknosa">Teknosa</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="sehir">Şehir</label>
                        <input type="hidden" id="sehir_city" name="sehir_city" required>
                        <select id="sehir" name="sehir" class="form-control" onchange="updateSehirCity()">
                            <option value="" disabled selected>Seçiniz...</option>
                            <option value="1" data-city="ADANA" name="city_option">ADANA</option>
                            <option value="2" data-city="ADIYAMAN" name="city_option">ADIYAMAN</option>
                            <option value="3" data-city="AFYONKARAHİSAR" name="city_option">AFYONKARAHİSAR</option>
                            <option value="4" data-city="AĞRI" name="city_option">AĞRI</option>
                            <option value="5" data-city="AMASYA" name="city_option">AMASYA</option>
                            <option value="6" data-city="ANKARA" name="city_option">ANKARA</option>
                            <option value="7" data-city="ANTALYA" name="city_option">ANTALYA</option>
                            <option value="8" data-city="ARTVİN" name="city_option">ARTVİN</option>
                            <option value="9" data-city="AYDIN" name="city_option">AYDIN</option>
                            <option value="10" data-city="BALIKESİR" name="city_option">BALIKESİR</option>
                            <option value="11" data-city="BİLECİK" name="city_option">BİLECİK</option>
                            <option value="12" data-city="BİNGÖL" name="city_option">BİNGÖL</option>
                            <option value="13" data-city="BİTLİS" name="city_option">BİTLİS</option>
                            <option value="14" data-city="BOLU" name="city_option">BOLU</option>
                            <option value="15" data-city="BURDUR" name="city_option">BURDUR</option>
                            <option value="16" data-city="BURSA" name="city_option">BURSA</option>
                            <option value="17" data-city="ÇANAKKALE" name="city_option">ÇANAKKALE</option>
                            <option value="18" data-city="ÇANKIRI" name="city_option">ÇANKIRI</option>
                            <option value="19" data-city="ÇORUM" name="city_option">ÇORUM</option>
                            <option value="20" data-city="DENİZLİ" name="city_option">DENİZLİ</option>
                            <option value="21" data-city="DİYARBAKIR" name="city_option">DİYARBAKIR</option>
                            <option value="22" data-city="EDİRNE" name="city_option">EDİRNE</option>
                            <option value="23" data-city="ELAZIĞ" name="city_option">ELAZIĞ</option>
                            <option value="24" data-city="ERZİNCAN" name="city_option">ERZİNCAN</option>
                            <option value="25" data-city="ERZURUM" name="city_option">ERZURUM</option>
                            <option value="26" data-city="ESKİŞEHİR" name="city_option">ESKİŞEHİR</option>
                            <option value="27" data-city="GAZİANTEP" name="city_option">GAZİANTEP</option>
                            <option value="28" data-city="GİRESUN" name="city_option">GİRESUN</option>
                            <option value="29" data-city="GÜMÜŞHANE" name="city_option">GÜMÜŞHANE</option>
                            <option value="30" data-city="HAKKARİ" name="city_option">HAKKARİ</option>
                            <option value="31" data-city="HATAY" name="city_option">HATAY</option>
                            <option value="32" data-city="ISPARTA" name="city_option">ISPARTA</option>
                            <option value="33" data-city="MERSİN" name="city_option">MERSİN</option>
                            <option value="34" data-city="İSTANBUL" name="city_option">İSTANBUL</option>
                            <option value="35" data-city="İZMİR" name="city_option">İZMİR</option>
                            <option value="36" data-city="KARS" name="city_option">KARS</option>
                            <option value="37" data-city="KASTAMONU" name="city_option">KASTAMONU</option>
                            <option value="38" data-city="KAYSERİ" name="city_option">KAYSERİ</option>
                            <option value="39" data-city="KIRKLARELİ" name="city_option">KIRKLARELİ</option>
                            <option value="40" data-city="KIRŞEHİR" name="city_option">KIRŞEHİR</option>
                            <option value="41" data-city="KOCAELİ" name="city_option">KOCAELİ</option>
                            <option value="42" data-city="KONYA" name="city_option">KONYA</option>
                            <option value="43" data-city="KÜTAHYA" name="city_option">KÜTAHYA</option>
                            <option value="44" data-city="MALATYA" name="city_option">MALATYA</option>
                            <option value="45" data-city="MANİSA" name="city_option">MANİSA</option>
                            <option value="46" data-city="KAHRAMANMARAŞ" name="city_option">KAHRAMANMARAŞ</option>
                            <option value="47" data-city="MARDİN" name="city_option">MARDİN</option>
                            <option value="48" data-city="MUĞLA" name="city_option">MUĞLA</option>
                            <option value="49" data-city="MUŞ" name="city_option">MUŞ</option>
                            <option value="50" data-city="NEVŞEHİR" name="city_option">NEVŞEHİR</option>
                            <option value="51" data-city="NİĞDE" name="city_option">NİĞDE</option>
                            <option value="52" data-city="ORDU" name="city_option">ORDU</option>
                            <option value="53" data-city="RİZE" name="city_option">RİZE</option>
                            <option value="54" data-city="SAKARYA" name="city_option">SAKARYA</option>
                            <option value="55" data-city="SAMSUN" name="city_option">SAMSUN</option>
                            <option value="56" data-city="SİİRT" name="city_option">SİİRT</option>
                            <option value="57" data-city="SİNOP" name="city_option">SİNOP</option>
                            <option value="58" data-city="SİVAS" name="city_option">SİVAS</option>
                            <option value="59" data-city="TEKİRDAĞ" name="city_option">TEKİRDAĞ</option>
                            <option value="60" data-city="TOKAT" name="city_option">TOKAT</option>
                            <option value="61" data-city="TRABZON" name="city_option">TRABZON</option>
                            <option value="62" data-city="TUNCELİ" name="city_option">TUNCELİ</option>
                            <option value="63" data-city="ŞANLIURFA" name="city_option">ŞANLIURFA</option>
                            <option value="64" data-city="UŞAK" name="city_option">UŞAK</option>
                            <option value="65" data-city="VAN" name="city_option">VAN</option>
                            <option value="66" data-city="YOZGAT" name="city_option">YOZGAT</option>
                            <option value="67" data-city="ZONGULDAK" name="city_option">ZONGULDAK</option>
                            <option value="68" data-city="AKSARAY" name="city_option">AKSARAY</option>
                            <option value="69" data-city="BAYBURT" name="city_option">BAYBURT</option>
                            <option value="70" data-city="KARAMAN" name="city_option">KARAMAN</option>
                            <option value="71" data-city="KIRIKKALE" name="city_option">KIRIKKALE</option>
                            <option value="72" data-city="BATMAN" name="city_option">BATMAN</option>
                            <option value="73" data-city="ŞIRNAK" name="city_option">ŞIRNAK</option>
                            <option value="74" data-city="BARTIN" name="city_option">BARTIN</option>
                            <option value="75" data-city="ARDAHAN" name="city_option">ARDAHAN</option>
                            <option value="76" data-city="IĞDIR" name="city_option">IĞDIR</option>
                            <option value="77" data-city="YALOVA" name="city_option">YALOVA</option>
                            <option value="78" data-city="KARABüK" name="city_option">KARABüK</option>
                            <option value="79" data-city="KİLİS" name="city_option">KİLİS</option>
                            <option value="80" data-city="OSMANİYE" name="city_option">OSMANİYE</option>
                            <option value="81" data-city="DÜZCE" name="city_option">DÜZCE</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="girisTarihi">İşe Giriş Tarihi</label>
                        <input type="date" class="form-control" id="girisTarihi" name="girisTarihi" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="calismaTuru">Çalışma Türü</label>
                        <select id="calismaTuru" name="calismaTuru" class="form-control">
                            <option value="" disabled selected>Seçiniz...</option>
                            <option value="Full">Full</option>
                            <option value="Part">Part</option>
                        </select>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="calismaGunu">Toplam Çalışma Günü</label>
                        <input type="text" class="form-control" id="calismaGunu" placeholder="" name="calismaGunu" readonly required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="bitisTarihi">İşten Ayrılma Tarihi (Hala çalışıyorsa boş bırakınız)</label>
                        <input type="date" class="form-control" id="bitisTarihi" name="bitisTarihi">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="telefon">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="telefon" placeholder="Telefon Numarası" name="telefon" required>
                    </div>
                    
                    <div class="form-group col-md-6" style="padding-top: 30px; padding-left: 30px;">
                            
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="calismaSaatleri_2" name="calismaSaatleri_2">
                            
                            <label class="form-check-label" for="calismaSaatleri_2">11.00 - 20.00 </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="calismaSaatleri_1" name="calismaSaatleri_1">
                            <label class="form-check-label" for="calismaSaatleri_1">12.00 - 21.00 </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="bilgi">Bilgi</label>
                    <textarea class="form-control" id="bilgi" rows="3" name="bilgi"></textarea>
                </div>

                <div class="form-group">
                    <label for="profilResmi">Profil Resmi</label>
                    <input type="file" class="form-control-file" id="profilResmi" name="profilResmi">
                </div>

                <button type="submit" class="btn btn-primary">Kaydet</button>
            </form>

   
    </div>

</body>


<script>
    function cikisYap() {
        // Çıkış yapma işlemleri buraya gelecek
        alert("Anasayfaya yönlendiriliyorsunuz."); // Örnek bir bildirim
        // Diğer çıkış işlemlerini ekleyebilirsiniz
        window.location.href = "index.php";
    }
</script>


<script>

function updateSehirCity() {
    var sehirSelect = document.getElementById("sehir");
    var sehirCityInput = document.getElementById("sehir_city");

    var selectedOption = sehirSelect.options[sehirSelect.selectedIndex];

    sehirCityInput.value = selectedOption.getAttribute("data-city");
}
</script>

<script>
    function calculateWorkingDays() {
        var startDate = new Date(document.getElementById("girisTarihi").value);
        var endDateInput = document.getElementById("bitisTarihi");
        var endDate = endDateInput.value ? new Date(endDateInput.value) : new Date();

        var timeDifference = endDate - startDate;

        var daysDifference = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

        document.getElementById("calismaGunu").value = daysDifference;
    }

    document.getElementById("girisTarihi").addEventListener("change", calculateWorkingDays);

    document.getElementById("bitisTarihi").addEventListener("change", calculateWorkingDays);
</script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/889bfe0e92.js" crossorigin="anonymous"></script>
</html>
