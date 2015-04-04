/**
 * Created by lambp on 15-4-2.
 */
window.onload=function(){
    var menu=document.getElementById('menu');

    var locLi=menu.getElementsByTagName('li');
    var locDiv=menu.getElementsByTagName('div');
    for(var i=0;i<locLi.length;i++){
        locLi[i].onmouseover=function(){
            displayDiv(this,'over');
            //alert(this);
        }
        locLi[i].onmouseout=function(){
            displayDiv(this,'out');
        }
    }
    function displayDiv(thisLi,enType){
        for(j=0;j<locDiv.length;j++){
            if(locDiv[j].parentNode==thisLi && enType=='over' && locDiv[j].className=='hidden'){
                locDiv[j].style.display='block';
            }else if(locDiv[j].className=='hidden'){
                locDiv[j].style.display='none';
            }else if(locDiv[j].parentNode==thisLi && enType=='over'){
                locDiv[j].style.backgroundImage="url(images/common/menu_bg2.png)";
            }else if(locDiv[j].parentNode==thisLi && enType=='out'){
                locDiv[j].style.backgroundImage="url(images/common/menu_bg.png)";
            }
        }
    }
}