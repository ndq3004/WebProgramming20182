function decodeHTMLEntities(text) {
    var entities = [
        ['apos', '\''],
        ['amp', '&'],
        ['lt', '<'],
        ['gt', '>']
    ];
    for (var i = 0, max = entities.length; i < max; ++i) 
        text = text.replace(new RegExp('&'+entities[i][0]+';', 'g'), entities[i][1]);
    return text;
}
var load_recordFile = 0;
function returnSelect(content,options,t){
	var _select ='';
	var len = 0;
	
	for(var i=0;i<options.length;i++){
		len =0;
		for(var j= 0;j<options[i].length;j++){
			if(options[i][j].length>len){
				len = options[i][j].length;
			}
		}
		if(len < 12){
			len = 12
		}
		_select ='<span class="basic_select_box basic_elm" style="width: '+(len*9)+'px" tpl="select_box" inx = "'+(t+i)+'"><span class="span-selected" value=""><span>Select option</span><span class="fa icon_select">&#xf0da;</span></span><span class="span-option">';
		for(var j= 0;j<options[i].length;j++){
			_select +='<span>'+options[i][j]+'</span>';
		}
		_select += '</span></span>';
		content = content.replace('|',_select);
	}	
	return content;
}
vid = null;
var video_w=920;
var video_h=520;
var timeOutVd = null;
var id_video = 0,part_video_click = 0;
function renderVideo(videoID,flvvideolink, mp4videolink, imagelink){
    var x = document.getElementById(videoID);   
    var video_html = '';    
	video_html='\
	<video controlsList="nodownload" style="cursor:pointer" width="100%" id="player' + id_video + '" poster="' + imagelink + '" controls="controls" preload="none">\
		<source type="video/mp4" src="' + mp4videolink + '" />\
		<!-- Flash: -->\
		<object width="100%" type="application/x-shockwave-flash" data="player.swf">\
			<param name="movie" value="/jwplayer/player.swf">\
			<param name="flashvars" value="controlbar=over&amp;image='+imagelink+'&amp;file='+flvvideolink+'">\
			<img src="'+imagelink+'" alt="học tiếng Anh trực tuyến tiện ích, hiệu quả với tiếng anh 123">\
		</object>\
	</video>';
	video_html = video_html + '<div class="img_play_video"><img src="'+imagelink+'" width="100%" class="img_bg"/><div class="img_icon"><img  width="60px" height="60px" src="/file/learn/child/dungchung/lib_new_en/images/videoplay.png"/></div></div>';
    x.innerHTML = video_html;  
	vid = document.getElementById('player' + id_video);
	vid.onseeking = function(){
		if(!is_vip && vid.currentTime > 90 && part_video_click == 0){
			vid.pause();
			vid.click();
		}
	}
	vid.addEventListener('timeupdate',function(){
		if(!is_vip && vid.currentTime> 90  && part_video_click == 0){
			vid.pause();
			vid.click();
		}
	},false);
	$('video').unbind('click').bind('click',function(){		
		var idv=$(this).attr('id');
		console.log(idv);
		var vid= document.getElementById(idv); 
		if(vid.paused == false){
			vid.pause(); 
		}else{
			//vid.play();
		}
		if(vid.ended == false){
			$(this).next().html('').show();
			$(this).removeClass('video_playing');
		}
		if(!is_vip && vid.currentTime> 90){
			$(this).next().html('<div class="bg_non_vip"><a href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank"><img src="/file/common/lesson/tienganhcoban/images/nonvip.png"  width ="100%" style="max-width: 510px"/></a></div>').show();
		}
		
	});
	$('.img_play_video').unbind('click').bind('click', function(){	
		if($('.video_playing').length==1){
			var idP = $('.video_playing').attr('id');
			var vidP = document.getElementById(idP); 
			if(vidP.paused == false){
				vidP.pause(); 
			}
			$('.video_playing').removeClass('video_playing').show();
		}
		idv=$(this).prev().attr('id');
		vid= document.getElementById(idv);
		if(!is_vip && vid.currentTime > 90){
		}else{
			$(this).hide(); 
			vid.play();
			setTimeout(function(){
				$('#'+idv).addClass('video_playing');
			},1000);
		}	
		
	});
	id_video += 1;
}
function playVideoTime(t,idVideo){
	vid = document.getElementById(idVideo);
	$('#'+idVideo).next().hide();
	var time = parseInt(t);
	var _t = t*100 - time*100;
	_t += time*60;
	if(_t>90){
		part_video_click = 1;
	}else{
		part_video_click = 0;
	}
	vid.currentTime = _t;
	if(!is_vip && _t > 90){
		if(timeOutVd!= null){
			clearTimeout(timeOutVd);
			timeOutVd = null;
		}
		timeOutVd = setTimeout(function(){
			vid.pause();
			$('#'+idVideo).removeClass('video_playing').next().html('<div class="bg_non_vip"><a href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank"><img src="/file/common/lesson/tienganhcoban/images/nonvip.png" width ="100%" style="max-width: 510px"/></a></div>').show();
		},10000);
	}
	if(!$('#'+idVideo).hasClass('video_playing')){
		if($('.video_playing').length==1){
			var idP = $('.video_playing').attr('id');
			var vidP = document.getElementById(idP); 
			if(vidP.paused == false){
				vidP.pause(); 
			}
			$('.video_playing').removeClass('video_playing').next().show();
		}
		vid.play();
		setTimeout(function(){
			$('#'+idVideo).addClass('video_playing');			
		},1000);
	}else{
		vid.play();
	}
}
function changeSpeedVideo(speed,idVideo){
	vid = document.getElementById(idVideo);
	vid.playbackRate = speed;
	//vid.play();
}
var link_login ='/clogin';
var link_post ='ajax/';
var img_vip = '<center style="width: 905px; margin: 10px 36px;"><a title="" target="_blank" href="/huong-dan/4668-cach-dat-the-vip-tren-tienganh123.html"><img src ="/file/common/lesson/tienganhcoban/images/thanh-vien-vip-tieng-anh-123.jpg" width="100%"></a></center>';
if(typeof is_mobile !='undefined' || typeof is_tablet !='undefined'){
	link_login ='/login';
	link_post ='ajax/ajax/';
	img_vip ='<center><img src ="/file/common/lesson/tienganhcoban/images/thanh-vien-vip-tieng-anh-123-m.jpg" width="100%"></center>';
}
function register_app(){
	window.postMessage('register');
}
function login_app(){
	window.postMessage('login');
}
var vip_msg='<div class="non_vip_ex"><img src="/file/common/v3/images/teacher_icon.png" /><div class="non_vip_ex_text">Để làm tiếp các bài tập, bạn hãy là <br /><a title="Quyền lợi của thành vien VIP" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" style="text-decoration:underline; color:#fdfd7b" class="f-bold">thành viên VIP</a><br /> của TiếngAnh123 <br /><a href="/register"><div class="v3_bt v3_bt_dk">Đăng ký</div></a><a href="'+link_login+'"><div class="v3_bt v3_bt_login">Đăng nhập</div></a></div></div>';
var smg_vip_gram='<div class="v3_bg_icon non_vip_gr"><div class="non_vip_ex_text">Để xem toàn bộ mục này, bạn hãy là <a title="Quyền lợi của thành vien VIP" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" style="text-decoration:underline; color:#0881ec" class="f-bold">thành viên VIP</a> của TiếngAnh123</div><a href="/register"><div class="v3_bt v3_bt_dk">Đăng ký</div></a><a href="'+link_login+'"><div class="v3_bt v3_bt_login">Đăng nhập</div></a></div>';
var data_json = null;
var task = 0;
var	lesson_id =0;
var yourScore = [],number_passed= 0, number_ex = 0;
var video_link ='';
var topCurr =0;
if(typeof fromapp !='undefined' && fromapp){
	vip_msg='<div class="non_vip_ex"><img src="/file/common/v3/images/teacher_icon.png" /><div class="non_vip_ex_text">Để làm tiếp các bài tập, bạn hãy là <br /><a title="Quyền lợi của thành vien VIP" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" style="text-decoration:underline !important; color:#fdfd7b" class="f_bold">thành viên VIP</a><br /> của TiếngAnh123 <br /><div class="v3_bt v3_bt_login"  onclick="login_app()">Đăng nhập</div><div class="v3_bt v3_bt_dk"  onclick="register_app()">Đăng ký</div></div></div>';
	smg_vip_gram='<div class="v3_bg_icon non_vip_gr"><div class="non_vip_ex_text">Để xem toàn bộ mục này, bạn hãy là <br /><a title="Quyền lợi của thành vien VIP" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" style="text-decoration:underline !important; color:#0881ec" class="f_bold">thành viên VIP</a> của TiếngAnh123</div><div class="v3_bt v3_bt_login" onclick="login_app()">Đăng nhập</div><div class="v3_bt v3_bt_dk"   onclick="register_app()">Đăng ký</div></div>';
}
$(document).ready(function(){
	if(typeof is_mobile !='undefined' || typeof is_tablet !='undefined'){
		$('login-ta123').attr('href','/login');
	}
	if(typeof is_mobile !='undefined'){
		$('.bg-speed-video .txt').text('Tốc độ');
		if(!is_vip){
			$('.non-vip').html(smg_vip_gram);
			
		}
	}else{
		if(!is_vip){
			$('.non-vip').html(smg_vip_gram);
		}
	}
	number_ex = $('.ex_header').length;
	number_passed = parseInt($('#number_passed').text());
	$('.ex_header').each(function(){
		var _score= parseInt($(this).attr('passed'));
		yourScore.push(_score);
	});	
	if($('#video_show_0').length==1){
		video_link = $('#video_show_0').attr('video_link');
		renderVideo('video_show_0',video_link+'.flv',video_link+'.mp4',video_link+'.jpg');
		if(!is_vip){
			$('#video_show_0').parent().after(img_vip);
		}
	}
	if($('#video_show_1').length==1){
		video_link = $('#video_show_1').attr('video_link');
		renderVideo('video_show_1',video_link+'.flv',video_link+'.mp4',video_link+'.jpg');
		if(!is_vip){
			$('#video_show_1').parent().after(img_vip);
		}
	}
	$('#box_lecture').slideDown(800, function(){start_lesson(0);});	
	lesson_id=$('#lesson_id').text();
	lesson_id = parseInt(lesson_id);		
  	if($('#json_data').length==1 && $('#json_data').html()!=''){	  
	    var data_lesson=$("#json_data").html(); 
		data_lesson = decodeHTMLEntities(data_lesson); 
		data_json= $.parseJSON(data_lesson);
		if(typeof content_vchat !='undefined' && content_vchat){
			$.ajax({
				url:'/file/common/lesson/vchat/index.htm?v=2',			
				type:"GET",
				dataType:"html",
				tryCount : 0,
				retryLimit : 3,						
				success: function(data){			
					if($('#vchat_passed').length ==1){
						content_vchat['passed'] =1;
					}
					//content_vchat['audio'] = data_json.loc + content_vchat['audio']	;
					bs_jsmart['vchat'] = new jSmart(data);				
					var _html = bs_jsmart['vchat'].fetch(content_vchat);
					
					$('#detail_lesson').after(_html);
					
					recordVchat();
					loadScript_callback('/file/common/lesson/vchat/js/vchat.js?v=3',function(){
						$('#vchat').show();
						if(mem_id==0){
							$('#member-status').hide();
							$('#alert_txt_vchat').html('<p class="text_note"><a href="/clogin" style="color:#1363dc; border-bottom: 1px solid #aaa;">Đăng nhập</a> để tham gia luyện tập video chat.</p>');
						}
					});
					getAudioLong_new('.audio_vchat');
					if(!is_vip){
						$('#vchat').before(img_vip);
					}
				},
				error: function(xhr,textStatus) {
					if (textStatus != 'success'){
						this.tryCount++;
						if (this.tryCount <= this.retryLimit) {					
							$.ajax(this);
							return;
						}            
						return;
					}				
				}	
			});
		}
		for(var i =0; i< data_json.practice.length;i++){
			if(data_json.practice[i].template !='record'){
				_loadScript(ctrl_tpl[data_json.practice[i].template],data_json.practice[i].template);
			}
		}
	}
});
function detailEx(cmd,i){
	if(typeof kr_recorder!='undefined' && kr_recorder) stopRecording();
	$('#kr_arrecord').hide();
	task = i - 1;
	var loaded = $(cmd).attr('loaded');
	loaded = parseInt(loaded); 
	$(cmd).next('.ex_detail').slideToggle(500,function(){  
		if(loaded == 0){			
			$(this).prev().attr('loaded',1);
			lesson.init(data_json.practice[task],(task+1));     
		}          
	}); 
	if($('.ex_header.ex_show').length==1 && !$(cmd).hasClass('ex_show')){
		$('.ex_header.ex_show').removeClass('ex_show').next().hide();    
		_toPos($(cmd));     	
   }
	$(cmd).toggleClass('ex_show');
}
function loadScript_callback(url,callback){
    $.getScript(url, function( data, textStatus, jqxhr ) {
      if(jqxhr.status !=200){
        loadScript_callback(url,callback);
      }else{			
		  callback();		 
	  }
    });
 }
