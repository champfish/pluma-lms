var rMinusCount=0;
var bMinusCount=0;
var gMinusCount=0;
var r=150;
var b=200;
var g=210;
setInterval(function(){ 
                color();
 }, 100);

           function color()
           {
               
               if(rMinusCount>0)
               {
                   r-=1;
                   rMinusCount-=1;
               }else
               {
                   r+=1;
                   if(r>175)
                   {
                       rMinusCount=50;
                   }
               }
               
               if(gMinusCount>0)
               {
                   g-=1;
                   gMinusCount-=1;
               }else
               {
                   g+=2;
                   if(g>250)
                   {
                       gMinusCount=75;
                   }
               }
               
               if(bMinusCount>0)
               {
                   b-=3;
                   bMinusCount-=1;
               }else
               {
                   b+=1;
                   if(b>225)
                   {
                       bMinusCount=50;
                   }
               }
               
               document.body.style.backgroundColor = 'rgb(' + r + ',' + b + ',' + g + ')';

           }
