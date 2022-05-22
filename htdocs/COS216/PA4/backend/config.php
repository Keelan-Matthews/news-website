<?php
    session_start();
    
    class Database {
        public $conn;
        public static function instance() {
            static $instance = null;

            if ($instance === null) 
                $instance = new Database();

            return $instance;
        }
        public function getConn() {
            return $this->conn;
        }
        private function __construct() {
            $serverName = "wheatley.cs.up.ac.za";
            $dBUsername = "u21549967";
            $dBPassword = "3KE6IHYM6A5M6C2ZTXDQC76GLLIDP4FR";
            $dBName = "u21549967";

            $this->conn = new mysqli($serverName, $dBUsername, $dBPassword);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                $this->conn->select_db($dBName);
            }

            // $this->populateDB();
        }
        public function __destruct() {
            $this->conn->close();
        }
        public function addUser($name,$surname,$email,$password) {
            $api = bin2hex(random_bytes(14));
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $query = "INSERT INTO users (name, surname, email, password, api, category, tag) 
                        VALUES ('$name', '$surname', '$email', '$hashedPassword', '$api', 'all', 'all')";
            if(!$this->conn->query($query)){
                header('Location: ../signup.php?error=stmtfailed');
                exit();
            }

            $_SESSION['name'] = $name;
            $_SESSION['surname'] = $surname;
            $_SESSION['api'] = $api;

            header('Location: ../today.php?error=none');
        }

        public function populateDB() {
            $query = "SELECT refresh FROM refreshed WHERE 1";
            $res = $this->conn->query($query);

            $value = null;
            while ($row = $res->fetch_assoc()) {
                $value = $row['refresh'];
            }

            $refreshTime = strtotime($value);
            $time = time();
            $refresh = ($time - $refreshTime >= 43200);

            if ($refresh) {
                $query = "SELECT * FROM articles";
                $res = $this->conn->query($query);
                $count = mysqli_num_rows($res);

                if ($count >= 1000) {
                    $query = "DELETE FROM articles LIMIT 300";
                    $res = $this->conn->query($query);
                }

                $url = "https://api.nytimes.com/svc/topstories/v2/home.json?api-key=Lfw4TAMUC0xeMdySa4x3z2aqqrJfxN0s";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $res = curl_exec($ch);
                $todayArticles = json_decode($res,true);

                $url = "https://api.nytimes.com/svc/news/v3/content/all/world.json?limit=10&api-key=zYOvG3v0vRAlWHzoumT3nWxVhVYuEaGn";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $res = curl_exec($ch);
                $worldArticles = json_decode($res,true);

                $articles = array();
                foreach($todayArticles["results"] as $article) $articles[] = $article;
                foreach($worldArticles["results"] as $article) $articles[] = $article;

                foreach($articles as $article) {
                    if ($article != null) {
                        if ($article["multimedia"] != null) $image = addslashes($article["multimedia"][1]["url"]);
                        else continue;
                        $title = addslashes($article["title"]);
                        $author = addslashes($article["byline"]);
                        $section = addslashes($article["section"]);
                        $subsection = addslashes($article["subsection"]);
                        $strDate = strtotime($article["created_date"]);
                        $date = addslashes(date("m/d/y",$strDate));
                        $url = addslashes($article["url"]);
                        $abstract = addslashes($article["abstract"]);
                        $rating = 0;

                        if ($image != null) {
                            $query = "INSERT INTO articles (title,description,author,image,section,subsection,date,url,rating) VALUES ('$title', '$abstract', '$author', '$image','$section', '$subsection', '$date','$url', '$rating')";
                            $this->conn->query($query);
                        }
                    }
                }
                curl_close($ch);

                $url = "https://newsapi.org/v2/top-headlines?country=za&apiKey=2de446c96b814beb8237cd4612a236b3";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $res = curl_exec($ch);
                $saArticles = json_decode($res,true);   
                
                $articles = array();
                foreach($saArticles["articles"] as $article) $articles[] = $article;
                array_unique($articles, SORT_REGULAR);

                foreach($articles as $article) {
                    if ($article != null) {
                        if ($article["source"]["name"] == "News-Medical.net" || $article["source"]["name"] == "Businesstech.co.za" || $article["source"]["name"] == "Google News") continue;
                        else {
                            $title = addslashes($article["title"]);
                            $author = addslashes($article["author"]);
                            $section = "South Africa";
                            $subsection = "";
                            $strDate = strtotime($article["publishedAt"]);
                            $date = addslashes(date("m/d/y",$strDate));
                            $url = addslashes($article["url"]);
                            $abstract = addslashes($article["content"]);
                            $image = addslashes($article["urlToImage"]);
                            $rating = 0;

                            $query = "INSERT INTO articles (title,description,author,image,section,subsection,date,url,rating) VALUES ('$title', '$abstract', '$author', '$image','$section', '$subsection', '$date','$url', '$rating')";
                            $this->conn->query($query);
                        }
                    }
                }
                curl_close($ch);

                $query = "UPDATE `refreshed` SET `refresh` = CURRENT_TIMESTAMP";
                $this->conn->query($query);
            }
        }
    }

    function emptyName($name) {
        return (empty($name));
    }

    function emptySurname($surname) {
        return (empty($surname));
    }

    function emptyEmail($email) {
        return (empty($email));
    }

    function emptyPassword($password) {
        return (empty($password));
    }

    function invalidName($name) {
        $result;
        if (!preg_match("/^[a-zA-z]*$/", $name)) {
            $result = true;
        }
        else
            $result = false;

        return $result;
    }

    function invalidSurname($surname) {
        $result;
        if (!preg_match("/^[a-zA-z]*$/", $surname)) {
            $result = true;
        }
        else
            $result = false;

        return $result;
    }

    function invalidEmail($email) {
        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else
            $result = false;

        return $result;
    }

    function invalidPassword($password) {
        $result;
        if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password)) {
            $result = true;
        }
        else
            $result = false;

        return $result;
    }

    function emailExists($conn, $email) {
        $sql = "SELECT * FROM users WHERE email = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header('Location: ../signup.php?error=stmtfailed');
            exit();
        }

        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }