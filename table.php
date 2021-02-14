<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1254">
<style type="text/css">

a:link {
  color: black;
   text-decoration: none;
   font-size: large;
}

/* visited link */
a:visited {
  color: black;
  text-decoration: none;
  font-size: large;
}

/* mouse over link */
a:hover {
  color: hotpink;
  text-decoration: none;
font-size: large;
}

/* selected link */
a:active {
  color: blue;
  text-decoration: none;
font-size: large;
}



table {
    width: 800px;
    border-collapse: collapse;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    text-align:center;
}
table {
    display: table;
    border-collapse: separate;
    box-sizing: border-box;
    text-indent: initial;
    border-spacing: 2px;
    border-color: grey;
    text-align:center;
}
body {
    margin: 0;
    background: linear-gradient(45deg, #49a09d, #5f2c82);
    font-family: sans-serif;
    font-weight: 100;
    text-align:center;
}


</style>
<title>Paribu Ticker</title>

</head>

  
    <body>
    <?php

$jsonVeri=file_get_contents("https://www.paribu.com/ticker");
$veri=json_decode($jsonVeri,1);

?>
<table style="height:150px">
		<thead>
		<tr style="background-color:#FF0000">
		
				<th><a href="https://www.paribu.com" target="_blank">Homepage</a></th>
				<th><a onclick="window.location.href=this">Refresh</a></th>
				<th><a href="https://black4rts.online/like.php" target="_blank">Like</a></th>
				<th><a href="https://black4rts.online/donate.php" target="_blank">Donate</a></th>
				<th><a href="https://black4rts.online/contact.php" target="_blank">Contact</a></th>
			</tr>
			
		</thead>
		</table>	
			
  <table>
		<thead>
		
			<tr>
				<th>Coins</th>
				<th>Icon</th>
				<th>Value</th>
				<th>High24hr</th>
				<th>Low24hr</th>
			</tr>
		</thead>
		<tbody>
			<tr>
<td>BTC_TL</td>
<td><img src="icon/btc.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["BTC_TL"]["lowestAsk"]?></td>
<td><?=$veri["BTC_TL"]["high24hr"]?></td>
<td><?=$veri["BTC_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>ETH_TL</td>
<td><img src="icon/eth.png" alt="ETH_TL" width="32" height="32"></td>
<td><?=$veri["ETH_TL"]["lowestAsk"]?></td>
<td><?=$veri["ETH_TL"]["high24hr"]?></td>
<td><?=$veri["ETH_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>XRP_TL</td>
<td><img src="icon/xrp.png" alt="XRP_TL" width="32" height="32"></td>
<td><?=$veri["XRP_TL"]["lowestAsk"]?></td>
<td><?=$veri["XRP_TL"]["high24hr"]?></td>
<td><?=$veri["XRP_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>BTC_USDT</td>
<td><img src="icon/btc.png" alt="BTC_USDT" width="32" height="32"></td>
<td><?=$veri["BTC_USDT"]["lowestAsk"]?></td>
<td><?=$veri["BTC_USDT"]["high24hr"]?></td>
<td><?=$veri["BTC_USDT"]["low24hr"]?></td>
</tr>

<tr>
<td>OMG_TL</td>
<td><img src="icon/omg.png" alt="OMG_TL" width="32" height="32"></td>
<td><?=$veri["OMG_TL"]["lowestAsk"]?></td>
<td><?=$veri["OMG_TL"]["high24hr"]?></td>
<td><?=$veri["OMG_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>MKR_TL</td>
<td><img src="icon/mkr.png" alt="MKR_TL" width="32" height="32"></td>
<td><?=$veri["MKR_TL"]["lowestAsk"]?></td>
<td><?=$veri["MKR_TL"]["high24hr"]?></td>
<td><?=$veri["MKR_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>AVAX_TL</td>
<td><img src="icon/avax.png" alt="AVAX_TL" width="32" height="32"></td>
<td><?=$veri["AVAX_TL"]["lowestAsk"]?></td>
<td><?=$veri["AVAX_TL"]["high24hr"]?></td>
<td><?=$veri["AVAX_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>DOT_TL</td>
<td><img src="icon/dot.png" alt="DOT_TL" width="32" height="32"></td>
<td><?=$veri["DOT_TL"]["lowestAsk"]?></td>
<td><?=$veri["DOT_TL"]["high24hr"]?></td>
<td><?=$veri["DOT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>XTZ_TL</td>
<td><img src="icon/xtz.png" alt="XTZ_TL" width="32" height="32"></td>
<td><?=$veri["XTZ_TL"]["lowestAsk"]?></td>
<td><?=$veri["XTZ_TL"]["high24hr"]?></td>
<td><?=$veri["XTZ_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>ATOM_TL</td>
<td><img src="icon/atom.png" alt="ATOM_TL" width="32" height="32"></td>
<td><?=$veri["ATOM_TL"]["lowestAsk"]?></td>
<td><?=$veri["ATOM_TL"]["high24hr"]?></td>
<td><?=$veri["ATOM_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>TRX_TL</td>
<td><img src="icon/trx.png" alt="TRX_TL" width="32" height="32"></td>
<td><?=$veri["TRX_TL"]["lowestAsk"]?></td>
<td><?=$veri["TRX_TL"]["high24hr"]?></td>
<td><?=$veri["TRX_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>HOT_TL</td>
<td><img src="icon/hot.png" alt="HOT_TL" width="32" height="32"></td>
<td><?=$veri["HOT_TL"]["lowestAsk"]?></td>
<td><?=$veri["HOT_TL"]["high24hr"]?></td>
<td><?=$veri["HOT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>WAVES_TL</td>
<td><img src="icon/waves.png" alt="WAVES_TL" width="32" height="32"></td>
<td><?=$veri["WAVES_TL"]["lowestAsk"]?></td>
<td><?=$veri["WAVES_TL"]["high24hr"]?></td>
<td><?=$veri["WAVES_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>ONT_TL</td>
<td><img src="icon/ont.png" alt="ONT_TL" width="32" height="32"></td>
<td><?=$veri["ONT_TL"]["lowestAsk"]?></td>
<td><?=$veri["ONT_TL"]["high24hr"]?></td>
<td><?=$veri["ONT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>LINK_TL</td>
<td><img src="icon/link.png" alt="LINK_TL" width="32" height="32"></td>
<td><?=$veri["LINK_TL"]["lowestAsk"]?></td>
<td><?=$veri["LINK_TL"]["high24hr"]?></td>
<td><?=$veri["LINK_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>CHZ_TL</td>
<td><img src="icon/chz.png" alt="CHZ_TL" width="32" height="32"></td>
<td><?=$veri["CHZ_TL"]["lowestAsk"]?></td>
<td><?=$veri["CHZ_TL"]["high24hr"]?></td>
<td><?=$veri["CHZ_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>RVN_TL</td>
<td><img src="icon/rvn.png" alt="RVN_TL" width="32" height="32"></td>
<td><?=$veri["RVN_TL"]["lowestAsk"]?></td>
<td><?=$veri["RVN_TL"]["high24hr"]?></td>
<td><?=$veri["RVN_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>BAT_TL</td>
<td><img src="icon/bat.png" alt="BAT_TL" width="32" height="32"></td>
<td><?=$veri["BAT_TL"]["lowestAsk"]?></td>
<td><?=$veri["BAT_TL"]["high24hr"]?></td>
<td><?=$veri["BAT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>BTT_TL</td>
<td><img src="icon/btt.png" alt="BTT_TL" width="32" height="32"></td>
<td><?=$veri["BTT_TL"]["lowestAsk"]?></td>
<td><?=$veri["BTT_TL"]["high24hr"]?></td>
<td><?=$veri["BTT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>LTC_TL</td>
<td><img src="icon/ltc.png" alt="LTC_TL" width="32" height="32"></td>
<td><?=$veri["LTC_TL"]["lowestAsk"]?></td>
<td><?=$veri["LTC_TL"]["high24hr"]?></td>
<td><?=$veri["LTC_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>BCH_TL</td>
<td><img src="icon/bch.png" alt="BCH_TL" width="32" height="32"></td>
<td><?=$veri["BCH_TL"]["lowestAsk"]?></td>
<td><?=$veri["BCH_TL"]["high24hr"]?></td>
<td><?=$veri["BCH_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>XLM_TL</td>
<td><img src="icon/xlm.png" alt="XLM_TL" width="32" height="32"></td>
<td><?=$veri["XLM_TL"]["lowestAsk"]?></td>
<td><?=$veri["XLM_TL"]["high24hr"]?></td>
<td><?=$veri["XLM_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>DOGE_TL</td>
<td><img src="icon/doge.png" alt="DOGE_TL" width="32" height="32"></td>
<td><?=$veri["DOGE_TL"]["lowestAsk"]?></td>
<td><?=$veri["DOGE_TL"]["high24hr"]?></td>
<td><?=$veri["DOGE_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>ADA_TL</td>
<td><img src="icon/ada.png" alt="ADA_TL" width="32" height="32"></td>
<td><?=$veri["ADA_TL"]["lowestAsk"]?></td>
<td><?=$veri["ADA_TL"]["high24hr"]?></td>
<td><?=$veri["ADA_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>NEO_TL</td>
<td><img src="icon/neo.png" alt="NEO_TL" width="32" height="32"></td>
<td><?=$veri["NEO_TL"]["lowestAsk"]?></td>
<td><?=$veri["NEO_TL"]["high24hr"]?></td>
<td><?=$veri["NEO_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>USDT_TL</td>
<td><img src="icon/usdt.png" alt="USDT_TL" width="32" height="32"></td>
<td><?=$veri["USDT_TL"]["lowestAsk"]?></td>
<td><?=$veri["USDT_TL"]["high24hr"]?></td>
<td><?=$veri["USDT_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>EOS_TL</td>
<td><img src="icon/eos.png" alt="EOS_TL" width="32" height="32"></td>
<td><?=$veri["EOS_TL"]["lowestAsk"]?></td>
<td><?=$veri["EOS_TL"]["high24hr"]?></td>
<td><?=$veri["EOS_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>GAL_CHZ</td>
<td><img src="icon/gal.png" alt="GAL_CHZ" width="32" height="32"></td>
<td><?=$veri["GAL_CHZ"]["lowestAsk"]?></td>
<td><?=$veri["GAL_CHZ"]["high24hr"]?></td>
<td><?=$veri["GAL_CHZ"]["low24hr"]?></td>
</tr>

<tr>
<td>GAL_TL</td>
<td><img src="icon/gal.png" alt="GAL_TL" width="32" height="32"></td>
<td><?=$veri["GAL_TL"]["lowestAsk"]?></td>
<td><?=$veri["GAL_TL"]["high24hr"]?></td>
<td><?=$veri["GAL_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>TRA_TL</td>
<td><img src="icon/tra.png" alt="TRA_TL" width="32" height="32"></td>
<td><?=$veri["TRA_TL"]["lowestAsk"]?></td>
<td><?=$veri["TRA_TL"]["high24hr"]?></td>
<td><?=$veri["TRA_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>JUV_TL</td>
<td><img src="icon/juv.png" alt="JUV_TL" width="32" height="32"></td>
<td><?=$veri["JUV_TL"]["lowestAsk"]?></td>
<td><?=$veri["JUV_TL"]["high24hr"]?></td>
<td><?=$veri["JUV_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>PSG_TL</td>
<td><img src="icon/psg.png" alt="PSG_TL" width="32" height="32"></td>
<td><?=$veri["PSG_TL"]["lowestAsk"]?></td>
<td><?=$veri["PSG_TL"]["high24hr"]?></td>
<td><?=$veri["PSG_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>ETH_USDT</td>
<td><img src="icon/eth.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["ETH_USDT"]["lowestAsk"]?></td>
<td><?=$veri["ETH_USDT"]["high24hr"]?></td>
<td><?=$veri["ETH_USDT"]["low24hr"]?></td>
</tr>

<tr>
<td>XRP_USDT</td>
<td><img src="icon/xrp.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["XRP_USDT"]["lowestAsk"]?></td>
<td><?=$veri["XRP_USDT"]["high24hr"]?></td>
<td><?=$veri["XRP_USDT"]["low24hr"]?></td>
</tr>

<tr>
<td>MKR_USDT</td>
<td><img src="icon/mkr.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["MKR_USDT"]["lowestAsk"]?></td>
<td><?=$veri["MKR_USDT"]["high24hr"]?></td>
<td><?=$veri["MKR_USDT"]["low24hr"]?></td>
</tr>

<tr>
<td>UNI_TL</td>
<td><img src="icon/uni.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["UNI_TL"]["lowestAsk"]?></td>
<td><?=$veri["UNI_TL"]["high24hr"]?></td>
<td><?=$veri["UNI_TL"]["low24hr"]?></td>
</tr>

<tr>
<td>AVAX_USDT</td>
<td><img src="icon/avax.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["AVAX_USDT"]["lowestAsk"]?></td>
<td><?=$veri["AVAX_USDT"]["high24hr"]?></td>
<td><?=$veri["AVAX_USDT"]["low24hr"]?></td>
</tr>

<tr>
<td>AAVE_TL</td>
<td><img src="icon/aave.png" alt="Bitcoin" width="32" height="32"></td>
<td><?=$veri["AAVE_TL"]["lowestAsk"]?></td>
<td><?=$veri["AAVE_TL"]["high24hr"]?></td>
<td><?=$veri["AAVE_TL"]["low24hr"]?></td>
</tr>
		</tbody>
	</table>
    </body>
    

</html>