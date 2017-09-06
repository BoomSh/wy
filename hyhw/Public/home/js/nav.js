var iSpeed=0;
			//弹性运动 有小误差  因为小数 所以用变量来存
			var left =0;
			function startMove(obj,iTarage){
				clearInterval(obj.timer);
				obj.timer=setInterval(function(){
					iSpeed += (iTarage-obj.offsetLeft)/5;
					iSpeed *=0.7;
					
					left +=iSpeed;
//					绝对值 Math.abs() 弹性运动停止条件 距离足够近 并且速度足够小
					if(Math.abs(iSpeed)<1 && Math.abs(left-iTarage)<1){
						clearInterval(obj.timer);
						obj.style.left = iTarage +'px'
					}else{
						obj.style.left = left +'px';
					}

	//				测试是否到达目标点
					document.title = obj.offsetLeft +' | ' + iTarage;
				},30)
			}