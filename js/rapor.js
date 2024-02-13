function submitForm() {
    // Form verilerini al
    var formData = new FormData(document.getElementById('raporForm'));

    // Ajax ile PHP dosyasına gönder
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Sunucudan gelen cevap
            alert(xhr.responseText);
            console.log("Gönderilemedi !")
        }
    };
    xhr.open('POST', 'rapor-gidiyor.php', true);
    xhr.send(formData);
    console.log("Form gönderildi!");
}

function cancelForm() {
    window.location.href = "login.php";
    document.getElementById("raporForm").reset();
    console.log("Form iptal edildi! Yönlendiriliyorsunuz...");
  }

