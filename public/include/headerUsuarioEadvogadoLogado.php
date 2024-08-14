<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

header {
    display: flex;
    justify-content: space-between;
    width: 100%;
    height: 75px;
    background-color: #0C0C24;
}

header nav {
    display: flex;
    flex-direction: column;
    margin: 10px 0;
}

header nav#registroLogin {
    padding-left: 230px;
}

header nav#menu ul li {
    font-size: 20px;
    color: #78838E;
}

header nav ul {
    display: flex;
}

header nav ul a, span {
    text-decoration: none;
    color: #fff
}

header nav ul a li {
    margin: 0 10px;
    list-style: none;
}
    </style>
</head>
<header>
    <img id="logo" src="../../img/logo_direitoDireto.png" alt="Logo">

    <div class="menu">
        <nav id="registroLogin">
            <ul>
                <a href="../login/comoVoceSeIdentificaLogin.php"><li>Sair</li></a>
            </ul>
        </nav>
        
        <nav id="menu">
            <ul>
                <a href="../../index.html"><li>Página Inicial</li></a>
                <a href="../../index.html#sobre"><li>Sobre</li></a>
                <a href="../../index.html#contato"><li>Contato</li></a>
            </ul>
        </nav>

    </div>
</header>