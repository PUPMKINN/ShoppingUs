<!DOCTYPE html>
<html>
<title>Shopping Us</title>

<!-- Stylesheets -->
<link rel='stylesheet' href='./html/css/footer.css' />
<link rel='stylesheet' href='./html/css/header.css' />
<link rel='stylesheet' href='./html/css/home.css' />
<link rel='stylesheet' href='./html/css/navbar.css' />
<link rel='stylesheet' href='./html/css/modal.css' />
<link rel="stylesheet" href="./html/css/login.css">
<link rel="stylesheet" href="./html/css/login-navbar.css">
<link rel="stylesheet" href="./html/css/fontcss/brands.css">
<link rel="stylesheet" href="./html/css/fontcss/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!--Logo web -->
<link rel="icon" type="image/png" href="./html/img/logo-cart.png">
<style>
    ::selection {
        background-color: grey;
    }

    ::-webkit-scrollbar {
        width: 5px;
        background-color: white;
    }

    ::-webkit-scrollbar-thumb {
        background-color: black;
    }

    html {
        scroll-behavior: smooth;
    }

    @media (max-width: 768px) {

        /* Adjust the styling for smaller screens */
        .header {
            flex-direction: column;
            text-align: center;
        }

        .logo {
            margin-bottom: 1rem;
        }

        .nav-items {
            margin-top: 1rem;
        }
    }
</style>
<script>
    var modalShown = localStorage.getItem("modalShown");
    if (!modalShown) {
        $(document).ready(function() {
            $("#socialsPopup").modal('show');
        });
        localStorage.setItem("modalShown", "true");
    }
</script>


</head>


<body>
    <!---Navigation bar--->
    <header class="header">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <a class="logo" href="index.html">
                <img class="ml-3 text-xl logo-img" src="./html/img/logo-cart.png" alt="Logo" />
                <span class="logo-text">Shopping Us</span>
            </a>
            <nav class="nav-items">
                <a href="index.html">Home</a>
                <a href="login.html">Login</a>
                <a href="">Sign Up</a>
                <a href="">Admin</a>
            </nav>
        </div>
    </header>