<head>
<style type="text/css">
.form-style-6{
  font: 95% Arial, Helvetica, sans-serif;
  max-width: 800px;
  margin: 10px auto;
  padding: 16px;
  background: #F7F7F7;
}
.form-style-6 h1{
  background: #43D1AF;
  padding: 20px 0;
  font-size: 140%;
  font-weight: 300;
  text-align: center;
  color: #fff;
  margin: -16px -16px 16px -16px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea,
.form-style-6 select
{
  -webkit-transition: all 0.30s ease-in-out;
  -moz-transition: all 0.30s ease-in-out;
  -ms-transition: all 0.30s ease-in-out;
  -o-transition: all 0.30s ease-in-out;
  outline: none;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  background: #fff;
  margin-bottom: 4%;
  border: 1px solid #ccc;
  padding: 3%;
  color: #555;
  font: 95% Arial, Helvetica, sans-serif;
}
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
  box-shadow: 0 0 5px #43D1AF;
  padding: 3%;
  border: 1px solid #43D1AF;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 100%;
  padding: 3%;
  background: #43D1AF;
  border-bottom: 2px solid #30C29E;
  border-top-style: none;
  border-right-style: none;
  border-left-style: none;
  color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
  background: #2EBC99;
}
</style>

</head>
<body>


<div class="form-style-6">
<h1>Video grabber</h1>
<form>
<input type="text" class="entry" name="field1" placeholder="enter your stream link" />
</form>
<div id="result"></div>
</div>

<div id="result"></div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
$( document ).ready(function(){
$('.entry').on('input', function() {
//  console.log($('.entry').val());
var theval = $('.entry').val();
var thehost
var theport
var therest
var theapplication
var thestream
var plname
theval = theval.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
if (theval.substring(theval.length -4) == 'm3u8' && theval.substring(0,4) == 'http') {
  console.log('found m3u8 link');
var a = document.createElement('a');
a.href = theval;
thehost = a.hostname;
theport = a.port;
therest = a.pathname;

if (therest.substring(therest.length -13) == 'playlist.m3u8'){plname = 'playlist';const regex = /([^/]*)\/[^/]*?/g;let m;m = therest.match(regex);theapplication = m[1].replace('/','');thestream = m[2].replace('/','');}
else if (therest.substring(therest.length -11) == 'master.m3u8'){plname = 'master';const regex = /([^/]*)\/[^/]*?/g;let m;m = therest.match(regex);theapplication = m[1].replace('/','');thestream = m[2].replace('/','');}
else if (therest.substring(therest.length -4) == 'm3u8'){plname = 'master';const regex = /([^/]*)\/[^/]*?/g;let m;m = therest.match(regex);theapplication = m[1].replace('/','');thestream = m[2].replace('/','');}

console.log(thehost);
console.log(theport);
console.log(theapplication);
console.log(thestream);
$('#result').empty();
if (typeof thehost !== 'undefined' && typeof thehost !== 'undefined' && typeof theport !== 'undefined' && typeof theapplication !== 'undefined' && typeof thestream !== 'undefined' && typeof plname !== 'undefined') {
$('#result').append('<b>MPEG-DASH</b> : http://'+thehost+':'+theport+'/'+theapplication+'/'+thestream+'/manifest.mpd');
$('#result').append('<br />');
$('#result').append('<b>Apple HLS</b> : http://'+thehost+':'+theport+'/'+theapplication+'/'+thestream+'/'+plname+'.m3u8');
$('#result').append('<br />');
$('#result').append('<b>Adobe RTMP</b> : rtmp://'+thehost+'/'+theapplication+'/'+thestream);
$('#result').append('<br />');
$('#result').append('<b>Adobe HDS</b> : http://'+thehost+':'+theport+'/'+theapplication+'/'+thestream+'/manifest.f4m');
$('#result').append('<br />');
$('#result').append('<b>Microsoft Smooth Streaming</b> : http://'+thehost+':'+theport+'/'+theapplication+'/'+thestream+'/Manifest');
$('#result').append('<br />');
$('#result').append('<b>Mobile Android</b> : rtsp://'+thehost+':'+theport+'/'+theapplication+'/'+thestream);
$('#result').append('<br />');
}
}


})
});
</script>
</body>
