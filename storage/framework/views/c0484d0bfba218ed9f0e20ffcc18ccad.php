<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            background: limegreen
        }
        
        .main{
            width: 700px;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%,-50%);
            overflow: hidden;
            border: 5px solid red;
            border-radius: 5px;
            box-shadow: 10px 25px 30px rgba(0, 0, 0, 0,5);


        }

        .wrap{
            display: flex;
            animation: slide 10s infinite;

        }

        .wrap img{
            width: 100%;
        }

        @keyframes slide{
            0%{
                transform: translateX(0);
            }
            10%{
                transform: translateX(0);
            }
            30%{
                transform: translateX(-100%);
            }
            40%{
                transform: translateX(-200%);
            }
            50%{
                transform: translateX(-300%);
            }
            60%{
                transform: translateX(-300%);
            }
            70%{
                transform: translateX(-300%);
            }
            80%{
                transform: translateX(-200%);
            }
            90%{
                transform: translateX(-100%);
            }
            100%{
                transform: translateX(0);
            }  
        }
    </style>

    <div class="main">
        <div class="wrap">
            <img src="asset/b1.jpg" alt="">
            <img src="asset/b2.jpg" alt="">
            <img src="asset/b3.jpg" alt="">
            <img src="asset/b4.jpg" alt="">
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\example-app\resources\views/test.blade.php ENDPATH**/ ?>