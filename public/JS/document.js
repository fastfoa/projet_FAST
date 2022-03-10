function seeDoc2(id) {
    var valueI = $('#listDoc').val();
    var idD = $('#documents option[value="' + valueI + '"]').attr('id');

    if (!idD)
        return alert("Document introuvable !");

    $.get("/getInfoDoc/" + id,
        function (data) {
            $("#infosDoc").text("");
            for (let d in data.a) {
                if (idD == data.a[d].id_document) {
                    if (data.a[d].role_string == "ROLE_ENT")
                        $("#infosDoc").removeClass('invisible').append(data.a[d].titre + " envoyé à " + data.a[d].raison_social);
                    else
                        $("#infosDoc").removeClass('invisible').append(data.a[d].titre + " envoyé à " + data.a[d].nom + " " + data.a[d].prenom);

                    if (data.a[d].date_read == null)
                        $('#infosDoc').append(' : non lu ❌<br>');
                    else
                        $('#infosDoc').append(' : lu le ' + data.a[d].date_read + " ✅<br>");
                }
            }
        }
    );
}

function downloadDoc(url) {
    var valueI = $('#listDoc').val();
    var idD = $('#documents option[value="' + valueI + '"]').attr('id');

    if (!idD)
        return alert("Fichier introuvable !");

    var link = url + "/" + idD;
    window.location = link;
}


function upLoadDoc(url) {
    window.location = url;
}
