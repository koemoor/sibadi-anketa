<?php
include "../config.php";

$question1 = isset($_POST['question1']) ? htmlspecialchars(trim($_POST['question1'])) : NULL;
$question2 = isset($_POST['question2']) ? htmlspecialchars(trim($_POST['question2'])) : NULL;
$question3 = isset($_POST['question3']) ? htmlspecialchars(trim($_POST['question3'])) : NULL;
$question4 = isset($_POST['question4']) ? htmlspecialchars(trim($_POST['question4'])) : NULL;
$question6 = isset($_POST['question6']) ? htmlspecialchars(trim($_POST['question6'])) : NULL;
$question9 = isset($_POST['question9']) ? htmlspecialchars(trim($_POST['question9'])) : NULL;
$question10 = isset($_POST['question10']) ? htmlspecialchars(trim($_POST['question10'])) : NULL;
$question11 = isset($_POST['question11']) ? htmlspecialchars(trim($_POST['question11'])) : NULL;
$question121 = isset($_POST['question121']) ? htmlspecialchars(trim($_POST['question121'])) : NULL;
$question122 = isset($_POST['question122']) ? htmlspecialchars(trim($_POST['question122'])) : NULL;
$question123 = isset($_POST['question123']) ? htmlspecialchars(trim($_POST['question123'])) : NULL;
$question124 = isset($_POST['question124']) ? htmlspecialchars(trim($_POST['question124'])) : NULL;
$question125 = isset($_POST['question125']) ? htmlspecialchars(trim($_POST['question125'])) : NULL;
$question126 = isset($_POST['question126']) ? htmlspecialchars(trim($_POST['question126'])) : NULL;
$question127 = isset($_POST['question127']) ? htmlspecialchars(trim($_POST['question127'])) : NULL;
$question128 = isset($_POST['question128']) ? htmlspecialchars(trim($_POST['question128'])) : NULL;
$question14 = isset($_POST['question14']) ? htmlspecialchars(trim($_POST['question14'])) : NULL;
$question15 = isset($_POST['question15']) ? htmlspecialchars(trim($_POST['question15'])) : NULL;
$question16 = isset($_POST['question16']) ? htmlspecialchars(trim($_POST['question16'])) : NULL;
$question19 = isset($_POST['question19']) ? htmlspecialchars(trim($_POST['question19'])) : NULL;
$question20 = isset($_POST['question20']) ? htmlspecialchars(trim($_POST['question20'])) : NULL;
$question21 = isset($_POST['question21']) ? htmlspecialchars(trim($_POST['question21'])) : NULL;
$question22 = isset($_POST['question22']) ? htmlspecialchars(trim($_POST['question22'])) : NULL;
$question23 = isset($_POST['question23']) ? htmlspecialchars(trim($_POST['question23'])) : NULL;
$question25 = isset($_POST['question25']) ? htmlspecialchars(trim($_POST['question25'])) : NULL;
$question26 = isset($_POST['question26']) ? htmlspecialchars(trim($_POST['question26'])) : NULL;
$question27 = isset($_POST['question27']) ? htmlspecialchars(trim($_POST['question27'])) : NULL;
$question28 = isset($_POST['question28']) ? htmlspecialchars(trim($_POST['question28'])) : NULL;
$question29 = isset($_POST['question29']) ? htmlspecialchars(trim($_POST['question29'])) : NULL;
$question30 = isset($_POST['question30']) ? htmlspecialchars(trim($_POST['question30'])) : NULL;
$question311 = isset($_POST['question311']) ? htmlspecialchars(trim($_POST['question311'])) : NULL;
$question312 = isset($_POST['question312']) ? htmlspecialchars(trim($_POST['question312'])) : NULL;
$question313 = isset($_POST['question313']) ? htmlspecialchars(trim($_POST['question313'])) : NULL;
$question314 = isset($_POST['question314']) ? htmlspecialchars(trim($_POST['question314'])) : NULL;
$question315 = isset($_POST['question315']) ? htmlspecialchars(trim($_POST['question315'])) : NULL;
$question316 = isset($_POST['question316']) ? htmlspecialchars(trim($_POST['question316'])) : NULL;
$question317 = isset($_POST['question317']) ? htmlspecialchars(trim($_POST['question317'])) : NULL;
$question318 = isset($_POST['question318']) ? htmlspecialchars(trim($_POST['question318'])) : NULL;
$question319 = isset($_POST['question319']) ? htmlspecialchars(trim($_POST['question319'])) : NULL;
$question3110 = isset($_POST['question3110']) ? htmlspecialchars(trim($_POST['question3110'])) : NULL;
$question3111 = isset($_POST['question3111']) ? htmlspecialchars(trim($_POST['question3111'])) : NULL;
$question3112 = isset($_POST['question3112']) ? htmlspecialchars(trim($_POST['question3112'])) : NULL;


