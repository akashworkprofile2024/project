
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .menu-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
        .menu {
            display: none;
            margin-top: 10px; 
            border:1px solid red;
        }
        .menu a {
            display: block;
            padding: 10px 20px;
            background-color: #f8f9fa;
            text-decoration: none;
            color: #007BFF;
            border: 1px solid #007BFF;
            border-radius: 5px;
            margin-bottom: 5px;
            width:100px;
          
            
            
             
        }
        .menu a:hover {
            background-color: #007BFF;
            color: white;
        }
        
    </style>
</head>
<body>

    <button class="menu-button" onclick="toggleMenu()">MENU</button>

    <div class="menu" id="navMenu">
        <a href="#home">Home</a>
        <a href="#Gallery">Gallery</a>
        <a href="#Gallery">Services</a>
        <a href="#aboutus">About Us</a>
        <a href="#contact">Contact</a>

    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById('navMenu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }
    </script>


    