/*
	作者：张津瑞
	时间：2018-04-21
	描述：(c) Copyright 2018 睿腾网络. All Rights Reserved. 
*/
var a=document.getElementById('single1')
var b=document.getElementById('single2')
document.getElementById('click1').onmouseover=show();
document.getElementById('click1').onmouseover=hide();

document.getElementById('click2').onmouseout=show();
document.getElementById('click2').onmouseout=hide();
 window.onload=hide;
 window.onload=show;
function show(){
	a.style.display = 'block';

}

function hide(){
	a.style.display = 'none';

}

function show(){
	b.style.display = 'block';

}

function hide(){
	b.style.display = 'none';

}












