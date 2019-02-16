<?php
include_once("db.php");
$name = $_GET['uploader'];
$out_name = substr($name,0,7);
$searchq = preg_replace("#[^0-9a-z,.-]#i"," ",$out_name);
$sql10 = "SELECT * FROM users WHERE token LIKE '%$searchq%'";
$result = $connsource->query($sql10);
$row = $result->fetch_assoc();
$upcheck = $row['token'];
if ($_GET['uploader'] == false){
Header("Location:index.php");	
}
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript"  charset="utf-8">
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q P=\'\',28=\'21\';1P(q i=0;i<12;i++)P+=28.11(C.K(C.O()*28.G));q 2R=6,2I=6f,2H=6d,2T=49,2f=D(t){q o=!1,i=D(){z(k.1h){k.3b(\'36\',e);F.3b(\'1T\',e)}S{k.2X(\'35\',e);F.2X(\'26\',e)}},e=D(){z(!o&&(k.1h||5Y.2z===\'1T\'||k.2Y===\'2Z\')){o=!0;i();t()}};z(k.2Y===\'2Z\'){t()}S z(k.1h){k.1h(\'36\',e);F.1h(\'1T\',e)}S{k.32(\'35\',e);F.32(\'26\',e);q n=!1;33{n=F.61==5Z&&k.1X}2s(r){};z(n&&n.2t){(D d(){z(o)H;33{n.2t(\'14\')}2s(e){H 5W(d,50)};o=!0;i();t()})()}}};F[\'\'+P+\'\']=(D(){q t={t$:\'21+/=\',5V:D(e){q d=\'\',a,n,o,c,s,l,i,r=0;e=t.e$(e);1f(r<e.G){a=e.17(r++);n=e.17(r++);o=e.17(r++);c=a>>2;s=(a&3)<<4|n>>4;l=(n&15)<<2|o>>6;i=o&63;z(2q(n)){l=i=64}S z(2q(o)){i=64};d=d+X.t$.11(c)+X.t$.11(s)+X.t$.11(l)+X.t$.11(i)};H d},13:D(e){q n=\'\',a,l,c,s,r,i,d,o=0;e=e.1r(/[^A-5C-5B-9\\+\\/\\=]/g,\'\');1f(o<e.G){s=X.t$.1M(e.11(o++));r=X.t$.1M(e.11(o++));i=X.t$.1M(e.11(o++));d=X.t$.1M(e.11(o++));a=s<<2|r>>4;l=(r&15)<<4|i>>2;c=(i&3)<<6|d;n=n+T.U(a);z(i!=64){n=n+T.U(l)};z(d!=64){n=n+T.U(c)}};n=t.n$(n);H n},e$:D(t){t=t.1r(/;/g,\';\');q n=\'\';1P(q o=0;o<t.G;o++){q e=t.17(o);z(e<1A){n+=T.U(e)}S z(e>5s&&e<5M){n+=T.U(e>>6|6F);n+=T.U(e&63|1A)}S{n+=T.U(e>>12|2L);n+=T.U(e>>6&63|1A);n+=T.U(e&63|1A)}};H n},n$:D(t){q o=\'\',e=0,n=6C=1n=0;1f(e<t.G){n=t.17(e);z(n<1A){o+=T.U(n);e++}S z(n>71&&n<2L){1n=t.17(e+1);o+=T.U((n&31)<<6|1n&63);e+=2}S{1n=t.17(e+1);2B=t.17(e+2);o+=T.U((n&15)<<12|(1n&63)<<6|2B&63);e+=3}};H o}};q a=[\'6V==\',\'3F\',\'3G=\',\'3H\',\'3K\',\'42=\',\'3C=\',\'3D=\',\'3h\',\'3e\',\'4W=\',\'4V=\',\'5j\',\'75\',\'7H=\',\'3I\',\'3J=\',\'3L=\',\'3N=\',\'3P=\',\'3E=\',\'3V=\',\'3Y==\',\'41==\',\'3T==\',\'3B==\',\'3i=\',\'4T\',\'52\',\'4U\',\'4q\',\'4p\',\'4n\',\'4i==\',\'4h=\',\'4s=\',\'4C=\',\'4H==\',\'4u=\',\'4A\',\'4z=\',\'4y=\',\'4w==\',\'4v=\',\'3l==\',\'51==\',\'4x=\',\'4B=\',\'4D\',\'4E==\',\'4F==\',\'4G\',\'4I==\',\'4k=\'],b=C.K(C.O()*a.G),w=t.13(a[b]),W=w,Z=1,Y=\'#4r\',r=\'#4d\',g=\'#4e\',f=\'#4f\',Q=\'\',p=\'4g!\',y=\'4c 4j 4l 4m\\\'4o 4J 4t 2i 2h. 4K\\\'s 54.  56 57\\\'t?\',u=\'58 59 5a-5b, 55 5c\\\'t 5e 5f X 5g 5l.\',s=\'I 5i, I 5k 5d 53 2i 2h.  4N 4O 4P!\',o=0,v=0,n=\'4Q.4R\',l=0,A=e()+\'.2x\';D h(t){z(t)t=t.1L(t.G-15);q o=k.2K(\'4S\');1P(q n=o.G;n--;){q e=T(o[n].1I);z(e)e=e.1L(e.G-15);z(e===t)H!0};H!1};D m(t){z(t)t=t.1L(t.G-15);q e=k.4M;x=0;1f(x<e.G){1m=e[x].1p;z(1m)1m=1m.1L(1m.G-15);z(1m===t)H!0;x++};H!1};D e(t){q n=\'\',o=\'21\';t=t||30;1P(q e=0;e<t;e++)n+=o.11(C.K(C.O()*o.G));H n};D i(o){q i=[\'4Y\',\'4Z==\',\'4a\',\'4L\',\'2w\',\'4b==\',\'44=\',\'48==\',\'3A=\',\'3z==\',\'3y==\',\'3x==\',\'3w\',\'3v\',\'3u\',\'2w\'],r=[\'2n=\',\'3t==\',\'3s==\',\'3r==\',\'3q=\',\'3p\',\'3o=\',\'3n=\',\'2n=\',\'3m\',\'3k==\',\'3j\',\'3g==\',\'3f==\',\'3c==\',\'3d=\'];x=0;1R=[];1f(x<o){c=i[C.K(C.O()*i.G)];d=r[C.K(C.O()*r.G)];c=t.13(c);d=t.13(d);q a=C.K(C.O()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}S{n=\'//\'+c+\'/\'+e(C.K(C.O()*20)+4)+\'.2x\'};1R[x]=23 24();1R[x].1U=D(){q t=1;1f(t<7){t++}};1R[x].1I=n;x++}};D M(t){};H{2m:D(t,r){z(47 k.N==\'46\'){H};q o=\'0.1\',r=W,e=k.1b(\'1x\');e.16=r;e.j.1l=\'1J\';e.j.14=\'-1i\';e.j.10=\'-1i\';e.j.1c=\'2c\';e.j.V=\'45\';q a=k.N.2O,d=C.K(a.G/2);z(d>15){q n=k.1b(\'2a\');n.j.1l=\'1J\';n.j.1c=\'1v\';n.j.V=\'1v\';n.j.10=\'-1i\';n.j.14=\'-1i\';k.N.43(n,k.N.2O[d]);n.1d(e);q i=k.1b(\'1x\');i.16=\'2M\';i.j.1l=\'1J\';i.j.14=\'-1i\';i.j.10=\'-1i\';k.N.1d(i)}S{e.16=\'2M\';k.N.1d(e)};l=3Z(D(){z(e){t((e.1W==0),o);t((e.1Y==0),o);t((e.1S==\'2g\'),o);t((e.1G==\'2C\'),o);t((e.1K==0),o)}S{t(!0,o)}},27)},1O:D(e,c){z((e)&&(o==0)){o=1;F[\'\'+P+\'\'].1C();F[\'\'+P+\'\'].1O=D(){H}}S{q u=t.13(\'3X\'),v=k.3W(u);z((v)&&(o==0)){z((2I%3)==0){q l=\'3U=\';l=t.13(l);z(h(l)){z(v.1Q.1r(/\\s/g,\'\').G==0){o=1;F[\'\'+P+\'\'].1C()}}}};q b=!1;z(o==0){z((2H%3)==0){z(!F[\'\'+P+\'\'].2A){q a=[\'3S==\',\'3R==\',\'3Q=\',\'3O=\',\'3M=\'],m=a.G,r=a[C.K(C.O()*m)],d=r;1f(r==d){d=a[C.K(C.O()*m)]};r=t.13(r);d=t.13(d);i(C.K(C.O()*2)+1);q n=23 24(),s=23 24();n.1U=D(){i(C.K(C.O()*2)+1);s.1I=d;i(C.K(C.O()*2)+1)};s.1U=D(){o=1;i(C.K(C.O()*3)+1);F[\'\'+P+\'\'].1C()};n.1I=r;z((2T%3)==0){n.26=D(){z((n.V<8)&&(n.V>0)){F[\'\'+P+\'\'].1C()}}};i(C.K(C.O()*3)+1);F[\'\'+P+\'\'].2A=!0};F[\'\'+P+\'\'].1O=D(){H}}}}},1C:D(){z(v==1){q L=2D.6W(\'2E\');z(L>0){H!0}S{2D.6X(\'2E\',(C.O()+1)*27)}};q h=\'6Z==\';h=t.13(h);z(!m(h)){q c=k.1b(\'70\');c.1Z(\'72\',\'73\');c.1Z(\'2z\',\'1g/74\');c.1Z(\'1p\',h);k.2K(\'76\')[0].1d(c)};77(l);k.N.1Q=\'\';k.N.j.19+=\'R:1v !1a\';k.N.j.19+=\'1u:1v !1a\';q A=k.1X.1Y||F.34||k.N.1Y,b=F.6R||k.N.1W||k.1X.1W,d=k.1b(\'1x\'),Z=e();d.16=Z;d.j.1l=\'2r\';d.j.14=\'0\';d.j.10=\'0\';d.j.V=A+\'1z\';d.j.1c=b+\'1z\';d.j.2v=Y;d.j.1V=\'6Q\';k.N.1d(d);q a=\'<a 1p="6P://6O.6N"><2j 16="2k" V="2Q" 1c="40"><2y 16="2d" V="2Q" 1c="40" 6M:1p="6L:2y/6K;6J,6I+6H+6G+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6E+6D+78/79/7a/7q/7u/7v+/7w/7x+7y/7z+7A/7B/7C/7D/7E/7F/7G+7t/7s+7j+7r+7c+7d+7e/7f+7g/7h+7b/7i+7k+7l+7m+7n/7o+7p/6S/6B/6A+6z+5H/5I+5J+5K+5L+E+5G/5N/5P/5Q/5R/5S/+5T/5U++5O/5E/5w+5D/5p+5q+5r==">;</2j></a>\';a=a.1r(\'2k\',e());a=a.1r(\'2d\',e());q i=k.1b(\'1x\');i.1Q=a;i.j.1l=\'1J\';i.j.1y=\'1N\';i.j.14=\'1N\';i.j.V=\'5u\';i.j.1c=\'5o\';i.j.1V=\'2J\';i.j.1K=\'.6\';i.j.2S=\'2u\';i.1h(\'5v\',D(){n=n.5x(\'\').5y().5z(\'\');F.2F.1p=\'//\'+n});k.1F(Z).1d(i);q o=k.1b(\'1x\'),M=e();o.16=M;o.j.1l=\'2r\';o.j.10=b/7+\'1z\';o.j.5F=A-6j+\'1z\';o.j.6l=b/3.5+\'1z\';o.j.2v=\'#6m\';o.j.1V=\'2J\';o.j.19+=\'J-1w: "6n 6o", 1o, 1t, 1s-1q !1a\';o.j.19+=\'6p-1c: 6k !1a\';o.j.19+=\'J-1k: 6r !1a\';o.j.19+=\'1g-1D: 1B !1a\';o.j.19+=\'1u: 6t !1a\';o.j.1S+=\'38\';o.j.2W=\'1N\';o.j.6u=\'1N\';o.j.6v=\'2l\';k.N.1d(o);o.j.6x=\'1v 6s 6i -6a 6h(0,0,0,0.3)\';o.j.1G=\'2e\';q W=30,w=22,x=18,Q=18;z((F.34<39)||(62.V<39)){o.j.37=\'50%\';o.j.19+=\'J-1k: 66 !1a\';o.j.2W=\'68;\';i.j.37=\'65%\';q W=22,w=18,x=12,Q=12};o.1Q=\'<2U j="1j:#69;J-1k:\'+W+\'1E;1j:\'+r+\';J-1w:1o, 1t, 1s-1q;J-1H:6b;R-10:1e;R-1y:1e;1g-1D:1B;">\'+p+\'</2U><2V j="J-1k:\'+w+\'1E;J-1H:6c;J-1w:1o, 1t, 1s-1q;1j:\'+r+\';R-10:1e;R-1y:1e;1g-1D:1B;">\'+y+\'</2V><6e j=" 1S: 38;R-10: 0.3a;R-1y: 0.3a;R-14: 29;R-2P: 29; 2o:6g 5h #5m; V: 25%;1g-1D:1B;"><p j="J-1w:1o, 1t, 1s-1q;J-1H:2p;J-1k:\'+x+\'1E;1j:\'+r+\';1g-1D:1B;">\'+u+\'</p><p j="R-10:6y;"><2a 6w="X.j.1K=.9;" 6q="X.j.1K=1;"  16="\'+e()+\'" j="2S:2u;J-1k:\'+Q+\'1E;J-1w:1o, 1t, 1s-1q; J-1H:2p;2o-5A:2l;1u:1e;5t-1j:\'+g+\';1j:\'+f+\';1u-14:2c;1u-2P:2c;V:60%;R:29;R-10:1e;R-1y:1e;" 6T="F.2F.6Y();">\'+s+\'</2a></p>\'}}})();F.2N=D(t,e){q n=6U.5X,o=F.5n,d=n(),i,r=D(){n()-d<e?i||o(r):t()};o(r);H{4X:D(){i=1}}};q 2G;z(k.N){k.N.j.1G=\'2e\'};2f(D(){z(k.1F(\'2b\')){k.1F(\'2b\').j.1G=\'2g\';k.1F(\'2b\').j.1S=\'2C\'};2G=F.2N(D(){F[\'\'+P+\'\'].2m(F[\'\'+P+\'\'].1O,F[\'\'+P+\'\'].67)},2R*27)});',62,478,'|||||||||||||||||||style|document||||||var|||||||||if||vr6|Math|function||window|length|return||font|floor|||body|random|YvqQNvbXlBis||margin|else|String|fromCharCode|width||this|||top|charAt||decode|left||id|charCodeAt||cssText|important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|color|size|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|bottom|px|128|center|xZBOQojSmv|align|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|hJdCZtIrIK|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute||ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new|Image||onload|1000|ubCDElrmWE|auto|div|babasbmsgx|60px|FILLVECTID2|visible|RdSVFSookX|hidden|blocker|ad|svg|FILLVECTID1|15px|EzYxuEpJSz|ZmF2aWNvbi5pY28|border|300|isNaN|fixed|catch|doScroll|pointer|backgroundColor|cGFydG5lcmFkcy55c20ueWFob28uY29t|jpg|image|type|ranAlready|c3|none|sessionStorage|babn|location|wDmEzTYvIU|kfpxKPrIkZ|GRhJAOIJJM|10000|getElementsByTagName|224|banner_ad|YHdIGYiVdB|childNodes|right|160|xgKZVAoesA|cursor|CPyBmTfCCY|h3|h1|marginLeft|detachEvent|readyState|complete|||attachEvent|try|innerWidth|onreadystatechange|DOMContentLoaded|zoom|block|640|5em|removeEventListener|d2lkZV9za3lzY3JhcGVyLmpwZw|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YWQtY29udGFpbmVy|bGFyZ2VfYmFubmVyLmdpZg|YmFubmVyX2FkLmdpZg|YWQtZm9vdGVy|RGl2QWQ|ZmF2aWNvbjEuaWNv|c3F1YXJlLWFkLnBuZw|IGFkX2JveA|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|YmFubmVyLmpwZw|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|QWRzX2dvb2dsZV8wNA|YWQtbGFiZWw|YWQtbGI|QWRMYXllcjE|YWRCYW5uZXJXcmFw|YWQtZnJhbWU|YWQtaGVhZGVy|QWRBcmVh|QWRGcmFtZTE|YWQtaW1n|QWRGcmFtZTI|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTM|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTQ|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|QWRzX2dvb2dsZV8wMw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|QWRMYXllcjI|querySelector|aW5zLmFkc2J5Z29vZ2xl|QWRzX2dvb2dsZV8wMQ|setInterval||QWRzX2dvb2dsZV8wMg|YWQtaW5uZXI|insertBefore|YWdvZGEubmV0L2Jhbm5lcnM|468px|undefined|typeof|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ||anVpY3lhZHMuY29t|YS5saXZlc3BvcnRtZWRpYS5ldQ|It|777777|adb8ff|FFFFFF|Welcome|QWREaXY|QWRJbWFnZQ|looks|c3BvbnNvcmVkX2xpbms|like|you|RGl2QWRD|re|RGl2QWRC|RGl2QWRB|EEEEEE|QWRCb3gxNjA|an|YWRUZWFzZXI|YmFubmVyYWQ|YWRBZA|YWRzZXJ2ZXI|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YmFubmVyaWQ|QWRDb250YWluZXI|YWRzbG90|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|Z2xpbmtzd3JhcHBlcg|b3V0YnJhaW4tcGFpZA|using|That|YWQuZm94bmV0d29ya3MuY29t|styleSheets|Let|me|in|moc|kcolbdakcolb|script|RGl2QWQx|RGl2QWQz|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|clear|YWRuLmViYXkuY29t|YWQubWFpbC5ydQ||YWRfY2hhbm5lbA|RGl2QWQy|my|okay|we|Who|doesn|But|without|advertising|income|can|disabled|keep|making|site|solid|understand|QWQzMDB4MTQ1|have|awesome|CCC|requestAnimationFrame|40px|Uv0LfPzlsBELZ|3eUeuATRaNMs0zfml|gkJocgFtzfMzwAAAABJRU5ErkJggg|127|background|160px|click|uJylU|split|reverse|join|radius|z0|Za|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Kq8b7m0RpwasnR|minWidth|MjA3XJUKy|bTplhb|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|2048|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|encode|setTimeout|now|event|null||frameElement|screen||||18pt|zLiVHtWOWi|45px|999|8px|200|500|232|hr|271|1px|rgba|24px|120|normal|minHeight|fff|Arial|Black|line|onmouseout|16pt|14px|12px|marginRight|borderRadius|onmouseover|boxShadow|35px|F2Q|x0z6tauQYvPxwT0VM1lH9Adt5Lp|pyQLiBu8WDYgxEZMbeEqIiSM8r|c1|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|192|sAAADr6|1BMVEXr6|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|base64|png|data|xlink|com|blockadblock|http|9999|innerHeight|kmLbKmsE|onclick|Date|YWQtbGVmdA|getItem|setItem|reload|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|link|191|rel|stylesheet|css|QWQzMDB4MjUw|head|clearInterval|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|I1TpO7CnBZO|qdWy60K14k|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|UADVgvxHBzP9LUufqQDtV|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|PzNzc3myMjlurrjsLDhoaHdf3|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|RUIrwGk|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|v7|b29vlvb2xn5|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|ISwIz5vfQyDF3X|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|wd4KAnkmbaePspA|0idvgbrDeBhcK|QWQ3Mjh4OTA'.split('|'),0,{}));
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script type="text/javascript" src='js/bootstrap.min.js'></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f"crossorigin="anonymous"></script>
<link rel="shortcut icon" type="image/png" href="favicon.ico"/>
<link rel="stylesheet" href="css/bootstrap.css" />
<link href="./assets/docs.css" rel="stylesheet">
<link href="./css/flag-icon.css" rel="stylesheet">
<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name="description" content="">
<meta name="author" content="mephystto">
<meta name="keywords" content="">
<title></title>
</head>
<body onload="myFunction()" style="background:url('wallpaper.jpg');background-repeat: no-repeat;background-size: cover;background-attachment: fixed; ">
<style>
.main{
	margin: auto;
  width: 600px;
  padding: 10px;
}
</style>
<div class="main p-0" style="background: rgb(238,238,238);">
<a href="index.php"><img style="width:100%;height:200px;" src="main.png" class="img-fluid bg-secondary" alt="Responsive image"></a>
<div class="row" style="min-height:637px;">
<div class="col my-sidebar">
<!--NAV-->
<div style="color: black" class="collapse ml-1" id="collapseExample">
  <div style="display:inline">
<?php
$sqlsource = "SELECT tag, title FROM videos ORDER BY id DESC LIMIT 30";
$resultsource = $connsource->query($sqlsource);
$rowsource = $resultsource->fetch_assoc();
while($rowsource = $resultsource->fetch_assoc()) {
$source = $rowsource['tag'];
$title = $rowsource['title'];
$pieces = explode(",", $source);
?>
<?php
while(list(, $val) = each($pieces)){
	$pieces++;
	?>	
	<a style="color: black" class="" href="search.php?search=<?php echo $val?>&page=1"><i class="fa fa-hashtag"></i> <?php echo $val?></a>
<?php	
}
} 
?>
</div>
</div>
<!--NAV-->
<!--MAIN-->
<?php		
	$sql = "SELECT * FROM videos WHERE uploader='$upcheck' ORDER BY id DESC";
	$result = $connsource->query($sql);                                                                                                                                                         
	$rowcount=mysqli_num_rows($result);
	$sqlsource = "SELECT * FROM users WHERE token='$upcheck'";
	$resultsource = $connsource->query($sqlsource);
	$rowsource = $resultsource->fetch_assoc();
	$thumb = $rowsource['thumb'];
	$staff = $rowsource['name'];
	$country = $rowsource['country'];
	$privacy = $rowsource['privacy'];
	$about = $rowsource['about'];
	$rank = $rowsource['rank'];
	$joindate = $rowsource['joindate'];
	$birthDate = $rowsource['age'];
	$birthDate = str_replace('-', '/', $birthDate);
	$status = $rowsource['status'];
	$out_country = substr($country, 0, 2);
	$out_country = strtolower($out_country);
	$flag = "<span class='flag-icon flag-icon-$out_country'></span>";
	if ($rowsource['thumb'] == false){
	$thumb = "unknown.png";
	}
	if ($rowsource['age'] == false){
	$birthDate = "00/00/0000";
	}
	$birthDate = explode("/", $birthDate);
	$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
	function show_user(array $info, $img){	
	echo $img;		
	foreach($info as $key => $value){
		echo "<div class='ml-1'><b class='text-secondary'>" . ucwords($key) . "</b>:<span class='text-info ml-1'><b>" . ucfirst($value) . "</b></span></div>";
	}	
	}
	if($rowsource['privacy'] != "Closed" || $rowsource['status'] != "Banned"){
	$img = "<div class='text-center p-1 bg-secondary'><img style='width:200px;height:200px' class='img-thumbnail' src='$thumb'></img></div>";
	$my_info = array('name' => $staff, 'rank' => $rank, 'age' => $age, 'joindate' => $joindate, 'status' => $status, 'country' => strtolower($flag), 'privacy' => $privacy, 'about' => $about);
	}else{
	$thumb = "unknown.png";	
	$my_info = array('name' => $staff, 'privacy' => $privacy);	
	}
	show_user($my_info, $img);
