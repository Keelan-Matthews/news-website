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
    <title>Daybreak News | South Africa</title>
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
                    <p class="page-subheader">South Africa</p>
                </div>
                
            </div>
        </section>
        
        <section class="articles">
            <div class="today-article">
                <a href="" title="(3★)" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>
            
            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

            <div class="today-article">
                <a href="" class="sa-article">
                    <article>
                        <img src="img/img-placeholder.jpg" alt="" class="article-img">
                        <h2 class="article-title"><img src="img/side-loader.gif" class="article-loader" alt=""></h2>
                        <p class="author"><img src="img/grey-side-loader.gif" class="article-loader-small" alt=""></p>
                        <div class="tags">
                            <small class="section">south africa</small>
                        </div>
                        
                        <p class="published"><i class="fa-solid fa-clock"></i></p>
                    </article>
                </a>

                <div class="articleRating">
                    <div class="avgStar">
                        <p class="avgRating"></p>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="startRate" onclick="startRating(this)">Rate</p>
                </div>
                
                <div class="rate hide">
                    <div class="star-widget">
                        <input type="radio" name="rate" id="rate-5" value="5">
                        <label for="rate-5" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-4" value="4">
                        <label for="rate-4" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-3" value="3">
                        <label for="rate-3" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-2" value="2">
                        <label for="rate-2" class="fas fa-star"></label>
                        <input type="radio" name="rate" id="rate-1" value="1">
                        <label for="rate-1" class="fas fa-star"></label>
                    </div>
                    <p class="endRate" onclick="updateRating(this)">Done</p>
                </div>
            </div>

        </section>
    </main>
    <?php include 'templates/footer.php' ?>
    <script src="js/south-africa.js"></script>
</body>
</html>