if($_POST['question5d'] != ""){
  $question5 = isset($_POST['question5d']) ? htmlspecialchars(trim($_POST['question5d'])) : NULL;
}else{
  $question5 = isset($_POST['question5']) ? htmlspecialchars(trim($_POST['question5'])) : NULL;
}

if($_POST['question7d'] != ""){
  $question7 = isset($_POST['question7d']) ? htmlspecialchars(trim($_POST['question7d'])) : NULL;
}else{
  $question7 = isset($_POST['question7']) ? htmlspecialchars(trim($_POST['question7'])) : NULL;
}

if($_POST['question8d'] != ""){
  $question8 = isset($_POST['question8d']) ? htmlspecialchars(trim($_POST['question8d'])) : NULL;
}else{
  $question8 = isset($_POST['question8']) ? htmlspecialchars(trim($_POST['question8'])) : NULL;
}

if($_POST['question13d'] != ""){
  $question13 = isset($_POST['question13d']) ? htmlspecialchars(trim($_POST['question13d'])) : NULL;
}else{
  $question13 = isset($_POST['question13']) ? htmlspecialchars(trim($_POST['question13'])) : NULL;
}

if($_POST['question171d'] != ""){
  $question171 = isset($_POST['question171d']) ? htmlspecialchars(trim($_POST['question171d'])) : NULL;
}else{
  $question171 = isset($_POST['question171']) ? htmlspecialchars(trim($_POST['question171'])) : NULL;
}

if($_POST['question172d'] != ""){
  $question172 = isset($_POST['question172d']) ? htmlspecialchars(trim($_POST['question172d'])) : NULL;
}else{
  $question172 = isset($_POST['question172']) ? htmlspecialchars(trim($_POST['question172'])) : NULL;
}

if($_POST['question173d'] != ""){
  $question173 = isset($_POST['question173d']) ? htmlspecialchars(trim($_POST['question173d'])) : NULL;
}else{
  $question173 = isset($_POST['question173']) ? htmlspecialchars(trim($_POST['question173'])) : NULL;
}

if($_POST['question174d'] != ""){
  $question174 = isset($_POST['question174d']) ? htmlspecialchars(trim($_POST['question174d'])) : NULL;
}else{
  $question174 = isset($_POST['question174']) ? htmlspecialchars(trim($_POST['question174'])) : NULL;
}

if($_POST['question175d'] != ""){
  $question175 = isset($_POST['question175d']) ? htmlspecialchars(trim($_POST['question175d'])) : NULL;
}else{
  $question175 = isset($_POST['question175']) ? htmlspecialchars(trim($_POST['question175'])) : NULL;
}

if($_POST['question176d'] != ""){
  $question176 = isset($_POST['question176d']) ? htmlspecialchars(trim($_POST['question176d'])) : NULL;
}else{
  $question176 = isset($_POST['question176']) ? htmlspecialchars(trim($_POST['question176'])) : NULL;
}

if($_POST['question177d'] != ""){
  $question177 = isset($_POST['question177d']) ? htmlspecialchars(trim($_POST['question177d'])) : NULL;
}else{
  $question177 = isset($_POST['question177']) ? htmlspecialchars(trim($_POST['question177'])) : NULL;
}

if($_POST['question178d'] != ""){
  $question178 = isset($_POST['question178d']) ? htmlspecialchars(trim($_POST['question178d'])) : NULL;
}else{
  $question178 = isset($_POST['question178']) ? htmlspecialchars(trim($_POST['question178'])) : NULL;
}

if($_POST['question179d'] != ""){
  $question179 = isset($_POST['question179d']) ? htmlspecialchars(trim($_POST['question179d'])) : NULL;
}else{
  $question179 = isset($_POST['question179']) ? htmlspecialchars(trim($_POST['question179'])) : NULL;
}


