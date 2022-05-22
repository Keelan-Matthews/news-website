<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/brands.css">
    <link rel="stylesheet" href="./css/regular.css">
    <link rel="stylesheet" href="./css/solid.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Daybreak News | COVID-19</title>
</head>
<body id="body" class="light">
    <?php include 'templates/header.php' ?>
    <main class="background d-flex flex-column align-items-center">
        <section class="top d-flex flex-column align-items-center">
            <div class="d-flex align-items-center">
                <svg id="logo-header" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="981.61" height="490.81" viewBox="0 0 981.61 490.81">
                    <defs>
                      <style>
                        .cls-1 {
                          fill: #ed6d72;
                        }
                  
                        .cls-2 {
                          fill: #ffb882;
                        }
                  
                        .cls-3 {
                          fill: #fff7a1;
                        }
                  
                        .cls-4 {
                          fill: #ed5359;
                        }
                      </style>
                    </defs>
                    <g>
                      <g>
                        <path class="cls-1" d="M925.1,745.4H838.23c0-186.5-151.73-338.23-338.23-338.23S161.77,558.9,161.77,745.4H74.9A425.21,425.21,0,0,1,891.68,579.92,422.45,422.45,0,0,1,925.1,745.4Z" transform="translate(-9.19 -254.6)"/>
                        <path class="cls-2" d="M731.53,708.5C712.55,598.11,615.72,510.9,500,510.9c-116.75,0-213.85,85.77-231.6,197.6H181.06c3.62-29.32,11.26-60.82,22.84-88.2a321.54,321.54,0,0,1,592.2,0c11.58,27.38,19.22,58.88,22.84,88.2Z" transform="translate(-9.19 -254.6)"/>
                        <path class="cls-3" d="M298.55,676.14c30-82.24,108.85-141,201.45-141s171.49,58.73,201.45,141" transform="translate(-9.19 -254.6)"/>
                      </g>
                      <g>
                        <g>
                          <path class="cls-4" d="M617.23,297.87a464.27,464.27,0,0,0-117.23-15V254.6a492.35,492.35,0,0,1,124.37,15.9Z" transform="translate(-9.19 -254.6)"/>
                          <path class="cls-4" d="M990.81,745.4h-28.3a463.22,463.22,0,0,0-17.16-125.25l27.25-7.65A491.91,491.91,0,0,1,990.81,745.4Z" transform="translate(-9.19 -254.6)"/>
                        </g>
                        <g>
                          <path class="cls-4" d="M382.78,297.87l-7.16-27.37A492.54,492.54,0,0,1,500,254.6v28.29A464.14,464.14,0,0,0,382.78,297.87Z" transform="translate(-9.19 -254.6)"/>
                          <path class="cls-4" d="M37.49,745.4H9.19A492,492,0,0,1,27.4,612.5l27.25,7.65A463.27,463.27,0,0,0,37.49,745.4Z" transform="translate(-9.19 -254.6)"/>
                        </g>
                      </g>
                    </g>
                </svg>
                <div>
                    <h1 class="page-header">Daybreak News</h1>
                    <p class="page-subheader">COVID-19 | Statistics</p>
                </div>
                
            </div>
            <div id="scroll-wrap">
                <ul id="scroll-list">
                    <li class="scroll-item">Updated COVID statistics</li>
                    <li class="scroll-item">Realtime graph representation</li>
                    <li class="scroll-item">Analytical deductions</li>
                    <li class="scroll-item">Updated COVID statistics</li>
                    <li class="scroll-item">Realtime graph representation</li>
                    <li class="scroll-item">Analytical deductions</li>
                    <li class="scroll-item">Updated COVID statistics</li>
                    <li class="scroll-item">Realtime graph representation</li>
                    <li class="scroll-item">Analytical deductions</li>
                </ul>
            </div>
        </section>
        
        <section>
            <div class="stats d-flex justify-content-between">
                <div>
                    <h2>Global Overall</h2>
                    <div class="stats-layout">
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Cases</h3>
                            <p class="cases"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Recoveries</h3>
                            <p class="green-stat recoveries"><img src="img/green-loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Deaths</h3>
                            <p class="deaths"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                    </div>
                    <h2>South Africa Overall</h2>
                    <div class="stats-layout">
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Cases</h3>
                            <p class="sa-cases"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Recoveries</h3>
                            <p class="green-stat sa-recoveries"><img src="img/green-loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Deaths</h3>
                            <p class="sa-deaths"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                    </div>
                    <h2>Global Daily</h2>
                    <div class="stats-layout">
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Cases</h3>
                            <p class="daily-cases"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Recoveries</h3>
                            <p class="green-stat daily-recoveries"><img src="img/green-loader.gif" class="loader" alt=""></p>
                        </div>
                        <div class="stats-container d-flex flex-column justify-content-between">
                            <h3>Deaths</h3>
                            <p class="daily-deaths"><img src="img/loader.gif" class="loader" alt=""></p>
                        </div>
                    </div>
                </div>
                <div class="deductions">
                    <div class="deduction-container">
                        <h3>Infection Fatality Rate (IFR)</h3>
                        <p class="ifr"><img src="img/grey-loader.gif" class="loader" alt=""></p>
                    </div>
                    <div class="deduction-container">
                        <h3>Case Fatality Rate (CFR)</h3>
                        <p class="cfr"><img src="img/grey-loader.gif" class="loader" alt=""></p>
                    </div>
                    <div class="deduction-container">
                        <h3>Mortality Rate</h3>
                        <p class="mortality-rate"><img src="img/grey-loader.gif" class="loader" alt=""></p>
                    </div>
                    <div class="deduction-container">
                        <h3>C:R:D Ratio</h3>
                        <p class="death-ratio"><img src="img/grey-loader.gif" class="loader" alt=""></p>
                    </div>
                </div>
            </div>
            <h2 class="graph-heading">Daily Cases per Country</h2>
            <div class="graphs">
                <div id="chart-div"><img src="img/loader.gif" class="loader" alt=""></div>
                <select name="country-dropdown" id="country-options"></select>
            </div>
        </section>
    </main>
    <?php include 'templates/footer.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/covid.js"></script>
</body>
</html>