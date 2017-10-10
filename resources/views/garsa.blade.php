<html>
<head>
    <title>Garsa</title>
</head>
<style>
a {
     cursor: pointer;
    text-decoration: none;
    color: black;
}
 a.kuliah:hover {
    color: pink;
    cursor: pointer;
    text-decoration: none;
 }
 a.kerja:hover {
     color: red;
     cursor: pointer;
     text-decoration: none;
 }
</style>
<body>
    <h1><center><span class="kuliah"><a href="{{ url('garsa/kuliah')}}" class="kuliah">KULIAH</span></a> / <span class="kerja"><a href="{{ url('garsa/kerja')}}" class="kerja">KERJA</a></span> ? </center></h1>
</body>
</html>