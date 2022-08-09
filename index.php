<!doctype html>
<html>
    <head>
        <title>Chess website</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="assets\css\mainpage.css">
    </head>
        <body>
            <script src="https://unpkg.com/vue@3"></script>
            <div id="app">
                <header>
                    <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class = "collapse navbar-collapse" id = "mainnavbar">
                            <ul class = "navbar-nav me-auto mb-2 mb-lg-0">
                                <li class = "nav-item active">
                                    <a class = "nav-link" aria-current="page" href="#">Home</a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href="#">Game history</a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href="#">Login</a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href="#">Register</a>
                                </li>
                                <li class = "nav-item">
                                    <a class = "nav-link" href="#">My Profile</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <div class = "container">
                    <div class = "row">
                        <div class = "col-sm">a8</div>
                        <div class = "col-sm">b8</div>
                        <div class = "col-sm">c8</div>
                        <div class = "col-sm">d8</div>
                        <div class = "col-sm">e8</div>
                        <div class = "col-sm">g8</div>
                        <div class = "col-sm">h8</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a7</div>
                        <div class = "col-sm">b7</div>
                        <div class = "col-sm">c7</div>
                        <div class = "col-sm">d7</div>
                        <div class = "col-sm">e7</div>
                        <div class = "col-sm">g7</div>
                        <div class = "col-sm">h7</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a6</div>
                        <div class = "col-sm">b6</div>
                        <div class = "col-sm">c6</div>
                        <div class = "col-sm">d6</div>
                        <div class = "col-sm">e6</div>
                        <div class = "col-sm">g6</div>
                        <div class = "col-sm">h6</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a5</div>
                        <div class = "col-sm">b5</div>
                        <div class = "col-sm">c5</div>
                        <div class = "col-sm">d5</div>
                        <div class = "col-sm">e5</div>
                        <div class = "col-sm">g5</div>
                        <div class = "col-sm">h5</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a5</div>
                        <div class = "col-sm">b5</div>
                        <div class = "col-sm">c5</div>
                        <div class = "col-sm">d5</div>
                        <div class = "col-sm">e5</div>
                        <div class = "col-sm">g5</div>
                        <div class = "col-sm">h5</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a4</div>
                        <div class = "col-sm">b4</div>
                        <div class = "col-sm">c4</div>
                        <div class = "col-sm">d4</div>
                        <div class = "col-sm">e4</div>
                        <div class = "col-sm">g4</div>
                        <div class = "col-sm">h4</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a3</div>
                        <div class = "col-sm">b3</div>
                        <div class = "col-sm">c3</div>
                        <div class = "col-sm">d3</div>
                        <div class = "col-sm">e3</div>
                        <div class = "col-sm">g3</div>
                        <div class = "col-sm">h3</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a2</div>
                        <div class = "col-sm">b2</div>
                        <div class = "col-sm">c2</div>
                        <div class = "col-sm">d2</div>
                        <div class = "col-sm">e2</div>
                        <div class = "col-sm">g2</div>
                        <div class = "col-sm">h2</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm">a1</div>
                        <div class = "col-sm">b1</div>
                        <div class = "col-sm">c1</div>
                        <div class = "col-sm">d1</div>
                        <div class = "col-sm">e1</div>
                        <div class = "col-sm">g1</div>
                        <div class = "col-sm">h1</div>
                    </div>
                </div>
                {{ message }}
            </div>


            <script>
                const { createApp } = Vue

                createApp({
                    data() {
                        return {
                            message: 'Hello Vue!'
                        }
                    }
                }).mount('#app')
            </script>
            <?php
                require_once 'api\auth\login_api.php';

                $main = new LoginImplementation;
                echo $main->login('','');
            ?>
        </body>
</html>

