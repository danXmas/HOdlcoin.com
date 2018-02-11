<!DOCTYPE html>
<html class="no-js" lang="en-US">
<head>
  <meta name="description" content="HOdlcoin - " />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOdlcoin</title>
<link rel='dns-prefetch' href='//use.fontawesome.com' />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='ce_responsive-css'  href='css/video-container.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css-css'  href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='b4st-css-css'  href='css/b4st.css' type='text/css' media='all' />
<link rel='stylesheet' id='b4st-intro-css'  href='css/intro.css' type='text/css' media='all' />
<script type='text/javascript' src='js/font-awesome-config.js'></script>
<script type='text/javascript' src='https://use.fontawesome.com/releases/v5.0.4/js/all.js'></script>
<link rel='https://api.w.org/' href='wp-json/' />
<link rel="canonical" href="http://hodlcoin.com/" />
<link rel="alternate" type="application/json+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fhodlcoin.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="wp-json/oembed/1.0/embed?url=http%3A%2F%2Fhodlcoin.com%2F&#038;format=xml" />
<link rel="icon" href="img/download256-150x150.png" sizes="32x32" />
<link rel="icon" href="img/download256.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="img/download256.png" />
<meta name="msapplication-TileImage" content="img/download256.png" />
</head>

<body class="home page-template page-template-full-width-page page-template-full-width-page-php page page-id-323">

<nav class="navbar navbar-expand-md fixed-top">
  <div class="container-responsive">

    <a class="navbar-brand" href="http://hodlcoin.com/">HOdlcoin</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <ul id="menu-mainmenu" class="navbar-nav ml-auto mt-2 mt-lg-0 "><li  id="menu-item-574" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-574"><a href="#specifications" class="nav-link">Specifications</a></li>
<li  id="menu-item-575" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-575"><a href="#wallet" class="nav-link">Wallet</a></li>
<li  id="menu-item-576" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-576"><a href="#hodl" class="nav-link">Hodl</a></li>
<li  id="menu-item-577" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-577"><a href="#get" class="nav-link">Get hodl</a></li>
<li  id="menu-item-578" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-578"><a href="#join" class="nav-link">Join</a></li>
<li  id="menu-item-579" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-579"><a href="#faq" class="nav-link">Faq</a></li>
<li  id="menu-item-580" class="menu-item menu-item-type-custom menu-item-object-custom nav-item nav-item-580"><a target="_blank" href="http://hodl.amit177.cf:1781" class="nav-link">Block explorer</a></li>
</ul>    </div>

  </div>
</nav>

<section id="intro" class="intro-class">
        <div class="container">
            <div class="row text-center">
               <div class="col md-12">
                    <h1 class="intro-title">It's the year of the squirrel</h1> 
               </div>
                
                <div class="col-md-12">
                    <p class="intro-message" data-animate="fadeInUp">Hodlcoin is CPU mineable, by the people for the people<br> Rewards are earned on active HODL balances or you can lock your HODL away for a term and earn more<br> Check out our active and growing community, roadmap, and plans for the future<br>
                </p>
                </div>

                <div class="col-md-12">
                    <img width="200" src="img/logo.png" class="img-fluid intro-logo">
                </div>

                <div class="col-md-12 ann">
                    <h1 class="section-subtitle">Explore the world of HODL</h1>
					<h3 class="intro-message2">The serious cryptocurrency that doesn't take itself too seriously</h3>
                </div>

                <!-- CoinMarketCap API -->

                <!-- CoinMarketCap API -->
								<?php
									$tick = file_get_contents('https://api.coinmarketcap.com/v1/ticker/hodlcoin/');
									$data = json_decode($tick, TRUE);
									$market = $data[0]["market_cap_usd"];
									$volume = $data[0]["24h_volume_usd"];  
									$supply = $data[0]["available_supply"];
									$total = $data[0]["total_supply"];  
								echo "<div class='col-md-3 coinmarketcap'>";
									echo "<strong>Market Cap</strong><br> {$market} USD";
								echo "</div>";
								echo "<div class='col-md-3 coinmarketcap'>";
									echo "<strong>Volume (24h)</strong><br> {$volume} USD";
								echo "</div>";
								echo "<div class='col-md-3 coinmarketcap'>";
									"<strong>Circulating Supply</strong><br> {$supply} HODL";
								echo "</div>";
								echo "<div class='col-md-3 coinmarketcap'>";
									echo "<strong>Total Supply</strong><br> {$total} HODL";
								echo "</div>";
		    						?> 
		</div>
        </div>
