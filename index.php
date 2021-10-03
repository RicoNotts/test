<!DOCTYPE html>
<html lang="en" class="scrollFix">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Script-Type" content="text/javascript">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta name="robots" content="index,follow">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="publisher" content="">
        <meta name="copyright" content=""> 
        <meta name="author" content="TRAXART">
        <meta property="og:site_name" content="Dextraline"/>
        <meta property="og:title" content="Dextraline"/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content="http://www.dextraline.cz/dextra-logo.jpg">
        <meta property="og:url" content="http://www.dextraline.cz/">
        <meta property="og:type" content="website"/>
        <meta name="msvalidate.01" content="0D93BD23162DD70D0B8BCA84698191DD" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-208797523-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-208797523-1');
        </script>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet'>

        <link rel="stylesheet" href="./styles/trx.css">
        <link rel="stylesheet" href="./styles/main.css">
        <link rel="stylesheet" href="./styles/burger.css">
        <link rel="stylesheet" href="./styles/animations.css">

        <link rel="stylesheet" href="./styles/particles.css">

        <link rel="stylesheet" href="./styles/portrait.css">
        <link rel="stylesheet" href="./styles/landscape.css">

        <link rel="stylesheet" href="./styles/fonts.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script language="JavaScript" src="./scripts/function.js"></script>
        <script language="JavaScript" src="./scripts/burger.js"></script>
        <script language="JavaScript" src="./scripts/mailing/mail.js"></script>
        
    </head>
    <body>
        <?php 
        require('scripts/jazyky.php'); 
        $jazyk = htmlspecialchars(@$_GET['l']);
        if ($jazyk == '')
        {$jazyk = 'cz';}
        ?>
        <div id="preloader">
            <div id="headerLeft"><img src="./images/logo.svg" class="preload"></div>
            <div id="preloadBar"><div id="barLoad"></div></div>
        </div>
        <div id="burger">
            <div class="burgerBox nullBox"></div>
            <div class="burgerBox">
                <p class="trx-pointer" id="sluzbyLink">Služby</p>
                <p class="trx-pointer" id="certifLink">Certifikace</p>
                <p class="trx-pointer" id="kontaktLink">Kontakt</p>
            </div>
        </div>
        <div id="trx-wireframe">
            <div id="header">
                <div id="headerLeft"><img src="./images/logo.svg" class="trx-pointer"></div>
                <div id="headerRight">
                    <span class="material-icons trx-center trx-pointer" id="menuIcon">menu</span><span class="material-icons trx-center trx-pointer iconInactive" id="closeIcon">close</span>
                </div>
            </div>
            <div id="node-top"></div>
            <div id="contentOne">
                <div id="cOneBox">
                    <div id="oneBoxExtra"><p>Jsme</p> <b>Mezinárodní</b> <b>doprava</b></div>
                </div>
            </div>
            <div id="breakIcon"><img src="./images/desktop/mouse_icon.svg" class="trx-center trx-pointer"></div>
            <div id="breakOne"></div>
            <div id="breakTwo"></div>
            <div id="breakThree"></div>
            <div id="breakSubG"></div>
            <div id="particles-js" class="pageActive"></div>
            <div id="contentTwo" class="pageActive">
                <div id="contentTwoTop"></div>
                <div id="cTwoLine" class="trx-landscape">
                </div>
                <div id="cTwoBoxes">
                <input type="hidden" name="Service" id="Service" value="">
                    <div class="cTwoBox" id="ctbA">
                        <div class="twoBoxInner trx-border-L" id="cardA">
                            <div class="tbFront trx-border-L">
                                <div class="twoBoxHead">
                                    <div class="tbhPic" id="iconA"></div>
                                    <b>Expresně</b>
                                    <p id="infoA" class="infoInactive trx-portrait">více informací...</p>
                                    <p class="trx-landscape">Došlo k problému ve vašem logistickém řetězci nebo potřebujete transportovat zboží na poslední chvíli? Je pro vás kriticky důležité, aby zboží dorazilo na místo určení včas? Pokud ano, potom je tato služba určena právě pro vás!</p>
                                </div>
                                <div id="buttonA" class="twoBoxTail trx-pointer trx-landscape"><span class="trx-center">Potřebuji rychlost</span></div>
                                <div id="mButtonA" class="twoBoxTail trx-pointer trx-portrait"><span class="trx-center">Potřebuji rychlost</span></div>
                            </div>
                            <div class="tbBack trx-border-L">
                                <div id="formA" class="twoBoxForm trx-landscape">
                                    <div class="formHead"><span class="material-icons trx-pointer">close</span><b>Dříve lépe</b></div>
                                    <div class="formBody"></div>
                                </div>
                                <div class="formSent trx-landscape" id="sentA"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cTwoBox" id="ctbB">
                        <div class="twoBoxInner trx-border-L" id="cardB">
                            <div class="tbFront trx-border-L">
                                <div class="twoBoxHead">
                                    <div class="tbhPic" id="iconB"></div>
                                    <b>Kvalitně</b>
                                    <p id="infoB" class="infoInactive trx-portrait">více informací...</p>
                                    <p class="trx-landscape">Potřebujete splnit nejpřísnější nároky na uchování kvality převáženého nákladu? Na Dextraline se můžete spolehnout! Jsme držiteli certifikací GDP, ISO a TAPA, které naši profesionalitu potvrzují.</p>
                                </div>
                                <div id="buttonB" class="twoBoxTail trx-pointer trx-landscape"><span class="trx-center">Vyžaduji kvalitu</span></div>
                                <div id="mButtonB" class="twoBoxTail trx-pointer trx-portrait"><span class="trx-center">Potřebuji rychlost</span></div>
                            </div>
                            <div class="tbBack trx-border-L">
                                <div id="formB" class="twoBoxForm trx-landscape">
                                    <div class="formHead"><span class="material-icons trx-pointer">close</span><b>Dříve lépe</b></div>
                                    <div class="formBody"></div>
                                </div>
                                <div class="formSent trx-landscape" id="sentB"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cTwoBox" id="ctbC">
                        <div class="twoBoxInner trx-border-L" id="cardC">
                            <div class="tbFront trx-border-L">
                                <div class="twoBoxHead">
                                    <div class="tbhPic" id="iconC"></div>
                                    <b>Ekonomicky</b>
                                    <p id="infoC" class="infoInactive trx-portrait">více informací...</p>
                                    <p class="trx-landscape">Je termín přepravy flexibilní? Opakují se zásilky pravidelně, anebo se jedná jen o několik boxů? Kontaktujte nás, rádi vypracujeme cenovou nabídku přímo pro vás!</p>
                                </div>
                                <div id="buttonC" class="twoBoxTail trx-pointer trx-landscape"><span class="trx-center">Upřednostním cenu</span></div>
                                <div id="mButtonC" class="twoBoxTail trx-pointer trx-portrait"><span class="trx-center">Potřebuji rychlost</span></div>
                            </div>
                            <div class="tbBack trx-border-L">
                                <div id="formC" class="twoBoxForm trx-landscape">
                                    <div class="formHead"><span class="material-icons trx-pointer">close</span><b>Dříve lépe</b></div>
                                    <div class="formBody"></div>
                                </div>
                                <div class="formSent trx-landscape" id="sentC"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cTwoCert">
                    <span class="ctCertBox trx-pointer"><img src="./images/certifikace/tapa.svg"></span>
                    <span class="ctCertBox trx-pointer"><img src="./images/certifikace/iso.svg"></span>
                    <span class="ctCertBox trx-pointer"><img src="./images/certifikace/gdp.svg"></span>
                </div>
                <div id="footer">
                    <div id="fOne"></div>
                    <div id="fTwo">
                        <b>Kontakt</b>
                        <p>Spáčilova 569/27 Kroměříž, 767 01<br/>
                        +420 723 406 452<br/>
                        <a href="mailto:jaroslav.stancik@dextraline.cz">jaroslav.stancik@dextraline.cz</a></p>
                    </div>
                    <div id="fThree">
                        <a href="https://www.facebook.com/Dextraline/"><img src="./images/ikony/fb.svg" class="trx-pointer"></a>
                        <a href="https://www.instagram.com/Dextraline/"><img src="./images/ikony/insta.svg" class="trx-pointer"></a>
                    </div>
                    <div id="fFour"><a href="https://traxart.art"><img src="./images/ikony/traxart.svg"></a></div>
                    <div id="fFive">© 2021 TRAXART Company. All rights reserved</div>
                </div>
            </div>
            <div id="node-bottom"></div>
            <div id="formPage">
                <div id="fPageHeader">
                    <span class="material-icons trx-center trx-pointer">close</span>
                </div>
                <div id="fPageContent">
                    <b>Dříve lépe</b>
                    <div id="mForm"></div>
                </div>
                <div class="formSent trx-portrait"></div>
            </div>
            <div id="certifPage">
                <b>Certifikace</b>
                <?php echo($jazyk); ?>
                <hr class="trx-portrait">
                <div class="cPageBox">
                    <p><h2>ISO 9001</h2></p>
                    <p>Systém managementu kvality ISO 9001 si lze ve zkratce představit jako schopnost společnosti dodávat služby v souladu s požadavky platných zákonů, norem kvality a zákazníků, a to v udržitelné a kontrolované kvalitě. Také schopnost vyhodnotit rizika spojená s dodáním této služby a na základě zkušeností je snižovat na co nejnižší úroveň a tímto zajistit plynulý chod společnosti a neustálé zlepšování se. </p>
                </div>
                <div class="cPageBox">
                    <p><h2>GDP EN 2013/C 343/01</h2></p>
                    <p>Good Distribution Practice, nebo česky Správná Distribuční Praxe (SDP).</p>
                    <p>V naší společnosti konkrétně Správná Distribuční Praxe léčivých přípravků. Jedná se o Evropskou Směrnici obsahující souhrn pravidel Světové Zdravotnické Organizace (WHO), která vymezují, jakými způsoby se smí zacházet s farmaceutiky a léčivými přípravky od procesu výroby, skladování, přes dopravu, až k distribuci.</p>
                    <p>Jde především o dodržování teplotních řetězců, plánovanou údržbu a hygienu dopravních prostředků a chladírenských a měřících zařízení, a také archivaci těchto dat, aby bylo možné zřetelně trasovat unikátní farmaceutické zboží.</p>
                </div>
                <div class="cPageBox">
                    <p><h2>TAPA TSR</h2></p>
                    <p>Bezpečnost má zásadní význam, abyste byli chráněni vy i vaši zákazníci. TAPA TSR je normou bezpečnosti.</p>
                    <p>Tato norma nám pomáhá určit slabá místa v otázce bezpečnosti a následně najít řešení, jak zvýšit úroveň bezpečnosti na maximální dostupnou úroveň.</p>
                    <p>Jedná se například o precizní plánování tras a zajištění bezpečného parkování, používání nadstandardních zabezpečovacích prvků jako jsou přídavné zámky nákladového prostoru či skrytá alarmová tlačítka v kabině řidiče. TAPA TSR také řeší neustálé sledování dopravní jednotky formou aktivních alarmů otevření dveří nákladového prostoru, teploty nákladového prostoru, či odchýlení od plánované trasy, a to vše v reálném čase.</p>
                </div>
                <div class="cPageBox">
                    <p><h2>ATP</h2></p>
                    <p>Dohoda o mezinárodních přepravách teplotně senzitivního zboží určeného pro lidskou spotřebu (především potraviny, ale i léčiva) a o specializovaných prostředcích určených pro tyto přepravy.</p>
                    <p>Používáme pouze takové přepravní prostředky, které jsou vybaveny izotermickou nástavbou se schváleným prostupem tepla a vhodnou chladírenskou technikou. Všechna naše vozidla mají certifikát ATP, aby bylo dosaženo vhodného, a hlavně stabilního prostředí pro převoz těchto teplotně senzitivních komodit.</p>
                </div>
            </div>
            <div id="kontaktPage">
                <div id="wrap">
                    <b>Kontakt</b>
                    <hr class="trx-portrait">
                    <div class="kPageBox"><h1>DEXTRALINE S.R.O.</h1></div>
                    <div class="kPageBox">
                        Spisová značka: <br/>
                        C 100176 vedená u Krajského soudu v Brně
                    </div>
                    <div class="kPageBox trx-bold">PROVOZOVNA A KORESPONDENČNÍ ADRESA:</div>
                    <div class="kPageBox">
                        Spáčilova 569/27 <br/>
                        Kroměříž, 767 01
                    </div>
                    <div class="kPageBox">
                        Sídlo: <br/>
                        Jedovnická 2347/6 <br/>
                        Brno - Líšeň, 628 00 
                    </div>
                </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.8983764238988!2d17.403562115689994!3d49.29726817933289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4713065e8a248d81%3A0x8d7e4bc029c50d85!2zU3DDocSNaWxvdmEgNTY5LzI3LCA3NjcgMDEgS3JvbcSbxZnDrcW-LCBDemVjaGlh!5e0!3m2!1sen!2suk!4v1623063169633!5m2!1sen!2suk" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                </div>
        </div>
        <script language="JavaScript" src="./scripts/particles/particles.js"></script>
        <script language="JavaScript" src="./scripts/particles/app.js"></script>
        <script language="JavaScript" src="./scripts/preloader.js"></script>
    </body>
</html>