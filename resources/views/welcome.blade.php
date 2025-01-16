<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Literata:ital,opsz,wght@0,7..72,200..900;1,7..72,200..900&display=swap" rel="stylesheet">
    <title>uas - pemweb</title>
</head>
<body style="margin: 0; padding: 0; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); min-height: 100vh;">
    <div style="justify-content: center; height: 100vh; display: flex; flex-direction: column; align-items: center; padding: 20px; animation: fadeIn 1.5s ease-in-out;">
        <div style="background: rgba(255, 255, 255, 0.9); padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); backdrop-filter: blur(10px); transform: translateY(0px); transition: transform 0.3s ease; animation: slideUp 1s ease-out;" onmouseover="this.style.transform='translateY(-10px)'" onmouseout="this.style.transform='translateY(0px)'">
            <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 30px;">
                <img src="{{ asset('img/logo_uper.png') }}" alt="Logo UPER" style="height: 100px; object-fit: contain; animation: fadeIn 2s ease-in-out;">
            </div>
            <h1 style="text-align: center; font-size: 50px; font-family: 'Bungee'; background: linear-gradient(45deg, #004b96, #0066cc); -webkit-background-clip: text; color: transparent; text-shadow: 2px 2px 4px rgba(0,0,0,0.1); letter-spacing: 2px; margin-bottom: 20px;">UAS Pemrograman Web</h1>
            <h2 style="font-family: 'Literata'; background: linear-gradient(45deg, #0a2641, #1a3a54); -webkit-background-clip: text; color: transparent; margin-bottom: 30px; letter-spacing: 1px; text-align: center;">Raihan Akira Rahmaputra - 105222040</h2>
            <div style="text-align: center;">
                <a href="{{ route('event.home') }}" style="text-decoration: none;">
                    <button style="font-family: 'Literata'; padding: 15px 40px; font-size: 18px; background: linear-gradient(45deg, #4CAF50, #45a049); color: white; border: none; border-radius: 50px; cursor: pointer; box-shadow: 0 4px 15px rgba(76,175,80,0.3); transition: all 0.3s ease; position: relative; overflow: hidden;"
                        onmouseover="this.style.transform='scale(1.05) translateY(-2px)'; this.style.boxShadow='0 6px 20px rgba(76,175,80,0.4)';"
                        onmouseout="this.style.transform='scale(1) translateY(0)'; this.style.boxShadow='0 4px 15px rgba(76,175,80,0.3)';">
                        Start <span style="margin-left: 5px; display: inline-block; transition: transform 0.3s ease;">&gt;</span>
                    </button>
                </a>
            </div>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</body>
</html>