var alert_record =''; 
if(typeof is_mobile =='undefined' && typeof is_tablet =='undefined'){ 
	if(!load_recordFile){
		loadScript_callback('/file/common/lesson/record/record-pc.js',function(){
			var id_start ='krr_ispeak';
			var text_record ='krrt_text';		
			$('#krr_ispeak').speech_chrome({id_start:id_start,text_record:text_record}); 
			alert_record = $('#krrt_ins').text();
			load_recordFile =1;
		});
	}
}
 function random_arr(arr){   
    for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
    return arr;
}	
var UNF ="undefined";
var cpy_seg_curr=[];
// replace audio
var is_record=0;
var list_tpl={
	video:"/file/common/lesson/tienganhcoban/temp/video.htm",
	layout:"/file/common/lesson/tienganhcoban/temp/layout.htm?vs=1",
	blank_row:"/file/common/lesson/tienganhcoban/temp/blank_row.htm",		
	fill_the_blank:"/file/common/lesson/tienganhcoban/temp/fill_the_blank.htm?vs=1",		
	multiple_choice:"/file/common/lesson/tienganhcoban/temp/multiple_choice.htm",		
    mistake:"/file/common/lesson/tienganhcoban/temp/mistake.htm",
	mistake_p:"/file/common/lesson/tienganhcoban/temp/mistake_p.htm",
	mistake_blank:"/file/common/lesson/tienganhcoban/temp/mistake_blank.htm?vs=1",			
	select_box:"/file/common/lesson/tienganhcoban/temp/select_box.htm",	
	drop_blank:"/file/common/lesson/tienganhcoban/temp/drop_blank.htm?vs=2",
	check_box:"/file/common/lesson/tienganhcoban/temp/check_box.htm",	
	fill_letter:"/file/common/lesson/tienganhcoban/temp/fill_letter.htm",
	fill_letter1:"/file/common/lesson/tienganhcoban/temp/fill_letter1.htm",
	true_false:"/file/common/lesson/tienganhcoban/temp/true_false.htm?vs=1",	
	sequence:"/file/common/lesson/tienganhcoban/temp/sequence.htm",
	table:"/file/common/lesson/tienganhcoban/temp/table.htm",
	vocab:"/file/common/lesson/tienganhcoban/temp/vocab.htm?vs=1",
	vocab1:"/file/common/lesson/tienganhcoban/temp/vocab1.htm",	
	word_reorder:"/file/common/lesson/tienganhcoban/temp/word_reorder.htm",
	reorder:"/file/common/lesson/tienganhcoban/temp/reorder.htm",
	record:"/file/common/lesson/tienganhcoban/temp/record.htm"		
};
var ctrl_tpl={
	fill_the_blank:"/file/common/lesson/tienganhcoban/js/action/fill_the_blank.js",	
	blank_row:"/file/common/lesson/tienganhcoban/js/action/blank_row.js",	
	multiple_choice:"/file/common/lesson/tienganhcoban/js/action/multiple_choice.js",
	true_false:"/file/common/lesson/tienganhcoban/js/action/true_false.js",	
	mistake:"/file/common/lesson/tienganhcoban/js/action/mistake.js",		
	mistake_p:"/file/common/lesson/tienganhcoban/js/action/mistake_p.js",	
	mistake_blank:"/file/common/lesson/tienganhcoban/js/action/mistake_blank.js?vs=1",	
	select_box:"/file/common/lesson/tienganhcoban/js/action/select_box.js",
	choice_word:"/file/common/lesson/tienganhcoban/js/action/choice_word.js",	
	drop_blank:"/file/common/lesson/tienganhcoban/js/action/drop_blank.js?vs=1",
	check_box:"/file/common/lesson/tienganhcoban/js/action/check_box.js?vs=1",	
	fill_letter:"/file/common/lesson/tienganhcoban/js/action/fill_letter.js",	
	fill_letter1:"/file/common/lesson/tienganhcoban/js/action/fill_letter1.js",	
	sequence:"/file/common/lesson/tienganhcoban/js/action/sequence.js?vs=1",		
	word_reorder:"/file/common/lesson/tienganhcoban/js/action/word_reorder.js?vs=1",	
	reorder:"/file/common/lesson/tienganhcoban/js/action/reorder.js?vs=1",
	record:"/file/common/lesson/tienganhcoban/js/action/record.js"
};
if(typeof is_tablet !="undefined"){
	video_w = 920;
	video_h=520;
	list_tpl['layout']="/file/common/lesson/tienganhcoban/temp/tablet/layout.htm";
	ctrl_tpl['drop_blank']="/file/common/lesson/tienganhcoban/js/action/mobile/drop_blank.js";
}
var arr_ctrl={},arr_ctrl_curr={}; //arr_ctrl is array action of template
function _loadScript(url,tpl){
 $.getScript(url, function( data, textStatus, jqxhr ) {
      if(jqxhr.status !=200){
        loadScript(url);
      }
    });	
}
var bs_jsmart={},data_post=[],listExcuteResult={},listExcuteAnswer={},list_show_true={};
var layout_html='',str_main='',tpl='layout',data_lesson_ex=[];
var _trans=0;
var ex_curr=[0,0];
var lesson={			
	init: function(data,k){	
		if(k == 0){					
			tpl ='video';
			lesson.get_temp_curr(tpl,lesson.load_html,k);
		}else{
			data_lesson_ex[k] = data;
			data_lesson_ex[k]['score'] = 0;
			if(data_lesson_ex[k].template =='record'){
				data_lesson_ex[k]['arr_score'] = [];
				for(var i=0;i<data_lesson_ex[k].total_score;i++){
					data_lesson_ex[k]['arr_score'].push(0);
				}
			}
			lesson.load_html(k);
		}
	},
	get_temp_curr: function(tpl,func,k){
		$.ajax({
			url:list_tpl[tpl],			
			type:"GET",
			dataType:"html",
			tryCount : 0,
			retryLimit : 3,
			success: function(data){
				bs_jsmart[tpl]= new jSmart(data);
				func(k);
			},		
			error: function(xhr,textStatus) {
				if (textStatus != 'success'){
					this.tryCount++;
					if (this.tryCount <= this.retryLimit) {					
						$.ajax(this);
						return;
					}            
					return;
				}				
			}			
		});
	},
	rand_arr: function(arr){				
		for(var j, x, i = arr.length; i; j = parseInt(Math.random() * i), x = arr[--i], arr[i] = arr[j], arr[j] = x);
	return	arr;			
	},		
	load_html:function(k){		
		arr_ctrl_curr={};
		if(k >0){
			lesson.get_exercise(k,0);	
		}
	},
	get_exercise:function(k,i){
		var str='';
		if(i < data_lesson_ex[k].segment.length){
			if(i==0){
				$('#ex_detail_'+k).find('.basic_main').append('<div class="basic_segment" id="basic_segment_'+k+'_0" seg="0" style="display:block"></div>');
			}else{
				$('#ex_detail_'+k).find('.basic_main').append('<div class="basic_segment" id="basic_segment_'+k+'_'+i+'" seg="'+i+'"></div>');
			}
			if(typeof data_lesson_ex[k].template !="undefined"){
				if(!bs_jsmart[data_lesson_ex[k].template]){
					if(typeof ctrl_tpl[data_lesson_ex[k].template] !='undefined'){
						if(data_lesson_ex[k].template!='record' && !arr_ctrl[data_lesson_ex[k].template]){							
							_loadScript(ctrl_tpl[data_lesson_ex[k].template],data_lesson_ex[k].template);	
						}
						$.ajax({
							url:list_tpl[data_lesson_ex[k].template],			
							type:"GET",
							dataType:"html",
							tryCount : 0,
							retryLimit : 3,						
							success: function(data){							
								bs_jsmart[data_lesson_ex[k].template] = new jSmart(data);				
								lesson.fetchData(k,i);
							},
							error: function(xhr,textStatus) {
								if (textStatus != 'success'){
									this.tryCount++;
									if (this.tryCount <= this.retryLimit) {					
										$.ajax(this);
										return;
									}            
									return;
								}				
							}	
						});
					}else{
						alert('not found');
					}
				}else{
					lesson.fetchData(k,i);
				}
			}else{
				$('#basic_segment_'+k+'_'+i).html('not found');
			}			
		}else{
			i=i+1;	
			$('#ex_detail_'+k).find('.basic_main').append('<div class="basic_segment _box_result" id="basic_segment_'+k+'_'+i+'"  seg="'+i+'"><div class="box_result"><div class="alert_text">Bạn đã hoàn thành phần luyện tập này.</div><div class="alert_score"></div><div class="alert_percent">Tỷ lệ hoàn thành là: <span class="txt_green">90%</span>.</div><div class="space10"></div><div class="basic_box_control"><div class="bt_redo" onclick="func_redo(this,'+k+')" tpl="'+data_lesson_ex[k].template+'">Redo</div></div></div></div>');
			cpy_seg_curr[k] = $('#basic_segment_'+k+'_0').clone();	
			if(arr_ctrl[data_lesson_ex[k].template] || data_lesson_ex[k].template =='record'){
				start_lesson(k);
				$('#ex_detail_'+k).find('.basic_main').slideDown(700);			
			}else{
				if(data_lesson_ex[k].template!='record'){
					loadScript_callback(ctrl_tpl[data_lesson_ex[k].template],function(){
						start_lesson(k);
						$('#ex_detail_'+k).find('.basic_main').slideDown(700);			
					});
				}else{
					start_lesson(k);
					$('#ex_detail_'+k).find('.basic_main').slideDown(700);
				}
			}
		}
	},
	fetchData: function(k,i){
		if(data_lesson_ex[k].template =='reorder'){
			data_lesson_ex[k].segment[i]['letter'] =[];
			data_lesson_ex[k].segment[i].correct[0] = data_lesson_ex[k].segment[i].correct[0].trim();
			if(data_lesson_ex[k].segment[i].correct[0].indexOf(' ')>0){
				data_lesson_ex[k].segment[i]['type'] ='word';
				data_lesson_ex[k].segment[i]['letter'] = data_lesson_ex[k].segment[i].correct[0].split(' ');
			}else{
				data_lesson_ex[k].segment[i]['type'] ='letter';  
				for(var t=0;t <data_lesson_ex[k].segment[i].correct[0].length;t++){
					data_lesson_ex[k].segment[i]['letter'].push(data_lesson_ex[k].segment[i].correct[0][t]);
				}
			}	
			data_lesson_ex[k].segment[i]['letter'] =random_arr(data_lesson_ex[k].segment[i]['letter']);
		}
		if(data_lesson_ex[k].template =='select_box'){
			for(var j = 0; j< data_lesson_ex[k].segment.length;j++){
				var x = 0;
				for(var t = 0; t< data_lesson_ex[k].segment[j].list.length;t++){
					if(typeof data_lesson_ex[k].segment[j].list[t].option !='undefined'){
						if(t>0){
							x += (data_lesson_ex[k].segment[j].list[(t-1)].option)?data_lesson_ex[k].segment[j].list[(t-1)].option.length:0;
						}
						data_lesson_ex[k].segment[j].list[t]['content'] = returnSelect(data_lesson_ex[k].segment[j].list[t].text,data_lesson_ex[k].segment[j].list[t].option,x);
					}else{
						data_lesson_ex[k].segment[j].list[t]['content'] = data_lesson_ex[k].segment[j].list[t].text;
					}
				}
			}
		}
		if(data_lesson_ex[k].template =='record'){
			for(var j = 0; j< data_lesson_ex[k].segment.length;j++){
				var x = 0;		
				if(j>0){
					x += data_lesson_ex[k].segment[(j-1)].length;
				}
				for(var t = 0; t< data_lesson_ex[k].segment[j].list.length;t++){
					data_lesson_ex[k].segment[j].list[t]['inx'] = x + t;
				}
			}
		}
		data_lesson_ex[k].segment[i]['path']=data_json.loc;
		data_lesson_ex[k].segment[i]['inx']=k+'_'+i;
		
		str_main='';
		str_main += bs_jsmart[data_lesson_ex[k].template].fetch(data_lesson_ex[k].segment[i]); 
		var elm_submit='';
		if(data_lesson_ex[k].template !='record'){
			elm_submit='<div class="bt_next" post_score="1" onclick="func_next(this,'+k+')">Next</div><div class="bt_submit" onclick="test_client(this,'+k+','+i+')">Submit</div>';
			elm_submit +='<div class="add_score">+1</div>';
			str_main +='<div class="space10"></div><div class="basic_box_control">'+ elm_submit +'</div><div class="result_a_question"></div>';	
		}
		$('#basic_segment_'+k+'_'+i).append(str_main);
		if(!is_vip){
			$('#basic_segment_'+k+'_'+i).append(vip_msg);
		}
		i++;
		lesson.get_exercise(k,i);
	}
}
function gotoElmCurr(ElementTo,_top){
	var postCm = ElementTo.offset();	
	console.log(postCm);
	$('html,body').animate({scrollTop:postCm.top - _top},500);
}
var record_save = -1;
var load_audio_game =0;
function getAudioGame(){
	if(!load_audio_game){
		$.getScript('/file/common/game123/js/audio_game_vs1.js',function(){
			$("#game_ubaPlayer").ubaPlayer_game({
				audioButtonClass:'uba_ctrl',							
				codecs: [{name:"MP3", codec: 'audio/mpeg;'}],
				playStartCallback: _PlayingAudioHide2,
				stopCallback: _stopAudioHide2
			});
			load_audio_game = 1;	
		});	
	}else{
		$("#game_ubaPlayer").ubaPlayer_game({
			audioButtonClass:'uba_ctrl',							
			codecs: [{name:"MP3", codec: 'audio/mpeg;'}],
			playStartCallback: _PlayingAudioHide2,
			stopCallback: _stopAudioHide2
		});	
	}
}
function recordVchat(){
	var count_word = 0; 				
	$('.recording_user_vchat').click(function(){
		$('.bg_yellow').removeClass('bg_yellow');	
		count_word++;
		var index_record = $(this).index('.recording_user_vchat');
		var _self = $(this);
		$('.recording_user_vchat').removeClass('record_act');
		_self.addClass('record_act');
		//fix vi tri recorder
		var _self = $(this); 
		var top_record=$(this).position().top + 45 ;
		var left_record=$(this).position().left - 190;	
		if(left_record > 890){
			left_record = 745;
			$('#kr_uparrow').css('left','347px');
		}else{
			$('#kr_uparrow').css('left','195px');
		}	
		$('#kr_arrecord').css({'top':top_record,'left':left_record}).show();		
		$('.kr_bgyellow').removeClass('kr_bgyellow'); 
		stopRecording();
		$('#krr_verline, #krb_arrecord, #krb_arspeak, #krr_arscore, #kr_tresult, #krr_arwave, #krb_arstop').css('display','none');			
		$('#krrt_text').html("");				
		var text_true =$(this).attr('value');
		$('#krrt_text').attr('result',text_true);
		$('.klhmst_text').eq(_self.index('.recording_user_vchat')).addClass('kr_bgyellow');	
		if(count_word > 2 && !is_vip){
			$('#krrt_ins').css('display','table-cell').html('Bạn phải là <a style="color:#0081a1" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" title="quyền lợi thành viên VIP">thành viên VIP</a> của TiếngAnh123 mới được tiếp tục ghi âm.');
			$('#krr_ispeak').hide();
		}else{						
			$('#krrt_ins').css('display','table-cell').text(alert_record);
			$('#krr_ispeak').css('display','block');			
		}
	});	
}
function start_lesson(k){	
	if($('.uba_audioButton').length > 0){
		getAudioShort();
	}
	if($('#ex_detail_'+k).find('.uba_ctrl').length > 0){
		getAudioGame();
	}
	if($('.recording_user').length>0){
		if(typeof is_mobile !='undefined' || typeof is_tablet !='undefined'){				
			if(typeof checkApp!='undefined' && checkApp()){	
				$('#appResetPlayImg').css('margin-left','10%');
				$('#appBottomRecording').css('margin-left','-3% !important');
				var n_record = 0;	
				$('#load_file_js').append('<link rel="stylesheet" type="text/css" href="/mobileAppClient/css/recording.css" />');
				$('.recording_user').click(function(){ 
					n_record++;
					if(!paidmember() && n_record >=3){
						$('#appBottomRecording').html('Bạn phải là thành viên VIP của tiếng Anh 123 mới có thể sử dụng tiếp chức năng này');
						$('#appBottomRecording').css({'color':'#fff','text-align':'center','padding':'20px 3%','width':'94%'});		
					}else{
						$(this).css({'background':'url("/mobile/static/dictionary/images/m_audio_recording.svg") no-repeat','background-size':'32px'});				
					}
				});	
			}else{
				if(typeof fromapp !='undefined'){
					$('.recording_user').click(function(){
						$('.bgYellow').removeClass('bgYellow');
						$(this).parents('.tacb-item').addClass('bgYellow');
						//gotoElmCurr($(this).parent(), 50);
						if(fromapp){
							window.postMessage('record');
						}else{
							$('#recorderBox').hide().animate({height:'toggle'},350);
						}
					});
				}	
			}
		}else{
			var count_word = 0; 				
			$('.recording_user').click(function(){
				$('.bg_yellow').removeClass('bg_yellow');	
				count_word++;
				var index_record = $(this).index('.recording_user');
				var _self = $(this);
				$('.recording_user').removeClass('record_act');
				_self.addClass('record_act');
				//fix vi tri recorder
				var _self = $(this);
				var top_record=$(this).position().top + 45 ;
				var left_record=$(this).position().left - 190;	
				if(left_record > 890){
					left_record = 745;
					$('#kr_uparrow').css('left','347px');
				}else{
					$('#kr_uparrow').css('left','195px');
				}	
				$('#kr_arrecord').css({'top':top_record,'left':left_record}).show();		
				$('.kr_bgyellow').removeClass('kr_bgyellow'); 
				stopRecording();
				$('#krr_verline, #krb_arrecord, #krb_arspeak, #krr_arscore, #kr_tresult, #krr_arwave, #krb_arstop').css('display','none');			
				$('#krrt_text').html("");				
				var text_true =$(this).attr('value');
				$('#krrt_text').attr('result',text_true);
				$('.klhmst_text').eq(_self.index('.recording_user')).addClass('kr_bgyellow');						
				if($(this).attr('save')){				
					var t = $(this).attr('save');
					t = parseInt(t);
					record_save = t;
				}else{
					record_save = -1;
				}	
				if(count_word > 2 && !paidmember()){
					$('#krrt_ins').css('display','table-cell').html('Bạn phải là <a style="color:#0081a1" href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" title="quyền lợi thành viên VIP">thành viên VIP</a> của TiếngAnh123 mới được tiếp tục ghi âm.');
					$('#krr_ispeak').hide();
				}else{						
					$('#krrt_ins').css('display','table-cell').text(alert_record);
					$('#krr_ispeak').css('display','block');			
				}
			});	
		}	
	}
	if(k == 0){	
		ctrlVocab();
		$('#box_lecture').attr('style','display:block');
		$('#detail_lesson').find('.loading').remove();
	}else{	
		
		$('#ex_detail_'+k).find('.loading_lesson').remove();
		if($('#basic_segment_'+k+'_0').find('.audio_long').length>0){		
			$('#basic_segment_'+k+'_0').find('.audio_long').each(function(){		
				getAudioLong_new(this);					
			}); 
		}
		if(data_lesson_ex[k].template!= 'record' && arr_ctrl[data_lesson_ex[k].template]){	
			arr_ctrl[data_lesson_ex[k].template]();	
		}
	}
	if($('#ex_detail_'+k).find('.uba_ctrl').length > 0){
		setTimeout(function(){
			$('#ex_detail_'+k+' #basic_segment_'+k+'_0').find('.uba_ctrl').trigger('click');
		},500);
	}
}
function saveScoreRecord(t){
	record_save=-1;
	var txt =$('#krrs_number').text();
	txt = txt.replace('%','');
	text = parseInt(txt);
	var k = task + 1;
	if(txt >=50 && !data_lesson_ex[k].arr_score[t]){
		data_lesson_ex[k]['score'] ++;
		$('#ex_header_'+k).find('.your_score').text(data_lesson_ex[k]['score']);
		if(is_vip){
			var total_score = $('#ex_header_'+k).attr('total');
			total_score = parseInt(total_score);
			$.post(basic_url+link_post+'tienganhcoban_new/save_score',{score: data_lesson_ex[k]['score'],total_score:total_score,lesson_id:lesson_id,task:task},function(data){
				if(data.status){
					data_lesson_ex[k].arr_score[t] = 1;
				}
			});
		}	
	}
}	
var basic_url=window.location.protocol + "//" + location.host+'/';
var msg_non_vip_sb='Bạn phải là <a href="/huong-dan/214-quyen-loi-thanh-vien-vip-cua-tienganh123.html" target="_blank" title="quyền lợi thành viên VIP"  style="color:#0d6af7; text-decoration:underline">thành viên VIP</a> của TiếngAnh123.Com mới được xem <strong>kết quả</strong>, <strong>đáp án</strong> và <strong>lời giải thích</strong>.';
//data_lesson_ex
var _again=0;
var audioCorrect = null;
function func_next(cmd,k){		
	var seg_curr = $(cmd).closest('.basic_segment');
	if(audioCorrect){		
		audioCorrect.pause();
	}
	if(seg_curr.next().attr('again') && _again ==1){
		_again=0;		
		seg_curr.next().removeAttr('again');
	}
	var seg = seg_curr.attr('seg');
		seg = parseInt(seg) + 1;
	if(seg_curr.next().is('._box_result')){	
		cpy_seg_curr[k]=null;	
		var total_score = $('#ex_header_'+k).attr('total');
		total_score = parseInt(total_score);
		var per= data_lesson_ex[k]['score']*100/total_score;
		per = Math.round(per);	
		seg_curr.next().find('.alert_score').html(data_lesson_ex[k]['score']+'/'+total_score).next().find('.txt_green').text(per+'%');
		seg_curr.hide().next().show();
		if(is_vip){
			//console.log({score: data_lesson_ex[k]['score'],total_score:total_score,lesson_id:lesson_id,task:(k-1)});	
			$.post(basic_url+link_post+'tienganhcoban_new/save_score',{score: data_lesson_ex[k]['score'],total_score:total_score,lesson_id:lesson_id,task:(k-1)},function(data){
				$('#ex_header_'+k).find('.your_score').text(data_lesson_ex[k]['score']);
				console.log(per+': '+k);
				if(per>50){
					if(!yourScore[(k-1)]){
						yourScore[(k-1)] =1;
						number_passed +=1;
						if(number_passed == number_ex){
							$.post(basic_url+link_post+'tienganhcoban_new/update_passed',{lesson_id:course.id,type:2,passed:1});
						}
					}
				}else{
					if(yourScore[(k-1)]){
						yourScore[(k-1)] = 0;
						if(number_passed == number_ex){
							$.post(basic_url+link_post+'tienganhcoban_new/update_passed/',{lesson_id:course.id,type:2,passed:0});
						}
						number_passed -=1;
					}
				}
				$('#number_passed').text(number_passed);
			});	
		}
	}else{
		cpy_seg_curr[k] = seg_curr.next().clone(true);
		seg_curr.hide().next().show();
		if(seg_curr.next().find('.uba_ctrl').length>0){		
			seg_curr.next().find('.uba_ctrl').trigger('click');
		}
		if(seg_curr.next().find('.jp_audio_long').length>0){
			var audio_cur= seg_curr.next().find('.audio_long');				
			var media = audio_cur.attr("media-url"); 			
			audio_cur.before('<div class="audio_long cp-jplayer" media-url="'+media+'">audio</div>');			
			audio_cur.next().remove();
			audio_cur.remove();
		}
		if(seg_curr.next().find('.audio_long').length>0){
			getAudioLong(seg_curr.next());
			seg_curr.find('.jp-play').trigger('click');
		}		
	}
	seg_curr.remove();
}

