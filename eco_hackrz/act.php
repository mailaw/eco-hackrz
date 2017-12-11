<!DOCTYPE HTML>
<?php

$servername = "classroom.cs.unc.edu";
$username = "kimia";
$password = "genericpassword";
$dbname = "kimiadb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

      $sql="SELECT * FROM proj_Users";
      $result=mysqli_query($conn, $sql);
      //$rowcount=mysqli_num_rows($result);
      //echo $rowcount;

      //for ($i = 0; $i < $rowcount; $i++){
        $ma = 0;
        $env_activists1 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ma')";
        $res1 = $conn->query($env_activists1);
        $ma = mysqli_num_rows($res1);

        $wa = 0;
        $env_activists2 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'wa')";
        $res2 = $conn->query($env_activists2);
        $wa = mysqli_num_rows($res2);

        $ca = 0;
        $env_activists3 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ca')";
        $res = $conn->query($env_activists3);
        $ca = mysqli_num_rows($res);

        $or = 0;
        $env_activists4 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'or')";
        $res4 = $conn->query($env_activists4);
        $or = mysqli_num_rows($res4);

        $wi = 0;
        $env_activists5 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'wi')";
        $res5 = $conn->query($env_activists5);
        $wi = mysqli_num_rows($res5);

        $nv = 0;
        $env_activists6 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nv')";
        $res6 = $conn->query($env_activists6);
        $nv = mysqli_num_rows($res6);

        $nm = 0;
        $env_activists7 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nm')";
        $res7 = $conn->query($env_activists7);
        $nm = mysqli_num_rows($res7);

        $co = 0;
        $env_activists8 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'co')";
        $res8 = $conn->query($env_activists8);
        $co = mysqli_num_rows($res8);

        $wy = 0;
        $env_activists9 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'wy')";
        $res9 = $conn->query($env_activists9);
        $wy = mysqli_num_rows($res9);

        $ks = 0;
        $env_activists10 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ks')";
        $res10 = $conn->query($env_activists10);
        $ks = mysqli_num_rows($res10);

        $ne = 0;
        $env_activists11 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ne')";
        $res11 = $conn->query($env_activists11);
        $ne = mysqli_num_rows($res11);

        $ok = 0;
        $env_activists12 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ok')";
        $res12 = $conn->query($env_activists12);
        $ok = mysqli_num_rows($res12);

        $mo = 0;
        $env_activists13 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'mo')";
        $res13 = $conn->query($env_activists13);
        $mo = mysqli_num_rows($res13);

        $il = 0;
        $env_activists14 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'il')";
        $res14 = $conn->query($env_activists14);
        $il = mysqli_num_rows($res14);

        $in = 0;
        $env_activists15 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'in')";
        $res15 = $conn->query($env_activists15);
        $in = mysqli_num_rows($res15);

        $vt = 0;
        $env_activists16 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'vt')";
        $res16 = $conn->query($env_activists16);
        $vt = mysqli_num_rows($res16);

        $ar = 0;
        $env_activists17 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ar')";
        $res17 = $conn->query($env_activists17);
        $ar = mysqli_num_rows($res17);

        $tx = 0;
        $env_activists18 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'tx')";
        $res18 = $conn->query($env_activists18);
        $tx = mysqli_num_rows($res18);

        $ri = 0;
        $env_activists19 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ri')";
        $res19 = $conn->query($env_activists19);
        $ri = mysqli_num_rows($res19);

        $al = 0;
        $env_activists20 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'al')";
        $res20 = $conn->query($env_activists20);
        $al = mysqli_num_rows($res20);

        $ms = 0;
        $env_activists21 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ms')";
        $res21 = $conn->query($env_activists21);
        $ms = mysqli_num_rows($res21);

        $nc = 0;
        $env_activists22 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nc')";
        $res22 = $conn->query($env_activists22);
        $nc = mysqli_num_rows($res22);

        $va = 0;
        $env_activists23 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'va')";
        $res23 = $conn->query($env_activists23);
        $va = mysqli_num_rows($res23);

        $ia = 0;
        $env_activists24 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ia')";
        $res24 = $conn->query($env_activists24);
        $ia = mysqli_num_rows($res24);

        $md = 0;
        $env_activists25 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'md')";
        $res25 = $conn->query($env_activists25);
        $md = mysqli_num_rows($res25);

        $de = 0;
        $env_activists26 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'de')";
        $res26 = $conn->query($env_activists26);
        $de = mysqli_num_rows($res26);

        $pa = 0;
        $env_activists27 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'pa')";
        $res27 = $conn->query($env_activists27);
        $pa = mysqli_num_rows($res27);

        $nj = 0;
        $env_activists28 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nj')";
        $res28 = $conn->query($env_activists28);
        $nj = mysqli_num_rows($res28);

        $ny = 0;
        $env_activists29 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ny')";
        $res29 = $conn->query($env_activists29);
        $ny = mysqli_num_rows($res29);

        $id = 0;
        $env_activists30 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'id')";
        $res30 = $conn->query($env_activists30);
        $id = mysqli_num_rows($res30);

        $sd = 0;
        $env_activists31 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'sd')";
        $res31 = $conn->query($env_activists31);
        $sd = mysqli_num_rows($res31);

        $ct = 0;
        $env_activists32 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ct')";
        $res32 = $conn->query($env_activists32);
        $ct = mysqli_num_rows($res32);

        $nh = 0;
        $env_activists33 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nh')";
        $res33 = $conn->query($env_activists33);
        $nh = mysqli_num_rows($res33);

        $ky = 0;
        $env_activists34 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ky')";
        $res34 = $conn->query($env_activists34);
        $ky = mysqli_num_rows($res34);

        $oh = 0;
        $env_activists35 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'oh')";
        $res35 = $conn->query($env_activists35);
        $oh = mysqli_num_rows($res35);

        $tn = 0;
        $env_activists36 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'tn')";
        $res36 = $conn->query($env_activists36);
        $tn = mysqli_num_rows($res36);

        $wv = 0;
        $env_activists37 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'wv')";
        $res37 = $conn->query($env_activists37);
        $wv = mysqli_num_rows($res37);

        $dc = 0;
        $env_activists38 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'dc')";
        $res38 = $conn->query($env_activists38);
        $dc = mysqli_num_rows($res38);

        $la = 0;
        $env_activists39 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'la')";
        $res39 = $conn->query($env_activists39);
        $la = mysqli_num_rows($res39);

        $fl = 0;
        $env_activists40 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'fl')";
        $res40 = $conn->query($env_activists40);
        $fl = mysqli_num_rows($res40);

        $ga = 0;
        $env_activists41 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ga')";
        $res41 = $conn->query($env_activists41);
        $ga = mysqli_num_rows($res41);

        $sc = 0;
        $env_activists42 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'sc')";
        $res42 = $conn->query($env_activists42);
        $sc = mysqli_num_rows($res42);

        $mn = 0;
        $env_activists43 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'mn')";
        $res43 = $conn->query($env_activists43);
        $mn = mysqli_num_rows($res43);

        $mt = 0;
        $env_activists44 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'mt')";
        $res44 = $conn->query($env_activists44);
        $mt = mysqli_num_rows($res44);

        $nd = 0;
        $env_activists45 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'nd')";
        $res45 = $conn->query($env_activists45);
        $nd = mysqli_num_rows($res45);

        $az = 0;
        $env_activists46 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'az')";
        $res46 = $conn->query($env_activists46);
        $az = mysqli_num_rows($res46);

        $ut = 0;
        $env_activists47 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'ut')";
        $res47 = $conn->query($env_activists47);
        $ut = mysqli_num_rows($res47);

        $me = 0;
        $env_activists48 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'me')";
        $res48 = $conn->query($env_activists48);
        $me = mysqli_num_rows($res48);

        $mi = 0;
        $env_activists49 = "SELECT user_id FROM proj_Users WHERE (env_activist = 1 AND state = 'mi')";
        $res49 = $conn->query($env_activists49);
        $mi = mysqli_num_rows($res);

      //}





