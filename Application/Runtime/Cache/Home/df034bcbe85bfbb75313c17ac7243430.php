<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
		<title></title>
		<style> 
			.title{ 
				margin-left: -8px;
				position: fixed;
				top: 0;
				width: 100%;
				height: 50px; 
				background-color: white;
				line-height: 50px;
				font-size: 20px;
				float: left;
				z-index: 1000;
				max-width: 1200px; 
				text-align: center;
			} 
			.foot{
				margin-left: -8px;
				position: fixed;
				width: 100%;
				background-color: whitesmoke; 
				bottom: 0px;
				height: 70px;
				z-index: 1000;
				max-width: 1200px;
			}
			.foot .zj{
				float: left; 
				line-height: 70px;
				font-size: 20px;
				margin-left: 30px;
			}
			.foot input{
				margin-top: 14px;
				margin-right:30px; 
				float: right;
				width: 100px;
				height: 40px;
				background-color: orange;  
				border-radius: 10px 10px 10px 10px;
				border: 1px solid white;
				font-size: 18px; 
				color: white;
			}
			.main{  
				margin-top: 80px; 
				margin-left: 15px;
				max-width: 1200px;
				height: 900px;  
			} 
			.ti1{
				position: absolute;
				left: 10px;
				top: 8px; 
				float: left; 
			}
			.ti2{
				float: left;
				position: absolute;
				top: 8px;
				right: 20px; 
			}   
			.tb{
				margin: 0 auto;
				position: absolute;
				width: 90%;
				height: 800px;
				max-width: 1200px;
				margin-bottom: 100px;
			}  
			.lie{ 
				margin: 0 auto;  
				margin-top: 180px; 
				margin-bottom: 150px;
			} 
			.lie td{
				width: 40%;
				height: 30px;border-bottom: 1px solid lightgray;
			}  
			.yes{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes2{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes3{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes4{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes5{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes6{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes7{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes8{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes9{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes10{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes11{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes12{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes13{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes14{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes15{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes16{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yes17{
				-webkit-filter:grayscale(0); 
				width: 10%;
				vertical-align: middle;
				float: right;
				margin-right: 15px;
			}
			.yess{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess2{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess3{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess4{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess5{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess6{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess7{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess8{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess9{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess10{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess11{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess12{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess13{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess14{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess15{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess16{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			.yess17{
				-webkit-filter:grayscale(1); 
				width: 10%;
				vertical-align: middle;
				float: right;
				opacity: 0.4;
				margin-right: 15px;
			}
			
			.c1{
				width: 80%; 
				position: absolute; 
				left: 10%; 
				max-width: 1000px;
				z-index: -111;
			}
			.c2{
				width: 72.5%;
				-webkit-filter:grayscale(0);  
				margin-top: -0.4%;
				margin-left: 14%;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c22{
				width: 72.5%;
				-webkit-filter:grayscale(1);  
				margin-top: -0.4%;
				margin-left: 14%;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c3{
				width: 36%;
				-webkit-filter:grayscale(0); 
				margin-top: -16%;
				margin-left: 32%;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c33{
				width: 36%;
				-webkit-filter:grayscale(1); 
				margin-top: -16%;
				margin-left: 32%;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c4{
				width: 12%;
				-webkit-filter:grayscale(0); 
				margin-top: -25.5%;
				margin-left: 17%;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c44{
				width: 12%;
				-webkit-filter:grayscale(1); 
				margin-top: -25.5%;
				display: block;
				margin-left: 17%;
				z-index: 111;
				max-width: 1000px;
			}
			.c5{
				width: 12%;
				-webkit-filter:grayscale(0); 
				margin-top: -26.5%;
				margin-left: 71%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c55{
				width: 12%;
				-webkit-filter:grayscale(1); 
				margin-top: -26.5%;
				margin-left: 71%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c6{
				width: 8.5%;
				-webkit-filter:grayscale(0); 
				margin-top: -2%;
				margin-left: 9%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c66{
				width: 8.5%;
				-webkit-filter:grayscale(1); 
				margin-top: -2%;
				margin-left: 9%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c7{
				width: 8.6%;
				-webkit-filter:grayscale(0); 
				margin-top: -39%;
				margin-left: 83%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c77{
				width: 8.6%;
				-webkit-filter:grayscale(1); 
				margin-top: -39%;
				margin-left: 83%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c8{
				width: 7.5%;
				-webkit-filter:grayscale(0); 
				margin-top: -37.5%;
				margin-left: 29%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c88{
				width: 7.5%;
				-webkit-filter:grayscale(1); 
				margin-top: -37.5%;
				margin-left: 29%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c9{
				width: 7.5%;
				-webkit-filter:grayscale(0); 
				margin-top: -6.5%;
				margin-left: 64%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c99{
				width: 7.5%;
				-webkit-filter:grayscale(1); 
				margin-top: -6.5%;
				margin-left: 64%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c110{
				width: 13.1%;
				-webkit-filter:grayscale(0); 
				margin-top: -6.5%;
				margin-left: 16.2%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c1100{
				width: 13.1%;
				-webkit-filter:grayscale(1); 
				margin-top: -6.5%;
				margin-left: 16.2%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c111{
				width: 13.2%;
				-webkit-filter:grayscale(0); 
				margin-top: -21.5%;
				margin-left: 71%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c1111{
				width: 13.2%;
				-webkit-filter:grayscale(1); 
				margin-top: -21.5%;
				margin-left: 71%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c112{
				width: 22%;
				-webkit-filter:grayscale(0); 
				margin-top: -11%;
				margin-left: 38.8%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c1122{
				width: 22%;
				-webkit-filter:grayscale(1); 
				margin-top: -11%;
				margin-left: 38.8%; 
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c113{
				width: 13.5%;
				-webkit-filter:grayscale(0); 
				margin-top: -20%;
				margin-left: 16.2%; 
				z-index: 222;
				display: block;
				max-width: 1000px;
			}
			.c1133{
				width: 13.5%;
				-webkit-filter:grayscale(1); 
				margin-top: -20%;
				margin-left: 16.2%; 
				z-index: 222;
				display: block;
				max-width: 1000px;
			}
			.c114{
				width: 13.8%;
				-webkit-filter:grayscale(0); 
				margin-top: -19%;
				margin-left: 70.2%; 
				z-index: 115;
				display: block;
				max-width: 1000px;
			}
			.c1144{
				width: 13.8%;
				-webkit-filter:grayscale(1); 
				margin-top: -19%;
				margin-left: 70.2%; 
				z-index: 115;
				display: block;
				max-width: 1000px;
			}
			.c115{
				width: 25%;
				-webkit-filter:grayscale(0); 
				margin-top: 12.7%;
				margin-left: 37.5%; 
				position: absolute;
				z-index: 222;
				display: block;
				max-width: 1000px;
			}
			.c1155{
				width: 25%;
				-webkit-filter:grayscale(1); 
				margin-top: 12.7%;
				margin-left: 37.5%; 
				position: absolute;
				z-index: 222;
				display: block;
				max-width: 1000px;
			}
			.c116{
				width: 14%;
				-webkit-filter:grayscale(0); 
				margin-top: -6%;
				margin-left: 17.5%; 
				position: absolute;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c1166{
				width: 14%;
				-webkit-filter:grayscale(1); 
				margin-top: -6%;
				margin-left: 17.5%; 
				position: absolute;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c117{
				width: 14%;
				-webkit-filter:grayscale(0); 
				margin-top: -5%;
				margin-left: 68.5%; 
				position: absolute;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c1177{
				width: 14%;
				-webkit-filter:grayscale(1); 
				margin-top: -5%;
				margin-left: 68.5%; 
				position: absolute;
				z-index: 111;
				display: block;
				max-width: 1000px;
			}
			.c118{
				width: 69.5%;
				-webkit-filter:grayscale(0); 
				margin-top: 7%;
				margin-left: 15.5%;  
				display: block;
				max-width: 1000px;
				position: absolute;
				z-index: 100;
			}
			.c1188{
				width: 69.5%;
				-webkit-filter:grayscale(1); 
				margin-top: 7%;
				margin-left: 15.5%;  
				display: block;
				max-width: 1000px;
				position: absolute;
				z-index: 10;
			}
			
		</style>
		<script>
			function f1(){
				fun1();
				fys1();

			}
			function f2(){
				fun2();
				fys2();
			}
			function f3(){
				fun3();
				fys3();
			}
			function f4(){
				fun4();
				fys4();
			}
			function f5(){
				fun5();
				fys5();
			}
			function f6(){
				fun6();
				fys6();
			}
			function f7(){
				fun7();
				fys7();
			}
			function f8(){
				fun8();
				fys8();
			}
			function f9(){
				fun9();
				fys9();
			}
			function f10(){
				fun10();
				fys10();
			}
			function f11(){
				fun11();
				fys11();
			}
			function f12(){
				fun12();
				fys12();
			}
			function f13(){
				fun13();
				fys13();
			}
			function f14(){
				fun14();
				fys14();
			}
			function f15(){
				fun15();
				fys15();
			}
			function f16(){
				fun16();
				fys16();
			}
			function f17(){
				fun17();
				fys17();
			}
			function fys1(){
				var c=document.getElementById('yess').className; 
				if(c=="yess"){
					document.getElementById('yess').className="yes";
					showpage(1);
				}
				else{
					document.getElementById('yess').className="yess";
					showpagedown(1)
				}
			}function fys2(){
				var c=document.getElementById('yess2').className; 
				if(c=="yess2"){
					document.getElementById('yess2').className="yes2";
					showpage(2);
				}
				else{
					document.getElementById('yess2').className="yess2";
					showpagedown(2)
				}
			}
			function fys3(){
				var c=document.getElementById('yess3').className; 
				if(c=="yess3"){
					document.getElementById('yess3').className="yes3";
					showpage(3);
				}
				else{
					document.getElementById('yess3').className="yess3";
					showpagedown(3)
				}
			}
			function fys4(){
				var c=document.getElementById('yess4').className; 
				if(c=="yess4"){
					document.getElementById('yess4').className="yes4";
					showpage(4);
				}
				else{
					document.getElementById('yess4').className="yess4";
					showpagedown(4)
				}
			}
			function fys5(){
				var c=document.getElementById('yess5').className; 
				if(c=="yess5"){
					document.getElementById('yess5').className="yes5";
					showpage(5);
				}
				else{
					document.getElementById('yess5').className="yess5";
					showpagedown(5)
				}
			}
			function fys6(){
				var c=document.getElementById('yess6').className; 
				if(c=="yess6"){
					document.getElementById('yess6').className="yes6";
					showpage(6);
				}
				else{
					document.getElementById('yess6').className="yess6";
					showpagedown(6)
				}
			}
			function fys7(){
				var c=document.getElementById('yess7').className; 
				if(c=="yess7"){
					document.getElementById('yess7').className="yes7";
					showpage(7);
				}
				else{
					document.getElementById('yess7').className="yess7";
					showpagedown(7)
				}
			}
			function fys8(){
				var c=document.getElementById('yess8').className; 
				if(c=="yess8"){
					document.getElementById('yess8').className="yes8";
					showpage(8);
				}
				else{
					document.getElementById('yess8').className="yess8";
					showpagedown(8)
				}
			}
			function fys9(){
				var c=document.getElementById('yess9').className; 
				if(c=="yess9"){
					document.getElementById('yess9').className="yes9";
					showpage(9);
				}
				else{
					document.getElementById('yess9').className="yess9";
					showpagedown(9)
				}
			}
			function fys10(){
				var c=document.getElementById('yess10').className; 
				if(c=="yess10"){
					document.getElementById('yess10').className="yes10";
					showpage(10);
				}
				else{
					document.getElementById('yess10').className="yess10";
					showpagedown(10)
				}
			}
			function fys11(){
				var c=document.getElementById('yess11').className; 
				if(c=="yess11"){
					document.getElementById('yess11').className="yes11";
					showpage(11);
				}
				else{
					document.getElementById('yess11').className="yess11";
					showpagedown(11)
				}
			}
			function fys12(){
				var c=document.getElementById('yess12').className; 
				if(c=="yess12"){
					document.getElementById('yess12').className="yes12";
					showpage(12);
				}
				else{
					document.getElementById('yess12').className="yess12";
					showpagedown(12)
				}
			}
			function fys13(){
				var c=document.getElementById('yess13').className; 
				if(c=="yess13"){
					document.getElementById('yess13').className="yes13";
					showpage(13);
				}
				else{
					document.getElementById('yess13').className="yess13";
					showpagedown(13)
				}
			}
			function fys14(){
				var c=document.getElementById('yess14').className; 
				if(c=="yess14"){
					document.getElementById('yess14').className="yes14";
					showpage(14);
				}
				else{
					document.getElementById('yess14').className="yess14";
					showpagedown(14)
				}
			}
			function fys15(){
				var c=document.getElementById('yess15').className; 
				if(c=="yess15"){
					document.getElementById('yess15').className="yes15";
					showpage(15);
				}
				else{
					document.getElementById('yess15').className="yess15";
					showpagedown(15)
				}
			}
			function fys16(){
				var c=document.getElementById('yess16').className; 
				if(c=="yess16"){
					document.getElementById('yess16').className="yes16";
					showpage(16);
				}
				else{
					document.getElementById('yess16').className="yess16";
					showpagedown(16)
				}
			}
			function fys17(){
				var c=document.getElementById('yess17').className; 
				if(c=="yess17"){
					document.getElementById('yess17').className="yes17";
					showpage(17);
				}
				else{
					document.getElementById('yess17').className="yess17";
					showpagedown(17)
				}
			}
			function fun1(){
				var c=document.getElementById('c22').className; 
				if(c=="c22"){
					document.getElementById('c22').className="c2";
				}
				else{
					document.getElementById('c22').className="c22";

				}
				
			}
			function fun2(){
				var c=document.getElementById('c33').className;
				if(c=="c33"){
					document.getElementById('c33').className="c3";
				}
				else{
					document.getElementById('c33').className="c33";

				}
			}
			function fun3(){
				var c=document.getElementById('c44').className;
				if(c=="c44"){
					document.getElementById('c44').className="c4";
				}
				else{
					document.getElementById('c44').className="c44";
				}
			}
			function fun4(){
				var c=document.getElementById('c55').className;
				if(c=="c55"){
					document.getElementById('c55').className="c5";
				}
				else{
					document.getElementById('c55').className="c55";
				}
			}
			function fun5(){
				var c=document.getElementById('c66').className;
				if(c=="c66"){
					document.getElementById('c66').className="c6";
				}
				else{
					document.getElementById('c66').className="c66";
				}
			}
			function fun6(){
				var c=document.getElementById('c77').className;
				if(c=="c77"){
					document.getElementById('c77').className="c7";
				}
				else{
					document.getElementById('c77').className="c77";
				}
			}
			function fun7(){
				var c=document.getElementById('c88').className;
				if(c=="c88"){
					document.getElementById('c88').className="c8";
				}
				else{
					document.getElementById('c88').className="c88";
				}
			}
			function fun8(){
				var c=document.getElementById('c99').className;
				if(c=="c99"){
					document.getElementById('c99').className="c9";
				}
				else{
					document.getElementById('c99').className="c99";
				}
			}
			function fun9(){
				var c=document.getElementById('c1100').className;
				if(c=="c1100"){
					document.getElementById('c1100').className="c110";
				}
				else{
					document.getElementById('c1100').className="c1100";
				}
			}
			function fun10(){
				var c=document.getElementById('c1111').className;
				if(c=="c1111"){
					document.getElementById('c1111').className="c111";
				}
				else{
					document.getElementById('c1111').className="c1111";
				}
			}
			function fun11(){
				var c=document.getElementById('c1122').className;
				if(c=="c1122"){
					document.getElementById('c1122').className="c112";
				}
				else{
					document.getElementById('c1122').className="c1122";
				}
			}
			function fun12(){
				var c=document.getElementById('c1133').className;
				if(c=="c1133"){
					document.getElementById('c1133').className="c113";
				}
				else{
					document.getElementById('c1133').className="c1133";
				}
			}
			function fun13(){
				var c=document.getElementById('c1144').className;
				if(c=="c1144"){
					document.getElementById('c1144').className="c114";
				}
				else{
					document.getElementById('c1144').className="c1144";
				}
			}
			function fun14(){
				var c=document.getElementById('c1155').className;
				if(c=="c1155"){
					document.getElementById('c1155').className="c115";
				}
				else{
					document.getElementById('c1155').className="c1155";
				}
			}
			function fun15(){
				var c=document.getElementById('c1166').className;
				if(c=="c1166"){
					document.getElementById('c1166').className="c116";
				}
				else{
					document.getElementById('c1166').className="c1166";
				}
			}
			function fun16(){
				var c=document.getElementById('c1177').className;
				if(c=="c1177"){
					document.getElementById('c1177').className="c117";
				}
				else{
					document.getElementById('c1177').className="c1177";
				}
			}
			function fun17(){
				var c=document.getElementById('c1188').className;
				if(c=="c1188"){
					document.getElementById('c1188').className="c118";
				}
				else{
					document.getElementById('c1188').className="c1188";
				}
			}
			function showpage(num){
			var id=	document.getElementById('id').value;
				//创建ajax对象
				var xhr=new XMLHttpRequest();
				//接收请求
				xhr.onreadystatechange=function(){
					if(xhr.readyState==4){
//               alert(xhr.responseText);
						document.getElementById('price').innerHTML= xhr.responseText;
					}}
				//创建HTTP请求
				xhr.open('get','/web/haval/index.php/Home/Index/sum?num='+num+'&id='+id);
				//发送请求
				xhr.send(null); }
			function showpagedown(num){
			var id=	document.getElementById('id').value;
				//创建ajax对象
				var xhr=new XMLHttpRequest();
				//接收请求
				xhr.onreadystatechange=function(){
					if(xhr.readyState==4){
//               alert(xhr.responseText);
						document.getElementById('price').innerHTML= xhr.responseText;
					}}
				//创建HTTP请求
				xhr.open('get','/web/haval/index.php/Home/Index/sumdown?num='+num+'&id='+id);
				//发送请求
				xhr.send(null); }

		</script>
	</head>
	<body>

	<span id="che"></span>
		<div class="title">
			 选择受损部位 
			<div class="ti1">
				<a href="/web/haval/index.php/Home/Index/code.html"><img src="/web/haval/Public/Home/img/home.png" /></a>
			</div>
		
		</div>
			
	<input type="hidden" id="id" value="<?php echo ($id); ?>">
		<div class="main">  
		<div style="color:red;font-size:14px; text-align:left; margin-top:-20px;">轻度扳金不收费，其他扳金到店后评估。</div>
			<div class="tb"> 
			
				<img src="/web/haval/Public/Home/img/car/car_gray.jpg" width="80%" class="c1";/>
				<img src="/web/haval/Public/Home/img/car/1.png" class="c22" id="c22" onclick="f1()"/>
				<img src="/web/haval/Public/Home/img/car/2.png" class="c33" id="c33" onclick="f2()"/>
				<img src="/web/haval/Public/Home/img/car/3.png" class="c44" id="c44" onclick="f3()"/>
				<img src="/web/haval/Public/Home/img/car/4.png" class="c55" id="c55" onclick="f4()"/>
				<img src="/web/haval/Public/Home/img/car/5.png" class="c66" id="c66" onclick="f5()"/>
				<img src="/web/haval/Public/Home/img/car/6.png" class="c77" id="c77" onclick="f6()"/>
				<img src="/web/haval/Public/Home/img/car/7.png" class="c88" id="c88" onclick="f7()"/>
				<img src="/web/haval/Public/Home/img/car/8.png" class="c99" id="c99" onclick="f8()"/>
				<img src="/web/haval/Public/Home/img/car/9.png" class="c1100" id="c1100" onclick="f9()"/>
				<img src="/web/haval/Public/Home/img/car/10.png" class="c1111" id="c1111" onclick="f10()"/>
				<img src="/web/haval/Public/Home/img/car/11.png" class="c1122" id="c1122" onclick="f11()" />
				<img src="/web/haval/Public/Home/img/car/12.png" class="c1133" id="c1133" onclick="f12()"/>
				<img src="/web/haval/Public/Home/img/car/13.png" class="c1144" id="c1144" onclick="f13()"/>
				<img src="/web/haval/Public/Home/img/car/14.png" class="c1155" id="c1155" onclick="f14()"/>
				<img src="/web/haval/Public/Home/img/car/15.png" class="c1166" id="c1166" onclick="f15()"/>
				<img src="/web/haval/Public/Home/img/car/16.png" class="c1177" id="c1177" onclick="f16()"/>
				<img src="/web/haval/Public/Home/img/car/17.png" class="c1188" id="c1188" onclick="f17()"/>
		 	 
		 		<table class="lie">
		 			<tr>
		 				<td onclick="f1()">1、前保险杠<img src="/web/haval/Public/Home/img/car/rg.png"class="yess" id="yess"></td>
		 				<td onclick="f2()">2、发动机舱盖<img src="/web/haval/Public/Home/img/car/rg.png"class="yess2" id="yess2" ></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f3()">3、左前翼子板<img src="/web/haval/Public/Home/img/car/rg.png"class="yess3" id="yess3"></td>
		 				<td onclick="f4()">4、右前翼子板<img src="/web/haval/Public/Home/img/car/rg.png"class="yess4" id="yess4"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f5()">5、左底大边<img src="/web/haval/Public/Home/img/car/rg.png"class="yess5" id="yess5"></td>
		 				<td onclick="f6()">6、右底大边<img src="/web/haval/Public/Home/img/car/rg.png"class="yess6" id="yess6"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f7()">7、左反光镜<img src="/web/haval/Public/Home/img/car/rg.png"class="yess7" id="yess7"></td>
		 				<td onclick="f8()">8、右反光镜<img src="/web/haval/Public/Home/img/car/rg.png"class="yess8" id="yess8"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f9()">9、左前门<img src="/web/haval/Public/Home/img/car/rg.png"class="yess9" id="yess9"></td>
		 				<td onclick="f10()">10、右前门<img src="/web/haval/Public/Home/img/car/rg.png"class="yess10" id="yess10"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f11()">11、车顶<img src="/web/haval/Public/Home/img/car/rg.png"class="yess11" id="yess11"></td>
		 				<td onclick="f12()">12、左后门<img src="/web/haval/Public/Home/img/car/rg.png"class="yess12" id="yess12"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f13()">13、右后门<img src="/web/haval/Public/Home/img/car/rg.png"class="yess13" id="yess13"></td>
		 				<td onclick="f14()">14、行李箱盖<img src="/web/haval/Public/Home/img/car/rg.png"class="yess14" id="yess14"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f15()">15、左后翼子板<img src="/web/haval/Public/Home/img/car/rg.png"class="yess15" id="yess15"></td>
		 				<td onclick="f16()">16、右后翼子板<img src="/web/haval/Public/Home/img/car/rg.png"class="yess16" id="yess16"></td>
		 			</tr>
		 			<tr>
		 				<td onclick="f17()">17、后保险杠<img src="/web/haval/Public/Home/img/car/rg.png"class="yess17" id="yess17"></td>
		 				 
		 			</tr>
		 		</table> 
		 	</div>
		</div>
		<div class="foot">
			<div class="zj">总价:&nbsp;<label id="price">0</label>元</div>
			<div><input type="submit" id="next" value="下一步" onclick="location.href='yuyue3?id=<?php echo ($id); ?>'"></div>
		</div>
	</body>
</html>