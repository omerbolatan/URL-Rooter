//FORM SUBMIT EDİLDİĞİNDE FORM İÇERİSİNDEKİ VERİLERİN İÇERİĞİNİ ALIYORUZ.
$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault()

        var longurl = document.getElementById("longurl").value
        var opsionalurl = document.getElementById("opsionalurl").value
        var result = document.getElementById("result")

        //PROCESS.PHP DOSYASINA VERİLERİ POST EDİYORUZ.
        $.post("processes.php",{longurl: longurl, opsionalurl: opsionalurl}, function(data){
                result.innerHTML = data
        })
    })
})