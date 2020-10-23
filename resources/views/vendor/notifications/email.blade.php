

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>verification emial</title>
    <style>
        .displayBox{
            width: 100%;
            height: 80vh;
            background: #c2c2c2;
        }

        .haddingImage{
            width: 60%;
            height: auto;
            margin-left: 5%;
        }

        .button{
            display: block;
            width: 20%;
            height: 4vh;
            color: #ffffff !important;
            background: rgb(22, 22, 22);
            padding-left:25px;
            margin-left: 5%;
        }

        p{
            text-transform: capitalize;
            color: #ffffff;
            margin-left:5%; 
        }
    </style>
</head>
<body> 

    <div class="displayBox">
        {{-- <a href="[{{ $displayableActionUrl }}]({{ $actionUrl }})">avinash is cool</a> --}}

        <img src="https://dinbandhuhelpfoundation.weebly.com/uploads/1/2/5/1/125115490/bitmap390200056642033135.png" alt="" class="haddingImage">
    
        <h3>click the link below for verifing your account</h3>

        <p>welcome to dinbandhu help foundation</p>

        <p>thank you for creating a new account click the button below and verify your account</p>

        <a href="{{ $displayableActionUrl }}" class="button">click here</a>

        <p>thank you for visiting our website</p>

    </div>

    
</body>
</html>