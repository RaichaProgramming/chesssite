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
                <div class = "container-fluid px-4 chess-board">
                    <div class = "row">
                        <div class = "col-sm chess-field">a8</div>
                        <div class = "col-sm bg-black chess-field">b8</div>
                        <div class = "col-sm chess-field">c8</div>
                        <div class = "col-sm bg-black chess-field">d8</div>
                        <div class = "col-sm chess-field">e8</div>
                        <div class = "col-sm bg-black chess-field">g8</div>
                        <div class = "col-sm chess-field">f8</div>
                        <div class = "col-sm bg-black chess-field">h8</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm bg-black chess-field">a7</div>
                        <div class = "col-sm chess-field">b7</div>
                        <div class = "col-sm bg-black chess-field">c7</div>
                        <div class = "col-sm chess-field">d7</div>
                        <div class = "col-sm bg-black chess-field">e7</div>
                        <div class = "col-sm chess-field">f7</div>
                        <div class = "col-sm bg-black chess-field">g7</div>
                        <div class = "col-sm chess-field">h7</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm chess-field">a6</div>
                        <div class = "col-sm bg-black chess-field">b6</div>
                        <div class = "col-sm chess-field">c6</div>
                        <div class = "col-sm bg-black chess-field">d6</div>
                        <div class = "col-sm chess-field">e6</div>
                        <div class = "col-sm bg-black chess-field">f6</div>
                        <div class = "col-sm chess-field">g6</div>
                        <div class = "col-sm bg-black chess-field">h6</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm bg-black chess-field">a5</div>
                        <div class = "col-sm chess-field">b5</div>
                        <div class = "col-sm bg-black chess-field">c5</div>
                        <div class = "col-sm chess-field">d5</div>
                        <div class = "col-sm bg-black chess-field">e5</div>
                        <div class = "col-sm chess-field">f5</div>
                        <div class = "col-sm bg-black chess-field">g5</div>
                        <div class = "col-sm chess-field">h5</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm chess-field">a4</div>
                        <div class = "col-sm bg-black chess-field">b4</div>
                        <div class = "col-sm chess-field">c4</div>
                        <div class = "col-sm bg-black chess-field">d4</div>
                        <div class = "col-sm chess-field">e4</div>
                        <div class = "col-sm bg-black chess-field">f4</div>
                        <div class = "col-sm chess-field">g4</div>
                        <div class = "col-sm bg-black chess-field">h4</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm bg-black chess-field">a3</div>
                        <div class = "col-sm chess-field">b3</div>
                        <div class = "col-sm bg-black chess-field">c3</div>
                        <div class = "col-sm chess-field">d3</div>
                        <div class = "col-sm bg-black chess-field">e3</div>
                        <div class = "col-sm chess-field">f3</div>
                        <div class = "col-sm bg-black chess-field">g3</div>
                        <div class = "col-sm chess-field">h3</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm chess-field">a2</div>
                        <div class = "col-sm bg-black chess-field">b2</div>
                        <div class = "col-sm chess-field">c2</div>
                        <div class = "col-sm bg-black chess-field">d2</div>
                        <div class = "col-sm chess-field">e2</div>
                        <div class = "col-sm bg-black chess-field">f2</div>
                        <div class = "col-sm chess-field">g2</div>
                        <div class = "col-sm bg-black chess-field">h2</div>
                    </div>
                    <div class = "row">
                        <div class = "col-sm bg-black chess-field">a1</div>
                        <div class = "col-sm chess-field">b1</div>
                        <div class = "col-sm bg-black chess-field">c1</div>
                        <div class = "col-sm chess-field">d1</div>
                        <div class = "col-sm bg-black chess-field">e1</div>
                        <div class = "col-sm chess-field">f1</div>
                        <div class = "col-sm bg-black chess-field">g1</div>
                        <div class = "col-sm chess-field">h1</div>
                    </div>
                </div>
            </div>
            <script src="assets\js\mainpage.js"></script>
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
        </body>
</html>