</section>

            <!-- *** SPECEFICATION ***
        _________________________________________________________ -->
            <div class="specifications-class" id="specifications">
                <div class="container text-center">
                   <div class="row">
                       <div class="col-lg-12">
                           <h1 class="intro-title">hodl specifications</h1>
                        <p class="intro-message">5% interest is paid on regular balances, and up to 10% interest is paid on coins HODL'd for 1 year. No staking, mining, or counterparty is required. Interest is guaranteed by the blockchain.</p>
                       </div>
                   </div>
                        <div class="row specifications">
                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                   <div class="icon-purple"><i class="far fa-minus-square"></i>
                                </div>
                                <h3 class="heading">Fair launch</h3>
                                <p>No Premine/Instamine/Ninja</p>
                            </div>
                               </div>
                                

                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                <div class="icon-green"><i class="far fa-clock"></i>
                                </div>
                                <h3 class="heading">Block time</h3>
                                <p>154 seconds </p>
                            </div>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                <div class="icon-orange"><i class="fas fa-code"></i> 
                                </div>
                                <h3 class="heading">Subsidy</h3>
                                <p>50 HODL subsidy per block </p>
                            </div>
                            </div>

                        </div>
                        <div class="row specifications">

                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                <div class="icon-blue"><i class="fas fa-check"></i>
                                </div>
                                <h3 class="heading">Proof of work</h3>
                                <p>1GB AES Pattern Search POW</p>
                            </div>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                <div class="icon-red"><i class="fas fa-crop"></i>
                                </div>
                                <h3 class="heading">Halving</h3>
                                <p>Every 4 years</p>
                            </div>
                            </div>

                            <div class="col-md-4" data-animate="fadeInUp">
                               <div class="specifications-box">
                                <div class="icon-yellow"><i class="fas fa-database"></i> 
                                </div>
                                <h3 class="heading">Codebase</h3>
                                <p>Bitcoin 0.11.2</p>
                            </div>
                            </div>

                        </div>
                        
                        <div class="row specifications2">
                            <div class="col-lg-12" data-animate="fadeInUp">
				<h3 class="heading">Maximum Supply</h3><p>191,586,500 HODL By March 2020, followed by 5.5% inflation rate, declining to 3% over 16 years</p>
                                <h3 class="heading">Nominal Interest Rate</h3><p>5% APR</p>
                                <h3 class="heading">Term Deposit Nominal Interest Rate</h3><p>Max of 9.9% APR for 1 Year Term</p>
                                <h3 class="heading">Port</h3><p>1989</p>
                                <h3 class="heading">RPC Port</h3><p>11989</p>
                                <h3 class="heading">Testnet Port</h3><p>8989</p>
                                <h3 class="heading">Proof of Work</h3><p>1GB AES Pattern Search POW. Pattern Search involves filling up RAM with pseudo-random data, and then conducting a search for the start location of an AES encrypted data pattern in that data. Pattern Search is an evolution of the ProtoShares Momentum PoW, first used in MemoryCoin and later modified for use in CryptoNight(Monero,Bytecoin), Ethash(Ethereum). CPU/GPU friendly.</p>
                            </div>
                        </div>
                    <!-- /.12 -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.section -->

            <!-- *** SPECIFICATION END *** -->
            
            
            <!-- *** WALLET *** 
            _____________________________________________________-->
            
            <div class="wallet-class" id="wallet">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="section-title" data-animate="fadeInDown">wallet download</h2>
                            <p class="intro-message">Download the latest HOdl client to get started</p>
                        </div>
                    <div class="col-lg-6 col-md-6">
                       <div class="wallet-download">
                            <h3>Windows</h3>
                            <i class="wallet-icon fab fa-windows fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-win64-setup-unsigned.exe" role="button">64bit</a><a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-win32-setup-unsigned.exe" role="button">32bit</a>
                            </div>
                       </div>
                        
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="wallet-download">
                            <h3>Linux</h3>
                            <i class="wallet-icon fab fa-linux fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-linux64.tar.gz" role="button">64bit</a><a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-linux32.tar.gz" role="button">32bit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="wallet-download">
                            <h3>MacOS</h3>
                            <i class="wallet-icon fab fa-apple fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-osx64.tar.gz" role="button">64bit</a><a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin/releases/download/v3.0.1/hodlcoin-3.0.1-osx-unsigned.dmg" role="button">DMG</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="wallet-download">
                            <h3>Source code</h3>
                            <i class="wallet-icon fas fa-code-branch fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="https://github.com/HOdlcoin/HOdlcoin" role="button">GitHub</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="wallet-download">
                            <h3>Online wallet</h3>
                            <i class="wallet-icon fas fa-cloud fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="http://hodlwallet.amit177.cf:1780" role="button">Visit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="wallet-download">
                            <h3>Paper wallet</h3>
                            <i class="wallet-icon far fa-file fa-4x"></i>
                            <div>
                                <a class="btn btn-success" href="https://walletgenerator.net/?currency=HOdlcoin" role="button">Visit</a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            
            
            
            <!-- *** WALLET END *** -->
            
            
            <!-- *** HODL ***
            _____________________________________________________ -->
            
            
            <div class="hodl" id="hodl">
            	<div class="container">  
                <div class="row">
                   <div class="col-lg-12 text-center">
                            <h1 class="section-title" data-animate="fadeInDown">hodl</h1>
                    </div>
                    <div class="col-lg-12 text-center">
                        <h3>The Standard Interest Rate</h3>
                            <p>is paid on regular balances (outputs), on every block, for a period of up to 30 days (561x30 blocks). The rate is approximately 5% APR or (1/2^22)%, compounded every block. Interest is paid on casual balances for up to 30 days.</p>
                            <h3>Term Deposits</h3>
                            <p>If you lock an amount of HODL as a term deposit, you get a bonus on the interest. The longer the deposit, the bigger bonus.</p>
                            <h3>Term deposit Rates:</h3>
                            <p>1 year term (9.9% APR)<br>6 month term (9.1% APR)<br>3 month term (7.75% APR)<br>1 month term (6.1% APR)<br>Active balance (5% APR)</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h3>Curent interest Rates</h3>  
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="row">Current bonus rate:</th>
                                    <td><div id="bonusrate"></div></td>
                                </tr>
                                <tr>
                                    <th scope="row">Standard Rate:</th>
                                    <td><div id="standardrate"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Total APR:</th>
                        <td><div id="totalrate"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Daily Rate:</th>
                        <td><div id="dailyrate"></div></td>
                    </tr>
                </tbody>
            </table>

           </div>         
           
           <div class="col-lg-6 col-md-6">
               <h3>Term Deposit Calculator</h3>  
                <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Principal (Hodlcoins):</th>
                        <td><input value="100" id="principal" style="text-align: right"/></td>
                    </tr>
                    <tr>
                        <th scope="row">Days:</th>
                        <td><input value="365" id="days" style="text-align: right"/></td>
                        
                    </tr>
                    <tr>
                        <th scope="row">Interest From Standard Rate:</th>
                        <td><div id="tdstandardinterest"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Interest From Bonus Rate:</th>
                        <td><div id="tdbonusinterest"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Interest:</th>
                        <td><div id="tdtotalinterest"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Multiplier:</th>
                        <td><div id="tdmultiplier"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Bonus Due to Term Deposit:</th>
                        <td><div id="tdbonus"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Total Interest At Maturation:</th>
                        <td><div id="tdtotal"></div></td>
                    </tr>
                    <tr>
                        <th scope="row">Principal plus Interest:</th>
                        <td><div id="tdinc"></div></td>
                    </tr>
                </tbody>
            </table>

           </div>         
           
           </div>       
       </div>        
    </div>
            
            <!-- *** HODL END *** -->

            
            <!-- *** GET HODL ***
        _________________________________________________________ -->
            
            <div class="gethodl" id="get">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="section-title" data-animate="fadeInDown">get hodlcoin</h2>
                            <p class="intro-message">HODL can be purchased directly on an exchange. It can also be mined via a computationally-complex 
                                blockchain-based process using only a CPU. This means that almost anyone with a computer can mine HODL.
                                More details about the mining process can be found in the specifications section and elsewhere
                                throughout the HOdlverse. Exchange and mining related links can be found below.</p>
                        </div>
                        
                        <div class="col-lg-6">
                            <h3>Exchanges</h3>
                            <p>A cryptocurrency exchange is a place to buy and sell HODL for Bitcoin(BTC) or other cryptocurrencies.
                                It is a real live marketplace where the exchange rate changes with the supply and demand of HODL
                                and the interests of traders.</p>
                        </div>
                        <div class="col-lg-6">
                            <h3>Mining pool</h3>
                            <p>A mining pool is a service that allows multiple people to combine their computational power
                                in order to generate one block (thus creating more HODL) and share the reward.<br></p>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gethodl-box">
	                            <img class="img-fluid" src="img/ce.png">
	                            <div><a class="btn btn-success" href="https://www.coinexchange.io/market/HODL/BTC" role="button">HODL - BTC</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gethodl-box">
                                <img class="img-fluid" src="img/sn.png">
                                <div><a class="btn btn-success" href="https://hodl.suprnova.cc" role="button">Visit</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <!-- *** get HODL END *** -->
            
            
            <div class="join" id="join">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="section-title">Get involved with HOdlcoin</h2>
                            <p class="intro-message">Whether crypto novice or guru, there are many good reasons to go with HODL,
                                the name that is synonymus with cryptocurrency. 
                                ....and don't forget to check out HODLDAY.COM, as it features our roadmap. 
                                A community HUB, documentation, downloads, step by step guides for beginners, a cryptocurrency learning center, and more
                                will soon be available there.</p>
                        </div>
                        <div class="col-lg-12">
                            <h3>social media</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="facebook" style="cursor: pointer;" onclick="window.open('https://www.facebook.com/hodlcoin', '_blank');">
                                <i class="fab fa-facebook-square fa-4x"></i>
                                <h3>Facebook</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="twitter" style="cursor: pointer;" onclick="window.open('https://twitter.com/hodlcoin', '_blank');">
                                <i class="fab fa-twitter fa-4x"></i>
                                <h3>Twitter</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="youtube">
                                <i class="fab fa-youtube fa-4x"></i>
                                <h3>Youtube</h3>
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="instagram">
                                <i class="fab fa-instagram fa-4x"></i>
                                <h3>Instagram</h3>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <h3>community</h3>
                        </div>
                        <div class="col-md-3">
                            <div class="telegram" style="cursor: pointer;" onclick="window.open('https://t.me/joinchat/GXsKlg9HVTJMY5nzKDRw5w', '_blank');">
                                <i class="fab fa-telegram fa-4x"></i>
                                <h3>Telegram</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="discord" style="cursor: pointer;" onclick="window.open('https://discord.gg/x5fuQkZ', '_blank');">
                                <i class="fab fa-discord fa-4x"></i>
                                <h3>Discord</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bitcointalk" style="cursor: pointer;" onclick="window.open('https://bitcointalk.org/index.php?topic=1317918.0', '_blank');">
                                <i class="fab fa-bitcoin fa-4x"></i>
                                <h3>Bitcointalk.org</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hodlday" style="cursor: pointer;" onclick="window.open('http://www.hodlday.com', '_blank');">
                                <i class="fas fa-users fa-4x"></i>
                                <h3>Hodlday.com</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>      
            
