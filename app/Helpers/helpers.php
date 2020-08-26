<?php
   
function tanggal_indo($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
}

function randomWord($teks){
    return str_shuffle(strtoupper($teks));
}

function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = '') {

    if($timestamp == '0000-00-00 00:00:00' || $timestamp == null)
    {
         return '-';
         exit();
    }

    if (trim ($timestamp) == '')
    {
         $timestamp = time ();
    }
    elseif (!ctype_digit ($timestamp))
    {
         $timestamp = strtotime ($timestamp);
    }
# remove S (st,nd,rd,th) there are no such things in indonesia :p
    $date_format = preg_replace ("/S/", "", $date_format);
    $pattern = array (
         '/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
         '/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
         '/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
         '/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
         '/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
         '/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
         '/April/','/June/','/July/','/August/','/September/','/October/',
         '/November/','/December/',
    );
    $replace = array ( '','','','','','','',
         '','','','','','','',
         'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
         'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
         'Oktober','November','Desember',
    );
//  $replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
//     'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
//     'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
//     'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
//     'Oktober','November','Desember',
// );
    $date = date ($date_format, $timestamp);
    $date = preg_replace ($pattern, $replace, $date);
    $date = "{$date} {$suffix}";
    $data = str_replace(",",' ', $date);
    return $data;
} 