?>

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.highcharts.com/maps/highmaps.js"></script>
  <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/mapdata/countries/us/custom/us-all-mainland.js"></script>
</head>

<body>
  <div class="container">
    <div class="dropdown">
      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Maps
      <span class="caret"></span></button>
      <ul class="dropdown-menu">
        <li><a href="bees.php">Beekeepers</a></li>
        <li><a href="gardener.php">Gardeners</a></li>
        <li><a href="act.php">Activists</a></li>
        <li><a href="comp.php">Composters</a></li>
      </ul>
    </div>
  </div>
  <div id="container"></div>

  <script>
  console.log("hi");
  var MA= <?php echo $ma; ?>;
  var WA= <?php echo $wa; ?>;
  var CA= <?php echo $ca; ?>;
  var OR= <?php echo $or; ?>;
  var WI= <?php echo $wi; ?>;
  var ME= <?php echo $me; ?>;
  var MI= <?php echo $mi; ?>;
  var NV= <?php echo $nv; ?>;
  var NM= <?php echo $nm; ?>;
  var CO= <?php echo $co; ?>;
  var WY= <?php echo $wy; ?>;
  var KS= <?php echo $ks; ?>;
  var NE= <?php echo $ne; ?>;
  var OK= <?php echo $ok; ?>;
  var MO= <?php echo $mo; ?>;
  var IL= <?php echo $il; ?>;
  var IN= <?php echo $in; ?>;
  var VT= <?php echo $vt; ?>;
  var AR= <?php echo $ar; ?>;
  var TX= <?php echo $tx; ?>;
  var RI= <?php echo $ri; ?>;
  var AL= <?php echo $al; ?>;
  var MS= <?php echo $ms; ?>;
  var NC= <?php echo $nc; ?>;
  var VA= <?php echo $va; ?>;
  var IA= <?php echo $ia; ?>;
  var MD= <?php echo $md; ?>;
  var DE= <?php echo $de; ?>;
  var PA= <?php echo $pa; ?>;
  var NJ= <?php echo $nj; ?>;
  var NY= <?php echo $ny; ?>;
  var ID= <?php echo $id; ?>;
  var SD= <?php echo $sd; ?>;
  var CT= <?php echo $ct; ?>;
  var NH= <?php echo $nh; ?>;
  var KY= <?php echo $ky; ?>;
  var OH= <?php echo $oh; ?>;
  var TN= <?php echo $tn; ?>;
  var WV= <?php echo $wv; ?>;
  var DC= <?php echo $dc; ?>;
  var LA= <?php echo $la; ?>;
  var FL= <?php echo $fl; ?>;
  var GA= <?php echo $ga; ?>;
  var SC= <?php echo $sc; ?>;
  var MN= <?php echo $mn; ?>;
  var MT= <?php echo $mt; ?>;
  var ND= <?php echo $nd; ?>;
  var AZ= <?php echo $az; ?>;
  var UT= <?php echo $ut; ?>;

  var data = [
      ['us-ma', MA],
      ['us-wa', WA],
      ['us-ca', CA],
      ['us-or', OR],
      ['us-wi', WI],
      ['us-me', ME],
      ['us-mi', MI],
      ['us-nv', NV],
      ['us-nm', NM],
      ['us-co', CO],
      ['us-wy', WY],
      ['us-ks', KS],
      ['us-ne', NE],
      ['us-ok', OK],
      ['us-mo', MO],
      ['us-il', IL],
      ['us-in', IN],
      ['us-vt', VT],
      ['us-ar', AR],
      ['us-tx', TX],
      ['us-ri', RI],
      ['us-al', AL],
      ['us-ms', MS],
      ['us-nc', NC],
      ['us-va', VA],
      ['us-ia', IA],
      ['us-md', MD],
      ['us-de', DE],
      ['us-pa', PA],
      ['us-nj', NJ],
      ['us-ny', NY],
      ['us-id', ID],
      ['us-sd', SD],
      ['us-ct', CT],
      ['us-nh', NH],
      ['us-ky', KY],
      ['us-oh', OH],
      ['us-tn', TN],
      ['us-wv', WV],
      ['us-dc', DC],
      ['us-la', LA],
      ['us-fl', FL],
      ['us-ga', GA],
      ['us-sc', SC],
      ['us-mn', MN],
      ['us-mt', MT],
      ['us-nd', ND],
      ['us-az', AZ],
      ['us-ut', UT]
  ]

  Highcharts.mapChart('container', {
      chart: {
          map: 'countries/us/custom/us-all-mainland'
      },

      title: {
          text: 'U.S. Environmental Activists'
      },

      mapNavigation: {
          enabled: true,
          buttonOptions: {
              verticalAlign: 'bottom'
          }
      },

      colorAxis: {
          min: 0
      },

      series: [{
          data: data,
          name: 'Environmental Activists',
          states: {
              hover: {
                  color: '#BADA55'
              }
          },
          dataLabels: {
              enabled: true,
              format: '{point.name}'
          }
      }]
  });

  </script>
</body>
</html>