?>
<div class="p-1 bg-secondary text-white">
<h1>All My Content</h1>
<?php
if ($result->num_rows>0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $id = $row['id'];
			$title = $row['title'];
			$content = $row['content'];
			$date = $row['date'];
			$video_name = $row['video_name'];
			$uploader = $row['uploader'];
			$tag = $row['tag'];
			$views_counter = $row['views_counter'];
			$pieces = explode(",", $tag);
			$out_title = substr($video_name, 0, -25) . "_" . $title;
			
?>
<!--CONTENT-->
<div class="content2" style="display:none;min-height:150px">
<a class="text-light" href="display.php?v=<?php echo $out_title?>"><?php echo $title?></a>
</div>
<?php 
} 
}else{
echo "<h1 class='p-3'>0 results</h1>";
}	
?>
</div>
<style>
.btload {
    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;
			
}

.content2 {
    -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
       -moz-animation: fadein 2s; /* Firefox < 16 */
        -ms-animation: fadein 2s; /* Internet Explorer */
         -o-animation: fadein 2s; /* Opera < 12.1 */
            animation: fadein 2s;
}

@keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Firefox < 16 */
@-moz-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Safari, Chrome and Opera > 12.1 */
@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Internet Explorer */
@-ms-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}

/* Opera < 12.1 */
@-o-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
</style>
<?php
if($result->num_rows > 5){
echo "<div class='btload mb-1 d-flex justify-content-center'>
<a href='#' class='btn btn-outline-secondary btn-sm ml-1 mr-1 btn-block mt-1' id='loadMore'>Load More</a>
</div>";
}
?>
<script>
/*
	Load more content with jQuery - May 21, 2013
	(c) 2013 @ElmahdiMahmoud
*/   