<div class="faq" id="faq">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="section-title faq-title">FAQ</h1>
            </div>
            <div class="col-lg-12">
                    <div class="container">
                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">What is the official animal of HOdlcoin?</a></h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">The squirrel is the official animal of HOdlcoin. The squirrel is the animal kingdom’s natural HOdler.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">What is the official song of HOdlcoin?</a></h4>
                                </div>
                                <div id="collapseTen" class="panel-collapse collapse">
                                    <div class="panel-body">“HODL California” is the official song of HOdlcoin. You can check-out any time you like, but you can never leave.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">How do I correctly capitalize HOdlcoin?</a></h4>
                                </div>
                                <div id="collapseEleven" class="panel-collapse collapse">
                                    <div class="panel-body">HOdlcoin.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">How do I correctly say HODL?</a></h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">HODL. It rhymes with Yodel. Yodeling is also the official musical style of HOdlcoin.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">What is the smallest unit of HODL?</a></h4>
                                </div>
                                <div id="collapseFive" class="panel-collapse collapse">
                                    <div class="panel-body">The nut. There are 100,000,000 nuts in one HODL.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why do you HODL?</a></h4>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse">
                                    <div class="panel-body">Because we suck at trading and we know we suck at trading if you can pit pat piffy wing wong wang make a milino bucks no problem bro then you don’t need to hodl.</div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">When is HOdlday?</a></h4>
                                </div>
                                <div id="collapseEight" class="panel-collapse collapse">
                                    <div class="panel-body">December 21, the winter solstice, and the first day of winter in many parts of the world. In the southern hemisphere it may be the longest day of the year, which means more time for hodlin'. Therefore, It's also the natural time to HOdl and celebrate hodl related activities and achievements.</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
            
            
            <div class="signup" id="signup">
                <div class="container text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="section-title">send me updates on hodlcoin</h2>
                        </div>
                        <div class="col-md-6 offset-md-3">
                                <form action="#" method="post" id="frm-signup" class="form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="your email address" name="email" id="frm-signup-email" required value="">
                                        <span class="input-group-btn">
                                            <input class="btn btn-signup" type="submit" value="Sign up" name="_submit" id="frm-signup-submit">
                                        </span>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
            
                    <script>
