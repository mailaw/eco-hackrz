<!DOCTYPE HTML>
<html>
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
    ?>

    <head>
     <script src="jquery-3.2.1.js"></script>
      
      <script src="https://code.highcharts.com/maps/highmaps.js"></script>
      <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
      <script src="https://code.highcharts.com/mapdata/countries/us/custom/us-all-mainland.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--semantic-->
      <link href="Semantic-UI-master/dist/semantic.min.css" rel="stylesheet" type="text/css">
      
      <script src="Semantic-UI-master/dist/semantic.min.js"></script>
      <script src="scripts.js"></script>
      <link href="styles.css" rel="stylesheet" type="text/css">

    </head>
    <body>
       <div class="ui main menu">
        <a href="about.html" class="item active">
            EcoHackrz
        </a>
        <div class="right menu">
            <a href="https://wwwp.cs.unc.edu/Courses/comp426-f17/users/mailiis/eco-hackrz/eco_hackrz/myDashboard.php" class="item">
              My Dashboard
            </a>
            <a href="https://wwwp.cs.unc.edu/Courses/comp426-f17/users/mailiis/eco-hackrz/eco_hackrz/final/landing.html" class="item">
              New Entry
            </a>
            <a href="https://wwwp.cs.unc.edu/Courses/comp426-f17/users/mailiis/eco-hackrz/eco_hackrz/explore.php" class="item">
              Explore
            </a>
            <a href="https://wwwp.cs.unc.edu/Courses/comp426-f17/users/mailiis/eco-hackrz/final/login.php" class="item">
                Login 
            </a>
        </div>
       </div>
        <div class="ui centered grid">
            <div class="ten wide column">
                <h1>Insights Regionally</h1>
                <button onclick="gardenToggle()">Show gardeners</button>
                <button onclick="beeToggle()">Show beekeepers</button>
                <button onclick="activistToggle()">Show activists</button>
                <div id="gardenDiv">
                    <?php
                        $ma = 0;
                        $gardeners1 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ma')";
                        $res1 = $conn->query($gardeners1);
                        $ma = mysqli_num_rows($res1);

                        $wa = 0;
                        $gardeners2 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'wa')";
                        $res2 = $conn->query($gardeners2);
                        $wa = mysqli_num_rows($res2);

                        $ca = 0;
                        $gardeners3 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ca')";
                        $res = $conn->query($gardeners3);
                        $ca = mysqli_num_rows($res);

                        $or = 0;
                        $gardeners4 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'or')";
                        $res4 = $conn->query($gardeners4);
                        $or = mysqli_num_rows($res4);

                        $wi = 0;
                        $gardeners5 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'wi')";
                        $res5 = $conn->query($gardeners5);
                        $wi = mysqli_num_rows($res5);

                        $nv = 0;
                        $gardeners6 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nv')";
                        $res6 = $conn->query($gardeners6);
                        $nv = mysqli_num_rows($res6);

                        $nm = 0;
                        $gardeners7 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nm')";
                        $res7 = $conn->query($gardeners7);
                        $nm = mysqli_num_rows($res7);

                        $co = 0;
                        $gardeners8 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'co')";
                        $res8 = $conn->query($gardeners8);
                        $co = mysqli_num_rows($res8);

                        $wy = 0;
                        $gardeners9 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'wy')";
                        $res9 = $conn->query($gardeners9);
                        $wy = mysqli_num_rows($res9);

                        $ks = 0;
                        $gardeners10 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ks')";
                        $res10 = $conn->query($gardeners10);
                        $ks = mysqli_num_rows($res10);

                        $ne = 0;
                        $gardeners11 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ne')";
                        $res11 = $conn->query($gardeners11);
                        $ne = mysqli_num_rows($res11);

                        $ok = 0;
                        $gardeners12 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ok')";
                        $res12 = $conn->query($gardeners12);
                        $ok = mysqli_num_rows($res12);

                        $mo = 0;
                        $gardeners13 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'mo')";
                        $res13 = $conn->query($gardeners13);
                        $mo = mysqli_num_rows($res13);

                        $il = 0;
                        $gardeners14 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'il')";
                        $res14 = $conn->query($gardeners14);
                        $il = mysqli_num_rows($res14);

                        $in = 0;
                        $gardeners15 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'in')";
                        $res15 = $conn->query($gardeners15);
                        $in = mysqli_num_rows($res15);

                        $vt = 0;
                        $gardeners16 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'vt')";
                        $res16 = $conn->query($gardeners16);
                        $vt = mysqli_num_rows($res16);

                        $ar = 0;
                        $gardeners17 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ar')";
                        $res17 = $conn->query($gardeners17);
                        $ar = mysqli_num_rows($res17);

                        $tx = 0;
                        $gardeners18 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'tx')";
                        $res18 = $conn->query($gardeners18);
                        $tx = mysqli_num_rows($res18);

                        $ri = 0;
                        $gardeners19 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ri')";
                        $res19 = $conn->query($gardeners19);
                        $ri = mysqli_num_rows($res19);

                        $al = 0;
                        $gardeners20 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'al')";
                        $res20 = $conn->query($gardeners20);
                        $al = mysqli_num_rows($res20);

                        $ms = 0;
                        $gardeners21 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ms')";
                        $res21 = $conn->query($gardeners21);
                        $ms = mysqli_num_rows($res21);

                        $nc = 0;
                        $gardeners22 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nc')";
                        $res22 = $conn->query($gardeners22);
                        $nc = mysqli_num_rows($res22);

                        $va = 0;
                        $gardeners23 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'va')";
                        $res23 = $conn->query($gardeners23);
                        $va = mysqli_num_rows($res23);

                        $ia = 0;
                        $gardeners24 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ia')";
                        $res24 = $conn->query($gardeners24);
                        $ia = mysqli_num_rows($res24);

                        $md = 0;
                        $gardeners25 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'md')";
                        $res25 = $conn->query($gardeners25);
                        $md = mysqli_num_rows($res25);

                        $de = 0;
                        $gardeners26 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'de')";
                        $res26 = $conn->query($gardeners26);
                        $de = mysqli_num_rows($res26);

                        $pa = 0;
                        $gardeners27 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'pa')";
                        $res27 = $conn->query($gardeners27);
                        $pa = mysqli_num_rows($res27);

                        $nj = 0;
                        $gardeners28 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nj')";
                        $res28 = $conn->query($gardeners28);
                        $nj = mysqli_num_rows($res28);

                        $ny = 0;
                        $gardeners29 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ny')";
                        $res29 = $conn->query($gardeners29);
                        $ny = mysqli_num_rows($res29);

                        $id = 0;
                        $gardeners30 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'id')";
                        $res30 = $conn->query($gardeners30);
                        $id = mysqli_num_rows($res30);

                        $sd = 0;
                        $gardeners31 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'sd')";
                        $res31 = $conn->query($gardeners31);
                        $sd = mysqli_num_rows($res31);

                        $ct = 0;
                        $gardeners32 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ct')";
                        $res32 = $conn->query($gardeners32);
                        $ct = mysqli_num_rows($res32);

                        $nh = 0;
                        $gardeners33 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nh')";
                        $res33 = $conn->query($gardeners33);
                        $nh = mysqli_num_rows($res33);

                        $ky = 0;
                        $gardeners34 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ky')";
                        $res34 = $conn->query($gardeners34);
                        $ky = mysqli_num_rows($res34);

                        $oh = 0;
                        $gardeners35 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'oh')";
                        $res35 = $conn->query($gardeners35);
                        $oh = mysqli_num_rows($res35);

                        $tn = 0;
                        $gardeners36 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'tn')";
                        $res36 = $conn->query($gardeners36);
                        $tn = mysqli_num_rows($res36);

                        $wv = 0;
                        $gardeners37 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'wv')";
                        $res37 = $conn->query($gardeners37);
                        $wv = mysqli_num_rows($res37);

                        $dc = 0;
                        $gardeners38 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'dc')";
                        $res38 = $conn->query($gardeners38);
                        $dc = mysqli_num_rows($res38);

                        $la = 0;
                        $gardeners39 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'la')";
                        $res39 = $conn->query($gardeners39);
                        $la = mysqli_num_rows($res39);

                        $fl = 0;
                        $gardeners40 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'fl')";
                        $res40 = $conn->query($gardeners40);
                        $fl = mysqli_num_rows($res40);

                        $ga = 0;
                        $gardeners41 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ga')";
                        $res41 = $conn->query($gardeners41);
                        $ga = mysqli_num_rows($res41);

                        $sc = 0;
                        $gardeners42 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'sc')";
                        $res42 = $conn->query($gardeners42);
                        $sc = mysqli_num_rows($res42);

                        $mn = 0;
                        $gardeners43 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'mn')";
                        $res43 = $conn->query($gardeners43);
                        $mn = mysqli_num_rows($res43);

                        $mt = 0;
                        $gardeners44 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'mt')";
                        $res44 = $conn->query($gardeners44);
                        $mt = mysqli_num_rows($res44);

                        $nd = 0;
                        $gardeners45 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'nd')";
                        $res45 = $conn->query($gardeners45);
                        $nd = mysqli_num_rows($res45);

                        $az = 0;
                        $gardeners46 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'az')";
                        $res46 = $conn->query($gardeners46);
                        $az = mysqli_num_rows($res46);

                        $ut = 0;
                        $gardeners47 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'ut')";
                        $res47 = $conn->query($gardeners47);
                        $ut = mysqli_num_rows($res47);

                        $me = 0;
                        $gardeners48 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'me')";
                        $res48 = $conn->query($gardeners48);
                        $me = mysqli_num_rows($res48);

                        $mi = 0;
                        $gardeners49 = "SELECT user_id FROM proj_Users WHERE (gardener = 1 AND state = 'mi')";
                        $res49 = $conn->query($gardeners49);
                        $mi = mysqli_num_rows($res);
                    ?>
                    </div>
                    <div id="beeDiv" style="display: none">
                    <?php

                        $ma = 0;
                        $beekeepers1 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ma')";
                        $res1 = $conn->query($beekeepers1);
                        $ma = mysqli_num_rows($res1);

                        $wa = 0;
                        $beekeepers2 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'wa')";
                        $res2 = $conn->query($beekeepers2);
                        $wa = mysqli_num_rows($res2);

                        $ca = 0;
                        $beekeepers3 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ca')";
                        $res = $conn->query($beekeepers3);
                        $ca = mysqli_num_rows($res);

                        $or = 0;
                        $beekeepers4 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'or')";
                        $res4 = $conn->query($beekeepers4);
                        $or = mysqli_num_rows($res4);

                        $wi = 0;
                        $beekeepers5 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'wi')";
                        $res5 = $conn->query($beekeepers5);
                        $wi = mysqli_num_rows($res5);

                        $nv = 0;
                        $beekeepers6 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nv')";
                        $res6 = $conn->query($beekeepers6);
                        $nv = mysqli_num_rows($res6);

                        $nm = 0;
                        $beekeepers7 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nm')";
                        $res7 = $conn->query($beekeepers7);
                        $nm = mysqli_num_rows($res7);

                        $co = 0;
                        $beekeepers8 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'co')";
                        $res8 = $conn->query($beekeepers8);
                        $co = mysqli_num_rows($res8);

                        $wy = 0;
                        $beekeepers9 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'wy')";
                        $res9 = $conn->query($beekeepers9);
                        $wy = mysqli_num_rows($res9);

                        $ks = 0;
                        $beekeepers10 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ks')";
                        $res10 = $conn->query($beekeepers10);
                        $ks = mysqli_num_rows($res10);

                        $ne = 0;
                        $beekeepers11 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ne')";
                        $res11 = $conn->query($beekeepers11);
                        $ne = mysqli_num_rows($res11);

                        $ok = 0;
                        $beekeepers12 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ok')";
                        $res12 = $conn->query($beekeepers12);
                        $ok = mysqli_num_rows($res12);

                        $mo = 0;
                        $beekeepers13 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'mo')";
                        $res13 = $conn->query($beekeepers13);
                        $mo = mysqli_num_rows($res13);

                        $il = 0;
                        $beekeepers14 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'il')";
                        $res14 = $conn->query($beekeepers14);
                        $il = mysqli_num_rows($res14);

                        $in = 0;
                        $beekeepers15 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'in')";
                        $res15 = $conn->query($beekeepers15);
                        $in = mysqli_num_rows($res15);

                        $vt = 0;
                        $beekeepers16 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'vt')";
                        $res16 = $conn->query($beekeepers16);
                        $vt = mysqli_num_rows($res16);

                        $ar = 0;
                        $beekeepers17 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ar')";
                        $res17 = $conn->query($beekeepers17);
                        $ar = mysqli_num_rows($res17);

                        $tx = 0;
                        $beekeepers18 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'tx')";
                        $res18 = $conn->query($beekeepers18);
                        $tx = mysqli_num_rows($res18);

                        $ri = 0;
                        $beekeepers19 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ri')";
                        $res19 = $conn->query($beekeepers19);
                        $ri = mysqli_num_rows($res19);

                        $al = 0;
                        $beekeepers20 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'al')";
                        $res20 = $conn->query($beekeepers20);
                        $al = mysqli_num_rows($res20);

                        $ms = 0;
                        $beekeepers21 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ms')";
                        $res21 = $conn->query($beekeepers21);
                        $ms = mysqli_num_rows($res21);

                        $nc = 0;
                        $beekeepers22 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nc')";
                        $res22 = $conn->query($beekeepers22);
                        $nc = mysqli_num_rows($res22);

                        $va = 0;
                        $beekeepers23 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'va')";
                        $res23 = $conn->query($beekeepers23);
                        $va = mysqli_num_rows($res23);

                        $ia = 0;
                        $beekeepers24 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ia')";
                        $res24 = $conn->query($beekeepers24);
                        $ia = mysqli_num_rows($res24);

                        $md = 0;
                        $beekeepers25 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'md')";
                        $res25 = $conn->query($beekeepers25);
                        $md = mysqli_num_rows($res25);

                        $de = 0;
                        $beekeepers26 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'de')";
                        $res26 = $conn->query($beekeepers26);
                        $de = mysqli_num_rows($res26);

                        $pa = 0;
                        $beekeepers27 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'pa')";
                        $res27 = $conn->query($beekeepers27);
                        $pa = mysqli_num_rows($res27);

                        $nj = 0;
                        $beekeepers28 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nj')";
                        $res28 = $conn->query($beekeepers28);
                        $nj = mysqli_num_rows($res28);

                        $ny = 0;
                        $beekeepers29 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ny')";
                        $res29 = $conn->query($beekeepers29);
                        $ny = mysqli_num_rows($res29);

                        $id = 0;
                        $beekeepers30 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'id')";
                        $res30 = $conn->query($beekeepers30);
                        $id = mysqli_num_rows($res30);

                        $sd = 0;
                        $beekeepers31 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'sd')";
                        $res31 = $conn->query($beekeepers31);
                        $sd = mysqli_num_rows($res31);

                        $ct = 0;
                        $beekeepers32 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ct')";
                        $res32 = $conn->query($beekeepers32);
                        $ct = mysqli_num_rows($res32);

                        $nh = 0;
                        $beekeepers33 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nh')";
                        $res33 = $conn->query($beekeepers33);
                        $nh = mysqli_num_rows($res33);

                        $ky = 0;
                        $beekeepers34 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ky')";
                        $res34 = $conn->query($beekeepers34);
                        $ky = mysqli_num_rows($res34);

                        $oh = 0;
                        $beekeepers35 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'oh')";
                        $res35 = $conn->query($beekeepers35);
                        $oh = mysqli_num_rows($res35);

                        $tn = 0;
                        $beekeepers36 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'tn')";
                        $res36 = $conn->query($beekeepers36);
                        $tn = mysqli_num_rows($res36);

                        $wv = 0;
                        $beekeepers37 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'wv')";
                        $res37 = $conn->query($beekeepers37);
                        $wv = mysqli_num_rows($res37);

                        $dc = 0;
                        $beekeepers38 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'dc')";
                        $res38 = $conn->query($beekeepers38);
                        $dc = mysqli_num_rows($res38);

                        $la = 0;
                        $beekeepers39 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'la')";
                        $res39 = $conn->query($beekeepers39);
                        $la = mysqli_num_rows($res39);

                        $fl = 0;
                        $beekeepers40 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'fl')";
                        $res40 = $conn->query($beekeepers40);
                        $fl = mysqli_num_rows($res40);

                        $ga = 0;
                        $beekeepers41 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ga')";
                        $res41 = $conn->query($beekeepers41);
                        $ga = mysqli_num_rows($res41);

                        $sc = 0;
                        $beekeepers42 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'sc')";
                        $res42 = $conn->query($beekeepers42);
                        $sc = mysqli_num_rows($res42);

                        $mn = 0;
                        $beekeepers43 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'mn')";
                        $res43 = $conn->query($beekeepers43);
                        $mn = mysqli_num_rows($res43);

                        $mt = 0;
                        $beekeepers44 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'mt')";
                        $res44 = $conn->query($beekeepers44);
                        $mt = mysqli_num_rows($res44);

                        $nd = 0;
                        $beekeepers45 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'nd')";
                        $res45 = $conn->query($beekeepers45);
                        $nd = mysqli_num_rows($res45);

                        $az = 0;
                        $beekeepers46 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'az')";
                        $res46 = $conn->query($beekeepers46);
                        $az = mysqli_num_rows($res46);

                        $ut = 0;
                        $beekeepers47 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'ut')";
                        $res47 = $conn->query($beekeepers47);
                        $ut = mysqli_num_rows($res47);

                        $me = 0;
                        $beekeepers48 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'me')";
                        $res48 = $conn->query($beekeepers48);
                        $me = mysqli_num_rows($res48);

                        $mi = 0;
                        $beekeepers49 = "SELECT user_id FROM proj_Users WHERE (beekeeper = 1 AND state = 'mi')";
                        $res49 = $conn->query($beekeepers49);
                        $mi = mysqli_num_rows($res);

                    ?>
                    </div>
                    <div id="activistDiv" style="display: none">
                    <?php
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

                        ?>
                    </div>

                <!--div class="container">
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
                </div-->
                <!--div id="container"></div-->

          <!--toggle script-->
          <script>
              var x = document.getElementById("gardenDiv");
              var y = document.getElementById("beeDiv");
              var z = document.getElementById("activistDiv");
                function gardenToggle() {
                    if (x.style.display === "none") {
                        x.style.display = "block";
                        y.style.display = "none";
                        z.style.display = "none";
                    } else {
                        x.style.display = "none";
                        y.style.display = "block";
                        z.style.display = "block";
                    }
                }
              function beeToggle() {
                    if (y.style.display === "none") {
                        x.style.display = "none";
                        y.style.display = "block";
                        z.style.display = "none";
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                        z.style.display = "block";
                    }
                }
              function activistToggle() {
                    if (z.style.display === "none") {
                        x.style.display = "none";
                        y.style.display = "none";
                        z.style.display = "block";
                    } else {
                        x.style.display = "block";
                        y.style.display = "block";
                        z.style.display = "none";
                    }
                }
          </script>
          <script>
          console.log("state load successful");
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

          Highcharts.mapChart('gardenDiv', {
              chart: {
                  map: 'countries/us/custom/us-all-mainland'
              },

              title: {
                  text: 'U.S. gardeners'
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
                  name: 'Gardeners',
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

          Highcharts.mapChart('beeDiv', {
              chart: {
                  map: 'countries/us/custom/us-all-mainland'
              },

              title: {
                  text: 'U.S. Beekeepers'
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
                  name: 'Beekeepers',
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
            
        
          Highcharts.mapChart('activistDiv', {
              chart: {
                  map: 'countries/us/custom/us-all-mainland'
              },

              title: {
                  text: 'U.S. Activists'
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
                  name: 'Activists',
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
        </div>
        </div>
    </body>
</html>
