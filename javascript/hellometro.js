
//侧边栏TAB效果
jQuery(document).ready(function ()
{
    jQuery('.tab_menu a').mouseover(function ()
    {
        jQuery(this).addClass("current").siblings().removeClass();
        jQuery(".tab_content > div").eq(jQuery('.tab_menu a').index(this)).fadeIn(650).siblings().hide();
    });
});


jQuery(document).ready(function(){

	//首先将#back-to-top隐藏
	jQuery("#totop").hide();
	
	//当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
	jQuery(function(){
	
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop()>100){
				jQuery("#totop").fadeIn();
			}else{
				jQuery("#totop").fadeOut();
			}
		});
		
		//当点击跳转链接后，回到页面顶部位置
		jQuery("#totop").click(function(){
			jQuery('body,html').animate({scrollTop:0},500);
			return false;
		});
		
	});
	
}); 

jQuery(document).ready(function ()
{
     jQuery('.menu-toggle').hover(function () {
        jQuery('.left-menu').stop(true, true).fadeIn(0);
    }, function () {
        jQuery('.left-menu').hover(function (){
            jQuery('.left-menu').stop(true, true).fadeIn(0);
        }, function(){
            jQuery('.left-menu').fadeOut(500, function () {
            jQuery('.left-menu').css("display", "none");
        });
        });

        jQuery('.left-menu').fadeOut(500, function () {
            jQuery('.left-menu').css("display", "none");
        });
    });
});

jQuery(document).ready(function ()
{
     var spantext = "围观+1";
     jQuery('.entry-views .add-views').hover(function () {
        spantext = jQuery(this).siblings('.views-sum').text();
        jQuery(this).siblings('.views-sum').text("我要围观+1");
    }, function () {
           jQuery(this).siblings('.views-sum').text(spantext);
    });
});

//Metro图片反转
jQuery(document).ready(function () {
    if (jQuery('.metro-slide').find('.small-slide p').length != 0) {
        return false;
    }
    jQuery('.metro-slide').find('.small-slide a').each(function () {
        jQuery(this).append('<p><span>' + jQuery(this).attr('title') + '</span></p>');
    });
    jQuery('.metro-slide .small-slide a:nth-child(even)').find('p').show();
    jQuery('.metro-slide').find('.small-slide .normal-slide').hover(function () {
        jQuery(this).find('img').stop().animate({ 'height': 0, 'top': '58px' }, 180, function () {
            jQuery(this).hide().next().show();
            jQuery(this).next().animate({
                'height': '116px',
                'top': '0'
            }, 180);
        });
    }, function () {
        jQuery(this).find('p').animate({ 'height': 0, 'top': '58px' }, 180, function () {
            jQuery(this).hide().prev().show();
            jQuery(this).prev().animate({
                'height': '116px',
                'top': '0'
            }, 180);
        });
    });

    jQuery('.metro-slide').find('.small-slide .span-slide').hover(function () {
        jQuery(this).find('p').animate({ 'height': 0, 'top': '58px' }, 180, function () {
            jQuery(this).hide().prev().show();
            jQuery(this).prev().animate({
                'height': '116px',
                'top': '0'
            }, 180);
        });
    }, function () {
        jQuery(this).find('img').stop().animate({ 'height': 0, 'top': '58px' }, 180, function () {
            jQuery(this).hide().next().show();
            jQuery(this).next().animate({
                'height': '116px',
                'top': '0'
            }, 180);
        });
    });
})

jQuery(document).ready(function () {
    var aImg = jQuery('#slide li'); 	//图像集合
    var iSize = aImg.size(); 	//图像个数
    var index = 0; 	//切换索引

    //以下代码添加数字按钮
    var page = "<div class='page'>";
    for (var i = 0; i < iSize; i++) {
        if (i == 0) {
            page += "<a class='active' href='javascript:void(0);'></a>";
        }
        else {
            page += "<a href='javascript:void(0);'></a>";
        }
    }
    page += "</div>";
    jQuery('#slide').append(page);
    var aPage = jQuery('#slide .page a');

    //分页按钮点击
    aPage.click(function () {
        index = jQuery(this).index();
        change(index)
    });
    function change(index) {
        aPage.removeClass('active');
        aPage.eq(index).addClass('active');
        aImg.stop();
        //隐藏除了当前元素，所以图像
        aImg.eq(index).siblings().animate({
            opacity: 0,
            'z-index': 0
        }, 1000)
        //显示当前图像
        aImg.eq(index).animate({
            opacity: 1,
            'z-index': 999
        }, 1000)
    }
    function autoshow() {
        index = index + 1;
        if (index <= iSize - 1) {
            change(index);
        } else {
            index = 0;
            change(index);
        }
    }
    int = setInterval(autoshow, 5000);
    function clearInt() {
        jQuery('.page a').mouseover(function () {
            clearInterval(int);
        })

    }
    function setInt() {
        jQuery('.page a').mouseout(function () {
            int = setInterval(autoshow, 5000);
        })
    }
    clearInt();
    setInt();
})jQuery(document).ready(function (b) {
	jQuery(".header-meta a").each(function() {
		if (this.title) {
			var c = this.title;
			var a = 30;
			var z = 30;
			jQuery(this).mouseover(function(d) {
				this.title = "";
				jQuery("body").append('<div id="tooltip">' + c + "</div>");
				jQuery("#tooltip").css({
					left:(d.pageX - z) + "px",
					top: (d.pageY + a) + "px",
					opacity: "0.8"
				}).fadeIn(250)
			}).mouseout(function() {
				this.title = c;
				jQuery("#tooltip").remove()
			}).mousemove(function(d) {
				jQuery("#tooltip").css({
					left:(d.pageX - z) + "px",
					top: (d.pageY + a) + "px"
				})
			})
		}
	})
});