<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  
</head>
<body>
     @if (session()->has('status'))
        <div style="background: lightgreen;">{{ session('status') }}</div>
    @endif
    <header>
        <nav>
            <ul>
                {{ $slot }}
            </ul>
        </nav>
    </header>
    

    <main>
   
        
        
    </main>
    <footer>
        &copy; 2021
    </footer>