window.setInterval(function(){
		maxBonusRate=(Math.pow((1+(1/Math.pow(2,16))),(561*365))-1)*100;
		//maxBonusRate=(1+(1/Math.pow(2,16)));
		maxStandardRate=(Math.pow((1+(1/Math.pow(2,22))),(561*365))-1)*100;
		//maxStandardRate=1+(1/Math.pow(2,22));
		document.getElementById("standardrate").innerHTML=Number(maxStandardRate).toFixed(4)+"%";
		
		
        totalSeconds=Date.now()/1000-1495733454;
		
		//944 is a correction - adjust as necessary if blocks drift
		totalBlocks=totalSeconds/154+255814;
		
		curbonusrate=maxBonusRate*Math.pow(((409530-totalBlocks)/409530),4);
		
		//Daily Rates
		dailyBonusRate=(Math.pow((1+(1/Math.pow(2,16))),(561))-1)*100;
		dailyStandardRate=(Math.pow((1+(1/Math.pow(2,22))),(561))-1)*100;
		
		curDailyBonusRate=dailyBonusRate*Math.pow(((409530-totalBlocks)/409530),4);
		
		
		document.getElementById("bonusrate").innerHTML=Number(curbonusrate).toFixed(4)+"%";
		
		document.getElementById("totalrate").innerHTML=Number(curbonusrate+maxStandardRate).toFixed(4)+"%";
		
		document.getElementById("dailyrate").innerHTML=Number(curDailyBonusRate+dailyStandardRate).toFixed(4)+"%";
		
		//alert("blockEstimate:"+totalBlocks);
		
		days=Number(document.getElementById("days").value);
		principal=Number(document.getElementById("principal").value);
		

		if(days>365){
			days=365;
			}
		
		
		termDepositStandardInterest=(Math.pow((1+(1/Math.pow(2,22))),(561*days))-1)*principal;
		termDepositBonusInterest=(Math.pow((1+(1/Math.pow(2,16))),(561*days))-1)*Math.pow(((409530-totalBlocks)/409530),4)*principal;
		
		document.getElementById("tdstandardinterest").innerHTML=Number(termDepositStandardInterest).toFixed(4);
		document.getElementById("tdbonusinterest").innerHTML=Number(termDepositBonusInterest).toFixed(4);
		document.getElementById("tdtotalinterest").innerHTML=Number(termDepositStandardInterest+termDepositBonusInterest).toFixed(4);
		
		termDepositMultiplier =0;
		if(days>2){
			termDepositMultiplier =(1-Math.pow(((409530-561*days)/409530),6));
		}
		document.getElementById("tdmultiplier").innerHTML=Number(termDepositMultiplier).toFixed(4);
		tdBonus=(termDepositStandardInterest+termDepositBonusInterest)*termDepositMultiplier;
		
		document.getElementById("tdbonus").innerHTML=Number(tdBonus).toFixed(4);
		totalMaturation=tdBonus+termDepositStandardInterest+termDepositBonusInterest;
		
		document.getElementById("tdtotal").innerHTML=Number(totalMaturation).toFixed(4);
		
		principalPlusInterest=Number(principal)+totalMaturation;
		document.getElementById("tdinc").innerHTML=Number(principalPlusInterest).toFixed(4);


	}, 500);
</script>

<div class="footer" id="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <h4>&copy; 2018 <a href="http://hodlcoin.com/">HOdlcoin</a></h4>
            </div>
            <!-- /.6 -->
        </div>
    </div>
    <!-- /.container -->
</div>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/b4st.js'></script>
</body>
</html>
