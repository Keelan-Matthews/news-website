<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/brands.css">
    <link rel="stylesheet" href="./css/regular.css">
    <link rel="stylesheet" href="./css/solid.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <title>Daybreak News | Login</title>
</head>
<body class="light">
    <?php 
        include 'templates/header.php';

        $emailError = "";
        $passwordError = "";

        if (isset($_GET["error"])) {

            if ($_GET["error"] == "emptyemail")  $emailError = "Email cannot be blank";
            else if ($_GET["error"] == "emailnotexist") $emailError = "Email is not registered";

            if ($_GET["error"] == "emptypassword")  $passwordError = "Password cannot be blank";
            
            if ($_GET["error"] == "loginfailed")  $emailError = "Email or Password is invalid";
        }
        
    ?> 
    <main class="d-flex justify-content-center align-items-center">
        <div class="sign-up-svg">
            <svg id="sign-svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="1549.85" height="1339.42" viewBox="0 0 1549.85 1339.42">
            <defs>
                <style>
                .cls-1, .cls-2 {
                    fill: #fff;
                }

                .cls-3 {
                    fill: #ffcfaa;
                }

                .cls-4, .cls-5 {
                    fill: #ed6d72;
                }

                .cls-6 {
                    fill: #f0878b;
                }

                .cls-5, .cls-7, .cls-2 {
                    stroke: #fff;
                    stroke-miterlimit: 10;
                }

                .cls-8 {
                    fill: #fff9b8;
                }

                .cls-9 {
                    fill: #f9d0d2;
                }

                .cls-10 {
                    fill: #f06d72;
                }

                .cls-7, .cls-11 {
                    fill: #ed5359;
                }

                .cls-12 {
                    fill: #fff7a1;
                }

                .cls-13 {
                    fill: #ffb882;
                }
                </style>
            </defs>
            <g>
                <g>
                <path class="cls-4" d="M1446.11,774.93h-137.16c0-294.46-239.56-534.02-534.02-534.02S240.9,480.46,240.9,774.93H103.74c0-90.58,17.76-178.49,52.77-261.28,33.81-79.93,82.19-151.7,143.81-213.32,61.62-61.62,133.39-110,213.32-143.81,82.79-35.02,170.7-52.77,261.28-52.77s178.49,17.76,261.28,52.77c79.93,33.81,151.71,82.19,213.32,143.81,61.62,61.62,110,133.39,143.81,213.32,35.02,82.79,52.77,170.7,52.77,261.28Z"/>
                <path class="cls-13" d="M1140.49,716.66c-29.97-174.28-182.85-311.98-365.56-311.98s-337.64,135.41-365.67,311.98h-137.9c5.71-46.3,17.77-96.03,36.06-139.26,25.56-60.43,62.14-114.69,108.71-161.26,46.58-46.58,100.83-83.15,161.26-108.71,62.6-26.48,129.06-39.9,197.53-39.9s134.93,13.43,197.53,39.9c60.43,25.56,114.69,62.14,161.26,108.71,46.58,46.58,83.16,100.83,108.71,161.26,18.28,43.23,30.34,92.96,36.06,139.26h-138Z"/>
                <path class="cls-12" d="M456.85,665.56c47.31-129.85,171.86-222.57,318.07-222.57s270.77,92.72,318.07,222.57"/>
                </g>
                <g>
                <g>
                    <path class="cls-11" d="M960.01,68.33c-60.1-15.7-122.37-23.66-185.09-23.66V0c66.53,0,132.6,8.45,196.37,25.11l-11.29,43.22Z"/>
                    <path class="cls-11" d="M1549.85,774.93h-44.67c0-67.18-9.12-133.72-27.09-197.76l43.01-12.07c19.08,67.97,28.75,138.57,28.75,209.84Z"/>
                </g>
                <g>
                    <path class="cls-11" d="M589.84,68.33l-11.29-43.22C642.33,8.45,708.4,0,774.93,0V44.67c-62.72,0-124.99,7.96-185.08,23.66Z"/>
                    <path class="cls-11" d="M44.67,774.93H0c0-71.26,9.67-141.86,28.75-209.84l43.01,12.07c-17.98,64.05-27.09,130.59-27.09,197.76Z"/>
                </g>
                </g>
            </g>
            <g>
                <g id="Nature">
                <g id="Plant">
                    <path class="cls-9" d="M457.31,1154.47c1.33-2.98,2.2-6.14,2.42-9.53,2.03-30.74-30.18-25.75-49.25-34.71-17.81-8.37-18.56-27.78-19.83-44.9-1.69-22.92-3.22-39.15-19.01-57.47-33.71-39.12-25.76-81.85-43.62-127.28-11.54-29.35-38.72-52.1-68.55-62.82-8.84-3.18-19.13-5.58-29.97-2.38-19.71,5.81-30.29,26.86-28.64,42.25,1.65,15.38,11.17,27.91,14.06,42.91,2.89,15-4.16,35.68-23.16,44.26-9.53,4.3-22.39,6.23-26.48,14.33-1.83,3.62-.96,7.2,.32,10.31,5.66,13.8,18.79,23.52,23.78,37.55,5.88,16.54-1.54,29.14-7.79,44.26-2.8,6.79-4.24,14.92-.47,21.23,6.96,11.63,23.94,8.53,31.9,18.92,9.47,12.37-6.84,31.98-20.42,47.06s-24.88,37.97-9.04,44.8c4.93,2.13,11.39,1.88,17.18,2.7,26.02,3.66,34.87,27.14,40.69,48.14,6.28,22.64,30.65,30.01,47.12,43.4,18.57,15.09,24.5,44.69,55.52,31.73,21.24-8.87,30.9-31.49,42.93-49.43,13.18-19.66,27.21-39.09,35.58-61.42,6.52-16.6,27.5-27.7,34.73-43.91Z"/>
                    <g>
                    <path class="cls-1" d="M342.39,1311.93c-.65,0-1.23-.45-1.37-1.11l-70.67-331.16c-.16-.76,.32-1.51,1.08-1.67,.76-.17,1.5,.32,1.67,1.08l70.67,331.16c.16,.76-.32,1.51-1.08,1.67-.1,.02-.2,.03-.3,.03Z"/>
                    <path class="cls-1" d="M297.37,1094.37c-.08,0-.17-.01-.25-.02-.76-.14-1.27-.87-1.13-1.63l12.64-70.39c.14-.76,.87-1.26,1.63-1.13,.76,.14,1.27,.87,1.13,1.63l-12.64,70.39c-.12,.67-.71,1.15-1.38,1.15Z"/>
                    <path class="cls-1" d="M322.44,1218.4c-.44,0-.88-.21-1.15-.6l-38.37-55.16c-.44-.64-.29-1.51,.35-1.96,.64-.44,1.51-.29,1.96,.35l38.37,55.16c.44,.64,.29,1.51-.35,1.96-.26,.17-.54,.25-.81,.25Z"/>
                    </g>
                </g>
                <ellipse id="Ground" class="cls-9" cx="876.64" cy="1324.37" rx="514.37" ry="15.05"/>
                <g id="Plant-2" data-name="Plant">
                    <path class="cls-4" d="M995.12,1264.06c-3.07-5.98-5.62-12.53-5.17-19.24,.82-12.19,10.91-21.34,19.61-29.92,8.7-8.58,17.25-20.18,13.96-31.95-3.16-11.31-15.49-16.83-25.93-22.2-10.44-5.37-21.61-14.91-19.31-26.42,3.3-16.49,30.5-19.06,33.45-35.62,1.07-5.99-1.61-11.95-4.21-17.46-8.89-18.79-17.78-37.58-26.67-56.37-4.07-8.6-7.72-19.99-.91-26.63,4.59-4.47,11.8-4.37,17.81-6.57,15.6-5.72,20.28-24.98,23.86-41.21,3.58-16.22,11.92-35.35,28.49-36.55,6.38-.46,12.62,2.07,18.13,5.33,21.85,12.93,35.33,38.81,33.41,64.13-.82,10.84-3.92,22.94,2.48,31.73,3.33,4.57,8.61,7.2,13.27,10.39,17.84,12.19,27.7,35.1,24.28,56.43-2.33,14.56-10.09,30.06-3.25,43.12,7.66,14.61,29.59,17.1,36.86,31.9,5.99,12.18-.82,26.66-8.68,37.73-7.86,11.07-17.37,22.56-17.03,36.13,.17,7.02,3.05,13.7,3.81,20.68,1.95,17.8-10,34.29-23.87,45.62-17.91,14.64-45.08,30.17-68.72,22.33-27.06-8.97-52.69-30.1-65.67-55.38Z"/>
                    <path class="cls-1" d="M1083.11,1322.96c-.72,0-1.34-.56-1.4-1.29l-21.62-267.78c-.06-.77,.52-1.45,1.29-1.51,.86-.03,1.45,.51,1.51,1.29l21.62,267.78c.06,.77-.52,1.45-1.29,1.51h-.11Z"/>
                    <path class="cls-1" d="M1067.8,1133.23c-.31,0-.62-.1-.88-.31-.61-.48-.7-1.37-.22-1.97l37.98-47.4c.49-.61,1.37-.7,1.98-.22,.61,.48,.7,1.37,.22,1.97l-37.98,47.4c-.28,.35-.69,.53-1.1,.53Z"/>
                    <path class="cls-1" d="M1076.87,1225.63c-.31,0-.62-.1-.88-.31-.61-.48-.7-1.37-.22-1.97l37.98-47.4c.49-.61,1.37-.7,1.98-.22,.61,.48,.7,1.37,.22,1.97l-37.98,47.4c-.28,.35-.69,.53-1.1,.53Z"/>
                    <path class="cls-1" d="M1072.3,1189.07c-.33,0-.65-.11-.92-.34l-35.48-30.55c-.59-.51-.65-1.39-.15-1.98,.51-.59,1.39-.66,1.98-.15l35.48,30.55c.59,.51,.65,1.39,.15,1.98-.27,.32-.66,.49-1.06,.49Z"/>
                </g>
                <g id="Plant-3" data-name="Plant">
                    <path class="cls-12" d="M1087.64,1250.31c-1.9-3.94-3.85-8.11-3.51-12.47,.48-6.09,5.25-10.9,10.03-14.71,10.87-8.67,23.38-15.35,33.09-25.31s16.33-24.72,11.62-37.8c-3.71-10.3-13.85-18.15-14.52-29.08-.9-14.47,14.62-23.84,21.91-36.37,6.07-10.43,6.29-23.16,9.97-34.65,3.68-11.49,13.78-23.06,25.65-20.9,13.06,2.37,17.69,18.7,17.85,31.98,.16,13.28-.56,28.7,9.56,37.29,3.5,2.97,8.06,4.8,10.77,8.51,2.46,3.38,2.96,7.76,3.39,11.92,2.36,23.16,4.22,48.49-8.82,67.77-2.98,4.41-6.77,8.57-7.81,13.8-2.56,12.93,12.69,24.23,10.6,37.25-1.78,11.04-14.56,16.19-21.27,25.14-7.62,10.16-6.97,24.81-14.7,34.88-11.52,15.01-44.23,18.07-59.33,6.7-17.11-12.9-25.59-45.56-34.48-63.95Z"/>
                    <path class="cls-1" d="M1141.36,1323.04c-.07,0-.15-.01-.23-.02-.76-.13-1.28-.85-1.16-1.62l33.89-205.11c.12-.76,.78-1.3,1.62-1.16,.76,.13,1.28,.85,1.16,1.62l-33.89,205.11c-.12,.69-.72,1.18-1.39,1.18Z"/>
                    <path class="cls-1" d="M1164.96,1188.51c-.32,0-.65-.11-.91-.33-.59-.51-.66-1.39-.16-1.98l33.51-39.33c.5-.59,1.39-.66,1.98-.16s.66,1.39,.16,1.98l-33.51,39.33c-.28,.32-.68,.49-1.07,.49Z"/>
                    <path class="cls-1" d="M1150.93,1265.11c-.51,0-1-.28-1.25-.76l-19.66-38.26c-.35-.69-.08-1.54,.61-1.89,.7-.36,1.53-.08,1.9,.61l19.66,38.26c.35,.69,.08,1.54-.61,1.89-.21,.1-.43,.15-.65,.15Z"/>
                </g>
                <g id="Plant-4" data-name="Plant">
                    <path class="cls-11" d="M1252.47,1279.26c5.08-6.49,15.2-10.62,14.66-18.84-.46-6.98-9.1-12.29-7.41-19.08,1.6-6.39,10.33-7.03,16.88-6.26,1.29-4.42,.32-9.12-.13-13.7-.45-4.58-.19-9.68,2.94-13.06,3.13-3.38,9.93-3.2,11.39,1.16,2.32-6.55,4.64-13.09,6.97-19.64,.95-2.69,2.34-5.77,5.13-6.35,4.07-.85,6.82,4.51,6.18,8.62-.64,4.11-3.05,7.92-2.9,12.08,.19,5.28,5.22,9.88,10.5,9.61-5.43,4.23-11.43,11.3-7.64,17.04,1.91,2.89,6.17,5.29,4.91,8.51-1.25,3.21-7.02,2.92-7.73,6.3-.96,4.5,8.61,6.59,6.81,10.83-5.9-.93-11,6.9-7.76,11.92,3.56,5.52,12.29,4.7,17.04,9.24,3.41,3.26,3.94,8.68,2.54,13.18-5.5,17.7-26.2,38.97-45.62,32.02-15.43-5.54-41.53-24.73-26.76-43.58Z"/>
                    <path class="cls-1" d="M1284.63,1325.46h-.11c-.77-.06-1.35-.73-1.3-1.51l7.29-97.27c.05-.77,.63-1.34,1.51-1.3,.77,.06,1.35,.73,1.3,1.51l-7.29,97.27c-.05,.73-.67,1.3-1.4,1.3Z"/>
                    <path class="cls-1" d="M1287.69,1284.62c-.31,0-.63-.1-.89-.32l-17.89-14.58c-.6-.49-.69-1.37-.2-1.98,.49-.6,1.38-.69,1.98-.2l17.89,14.58c.6,.49,.69,1.37,.2,1.98-.28,.34-.68,.52-1.09,.52Z"/>
                    <path class="cls-1" d="M1287.06,1311.54c-.41,0-.82-.18-1.09-.52-.49-.6-.39-1.49,.21-1.98l28.26-22.82c.6-.48,1.48-.39,1.98,.21,.49,.6,.39,1.49-.21,1.98l-28.26,22.82c-.27,.21-.58,.31-.89,.31Z"/>
                </g>
                <g id="Plant-5" data-name="Plant">
                    <path class="cls-4" d="M335.51,1114.82c-1.87-6.51-7.72-11.96-12.07-17.82-4.34-5.85-7.17-13.18-2.78-19.01,2.05-2.71,5.41-4.74,8.24-7.06,12.92-10.59,13.64-26.5,9.55-40.36-4.09-13.86-12.22-27.05-14.68-41.12-2.27-13.03,2.43-28.52,18.63-34.26,11.89-4.21,27.09-1.47,36.46,5.33,9.37,6.81,13.26,16.95,12.29,26.57-.39,3.85-1.38,8.06,1.48,11.31,5.64,6.43,20.34,3.52,28.36,8.42,6.86,4.19,5.86,12.07,2.97,18.25-2.89,6.17-7.11,12.64-4.71,18.93,2.97,7.76,15.29,12.61,16.54,20.62,.51,3.28-.99,6.65,0,9.87,2.77,9.07,23.45,13.79,19.13,22.54-3.35,6.79-18.68,5.96-23.41,12.3-5.03,6.73,6.08,14.51,4.69,22.11-.47,2.59-2.38,4.9-4.24,7.13-12.67,15.17-25.35,30.33-38.02,45.5-2.29,2.74-4.62,5.52-7.78,7.75-19.46,13.75-49.09,4.9-52.4-12.76-1.58-8.41-3.65-18.34-4.27-26.85-.9-12.62,9.61-24.88,6.02-37.39Z"/>
                    <rect class="cls-13" x="381.78" y="1049.74" width="2.81" height="268.65" transform="translate(-70.24 25.08) rotate(-3.43)"/>
                    <rect class="cls-13" x="368.97" y="1103.44" width="60.74" height="2.81" transform="translate(-704.6 703.04) rotate(-50.13)"/>
                    <rect class="cls-13" x="364.39" y="1145.01" width="2.81" height="46.83" transform="translate(-748.06 660.15) rotate(-48.09)"/>
                </g>
                <path id="Plant-6" data-name="Plant" class="cls-4" d="M223.41,1305.22c-3.54-4.19-6.58-9.03-7.37-14.45-.19-1.31-.21-2.76,.58-3.82,.68-.92,1.84-1.36,2.96-1.59,7.94-1.7,15.39,4.12,21.13,9.87,10.13,10.16,19.17,21.4,26.92,33.47-4.64-7.22-7.08-21.07-5.98-29.56,.04-.33,.11-.7,.37-.91,.27-.22,.65-.2,.98-.14,2.44,.47,3.98,2.84,5.15,5.04,3.62,6.8,6.78,14.66,8.88,22.29-1.32-4.79,2.59-10.56,6.13-13.42,6.34-5.1,4.99,2.02,3.61,6.2-1.35,4.1-10.31,20.16-16.7,16.57-1.17-.66-1.46-4.24-2.42-5.4-1.67-2-4-2.66-6.4-3.4-6.44-2-13.15-2.83-19.22-5.97-7.08-3.68-13.47-8.69-18.62-14.78Z"/>
                <path id="Plant-7" data-name="Plant" class="cls-12" d="M984.62,1318.01c.81-8.26,.79-15.92,3.5-23.98,.91-2.72,2.21-5.62,4.79-6.86,.49-.24,1.07-.4,1.56-.18,.43,.19,.7,.62,.92,1.05,14.04,26.9-23.64,42.03-40.83,21.8-1.06-1.25-2.06-2.68-2.21-4.32-.27-3,2.59-5.59,5.58-5.94s5.92,1.01,8.39,2.72c6.54,4.53,10.89,11.51,15.05,18.28-5.8-8.72-8.79-19.27-8.44-29.73,.05-1.57,.58-3.58,2.15-3.71,.75-.06,1.44,.37,2.04,.83,4.28,3.29,6.69,8.56,7.59,13.89,.9,5.32,.43,10.77-.09,16.15Z"/>
                <path id="Plant-8" data-name="Plant" class="cls-11" d="M401.09,1271.56c.38,.01,.76,.11,1.15,.32,1.22,.66,1.67,2.16,1.96,3.52,2.65,12.43,2.58,9.38,1.26,25.69,2.78-10.18,1.68-8.4,6.88-17.59,1.01-1.79,2.13-3.62,3.88-4.69,11.35-6.95,.36,23.84-1.56,27.37-7.12,13.1-20.97,16.34-34.41,11.52-11.79-4.23-23.05-13.41-27.27-25.42-.38-1.08-.66-2.44,.15-3.26,.56-.56,1.43-.64,2.22-.65,7.12-.01,13.79,3.61,19.24,8.19,5.44,4.59,9.95,10.17,15.07,15.11,3.63,3.5,11.64,3.3,16.64,3.9,8.51,1.03,11.87-2.27,19.26-6.62,1.61-.95,3.37-1.81,5.24-1.79s3.85,1.19,4.2,3.03c.21,1.09-.17,2.21-.65,3.22-6.05,12.78-22.54,11.06-29.81,.86-6.93-9.73-11.4-25.93-8.08-37.6,.67-2.36,2.53-5.15,4.63-5.11Z"/>
                <path id="Plant-9" data-name="Plant" class="cls-4" d="M1371.17,1291.56c.26,.01,.53,.07,.8,.22,.85,.46,1.16,1.51,1.36,2.46,1.85,8.68,1.8,6.55,.88,17.93,1.94-7.11,1.17-5.86,4.8-12.28,.7-1.25,1.49-2.53,2.71-3.28,7.92-4.85,.25,16.63-1.09,19.1-4.97,9.14-14.64,11.41-24.01,8.04-8.23-2.95-16.09-9.36-19.03-17.74-.27-.76-.46-1.7,.11-2.28,.39-.39,1-.45,1.55-.45,4.97-.01,9.63,2.52,13.42,5.72s6.94,7.1,10.52,10.55c2.53,2.44,8.12,2.3,11.61,2.72,5.94,.72,8.28-1.59,13.44-4.62,1.12-.66,2.35-1.27,3.66-1.25,1.3,.01,2.68,.83,2.93,2.11,.15,.76-.12,1.54-.45,2.24-4.22,8.92-15.73,7.72-20.8,.6-4.84-6.79-7.95-18.1-5.64-26.24,.47-1.63,1.77-3.58,3.23-3.55Z"/>
                </g>
                <g id="Characters">
                <g id="Man">
                    <g id="Bag">
                    <polygon class="cls-4" points="599.6 814.45 714.5 686.15 698.26 724.06 606.36 814.45 599.6 814.45"/>
                    <path class="cls-4" d="M663,945.31l-76.97-29.62c-13.43-5.17-20.19-20.39-15.02-33.82l22.34-58.06c5.17-13.43,20.39-20.19,33.82-15.02l76.97,29.62c13.43,5.17,20.19,20.39,15.02,33.82l-22.34,58.06c-5.17,13.43-20.38,20.19-33.82,15.02Z"/>
                    </g>
                    <path id="Phone" class="cls-4" d="M892.53,731.38l45.38-76.32s17.7-10.09,13.91,3.49c-3.79,13.58-43.84,79.4-43.84,79.4l-15.45-6.57Z"/>
                    <g id="Head">
                    <path id="Neck" class="cls-13" d="M764.19,670.26l-13.52,43.42-37.83,4.55s28.41-25.06,31.74-52.95c3.34-27.88,19.61,4.98,19.61,4.98Z"/>
                    <path id="Face" class="cls-3" d="M817.82,587.99s4.99,11.85-10.07,40.48c-15.05,28.63-33.54,51.66-42.26,47.49-24.12-11.52-28.48-31.73-33.39-49.38-6.01-21.64,27.12-62.3,27.12-62.3l23.03-5.79,35.57,29.5Z"/>
                    <path id="Hair" class="cls-4" d="M738.52,601.33s-2.44,17.62-2.47,38.92c0,.8-.07,1.46-.58,2.07-1.26,1.49-10.75-14.41-11.46-15.64-4.66-8.02-11.78-17.82-8.96-27.53,.79-2.71,2.21-5.26,2.46-8.06,.46-5.28-3.61-8.63-4.55-13.37-.88-4.4,.3-9.42,1.66-13.58,2.59-7.9,7.85-16.55,15.07-21.02,5.69-3.52,10.51-1.8,16.2-3.78,3-1.04,4.35-4.42,6.37-6.87,3.11-3.76,8.17-5.48,13.05-5.61,6.02-.17,14.71,1.03,19.84,4.51,6.53,4.43,7.18,16.14,13.35,19.41,1.06,.56,2.28,.69,3.47,.8,11.51,1.12,22.43,.6,31.65,8.48,14.56,12.44,4.58,56.44-16.9,43.99-2.46-1.43-4.55-3.41-6.9-5.02-11.3-7.77-25.65,5.25-33.26-14.4-1.36-3.51-24.85-4.76-25.16,4.83-.39,12.52-12.88,11.87-12.88,11.87Z"/>
                    <path id="Ear" class="cls-3" d="M743.75,601.04s-6.68-12.95-9.75,3.45,4.54,21.87,4.54,21.87l5.21-25.32Z"/>
                    </g>
                    <g id="Leg">
                    <path id="Skin" class="cls-13" d="M573.2,1208.16l-34.28,47.81-17.16-9.82,38.73-47.76s10.14,4.02,12.71,9.77Z"/>
                    <path id="Shoe" class="cls-12" d="M581.67,1315.2c-.86,1.02-7.45-.53-8.45-.68-10.32-1.53-26.26-3.36-34.15-10.76-7.68-7.21-11.6-18.09-18.07-26.32-4.56-5.79-10.91-9.89-16.68-14.41-6.36-4.99,13.08-34.58,20.73-28.04,6.19,5.3,.92,16.33,18.69,17.68,15.22,1.16,2.19,21.04,17.56,36.66,13.58,13.82,29.74,14.74,20.37,25.87Z"/>
                    <path id="Leg-2" data-name="Leg" class="cls-4" d="M679.58,1010.07c-11.63,41.47-4.87,42.15-33.51,74.5-13.97,15.78-91.33,80.94-105.73,96.36-20.54,21.99,.88,32.1,16.12,38.54,9.97,4.21,15.92,26.12,31.07,9.99,1.5-1.59,27.58-35.26,35.41-50.01,8.96-16.89,60.35-63.09,78.06-79.33,42.16-38.65,20.85-57.22,46.65-107.82,9.82-19.27,7.64-39.78,10.55-61.94,1.78-13.56-18.91-77.03-47.69-65.81-17.91,6.99-11.07,43.32-10.31,57.65,.53,9.91,1.96,20.84-.5,30.43-5.05,19.68-14.62,37.85-20.12,57.44Z"/>
                    </g>
                    <g id="Leg-3" data-name="Leg">
                    <path id="Skin-2" data-name="Skin" class="cls-3" d="M770.47,1229.38l13.01,59.19-19.34,6.38-9.91-62.57s10.06-5,16.24-3Z"/>
                    <path id="Shoe-2" data-name="Shoe" class="cls-8" d="M862.68,1311.9s-14.47,4.94-42.21,7c-27.74,2.06-58.7,3.09-64.32-1.03-5.63-4.12-9.25-39.11,0-39.11s12.84,13.38,29.15,1.44c13.97-10.23,25.13,9.06,49.45,14.2s34.16,7.2,27.93,17.5Z"/>
                    <path id="Leg-4" data-name="Leg" class="cls-6" d="M819.39,1252.43c-.93-2.17-3.37-3.79-5.49-5.48-19.37-15.44-9.26-38.88-11.54-59.57-7.11-64.46,5.13-102.17-19.11-168.02-16.5-44.81-20.95-74.38-24.94-124.16-1.39-17.28,32.84-39.61,6.73-34.67-12.37,2.34-24.58,1.88-36.91-.28-6.49-1.14,.13-3.25-6.49-1.14-22.55,7.2-39.33,47.57-39.61,63.12-.63,34.86,26.13,57.74,33.44,88.23,12.84,53.55,33.02,91.43,27.75,135.49-2.58,21.59-5.58,43.12-8.46,64.67-1.68,12.57-12.19,40.11-5.14,51.49,9.68,15.62,52.81,2.38,67.22,2.03,10.83-.27,25.71-4.34,22.55-11.71Z"/>
                    </g>
                    <path id="Body" class="cls-11" d="M770.22,778.01c-6.54-26.54,.56-71.18-18.15-90.87-1.92-2.02-3.95-4.01-6.49-5.16-23.51-10.59-37.69,8.71-47.8,25.44-10.12,16.75-9.89,34.87-14.83,53.65-5.62,21.35-4.49,43.55-4.89,65.59-.25,13.42,1.39,26.75,.63,40.19-.53,9.38-1.86,18.7-4,27.84-1.42,6.08-9.37,18.15-7.05,24.34,1.84,4.9,10.26,3.05,14.4,3.19,16.01,.53,31.7-4.22,45.94-11.26,13.01-6.43,26.76-6.18,41.77-7.42,7.45-.62,17.11-7.04,13.74-20.58-7.99-32.09-5.66-60.2-8.96-82.86-1.08-7.32-2.5-14.73-4.31-22.09Z"/>
                    <path id="Arm" class="cls-3" d="M728.5,721.44s33.47,76.37,49.75,86.66,30.38,8.82,59.08-9.97c28.71-18.79,54.52-41.23,57.25-43.79s26.27-5.36,28.33-15.52,11.01-43.03,2.39-36.58-16.05,27.73-23.23,28.1c-7.18,.37,2.99-21.98-3.54-18.38s-6.99,9.52-9.34,14.55c-2.35,5.03,.75,10.7-13.52,23.2s-60.94,45.13-74.37,42.7c-13.43-2.44-62.63-74.81-64.64-80.35-2.02-5.53-8.16,9.38-8.16,9.38Z"/>
                    <path id="Body-2" data-name="Body" class="cls-10" d="M774.63,746.58s-20.34-60.88-44.52-48.61c-24.18,12.27,11.69,76.96,11.69,76.96l39.28-20.66-6.45-7.69Z"/>
                </g>
                </g>
                <g id="UI">
                <g id="Chat">
                    <path class="cls-5" d="M955.08,541.43c2.48,3.99,7.03,6.61,10.89,4.76-4.37,5.55-3.13,21.18-4.29,28.67,22.56-16.8,45.14-33.96,71.72-32.89,4.3,.17,9.05,.43,12.41-2.77,1.58-1.51,2.67-3.64,3.57-5.81,5.89-14.22,4.95-30.94,3.88-46.75-.19-2.74-.57-5.89-2.53-7.34-1.12-.83-2.5-.89-3.82-.9-22.68-.14-44.96,8.01-67.68,6.16-7.22-.59-20.55-8.46-27.02-3.73-5.73,4.2-5.06,15.69-4.64,22.46,.7,11.36,1.69,28.75,7.51,38.14Z"/>
                    <path class="cls-5" d="M1047.16,587.93l.78-4.18c.34-1.83,.46-4.42,.6-7.16,.24-4.87,.5-10.22,2.01-14.18-3.53-.31-6.86-2.51-8.87-5.22h0c-6.07-8.2-7.14-22.85-7.84-32.54l-.03-.4c-.42-5.74-1.2-16.42,5.53-20.56,4.97-3.06,12.74-.92,19.59,.97,3.23,.89,6.29,1.73,8.54,1.88,12.23,.83,24.63-.84,36.63-2.45,10.08-1.36,20.35-2.83,30.93-2.71,1.6,0,3.28,.09,4.79,1.03,2.94,1.82,3.25,5.57,3.41,7.59,1,12.22,2.23,27.44-4.06,40.16-.86,1.73-2.09,3.92-4.08,5.5-3.83,3.07-8.92,2.9-13.39,2.74-25.74-.84-48.21,13.09-69.83,26.6l-4.71,2.93Zm14.08-32.77l-5.81,6.19c-2.53,2.7-2.88,9.76-3.16,15.43-.06,1.27-.12,2.5-.2,3.67,21.42-13.36,43.59-26.66,69.48-25.8,4.28,.14,8.42,.28,11.18-1.92,1.41-1.12,2.37-2.85,3.06-4.23,5.83-11.79,4.64-26.43,3.69-38.2-.16-2.02-.48-3.98-1.65-4.71-.68-.42-1.73-.46-2.84-.47-10.23-.05-20.45,1.34-30.41,2.68-12.18,1.64-24.78,3.33-37.39,2.48-2.62-.18-5.85-1.07-9.28-2.01-6.11-1.68-13.05-3.6-16.63-1.39-4.79,2.94-4.12,12.14-3.75,17.09l.03,.4c.67,9.26,1.69,23.26,7.12,30.59h0c1.9,2.56,5.58,4.61,8.69,3.36l7.87-3.16Z"/>
                    <path class="cls-7" d="M986.69,587.26c2.48,3.34,7.03,5.54,10.89,3.99-4.37,4.65-3.13,17.75-4.29,24.02,22.56-14.08,45.14-28.46,71.72-27.57,4.3,.14,9.05,.36,12.41-2.32,1.58-1.26,2.67-3.05,3.57-4.87,5.89-11.92,4.95-25.93,3.88-39.18-.19-2.3-.57-4.93-2.53-6.15-1.12-.69-2.5-.74-3.82-.75-22.68-.11-44.96,6.72-67.68,5.16-7.22-.49-20.55-7.09-27.02-3.13-5.73,3.52-5.06,13.15-4.64,18.83,.7,9.53,1.69,24.1,7.51,31.97Z"/>
                    <path class="cls-5" d="M933.85,614.41c-.23-6.28-.55-12.91-3.95-18.19-1.3-2.03-3.11-3.84-5.4-4.59-2.01-.66-4.18-.46-6.28-.25-9.72,.97-19.43,1.94-29.15,2.91-5.08,.51-10.28,1.05-14.88,3.25-4.6,2.21-8.57,6.46-8.98,11.55-.29,3.59,1.2,7.1,3.06,10.18,1.32,2.19,2.86,4.27,4.81,5.92,4.71,3.98,11.25,5.02,17.41,4.87s12.29-1.32,18.45-1.09c6.83,.25,16.06,6.37,21.75,6.73,11.58,.75,3.39-15.03,3.16-21.29Z"/>
                    <path class="cls-5" d="M1048.2,608.96c3.03-1.6,6.64-1.51,10.07-1.38,22.93,.84,45.86,1.68,68.79,2.53,1.42,.05,2.89,.12,4.14,.8,2.25,1.22,3.06,4,3.61,6.5,1.75,7.88,3.01,15.87,3.77,23.9,.22,2.37,.38,4.89-.68,7.03-2,4.01-7.21,4.92-11.67,5.35-17.59,1.68-35.25,3.36-52.9,2.49-7.66-.38-15.37-1.23-22.99-.31-7.76,.94-26.04,10.11-33.21,6.46-5.19-2.64,.27-5.54,3.88-8.81,6.71-6.06,13.11-11.6,16.61-20.21,3.06-7.56,2.36-20.02,10.58-24.35Z"/>
                    <path class="cls-5" d="M991.82,690.15c5.6,1.61,10.61,4.82,16.14,6.65,7.2,2.37,14.95,2.29,22.53,2.19,13.65-.18,27.29-.37,40.94-.55,3.82-.05,8.14,.11,10.68,2.95,1.66,1.86,2.15,4.46,2.57,6.92,1.32,7.66,2.64,15.31,3.95,22.97,.7,4.06,1.3,8.61-1.09,11.97-2.68,3.77-7.92,4.42-12.53,4.74-19.63,1.35-39.25,2.71-58.88,4.06-1.85,.13-3.83,.23-5.44-.69-1.48-.85-2.39-2.42-3.17-3.94-3.29-6.41-5.67-13.28-7.05-20.35-.99-5.08-1.51-10.4-3.99-14.94-3.87-7.07-1.58-7.39-5.25-13.64-5.33-9.09-4.89-9.92,.59-8.34Z"/>
                    <path class="cls-7" d="M1162.79,572c3.16,.91,6,2.73,9.13,3.76,4.07,1.34,8.45,1.3,12.74,1.24,7.72-.1,15.44-.21,23.15-.31,2.16-.03,4.6,.06,6.04,1.67,.94,1.05,1.22,2.52,1.46,3.91,.75,4.33,1.49,8.66,2.24,12.99,.4,2.3,.73,4.87-.62,6.77-1.51,2.13-4.48,2.5-7.09,2.68-11.1,.77-22.2,1.53-33.3,2.3-1.05,.07-2.17,.13-3.08-.39-.84-.48-1.35-1.37-1.79-2.23-1.86-3.62-3.21-7.51-3.99-11.51-.56-2.88-.85-5.88-2.26-8.45-2.19-4-.9-4.18-2.97-7.71-3.01-5.15-2.76-5.61,.34-4.72Z"/>
                    <circle class="cls-2" cx="1066.4" cy="633.9" r="5.47"/>
                    <circle class="cls-2" cx="1089.26" cy="633.9" r="5.47"/>
                    <circle class="cls-2" cx="1113.17" cy="633.9" r="5.47"/>
                    <circle class="cls-2" cx="1179.04" cy="592.95" r="3.6"/>
                    <circle class="cls-2" cx="1194.1" cy="592.95" r="3.6"/>
                    <circle class="cls-2" cx="1209.84" cy="592.95" r="3.6"/>
                    <path class="cls-2" d="M1035.36,508.36h-69.36c-1.12,0-2.04-.92-2.04-2.04v-7.55c0-1.12,.92-2.04,2.04-2.04h69.36c1.12,0,2.04,.92,2.04,2.04v7.55c0,1.12-.92,2.04-2.04,2.04Z"/>
                    <path class="cls-2" d="M1035.36,527.47h-39.7c-1.12,0-2.04-.92-2.04-2.04v-7.55c0-1.12,.92-2.04,2.04-2.04h39.7c1.12,0,2.04,.92,2.04,2.04v7.55c0,1.12-.92,2.04-2.04,2.04Z"/>
                    <g>
                    <path class="cls-2" d="M1047.73,551.68h-53.55c-1.12,0-2.04-.92-2.04-2.04v-1.04c0-1.12,.92-2.04,2.04-2.04h53.55c1.12,0,2.04,.92,2.04,2.04v1.04c0,1.12-.92,2.04-2.04,2.04Z"/>
                    <path class="cls-2" d="M1070.4,564.68h-76.22c-1.12,0-2.04-.92-2.04-2.04v-.98c0-1.12,.92-2.04,2.04-2.04h76.22c1.12,0,2.04,.92,2.04,2.04v.98c0,1.12-.91,2.04-2.04,2.04Z"/>
                    <path class="cls-2" d="M1070.4,577.05h-76.22c-1.12,0-2.04-.92-2.04-2.04v-.98c0-1.12,.92-2.04,2.04-2.04h76.22c1.12,0,2.04,.92,2.04,2.04v.98c0,1.12-.91,2.04-2.04,2.04Z"/>
                    </g>
                    <path class="cls-2" d="M1054.05,739.94h-16.45c-4.21,0-7.66-3.45-7.66-7.66v-16.45c0-4.21,3.45-7.66,7.66-7.66h16.45c4.21,0,7.66,3.45,7.66,7.66v16.45c0,4.21-3.45,7.66-7.66,7.66Z"/>
                    <path class="cls-2" d="M1047.07,726.02h-2.5c-2.85,0-5.19-2.33-5.19-5.19v-2.5c0-2.85,2.33-5.19,5.19-5.19h2.5c2.85,0,5.19,2.33,5.19,5.19v2.5c0,2.86-2.34,5.19-5.19,5.19Z"/>
                    <path class="cls-2" d="M1045.82,726.11c-4.64,0-8.44,3.8-8.44,8.44h16.87c0-4.64-3.79-8.44-8.43-8.44Z"/>
                    <path class="cls-7" d="M916.22,617.1h-23.42c-4.21,0-7.66-3.45-7.66-7.66v-23.42c0-4.21,3.45-7.66,7.66-7.66h23.42c4.21,0,7.66,3.45,7.66,7.66v23.42c0,4.22-3.44,7.66-7.66,7.66Z"/>
                </g>
                </g>
            </g>
            </svg>
            <h1 class="page-header">Daybreak News</h1>
        </div>
        <div class="form-container">
            <h1 class="form-header">Login</h1>
            <form action="backend/validate-login.php" method="post" class="signup-form" id="form">
                <div <?php echo ($emailError === "") ? "class='form-control'" : "class='form-control error'" ?>>
                    <label for="emailInput">Email</label>
                    <input type="email" name="email" id="emailInput" placeholder="name@example.com" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small><?php echo $emailError ?></small>
                </div>

                <div <?php echo ($passwordError === "") ? "class='form-control'" : "class='form-control error'" ?>>
                    <label for="passwordInput">Password</label>
                    <input type="password" name="password" id="passwordInput" placeholder="Strong password" />
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small><?php echo $passwordError ?></small>
                </div>

                <small>Not registered? <a href="signup.php">Sign up</a></small>

                <input type="submit" name="submit" value="Log In" class="submit-button" />
            </form>

            <?php 
                if (isset($_GET["error"])) {
                    if ($_GET["error"] == "stmtfailed") echo "<p>Something went wrong</p>";
                }
            ?>
        </div> 
    </main>
</body>
</html>