function test_client(cmd,k,i){	
	var top_n =1;
	if(data_lesson_ex[k].segment.length == 1){
		top_n = 0;
	}
	if(!is_vip && i == top_n){
		$(cmd).parent().hide();
		$(cmd).hide().closest('.basic_segment').css('position','relative').find('.non_vip_ex').toggle( "slide",500);
		return;
	}
	var key_tpl='';	
	var seg_curr = $('#basic_segment_'+k+'_'+i);	
	var list_tpl_curr=[];
	var inx = 0,corr = 0;
	if(seg_curr.find('.audio_correct').length==1){
		audioCorrect = document.getElementById('audio_correct_'+k+'_'+i);
		audioCorrect.play();
	}
	
	seg_curr.find('.basic_elm').each(function(){			
		key_tpl=$(this).attr('tpl');
		if($.inArray(key_tpl,list_tpl_curr)<0){
			list_tpl_curr.push(key_tpl);
		}
		inx = $(this).attr('inx');
		inx = parseInt(inx);
		var funct= listExcuteResult[key_tpl]; 
		corr += funct($(this),data_lesson_ex[k].segment[i].correct[inx]);	
						
	});		
	if(corr > 0){
		data_lesson_ex[k]['score'] +=corr;
		$(cmd).closest('.exser_item').find('.your_score').text(data_lesson_ex[k]['score']);									
		$(cmd).next().text('+'+corr);
		$(cmd).next().show().animate({
			top: "-=50",
			opacity:0
		},800);	
	}
	cpy_seg_curr[k].removeAttr('style');	
	seg_curr.before(cpy_seg_curr[k]);	
	if($(cmd).prev().length ==1){
		$(cmd).hide().prev().show();
	}	

}
function func_redo(cmd,k){	
	data_lesson_ex[k]['redo'] = 1;
	data_lesson_ex[k].score = 0;
	var tpl_seg = $(cmd).attr('tpl');	
	var _arr_tpl=[],_tpl='';
	if(tpl_seg.indexOf(',')>0){
		_arr_tpl=tpl_seg.split(',');
	}else{
		_arr_tpl[0]=tpl_seg;
	}
	arr_ctrl_curr={};
	for(i=0;i<_arr_tpl.length;i++){	
		_tpl = _arr_tpl[i];
		arr_ctrl_curr[_tpl]=arr_ctrl[_tpl];
	}
	$('#basic_segment_'+k+'_0').show().siblings('._box_result').hide();
	cpy_seg_curr[k] = $('#basic_segment_'+k+'_0').clone(true);	
	start_lesson(k);	
}
var score = 0, total =10;

$(document).ajaxComplete(function(){
	if(record_save>-1){
		saveScoreRecord(record_save);
	}
});
function showWordOther(cmd){
	if($(cmd).find('.hide').length>0){
		$(cmd).find('.hide').removeClass('hide').html('&#xf106;');
	}else{
		$(cmd).find('.far').addClass('hide').html('&#xf107;');
	}
	$(cmd).next().toggleClass('elmHide');
}
 

