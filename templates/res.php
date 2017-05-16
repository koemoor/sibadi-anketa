<?php include "templates/include/header.php" ?>
<?php include "config.php" ?>

<?php



  $i = 0;
  foreach($db->query("SELECT * FROM anketiQuestions") as $q){
    $qArray = ['question1','question2','question3','question4','question5','question6','question7','question8',
    'question9','question10','question11','question12','question13','question14','question15',
    'question16','question171','question172','question173','question174','question175','question176',
    'question177','question178','question179','question181','question182','question183','question184',
    'question185','question186','question187','question19','question20','question21','question22','question23',
    'question24','question25','question26','question27','question28','question29','question30','question31','question32'];
    $qstr = $qArray[$i];


?>


<div class="jumbotron">
  <h4><?= $q['name'] ?></h4>
  <?php
    $all=0;
    $j=1;
    $arr = array();
    $ark = array();



    if($qstr == 'question12' || $qstr == 'question31'){
      if($qstr == 'question12'){
        $q12 = array('question121','question122','question123','question124','question125','question126','question127','question128');
        foreach($q12 as $q12s){
          $n12=0;
          foreach($db->query("SELECT $q12s FROM anketiRes") as $a){
              if($a[$q12s] != ""){
                 $all++;
                 $ar12[$a[$q12s]] = $a[$q12s];
                 $ark12[$a[$q12s]]++;
             }
           }
         }
         foreach($ar12 as $a){echo $a." - ".number_format((($ark12[$a]/$all)*100),0)."%<br>";}
       }
       else{
         $q31 = array('question311','question312','question313','question314','question315','question316','question317','question318','question319','question3110','question3111','question3112');
         foreach($q31 as $q31s){
           $n31=0;
           foreach($db->query("SELECT $q31s FROM anketiRes") as $a){
               if($a[$q31s] != ""){
                  $all++;
                  $ar31[$a[$q31s]] = $a[$q31s];
                  $ark31[$a[$q31s]]++;
              }
            }
          }
          foreach($ar31 as $a){echo $a." - ".number_format((($ark31[$a]/$all)*100),0)."%<br>";}
       }

    }else{
     foreach($db->query("SELECT $qstr FROM anketiRes") as $a){
          $all++;
          $find = false;
          foreach ($arr as $ar) {
            if($a[$qstr] == $ar){$find = true; $ark[$ar]++;}
          }
          if(!$find){
            $arr[$a[$qstr]] = $a[$qstr];
            $ark[$a[$qstr]] = 1;
          }

      }
      foreach($arr as $a){
        echo $a." - ".number_format((($ark[$a]/$all)*100),0)."%<br>";
      }
    }
  ?>
</div>



<?php
  $i++;
 } ?>


<?php include "templates/include/footer.php" ?>
