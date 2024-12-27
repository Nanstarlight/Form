
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="shortcut icon" href="https://img.icons8.com/?size=100&id=114624&format=png&color=000000" type="image/x-icon">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            color: white;
            min-height: 100vh;
            display: block;
            justify-content: center;
            align-items: center;
            background: url(image/image.png);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }
        /* header{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            background-color: red;
            position: sticky;
            top: 0;
            margin-top: 0;
        }
        nav{
            top: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        nav ul{
            list-style: none;
        }
        nav a{
            color:black;
            text-decoration: none;
            
        }
        nav a:hover{
            color:goldenrod;
        } */
        section{
            display: flex;
            justify-content: center;
        }
        form{
            width: 400px;
            height: 400px;
            border: 1px solid black;
            padding: 10px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border-color: greenyellow;
        }
        form h2{
            margin-bottom: 10px;
            font-family: sans-serif;
        }
        form input{
            margin: 10px 0;
            outline: none;
            border: 1px solid black;
            border-radius: 4px;
            padding: 5px 10px;
            font-weight: 600;
            width: 100%;
            color: black;
            border-color: greenyellow;
        }
        .sl,.status{
            margin-top:10px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        select{
            outline: none;
            border: 1px solid black;
            border-radius: 5px;
            border-color: aqua;
            cursor: pointer;
        }
        select option{
            padding: 10px;
            color: black;
            background-color: greenyellow;
        }
        .status {
            margin-top: 10px;
        }
        .radio{
            display: flex;
            justify-content: center;
            align-items: center;
            float: right;
            padding-left: 5px;
            width:55%;
        }
        .radio input{
            cursor: pointer;
        }
        .btn{
            margin-top: 20px;
            width: 90%;
            padding:5px 10px;
            border:1px solid greenyellow;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.5s ease;
        }
        .btn:hover{
            background-color: cadetblue;
            color: greenyellow;
        }
    </style>
</head>
<body>
    <!-- <header>
        <nav>
            <ul>
                <li><a href="">Shop</a></li>
                <li><a href="">Laptop/Desktop</a></li>
                <li><a href="">Gaming</a></li>
                <li><a href="">Brand</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header> -->
    <section>
        <form action="Server/insert_form.php" method="post">
            <h2>Product</h2>
            Product Name<input type="text" name="p_name">
            Product Price<input type="text" name="p_price">
            Product QTY<input type="text" name="p_qty">
            <div class="sl">
            <label for="">Categories:</label>
            <select name="select" id="">
                <option value="Beer">Beer</option>
                <option value="Juice">Juice</option>
                <option value="Food">Food</option>
                <option value="Sea Food">Sea Food</option>
                <option value="Mubank">Mubank</option>
            </select>
            </div>
            <div class="status">
                <label for="st">Status</label>
                <div class="radio">
                Incorrect<input type="radio" name="st" value="Incorrect">
                Correct<input type="radio" name="st" value="Correct">
                </div>
            </div>
            <input type="submit" value="Save" class="btn">
        </form>
    </section>
</body>
</html>