if($_POST['question181d'] != ""){
  $question181 = isset($_POST['question181d']) ? htmlspecialchars(trim($_POST['question181d'])) : NULL;
}else{
  $question181 = isset($_POST['question181']) ? htmlspecialchars(trim($_POST['question181'])) : NULL;
}

if($_POST['question182d'] != ""){
  $question182 = isset($_POST['question182d']) ? htmlspecialchars(trim($_POST['question182d'])) : NULL;
}else{
  $question182 = isset($_POST['question182']) ? htmlspecialchars(trim($_POST['question182'])) : NULL;
}

if($_POST['question183d'] != ""){
  $question183 = isset($_POST['question183d']) ? htmlspecialchars(trim($_POST['question183d'])) : NULL;
}else{
  $question183 = isset($_POST['question183']) ? htmlspecialchars(trim($_POST['question183'])) : NULL;
}

if($_POST['question184d'] != ""){
  $question184 = isset($_POST['question184d']) ? htmlspecialchars(trim($_POST['question184d'])) : NULL;
}else{
  $question184 = isset($_POST['question184']) ? htmlspecialchars(trim($_POST['question184d'])) : NULL;
}

if($_POST['question185d'] != ""){
  $question185 = isset($_POST['question185d']) ? htmlspecialchars(trim($_POST['question185d'])) : NULL;
}else{
  $question185 = isset($_POST['question185']) ? htmlspecialchars(trim($_POST['question185'])) : NULL;
}

if($_POST['question186d'] != ""){
  $question186 = isset($_POST['question186d']) ? htmlspecialchars(trim($_POST['question186d'])) : NULL;
}else{
  $question186 = isset($_POST['question186']) ? htmlspecialchars(trim($_POST['question186'])) : NULL;
}

if($_POST['question187d'] != ""){
  $question187 = isset($_POST['question187d']) ? htmlspecialchars(trim($_POST['question187d'])) : NULL;
}else{
  $question187 = isset($_POST['question187']) ? htmlspecialchars(trim($_POST['question187'])) : NULL;
}

if($_POST['question24d'] != ""){
  $question24 = isset($_POST['question24d']) ? htmlspecialchars(trim($_POST['question24d'])) : NULL;
}else{
  $question24 = isset($_POST['question24']) ? htmlspecialchars(trim($_POST['question24'])) : NULL;
}

if($_POST['question32d'] != ""){
  $question32 = isset($_POST['question32d']) ? htmlspecialchars(trim($_POST['question32d'])) : NULL;
}else{
  $question32 = isset($_POST['question32']) ? htmlspecialchars(trim($_POST['question32'])) : NULL;
}




$sql = "INSERT INTO anketiRes
        (
          question1,question2,question3,question4,question5,question6,question7,question8,
          question9,question10,question11,question121,question122,question123,question124,
          question125,question126,question127,question128,question13,question14,question15,
          question16,question171,question172,question173,question174,question175,question176,
          question177,question178,question179,question181,question182,question183,question184,
          question185,question186,question187,question19,question20,question21,question22,question23,
          question24,question25,question26,question27,question28,question29,question30,question311,
          question312,question313,question314,question315,question316,question317,question318,
          question319,question3110,question3111,question3112,question32
        ) VALUES (
          '$question1','$question2','$question3','$question4','$question5','$question6','$question7',
          '$question8','$question9','$question10','$question11','$question121','$question122','$question123',
          '$question124','$question125','$question126','$question127','$question128','$question13',
          '$question14','$question15','$question16','$question171','$question172','$question173',
          '$question174','$question175','$question176','$question177','$question178','$question179',
          '$question181','$question182','$question183','$question184','$question185','$question186',
          '$question187','$question19','$question20','$question21','$question22','$question23',
          '$question24','$question25','$question26','$question27','$question28','$question29',
          '$question30','$question311','$question312','$question313','$question314','$question315',
          '$question316','$question317','$question318','$question319','$question3110','$question3111',
          '$question3112','$question32'
        )";




if($db->query($sql)){
  echo "<div class='jumbotron'><h1>Спасибо за участие в исследовании </h1></div>";
}else{
  echo "<div class='jumbotron'><h1>Ошибка </h1></div>";
}






















































/**/