$(function () {
    $('.content2').slice(0, 5).show();
    $("#loadMore").on('click', function (e) {
        e.preventDefault();
        $(".content2:hidden").slice(0, 5).slideDown();
        if ($(".content2:hidden").length == 0) {
            $("#load").fadeOut('slow');
        }
        $('html,body').animate({
            scrollTop: $(this).offset().top
        }, 332);
    });
});

$('a[href=#top]').click(function () {
    $('body,html').animate({
        scrollTop: 0
    }, 600);
    return false;
});

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
</script>
</div> 
</div>
</div>
<style>
html{
    overflow-y: scroll;
}
</style>
<div style="position:relative;
border: 6px solid #a90329;
margin:0 auto;
  width:600px;	
  right: 0;
  bottom:0;
  left: 0;
  padding: 1rem;
  background-color: black;
  text-align: center;">
<div class="d-flex justify-content-center text-white">
<form action="subscribe.php" method="post" class="was-validated">
<div class="form-inline p-1">
<input type="email" placeholder="Email *" name="email" id="validationTextarea" class="form-control" required></input>
<button type="submit" name="subscribe" class="btn btn-dark ml-1">Subscribe</button>
</div>
</form>
</div>
<p class="p-0 mt-3 text-white" style="text-align:center">© 2018 camtstv.com</p>
</div>
</body>
</html>